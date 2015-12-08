<?php
namespace Fox\Core\Utils;

class System
{
    /**
     * Get web server name
     *
     * @return string Ex. "microsoft-iis", "nginx", "apache"
     */
    public function getServerType()
    {
        $serverSoft = $_SERVER['SERVER_SOFTWARE'];

        preg_match('/^(.*?)\//i', $serverSoft, $match);
        if (empty($match[1])) {
            preg_match('/^(.*)\/?/i', $serverSoft, $match);
        }
        $serverName = strtolower( trim($match[1]) );

        return $serverName;
    }

    /**
     * Get Operating System of web server. Details http://en.wikipedia.org/wiki/Uname
     *
     * @return string  Ex. "windows", "mac", "linux"
     */
    public function getOS()
    {
        $osList = array(
            'windows' => array(
                'win',
                'UWIN',
            ),
            'mac' => array(
                'mac',
                'darwin',
            ),
            'linux' => array(
                'linux',
                'cygwin',
                'GNU',
                'FreeBSD',
                'OpenBSD',
                'NetBSD',
            ),
        );

        $sysOS = strtolower(PHP_OS);

        foreach ($osList as $osName => $osSystem) {
            if (preg_match('/^('.implode('|', $osSystem).')/i', $sysOS)) {
                return $osName;
            }
        }

        return false;
    }

    /**
     * Get root directory of FoxCRM
     *
     * @return string
     */
    public function getRootDir()
    {
        $bPath = realpath('bootstrap.php');
        $rootDir = dirname($bPath);

        return $rootDir;
    }

    /**
     * Get path to PHP
     *
     * @return string
     */
    public function getPhpBin()
    {
        return (defined("PHP_BINDIR"))? PHP_BINDIR.DIRECTORY_SEPARATOR.'php' : 'php';
    }

    /**
     * Get php version (only digits and dots)
     *
     * @return string
     */
    public static function getPhpVersion()
    {
        $version = phpversion();

        if (preg_match('/^[0-9\.]+[0-9]/', $version, $matches)) {
            return $matches[0];
        }

        return $version;
    }
}