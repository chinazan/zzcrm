<?php
namespace Fox\Modules\Crm\Services;

use \Fox\ORM\Entity;

use \Fox\Core\Exceptions\Error;
use \Fox\Core\Exceptions\Forbidden;

class Opportunity extends \Fox\Services\Record
{
    protected $mergeLinkList = array(
        'tasks',
        'meetings',
        'calls',
        'emails'
    );

    public function reportSalesPipeline($dateFrom, $dateTo)
    {
        $pdo = $this->getEntityManager()->getPDO();

        $options = $this->getMetadata()->get('entityDefs.Opportunity.fields.stage.options');

        $sql = "
            SELECT opportunity.stage AS `stage`, SUM(opportunity.amount * currency.rate) as `amount`
            FROM opportunity
            JOIN currency ON currency.id = opportunity.amount_currency
            WHERE
                opportunity.deleted = 0 AND
                opportunity.close_date >= ".$pdo->quote($dateFrom)." AND
                opportunity.close_date < ".$pdo->quote($dateTo)." AND
                opportunity.stage <> 'Closed Lost'
            GROUP BY opportunity.stage
            ORDER BY FIELD(opportunity.stage, '".implode("','", $options)."')
        ";

        $sth = $pdo->prepare($sql);
        $sth->execute();

        $rows = $sth->fetchAll(\PDO::FETCH_ASSOC);

        $result = array();
        foreach ($rows as $row) {
            $result[$row['stage']] = floatval($row['amount']);
        }

        return $result;
    }

    public function reportByLeadSource($dateFrom, $dateTo)
    {
        $pdo = $this->getEntityManager()->getPDO();

        $sql = "
            SELECT opportunity.lead_source AS `leadSource`, SUM(opportunity.amount * currency.rate * opportunity.probability / 100) as `amount`
            FROM opportunity
            JOIN currency ON currency.id = opportunity.amount_currency
            WHERE
                opportunity.deleted = 0 AND
                opportunity.close_date >= ".$pdo->quote($dateFrom)." AND
                opportunity.close_date < ".$pdo->quote($dateTo)." AND
                opportunity.stage <> 'Closed Lost' AND
                opportunity.lead_source <> ''
            GROUP BY opportunity.lead_source
        ";

        $sth = $pdo->prepare($sql);
        $sth->execute();

        $rows = $sth->fetchAll(\PDO::FETCH_ASSOC);

        $result = array();
        foreach ($rows as $row) {
            $result[$row['leadSource']] = floatval($row['amount']);
        }

        return $result;
    }

    public function reportByStage($dateFrom, $dateTo)
    {
        $pdo = $this->getEntityManager()->getPDO();

        $options = $this->getMetadata()->get('entityDefs.Opportunity.fields.stage.options');

        $sql = "
            SELECT opportunity.stage AS `stage`, SUM(opportunity.amount * currency.rate) as `amount`
            FROM opportunity
            JOIN currency ON currency.id = opportunity.amount_currency
            WHERE
                opportunity.deleted = 0 AND
                opportunity.close_date >= ".$pdo->quote($dateFrom)." AND
                opportunity.close_date < ".$pdo->quote($dateTo)." AND
                opportunity.stage <> 'Closed Lost' AND
                opportunity.stage <> 'Closed Won'
            GROUP BY opportunity.stage
            ORDER BY FIELD(opportunity.stage, '".implode("','", $options)."')
        ";

        $sth = $pdo->prepare($sql);
        $sth->execute();

        $rows = $sth->fetchAll(\PDO::FETCH_ASSOC);

        $result = array();
        foreach ($rows as $row) {
            $result[$row['stage']] = floatval($row['amount']);
        }

        return $result;
    }

    public function reportSalesByMonth($dateFrom, $dateTo)
    {
        $pdo = $this->getEntityManager()->getPDO();

        $sql = "
            SELECT DATE_FORMAT(opportunity.close_date, '%Y-%m') AS `month`, SUM(opportunity.amount * currency.rate) as `amount`
            FROM opportunity
            JOIN currency ON currency.id = opportunity.amount_currency
            WHERE
                opportunity.deleted = 0 AND
                opportunity.close_date >= ".$pdo->quote($dateFrom)." AND
                opportunity.close_date < ".$pdo->quote($dateTo)." AND
                opportunity.stage = 'Closed Won'

            GROUP BY DATE_FORMAT(opportunity.close_date, '%Y-%m')
            ORDER BY opportunity.close_date
        ";

        $sth = $pdo->prepare($sql);
        $sth->execute();

        $rows = $sth->fetchAll(\PDO::FETCH_ASSOC);

        $result = array();
        foreach ($rows as $row) {
            $result[$row['month']] = floatval($row['amount']);
        }
        
        return $result;
    }

}

