<?php
namespace Fox\Services;

use \Fox\Core\Exceptions\Forbidden;
use \Fox\Core\Exceptions\NotFound;

use Fox\ORM\Entity;

class EmailNotification extends \Fox\Core\Services\Base
{
    protected function init()
    {
        $this->dependencies[] = 'metadata';
        $this->dependencies[] = 'mailSender';
        $this->dependencies[] = 'language';
    }

    protected function getMailSender()
    {
        return $this->getInjection('mailSender');
    }

    protected function getMetadata()
    {
        return $this->getInjection('metadata');
    }

    protected function getLanguage()
    {
        return $this->getInjection('language');
    }

    protected function replaceMessageVariables($text, $entity, $user, $assignerUser)
    {
        $recordUrl = $this->getConfig()->get('siteUrl') . '#' . $entity->getEntityName() . '/view/' . $entity->id;

        $text = str_replace('{userName}', $user->get('name'), $text);
        $text = str_replace('{assignerUserName}', $assignerUser->get('name'), $text);
        $text = str_replace('{recordUrl}', $recordUrl, $text);
        $text = str_replace('{entityType}', $this->getLanguage()->translate($entity->getEntityName(), 'scopeNames'), $text);

        $fields = $entity->getFields();
        foreach ($fields as $field => $d) {
            $text = str_replace('{Entity.' . $field . '}', $entity->get($field), $text);
        }

        return $text;
    }

    public function notifyAboutAssignmentJob($data)
    {
        $userId = $data['userId'];
        $assignerUserId = $data['assignerUserId'];
        $entityId = $data['entityId'];
        $entityType = $data['entityType'];

        $user = $this->getEntityManager()->getEntity('User', $userId);

        $prefs = $this->getEntityManager()->getEntity('Preferences', $userId);

        if (!$prefs) {
            return true;
        }

        if (!$prefs->get('receiveAssignmentEmailNotifications')) {
            return true;
        }

        $assignerUser = $this->getEntityManager()->getEntity('User', $assignerUserId);
        $entity = $this->getEntityManager()->getEntity($entityType, $entityId);

        if ($user && $entity && $assignerUser && $entity->get('assignedUserId') == $userId) {
            $emailAddress = $user->get('emailAddress');
            if (!empty($emailAddress)) {
                $email = $this->getEntityManager()->getEntity('Email');

                $subject = $this->getLanguage()->translate('assignmentEmailNotificationSubject', 'messages', $entity->getEntityName());
                $body = $this->getLanguage()->translate('assignmentEmailNotificationBody', 'messages', $entity->getEntityName());

                $subject = $this->replaceMessageVariables($subject, $entity, $user, $assignerUser);
                $body = $this->replaceMessageVariables($body, $entity, $user, $assignerUser);

                $email->set(array(
                    'subject' => $subject,
                    'body' => $body,
                    'isHtml' => false,
                    'to' => $emailAddress,
                    'isSystem' => true
                ));

                $this->getMailSender()->send($email);
            }
        }

        return true;
    }
}

