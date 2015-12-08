<?php
namespace Fox\Controllers;

use \Fox\Core\Exceptions\NotFound;
use \Fox\Core\Exceptions\Error;
use \Fox\Core\Exceptions\Forbidden;
use \Fox\Core\Exceptions\BadRequest;
use \GuzzleHttp;
use PDO;

class Cc extends \Fox\Core\Controllers\Record
{
    /*protected function checkControllerAccess()
    {
        if (!$this->getUser()->isAdmin()) {
            throw new Forbidden();
        }
    }*/

    public function actionMakeCall($params, $data, $request)
    {
        $client = new GuzzleHttp\Client();
        /*$res = $client->request('GET', 'http://218.244.133.9:81/agc/api.php?function=version', [
            'auth' => ['ilovefox8', 'a199000000']
        ]);*/

        //return $request->get('src');
        return $request->get('dst');

        $res = $client->request('GET', 'http://218.244.133.9:81/agc/api.php?function=version');

        return $res->getBody();
    }

    public function actionChangeExtenStatus($params, $data, $request)
    {
        $client = new GuzzleHttp\Client();
        /*$res = $client->request('GET', 'http://218.244.133.9:81/agc/api.php?function=version', [
            'auth' => ['ilovefox8', 'a199000000']
        ]);*/

        $res = $client->request('GET', 'http://218.244.133.9:81/agc/api.php?function=version');

        return $res->getBody();
    }

    public function actionGetAccountByPhone($params, $data, $request){

        $phone = intval($request->get('dst'));
        //return $data;

        $pdo = $this->getEntityManager()->getPDO();
        $query = "SELECT account.id FROM account LEFT JOIN entity_phone_number ON account.id=entity_phone_number.entity_id AND entity_phone_number.entity_type='Account' AND entity_phone_number.deleted='0' LEFT JOIN phone_number ON entity_phone_number.phone_number_id=phone_number.id AND phone_number.deleted='0' and account.deleted='0'  WHERE phone_number.name=" . $pdo->quote($phone);

        $sth = $pdo->prepare($query);
        $sth->execute();

        $result = array();

        $rows = $sth->fetchAll(PDO::FETCH_ASSOC);

        $entityManager = $this->getEntityManager();

        $pop = false;

        if ($rows) {
            foreach ($rows as $row) {
                $account = $entityManager->getEntity('Account', $row['id']);

                if ($this->getAcl()->check($account, 'edit')) {
                    $result['scope'] = 'Account';
                    $result['phone'] = $phone;
                    $result['id'] = $row['id'];
                    $pop = true;
                }else{
                    continue;
                }
            }
        }

        if(!$pop){
            $result['scope'] = 'Account';
            $result['phone'] = $phone;
            $result['id'] = '';
        }

        return $result;
    }

}