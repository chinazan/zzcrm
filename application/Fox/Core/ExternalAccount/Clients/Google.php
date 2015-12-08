<?php
namespace Fox\Core\ExternalAccount\Clients;

use \Fox\Core\Exceptions\Error;

class Google extends OAuth2Abstract
{
    protected function getPingUrl()
    {
        return 'https://www.googleapis.com/calendar/v3/users/me/calendarList';
    }
}

