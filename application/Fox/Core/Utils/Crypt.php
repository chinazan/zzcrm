<?php
namespace Fox\Core\Utils;

class Crypt
{
    private $config;

    private $key = null;

    private $cryptKey = null;

    private $iv = null;

    public function __construct($config)
    {
        $this->config = $config;
        $this->cryptKey = $config->get('cryptKey', '');
    }

    protected function getKey()
    {
        if (empty($this->key)) {
            $this->key = hash('sha256', $this->cryptKey, true);
        }
        return $this->key;
    }

    protected function getIv()
    {
        if (empty($this->iv)) {
            $this->iv = mcrypt_create_iv(16, MCRYPT_RAND);
        }
        return $this->iv;
    }

    public function encrypt($string)
    {
        $iv = $this->getIv();
        return base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $this->getKey(), $string, MCRYPT_MODE_CBC, $iv) . $iv);
    }

    public function decrypt($encryptedString)
    {
        $encryptedString = base64_decode($encryptedString);

        $string = substr($encryptedString, 0, strlen($encryptedString) - 16);
        $iv = substr($encryptedString, -16);
        return trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $this->getKey(), $string, MCRYPT_MODE_CBC, $iv));
    }

    public function generateKey()
    {
        return md5(uniqid());
    }
}

