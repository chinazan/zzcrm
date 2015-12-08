<?php
namespace Fox\Core\Utils\Authentication\LDAP;

class LDAP extends \Zend\Ldap\Ldap
{
    protected $usernameAttribute = 'cn';


    /**
     * Get DN depends on options, ex. "cn=test,ou=People,dc=maxcrc,dc=com"
     *
     * @return string DN format
     */
    public function getDn($acctname)
    {
        return $this->getAccountDn($acctname, \Zend\Ldap\Ldap::ACCTNAME_FORM_DN);
    }

    /**
     * Fix a bug, ex. CN=Alice Baker,CN=Users,DC=example,DC=com
     *
     * @param  string $acctname
     * @return string - Account DN
     */
    protected function getAccountDn($acctname)
    {
        $baseDn = $this->getBaseDn();

        if ($this->getBindRequiresDn() && isset($baseDn)) {
            try {
                return parent::getAccountDn($acctname);
            } catch (\Zend\Ldap\Exception\LdapException $zle) {
                if ($zle->getCode() != \Zend\Ldap\Exception\LdapException::LDAP_NO_SUCH_OBJECT) {
                    throw $zle;
                }
            }

            $acctname = $this->usernameAttribute . '=' . \Zend\Ldap\Filter\AbstractFilter::escapeValue($acctname) . ',' . $baseDn;
        }

        return parent::getAccountDn($acctname);
    }

    /**
     * Search a user using userLoginFilter
     *
     * @param  string $filter
     * @param  string $basedn
     * @param  int $scope
     * @param  array  $attributes
     * @return array
     */
    public function searchByLoginFilter($filter, $basedn = null, $scope = self::SEARCH_SCOPE_SUB, array $attributes = array())
    {
        $filter = $this->getLoginFilter($filter);

        $result = $this->search($filter, $basedn, $scope, $attributes);

        if ($result->count() > 0) {
            return $result->getFirst();
        }

        throw new \Zend\Ldap\Exception\LdapException($this, 'searching: ' . $filter);
    }

    /**
     * Get login filter in LDAP format
     *
     * @param  string $filter
     * @return string
     */
    protected function getLoginFilter($filter)
    {
        $baseFilter = '(objectClass=*)';

        if (!empty($filter)) {
            $baseFilter = '(&' . $baseFilter . $this->convertToFilterFormat($filter). ')';
        }

        return $baseFilter;
    }

    /**
     * Check and convert filter item in LDAP format
     *
     * @param  string $filter [description]
     * @return string
     */
    protected function convertToFilterFormat($filter)
    {
        $filter = trim($filter);
        if (substr($filter, 0, 1) != '(') {
            $filter = '(' . $filter;
        }

        if (substr($filter, -1) != ')') {
            $filter = $filter . ')';
        }

        return $filter;
    }
}