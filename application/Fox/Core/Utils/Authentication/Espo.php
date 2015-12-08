<?php
namespace Fox\Core\Utils\Authentication;

use \Fox\Core\Exceptions\Error;

class Fox extends Base
{
    public function login($username, $password, \Fox\Entities\AuthToken $authToken = null)
    {
        if ($authToken) {
            $hash = $authToken->get('hash');
        } else {
            $hash = $this->getPasswordHash()->hash($password);
        }

        $user = $this->getEntityManager()->getRepository('User')->findOne(array(
            'whereClause' => array(
                'userName' => $username,
                'password' => $hash
            ),
        ));

        return $user;
    }
}

