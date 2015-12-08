<?php
namespace Fox\Core\Mail;


use \Fox\Entities\Email;

class FiltersMatcher
{
    public function __construct()
    {

    }

    public function match(Email $email, $filterList = [])
    {
        foreach ($filterList as $filter) {
            if ($filter->get('from')) {
                if (strtolower($filter->get('from')) === strtolower($email->get('from'))) {
                    return true;
                }
            }
            if ($filter->get('to')) {
                if ($email->get('to')) {
                    $toArr = explode(';', $email->get('to'));
                    foreach ($toArr as $to) {
                        if (strtolower($to) === strtolower($filter->get('to'))) {
                            return true;
                        }
                    }
                }
            }
            if ($filter->get('subject')) {
                if ($this->matchString($filter->get('subject'), $email->get('name'))) {
                    return true;
                }
            }
        }
        return false;
    }

    public function matchBody(Email $email, $filterList = [])
    {
        foreach ($filterList as $filter) {
            if ($filter->get('bodyContains')) {
                $phraseList = $filter->get('bodyContains');
                $body = $email->get('body');
                $bodyPlain = $email->get('bodyPlain');
                foreach ($phraseList as $phrase) {
                    if (stripos($bodyPlain, $phrase) !== false) {
                        return true;
                    }
                    if (stripos($body, $phrase) !== false) {
                        return true;
                    }
                }
            }
        }
        return false;
    }

    protected function matchString($pattern, $value)
    {
        if ($pattern == $value) {
            return true;
        }
        $pattern = preg_quote($pattern, '#');
        $pattern = str_replace('\*', '.*', $pattern).'\z';
        if (preg_match('#^'.$pattern.'#', $value)) {
            return true;
        }
        return false;
    }
}
