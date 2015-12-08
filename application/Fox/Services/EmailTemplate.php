<?php
namespace Fox\Services;

use \Fox\ORM\Entity;
use \Fox\Core\Entities\Person;

use \Fox\Core\Exceptions\Error;
use \Fox\Core\Exceptions\NotFound;


class EmailTemplate extends Record
{

    protected function init()
    {
        $this->dependencies[] = 'fileManager';
        $this->dependencies[] = 'dateTime';
    }

    protected function getFileManager()
    {
        return $this->injections['fileManager'];
    }

    protected function getDateTime()
    {
        return $this->injections['dateTime'];
    }

    public function parseTemplate(Entity $emailTemplate, array $params = array(), $copyAttachments = false)
    {
        $entityHash = array();
        if (!empty($params['entityHash']) && is_array($params['entityHash'])) {
            $entityHash = $params['entityHash'];
        }

        if (!isset($entityHash['User'])) {
            $entityHash['User'] = $this->getUser();
        }

        if (!empty($params['emailAddress'])) {
            $emailAddress = $this->getEntityManager()->getRepository('EmailAddress')->where(array(
                'lower' => $params['emailAddress']
            ))->findOne();

            $entity = $this->getEntityManager()->getRepository('EmailAddress')->getEntityByAddress($params['emailAddress']);

            if ($entity) {
                if ($entity instanceof Person) {
                    $entityHash['Person'] = $entity;
                }
                if (empty($entityHash[$entity->getEntityType()])) {
                    $entityHash[$entity->getEntityType()] = $entity;
                }
            }
        }

        if (empty($params['parent'])) {
            if (!empty($params['parentId']) && !empty($params['parentType'])) {
                $parent = $this->getEntityManager()->getEntity($params['parentType'], $params['parentId']);
                if ($parent) {
                    $params['parent'] = $parent;
                }
            }
        }

        if (!empty($params['parent'])) {
            $parent = $params['parent'];
            $entityHash[$parent->getEntityType()] = $parent;
            $entityHash['Parent'] = $parent;

            if (empty($entityHash['Person']) && ($parent instanceof Person)) {
                $entityHash['Person'] = $parent;
            }
        }

        $subject = $emailTemplate->get('subject');
        $body = $emailTemplate->get('body');

        foreach ($entityHash as $type => $entity) {
            $subject = $this->parseText($type, $entity, $subject);
        }
        foreach ($entityHash as $type => $entity) {
            $body = $this->parseText($type, $entity, $body);
        }

        $attachmentsIds = array();
        $attachmentsNames = new \StdClass();

        if ($copyAttachments) {
            $attachmentList = $emailTemplate->get('attachments');
            if (!empty($attachmentList)) {
                foreach ($attachmentList as $attachment) {
                    $clone = $this->getEntityManager()->getEntity('Attachment');
                    $data = $attachment->toArray();
                    unset($data['parentType']);
                    unset($data['parentId']);
                    unset($data['id']);
                    $clone->set($data);
                    $this->getEntityManager()->saveEntity($clone);

                    $contents = $this->getFileManager()->getContents('data/upload/' . $attachment->id);
                    if (empty($contents)) {
                        continue;
                    }
                    $this->getFileManager()->putContents('data/upload/' . $clone->id, $contents);

                    $attachmentsIds[] = $id = $clone->id;
                    $attachmentsNames->$id = $clone->get('name');
                }
            }
        }

        return array(
            'subject' => $subject,
            'body' => $body,
            'attachmentsIds' => $attachmentsIds,
            'attachmentsNames' => $attachmentsNames,
            'isHtml' => $emailTemplate->get('isHtml')
        );
    }

    public function parse($id, array $params = array(), $copyAttachments = false)
    {
        $emailTemplate = $this->getEntity($id);
        if (empty($emailTemplate)) {
            throw new NotFound();
        }

        return $this->parseTemplate($emailTemplate, $params, $copyAttachments);
    }

    protected function parseText($type, Entity $entity, $text)
    {
        $fieldList = array_keys($entity->getFields());
        $fieldList[] = $id;
        foreach ($fieldList as $field) {
            $value = $entity->get($field);
            if (is_object($value)) {
                continue;
            }

            if ($entity->fields[$field]['type'] == 'date') {
                $value = $this->getDateTime()->convertSystemDateToGlobal($value);
            } else if ($entity->fields[$field]['type'] == 'datetime') {
                $value = $this->getDateTime()->convertSystemDateTimeToGlobal($value);
            }
            $text = str_replace('{' . $type . '.' . $field . '}', $value, $text);
        }
        return $text;
    }
}

