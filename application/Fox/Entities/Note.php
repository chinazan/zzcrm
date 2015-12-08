<?php
namespace Fox\Entities;

class Note extends \Fox\Core\ORM\Entity
{
    public function loadAttachments()
    {
        $data = $this->get('data');
        if (!empty($data) && !empty($data->attachmentsIds)) {
            $attachmentsIds = $data->attachmentsIds;
            $collection = array();
            foreach ($attachmentsIds as $id) {
                $attachment = $this->entityManager->getEntity('Attachment', $id);
                if ($attachment) {
                    $collection[] = $attachment;
                }
            }
        } else {
            $collection = $this->get('attachments');
        }
        
        $ids = array();
        $names = new \stdClass();
        $types = new \stdClass();
        foreach ($collection as $e) {
            $id = $e->id;
            $ids[] = $id;
            $names->$id = $e->get('name');
            $types->$id = $e->get('type');
        }
        $this->set('attachmentsIds', $ids);
        $this->set('attachmentsNames', $names);
        $this->set('attachmentsTypes', $types);
    }
}

