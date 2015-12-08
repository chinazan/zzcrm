<?php
namespace Fox\Core\Utils\Authentication\LDAP;

use \Fox\Core\Utils\Config;

class Utils
{
    private $config;

    protected $options = null;

    /**
     * Association between LDAP and Fox fields
     * @var array
     */
    protected $fieldMap = array(
        'host' => 'ldapHost',
        'port' => 'ldapPort',
        'useSsl' => 'ldapSecurity',
        'useStartTls' => 'ldapSecurity',
        'username' => 'ldapUsername',
        'password' => 'ldapPassword',
        'bindRequiresDn' => 'ldapBindRequiresDn',
        'baseDn' => 'ldapBaseDn',
        'accountCanonicalForm' => 'ldapAccountCanonicalForm',
        'accountDomainName' => 'ldapAccountDomainName',
        'accountDomainNameShort' => 'ldapAccountDomainNameShort',
        'accountFilterFormat' => 'ldapAccountFilterFormat',
        'optReferrals' => 'ldapOptReferrals',
        'tryUsernameSplit' => 'ldapTryUsernameSplit',
        'networkTimeout' => 'ldapNetworkTimeout',
        'createFoxUser' => 'ldapCreateFoxUser',
        'userLoginFilter' => 'ldapUserLoginFilter',
    );

    /**
     * Permitted Fox Options
     *
     * @var array
     */
    protected $permittedFoxOptions = array(
        'createFoxUser' => false,
        'userLoginFilter' => null,
    );

    /**
     * accountCanonicalForm Map between Fox and Zend value
     *
     * @var array
     */
    protected $accountCanonicalFormMap = array(
        'Dn' => 1,
        'Username' => 2,
        'Backslash' => 3,
        'Principal' => 4,
    );


    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    protected function getConfig()
    {
        return $this->config;
    }

    /**
     * Get Options from espo config according to $this->fieldMap
     *
     * @return array
     */
    public function getOptions()
    {
        if (isset($this->options)) {
            return $this->options;
        }

        $options = array();
        foreach ($this->fieldMap as $ldapName => $espoName) {

            $option = $this->getConfig()->get($espoName);
            if (isset($option)) {
                $options[$ldapName] = $option;
            }
        }

        /** peculiar fields */
        $options['useSsl'] = (bool) ($options['useSsl'] == 'SSL');
        $options['useStartTls'] = (bool) ($options['useStartTls'] == 'TLS');
        $options['accountCanonicalForm'] = $this->accountCanonicalFormMap[ $options['accountCanonicalForm'] ];

        $this->options = $options;

        return $this->options;
    }

    /**
     * Get an ldap option
     *
     * @param  string $name
     * @param  mixed $returns Return value
     * @return mixed
     */
    public function getOption($name, $returns = null)
    {
        if (isset($this->options)) {
            $this->getOptions();
        }

        if (isset($this->options[$name])) {
            return $this->options[$name];
        }

        return $returns;
    }

    /**
     * Get Zend options for using Zend\Ldap
     *
     * @return array
     */
    public function getZendOptions()
    {
        $options = $this->getOptions();
        $espoOptions = array_keys($this->permittedFoxOptions);

        $zendOptions = array_diff_key($options, array_flip($espoOptions));

        return $zendOptions;
    }

}