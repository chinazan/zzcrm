<?php
namespace Fox\Modules\Crm\SelectManagers;

class CampaignLogRecord extends \Fox\Core\SelectManagers\Base
{
    protected function accessOnlyOwn(&$result)
    {
        $result['whereClause'][] = array(
            'campaign.assignedUserId' => $this->getUser()->id
        );
    }

    protected function accessOnlyTeam(&$result)
    {
        $teamIdList = $this->user->get('teamsIds');
        if (empty($teamIdList)) {
            $result['customWhere'] .= " AND campaign.assigned_user_id = ".$this->getEntityManager()->getPDO()->quote($this->getUser()->id);
            return;
        }
        $arr = [];
        if (is_array($teamIdList)) {
            foreach ($teamIdList as $teamId) {
                $arr[] = $this->getEntityManager()->getPDO()->quote($teamId);
            }
        }

        $result['customJoin'] .= " LEFT JOIN entity_team AS teamsMiddle ON teamsMiddle.entity_type = 'Campaign' AND teamsMiddle.entity_id = campaign.id AND teamsMiddle.deleted = 0";
        $result['customWhere'] .= "
            AND (
                teamsMiddle.team_id IN (" . implode(', ', $arr) . ")
                 OR
                campaign.assigned_user_id = ".$this->getEntityManager()->getPDO()->quote($this->getUser()->id)."
            )
        ";
        $result['whereClause'][] = array(
            'campaignId!=' => null
        );
    }

    protected function filterOpened(&$result)
    {
        $result['whereClause'][] = array(
            'action' => 'Opened'
        );
    }

    protected function filterSent(&$result)
    {
        $result['whereClause'][] = array(
            'action' => 'Sent'
        );
    }

    protected function filterClicked(&$result)
    {
        $result['whereClause'][] = array(
            'action' => 'Clicked'
        );
    }

    protected function filterOptedOut(&$result)
    {
        $result['whereClause'][] = array(
            'action' => 'Opted Out'
        );
    }

    protected function filterBounced(&$result)
    {
        $result['whereClause'][] = array(
            'action' => 'Bounced'
        );
    }

    protected function filterLeadCreated(&$result)
    {
        $result['whereClause'][] = array(
            'action' => 'Lead Created'
        );
    }
}

