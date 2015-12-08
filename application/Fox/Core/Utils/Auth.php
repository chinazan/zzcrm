<?php
namespace Fox\Core\Utils;

use \Fox\Core\Exceptions\Error;
use \Fox\Core\Exceptions\Forbidden;

class Auth
{
    protected $container;

    protected $authentication;

    protected $config;

    protected $entityManager;

    public function __construct(\Fox\Core\Container $container)
    {
        $this->container = $container;

        $this->entityManager = $this->container->get('entityManager');
        $this->config = $this->container->get('config');

        $authenticationMethod = $this->config->get('authenticationMethod', 'Fox');
        $authenticationClassName = "\\Fox\\Core\\Utils\\Authentication\\" . $authenticationMethod;
        $this->authentication = new $authenticationClassName($this->config, $this->entityManager, $this);

        $this->request = $this->container->get('slim')->request();
    }

    public function useNoAuth($isAdmin = false)
    {
        $entityManager = $this->container->get('entityManager');

        $user = $entityManager->getRepository('User')->get('system');
        if (!$user) {
            throw new Error('System user is not found');
        }

        $user->set('isAdmin', $isAdmin);

        $entityManager->setUser($user);
        $this->container->setUser($user);
    }

    public function login($username, $password)
    {
        $entityManager = $this->entityManager;

        $authToken = $entityManager->getRepository('AuthToken')->where(array('token' => $password))->findOne();

        $user = $this->authentication->login($username, $password, $authToken);

        if ($user) {
            if (!$user->isActive()) {
                $GLOBALS['log']->debug("AUTH: Trying to login as user '".$user->get('userName')."' which is not active.");
                return false;
            }
            $entityManager->setUser($user);
            $this->container->setUser($user);

            if ($this->request->headers->get('HTTP_FOX_AUTHORIZATION')) {
	            if (!$authToken) {
	                $authToken = $entityManager->getEntity('AuthToken');
	                $token = $this->createToken($user);
	                $authToken->set('token', $token);
	                $authToken->set('hash', $user->get('password'));
	                $authToken->set('ipAddress', $_SERVER['REMOTE_ADDR']);
	                $authToken->set('userId', $user->id);
	            }
            	$authToken->set('lastAccess', date('Y-m-d H:i:s'));

            	$entityManager->saveEntity($authToken);
            	$user->set('token', $authToken->get('token'));
            }

            return true;
        }
    }

    protected function createToken($user)
    {
        return md5(uniqid($user->get('id')));
    }

    public function destroyAuthToken($token)
    {
        $entityManager = $this->container->get('entityManager');

        $authToken = $entityManager->getRepository('AuthToken')->where(array('token' => $token))->findOne();
        if ($authToken) {
            $entityManager->removeEntity($authToken);
            return true;
        }
    }
}

