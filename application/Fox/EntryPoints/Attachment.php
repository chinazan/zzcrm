<?php
namespace Fox\EntryPoints;

use \Fox\Core\Exceptions\NotFound;
use \Fox\Core\Exceptions\Forbidden;
use \Fox\Core\Exceptions\BadRequest;

class Attachment extends \Fox\Core\EntryPoints\Base
{
    public static $authRequired = true;
    
    public function run()
    {    
        $id = $_GET['id'];
        if (empty($id)) {
            throw new BadRequest();
        }
        
        $attachment = $this->getEntityManager()->getEntity('Attachment', $id);
        
        if (!$attachment) {
            throw new NotFound();
        }        
        
        if ($attachment->get('parentId') && $attachment->get('parentType')) {
            $parent = $this->getEntityManager()->getEntity($attachment->get('parentType'), $attachment->get('parentId'));            
            if (!$this->getAcl()->check($parent)) {
                throw new Forbidden();
            }
        }
        
        $fileName = "data/upload/{$attachment->id}";
        
        if (!file_exists($fileName)) {
            throw new NotFound();
        }
        
        if ($attachment->get('type')) {
            header('Content-Type: ' . $attachment->get('type'));
        }
        
        header('Pragma: public');
        header('Content-Length: ' . filesize($fileName));
        ob_clean();
        flush();
        readfile($fileName);
        exit;        
    }    
}

