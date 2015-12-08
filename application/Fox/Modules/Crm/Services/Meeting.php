<?php
namespace Fox\Modules\Crm\Services;

use \Fox\ORM\Entity;
use \Fox\Modules\Crm\Business\Event\Invitations;

use \Fox\Core\Exceptions\Error;
use \Fox\Core\Exceptions\Forbidden;

class Meeting extends \Fox\Services\Record
{
    protected function init()
    {
        $this->dependencies[] = 'mailSender';
        $this->dependencies[] = 'preferences';
        $this->dependencies[] = 'language';
        $this->dependencies[] = 'dateTime';
        $this->dependencies[] = 'crypt';
    }

    protected function getMailSender()
    {
        return $this->injections['mailSender'];
    }

    protected function getPreferences()
    {
        return $this->injections['preferences'];
    }

    protected function getCrypt()
    {
        return $this->injections['crypt'];
    }

    protected function getLanguage()
    {
        return $this->injections['language'];
    }

    protected function getDateTime()
    {
        return $this->injections['dateTime'];
    }

    protected function getInvitationManager()
    {
        $smtpParams = $this->getPreferences()->getSmtpParams();
        if ($smtpParams) {
            if (array_key_exists('password', $smtpParams)) {
                $smtpParams['password'] = $this->getCrypt()->decrypt($smtpParams['password']);
            }
            $smtpParams['fromAddress'] = $this->getUser()->get('emailAddress');
            $smtpParams['fromName'] = $this->getUser()->get('name');
        }
        return new Invitations($this->getEntityManager(), $smtpParams, $this->getMailSender(), $this->getConfig(), $this->getDateTime(), $this->getLanguage());
    }

    public function sendInvitations(Entity $entity)
    {
        $invitationManager = $this->getInvitationManager();

        $users = $entity->get('users');
        foreach ($users as $user) {
            $invitationManager->sendInvitation($entity, $user, 'users');
        }

        $contacts = $entity->get('contacts');
        foreach ($contacts as $contact) {
            $invitationManager->sendInvitation($entity, $contact, 'contacts');
        }

        $leads = $entity->get('leads');
        foreach ($leads as $lead) {
            $invitationManager->sendInvitation($entity, $lead, 'leads');
        }

        return true;
    }

    public function loadAdditionalFields(Entity $entity)
    {
        parent::loadAdditionalFields($entity);
        $this->loadRemindersField($entity);
    }

    protected function loadRemindersField(Entity $entity)
    {
        $reminders = $this->getRepository()->getEntityReminders($entity);
        $entity->set('reminders', $reminders);
    }

    public function massSetHeld(array $ids)
    {
        foreach ($ids as $id) {
            $entity = $this->getEntityManager()->getEntity($this->entityType, $id);
            if ($entity && $this->getAcl()->check($entity, 'edit')) {
                $entity->set('status', 'Held');
                $this->getEntityManager()->saveEntity($entity);
            }
        }
        return true;
    }

    public function massSetNotHeld(array $ids)
    {
        foreach ($ids as $id) {
            $entity = $this->getEntityManager()->getEntity($this->entityType, $id);
            if ($entity && $this->getAcl()->check($entity, 'edit')) {
                $entity->set('status', 'Not Held');
                $this->getEntityManager()->saveEntity($entity);
            }
        }
        return true;
    }

}

