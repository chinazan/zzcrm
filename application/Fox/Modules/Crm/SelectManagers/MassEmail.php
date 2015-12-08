<?php
namespace Fox\Modules\Crm\SelectManagers;

class MassEmail extends \Fox\Core\SelectManagers\Base
{
    protected function acessOnlyOwn(&$result)
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
}

