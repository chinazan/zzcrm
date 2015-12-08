<?php
namespace Fox\Core\Utils\Database;

use Fox\Core\Utils\Util,
    Fox\ORM\Entity;

class Converter
{
    private $metadata;

    private $fileManager;

    private $schemaConverter;

    private $schemaFromMetadata = null;

    public function __construct(\Fox\Core\Utils\Metadata $metadata, \Fox\Core\Utils\File\Manager $fileManager)
    {
        $this->metadata = $metadata;
        $this->fileManager = $fileManager;

        $this->ormConverter = new Orm\Converter($this->metadata, $this->fileManager);

        $this->schemaConverter = new Schema\Converter($this->fileManager);
    }

    protected function getMetadata()
    {
        return $this->metadata;
    }

    protected function getOrmConverter()
    {
        return $this->ormConverter;
    }

    protected function getSchemaConverter()
    {
        return $this->schemaConverter;
    }

    public function getSchemaFromMetadata($entityList = null)
    {
        $ormMeta = $this->getMetadata()->getOrmMetadata();

        $this->schemaFromMetadata = $this->getSchemaConverter()->process($ormMeta, $entityList);

        return $this->schemaFromMetadata;
    }

    /**
    * Main method of convertation from metadata to orm metadata and database schema
    *
    * @return bool
    */
    public function process()
    {
        $GLOBALS['log']->debug('Orm\Converter - Start: orm convertation');

        $ormMeta = $this->getOrmConverter()->process();

        //save database meta to a file espoMetadata.php
        $result = $this->getMetadata()->setOrmMetadata($ormMeta);

        $GLOBALS['log']->debug('Orm\Converter - End: orm convertation, result=['.$result.']');

        return $result;
    }
}