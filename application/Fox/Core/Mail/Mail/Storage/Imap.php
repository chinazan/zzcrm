<?php
namespace Fox\Core\Mail\Mail\Storage;

class Imap extends \Zend\Mail\Storage\Imap
{
	protected $messageClass = '\\Fox\\Core\\Mail\\Mail\\Storage\\Message';

    public function getIdsFromUID($uid)
    {
        $uid = intval($uid) + 1;
        return $this->protocol->search(array('UID ' . $uid . ':*'));
    }

    public function getIdsFromDate($date)
    {
        return $this->protocol->search(array('SINCE "' . $date . '"'));
    }

}

