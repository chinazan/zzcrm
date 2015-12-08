<?php
namespace Fox\Hooks\Note;

use Fox\ORM\Entity;

class Mentions extends \Fox\Core\Hooks\Base
{
    public static $order = 9;

    protected $notificationService = null;

    protected function init()
    {
        $this->dependencies[] = 'serviceFactory';
    }

    protected function getServiceFactory()
    {
        return $this->getInjection('serviceFactory');
    }

    protected function addMentionData($entity)
    {
        $post = $entity->get('post');

        $mentionData = new \stdClass();

        $previousMentionList = array();
        if (!$entity->isNew()) {
            $data = $entity->get('data');
            if (!empty($data) && !empty($data->mentions)) {
                $previousMentionList = array_keys(get_object_vars($data->mentions));
            }
        }

        preg_match_all('/(@\w+)/', $post, $matches);

        $mentionCount = 0;

        if (is_array($matches) && !empty($matches[0]) && is_array($matches[0])) {
            foreach ($matches[0] as $item) {
                $userName = substr($item, 1);
                $user = $this->getEntityManager()->getRepository('User')->where(array('userName' => $userName))->findOne();
                if ($user) {
                    $m = array(
                        'id' => $user->id,
                        'name' => $user->get('name'),
                        'userName' => $user->get('userName'),
                        '_scope' => $user->getEntityName()
                    );
                    $mentionData->$item = (object) $m;
                    $mentionCount++;
                    if (!in_array($item, $previousMentionList)) {
                        if ($user->id == $this->getUser()->id) {
                            continue;
                        }
                        $this->notifyAboutMention($entity, $user);
                    }
                }
            }
        }

        $data = $entity->get('data');
        if (empty($data)) {
            $data = new \stdClass();
        }
        if ($mentionCount) {
            $data->mentions = $mentionData;
        } else {
            unset($data->mentions);
        }

        $entity->set('data', $data);
    }

    public function beforeSave(Entity $entity)
    {
        if ($entity->get('type') == 'Post') {
            $post = $entity->get('post');

            $this->addMentionData($entity);
        }
    }

    protected function notifyAboutMention(Entity $entity, \Fox\Entities\User $user)
    {
        $this->getNotificationService()->notifyAboutMentionInPost($user->id, $entity->id);
    }

    protected function getNotificationService()
    {
        if (empty($this->notificationService)) {
            $this->notificationService = $this->getServiceFactory()->create('Notification');
        }
        return $this->notificationService;
    }
}

