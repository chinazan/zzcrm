<?php
namespace Fox\EntryPoints;

use \Fox\Core\Exceptions\NotFound;
use \Fox\Core\Exceptions\Forbidden;
use \Fox\Core\Exceptions\BadRequest;
use \Fox\Core\Exceptions\Error;

class Image extends \Fox\Core\EntryPoints\Base
{
    public static $authRequired = true;

    protected $allowedFileTypes = array(
        'image/jpeg',
        'image/png',
        'image/gif',
    );

    protected $imageSizes = array(
        'xxx-small' => array(18, 18),
        'xx-small' => array(32, 32),
        'x-small' => array(64, 64),
        'small' => array(128, 128),
        'medium' => array(256, 256),
        'large' => array(512, 512),
        'x-large' => array(864, 864),
        'xx-large' => array(1024, 1024),
    );


    public function run()
    {
        if (empty($_GET['id'])) {
            throw new BadRequest();
        }
        $id = $_GET['id'];

        $size = null;
        if (!empty($_GET['size'])) {
            $size = $_GET['size'];
        }

        $this->show($id, $size);
    }

    protected function show($id, $size)
    {
        $attachment = $this->getEntityManager()->getEntity('Attachment', $id);

        if (!$attachment) {
            throw new NotFound();
        }

        if ($attachment->get('parentId') && $attachment->get('parentType')) {
            $parent = $this->getEntityManager()->getEntity($attachment->get('parentType'), $attachment->get('parentId'));
            if ($parent && !$this->getAcl()->check($parent)) {
                throw new Forbidden();
            }
        }

        $filePath = "data/upload/{$attachment->id}";

        $fileType = $attachment->get('type');

        if (!file_exists($filePath)) {
            throw new NotFound();
        }

        if (!in_array($fileType, $this->allowedFileTypes)) {
            throw new Error();
        }

        if (!empty($size)) {
            if (!empty($this->imageSizes[$size])) {
                $thumbFilePath = "data/upload/thumbs/{$attachment->id}_{$size}";

                if (!file_exists($thumbFilePath)) {
                    $targetImage = $this->getThumbImage($filePath, $fileType, $size);
                    ob_start();

                    switch ($fileType) {
                        case 'image/jpeg':
                            imagejpeg($targetImage);
                            break;
                        case 'image/png':
                            imagepng($targetImage);
                            break;
                        case 'image/gif':
                            imagegif($targetImage);
                            break;
                    }
                    $contents = ob_get_contents();
                    ob_end_clean();
                    imagedestroy($targetImage);
                    $this->getContainer()->get('fileManager')->putContents($thumbFilePath, $contents);
                }
                $filePath = $thumbFilePath;

            } else {
                throw new Error();
            }
        }

        if (!empty($size)) {
            $fileName = $attachment->id . '_' . $size . '.jpg';
        } else {
            $fileName = $attachment->get('name');
        }
        header('Content-Disposition:inline;filename="'.$fileName.'"');
        if (!empty($fileType)) {
            header('Content-Type: ' . $fileType);
        }
        header('Pragma: public');
        header('Cache-Control: max-age=360000, must-revalidate');
        $fileSize = filesize($filePath);
        if ($fileSize) {
            header('Content-Length: ' . $fileSize);
        }
        ob_clean();
        flush();
        readfile($filePath);
        exit;
    }

    protected function getThumbImage($filePath, $fileType, $size)
    {
        list($originalWidth, $originalHeight) = getimagesize($filePath);
        list($width, $height) = $this->imageSizes[$size];

        if ($originalWidth <= $width && $originalHeight <= $height) {
            $targetWidth = $originalWidth;
            $targetHeight = $originalHeight;
        } else {
            if ($originalWidth > $originalHeight) {
                $targetWidth = $width;
                $targetHeight = $originalHeight / ($originalWidth / $width);
                if ($targetHeight > $height) {
                    $targetHeight = $height;
                    $targetWidth = $originalWidth / ($originalHeight / $height);
                }
            } else {
                $targetHeight = $height;
                $targetWidth = $originalWidth / ($originalHeight / $height);
                if ($targetWidth > $width) {
                    $targetWidth = $width;
                    $targetHeight = $originalHeight / ($originalWidth / $width);
                }
            }
        }

        $targetImage = imagecreatetruecolor($targetWidth, $targetHeight);
        switch ($fileType) {
            case 'image/jpeg':
                $sourceImage = imagecreatefromjpeg($filePath);
                imagecopyresampled ($targetImage, $sourceImage, 0, 0, 0, 0, $targetWidth, $targetHeight, $originalWidth, $originalHeight);
                break;
            case 'image/png':
                $sourceImage = imagecreatefrompng($filePath);
                imagealphablending($targetImage, false);
                imagesavealpha($targetImage, true);
                $transparent = imagecolorallocatealpha($targetImage, 255, 255, 255, 127);
                imagefilledrectangle($targetImage, 0, 0, $targetWidth, $targetHeight, $transparent);
                imagecopyresampled($targetImage, $sourceImage, 0, 0, 0, 0, $targetWidth, $targetHeight, $originalWidth, $originalHeight);
                break;
            case 'image/gif':
                $sourceImage = imagecreatefromgif($filePath);
                imagecopyresampled($targetImage, $sourceImage, 0, 0, 0, 0, $targetWidth, $targetHeight, $originalWidth, $originalHeight);
                break;
        }


        return $targetImage;
    }
}

