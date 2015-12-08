<?php
namespace Fox\Core\Utils;

class DateTime
{
    protected $dataFormat;

    protected $timeFormat;

    protected $timezone;

    protected $internalDateTimeFormat = 'Y-m-d H:i:s';

    protected $internalDateFormat = 'Y-m-d';

    protected $dateFormats = array(
        'MM/DD/YYYY' => 'm/d/Y',
        'YYYY-MM-DD' => 'Y-m-d',
        'DD.MM.YYYY' => 'd.m.Y',
    );

    protected $timeFormats = array(
        'HH:mm' => 'H:i',
        'hh:mm A' => 'h:i A',
        'hh:mm a' => 'h:ia',
        'hh:mmA' => 'h:iA',
    );

    public function __construct($dateFormat = 'YYYY-MM-DD', $timeFormat = 'HH:mm', $timeZone = 'UTC')
    {
        $this->dateFormat = $dateFormat;
        $this->timeFormat = $timeFormat;

        $this->timezone = new \DateTimeZone($timeZone);
    }

    public function getInternalDateTimeFormat()
    {
        return $this->internalDateTimeFormat;
    }

    public function getInternalDateFormat()
    {
        return $this->internalDateFormat;
    }

    protected function getPhpDateFormat()
    {
        return $this->dateFormats[$this->dateFormat];
    }

    protected function getPhpDateTimeFormat()
    {
        return $this->dateFormats[$this->dateFormat] . ' ' . $this->timeFormats[$this->timeFormat];
    }

    public function convertSystemDateToGlobal($string)
    {
        $dateTime = \DateTime::createFromFormat('Y-m-d', $string);
        if ($dateTime) {
            return $dateTime->format($this->getPhpDateFormat());
        }
        return null;
    }

    public function convertSystemDateTimeToGlobal($string)
    {
        $dateTime = \DateTime::createFromFormat('Y-m-d H:i:s', $string);
        if ($dateTime) {
            return $dateTime->setTimezone($this->timezone)->format($this->getPhpDateTimeFormat());
        }
        return null;
    }

    public function convertSystemDate($string)
    {
        return $this->convertSystemDateToGlobal($string);
    }

    public function convertSystemDateTime($string, $timezone = null)
    {
        $dateTime = \DateTime::createFromFormat('Y-m-d H:i:s', $string);
        if (empty($timezone)) {
            $timezone = $this->timezone;
        } else {
            $timezone = new \DateTimeZone($timezone);
        }
        if ($dateTime) {
            return $dateTime->setTimezone($timezone)->format($this->getPhpDateTimeFormat());
        }
        return null;
    }

}


