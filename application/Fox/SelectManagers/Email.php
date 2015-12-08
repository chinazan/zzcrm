<?php
namespace Fox\SelectManagers;

class Email extends \Fox\Core\SelectManagers\Base
{
    protected function boolFilterOnlyMy(&$result)
    {
        if (!in_array('users', $result['joins'])) {
            $result['joins'][] = 'users';
        }
        $result['whereClause'][] = array(
            'usersMiddle.userId' => $this->getUser()->id
        );
    }

    protected function filterInbox(&$result)
    {
        $eaList = $this->getUser()->get('emailAddresses');
        $idList = [];
        foreach ($eaList as $ea) {
            $idList[] = $ea->id;
        }
        $result['whereClause'][] = array(
            'fromEmailAddressId!=' => $idList
        );
        $this->boolFilterOnlyMy($result);
    }

    protected function filterSent(&$result)
    {
        $eaList = $this->getUser()->get('emailAddresses');
        $idList = [];
        foreach ($eaList as $ea) {
            $idList[] = $ea->id;
        }
        $result['whereClause'][] = array(
            'fromEmailAddressId=' => $idList
        );
    }

    protected function filterDrafts(&$result)
    {
        $result['whereClause'][] = array(
            'status' => 'Draft',
            'createdById' => $this->getUser()->id
        );
    }

    protected function filterArchived(&$result)
    {
        $result['whereClause'][] = array(
            'status' => 'Archived'
        );
    }

    protected function accessOnlyOwn(&$result)
    {
        $this->boolFilterOnlyMy($result);
    }

    protected function textFilter($textFilter, &$result)
    {
        $d = array();

        $d['name*'] = '%' . $textFilter . '%';

        if (strlen($value) >= self::MIN_LENGTH_FOR_CONTENT_SEARCH) {
            $d['bodyPlain*'] = '%' . $textFilter . '%';
            $d['body*'] = '%' . $textFilter . '%';

            $emailAddressId = $this->getEmailAddressIdByValue($textFilter);
            if ($emailAddressId) {
                $this->leftJoinEmailAddress($result);
                $d['fromEmailAddressId'] = $emailAddressId;
                $d['emailEmailAddress.emailAddressId'] = $emailAddressId;
            }
        }

        $result['whereClause'][] = array(
            'OR' => $d
        );

    }

    protected function getEmailAddressIdByValue($value)
    {
        $pdo = $this->getEntityManager()->getPDO();

        $emailAddress = $this->getEntityManager()->getRepository('EmailAddress')->where(array(
            'lower' => strtolower($value)
        ))->findOne();

        $emailAddressId = null;
        if ($emailAddress) {
            $emailAddressId = $emailAddress->id;
        }

        return $emailAddressId;
    }

    protected function leftJoinEmailAddress(&$result)
    {
        if (empty($result['customJoin'])) {
            $result['customJoin'] = '';
        }
        if (stripos($result['customJoin'], 'emailEmailAddress') === false) {
            $result['customJoin'] .= "
                LEFT JOIN email_email_address AS `emailEmailAddress`
                    ON
                    emailEmailAddress.email_id = email.id AND
                    emailEmailAddress.deleted = 0
            ";
        }
    }


    public function whereEmailAddress($value, &$result)
    {
        $d = array();

        $emailAddressId = $this->getEmailAddressIdByValue($value);

        if ($emailAddressId) {
            $this->leftJoinEmailAddress($result);

            $d['fromEmailAddressId'] = $emailAddressId;
            $d['emailEmailAddress.emailAddressId'] = $emailAddressId;
            $result['whereClause'][] = array(
                'OR' => $d
            );
        } else {
            if (empty($result['customWhere'])) {
                $result['customWhere'] = '';
            }
            $result['customWhere'] .= ' AND 0';
        }

    }
}

