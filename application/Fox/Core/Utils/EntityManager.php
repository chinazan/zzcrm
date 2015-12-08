<?php
namespace Fox\Core\Utils;

use \Fox\Core\Exceptions\Error;
use \Fox\Core\Exceptions\Forbidden;
use \Fox\Core\Exceptions\Conflict;
use \Fox\Core\Utils\Json;

class EntityManager
{
    private $metadata;

    private $language;

    private $fileManager;

    private $metadataHelper;

    public function __construct(Metadata $metadata, Language $language, File\Manager $fileManager)
    {
        $this->metadata = $metadata;
        $this->language = $language;
        $this->fileManager = $fileManager;

        $this->metadataHelper = new \Fox\Core\Utils\Metadata\Helper($this->metadata);
    }

    protected function getMetadata()
    {
        return $this->metadata;
    }

    protected function getLanguage()
    {
        return $this->language;
    }

    protected function getFileManager()
    {
        return $this->fileManager;
    }

    protected function getMetadataHelper()
    {
        return $this->metadataHelper;
    }

    public function create($name, $type, $params = array())
    {
        if ($this->getMetadata()->get('scopes.' . $name)) {
            throw new Conflict('Entity ['.$name.'] already exists.');
        }
        if (empty($name) || empty($type)) {
            throw new Error();
        }

        $normalizedName = Util::normilizeClassName($name);

        $contents = "<" . "?" . "php\n\n".
            "namespace Fox\Custom\Entities;\n\n".
            "class {$normalizedName} extends \Fox\Core\Templates\Entities\\{$type}\n".
            "{\n".
            "    protected \$entityType = \"$name\";\n".
            "}\n";

        $filePath = "custom/Fox/Custom/Entities/{$normalizedName}.php";
        $this->getFileManager()->putContents($filePath, $contents);

        $contents = "<" . "?" . "php\n\n".
            "namespace Fox\Custom\Controllers;\n\n".
            "class {$normalizedName} extends \Fox\Core\Templates\Controllers\\{$type}\n".
            "{\n".
            "}\n";
        $filePath = "custom/Fox/Custom/Controllers/{$normalizedName}.php";
        $this->getFileManager()->putContents($filePath, $contents);

        $contents = "<" . "?" . "php\n\n".
            "namespace Fox\Custom\Services;\n\n".
            "class {$normalizedName} extends \Fox\Core\Templates\Services\\{$type}\n".
            "{\n".
            "}\n";
        $filePath = "custom/Fox/Custom/Services/{$normalizedName}.php";
        $this->getFileManager()->putContents($filePath, $contents);

        $contents = "<" . "?" . "php\n\n".
            "namespace Fox\Custom\Repositories;\n\n".
            "class {$normalizedName} extends \Fox\Core\Templates\Repositories\\{$type}\n".
            "{\n".
            "}\n";

        $filePath = "custom/Fox/Custom/Repositories/{$normalizedName}.php";
        $this->getFileManager()->putContents($filePath, $contents);

        $stream = false;
        if (!empty($params['stream'])) {
            $stream = $params['stream'];
        }
        $labelSingular = $name;
        if (!empty($params['labelSingular'])) {
            $labelSingular = $params['labelSingular'];
        }
        $labelPlural = $name;
        if (!empty($params['labelPlural'])) {
            $labelPlural = $params['labelPlural'];
        }
        $labelCreate = $this->getLanguage()->translate('Create') . ' ' . $labelSingular;

        $filePath = "application/Fox/Core/Templates/Metadata/{$type}/scopes.json";
        $scopesDataContents = $this->getFileManager()->getContents($filePath);
        $scopesDataContents = str_replace('{entityType}', $name, $scopesDataContents);
        $scopesData = Json::decode($scopesDataContents, true);

        $scopesData['stream'] = $stream;
        $scopesData['type'] = $type;
        $scopesData['module'] = 'Custom';
        $scopesData['object'] = true;
        $scopesData['isCustom'] = true;

        $this->getMetadata()->set('scopes', $name, $scopesData);

        $filePath = "application/Fox/Core/Templates/Metadata/{$type}/entityDefs.json";
        $entityDefsDataContents = $this->getFileManager()->getContents($filePath);
        $entityDefsDataContents = str_replace('{entityType}', $name, $entityDefsDataContents);
        $entityDefsData = Json::decode($entityDefsDataContents, true);
        $this->getMetadata()->set('entityDefs', $name, $entityDefsData);

        $filePath = "application/Fox/Core/Templates/Metadata/{$type}/clientDefs.json";
        $clientDefsContents = $this->getFileManager()->getContents($filePath);
        $clientDefsContents = str_replace('{entityType}', $name, $clientDefsContents);
        $clientDefsData = Json::decode($clientDefsContents, true);
        $this->getMetadata()->set('clientDefs', $name, $clientDefsData);

        $this->getLanguage()->set('Global', 'scopeNames', $name, $labelSingular);
        $this->getLanguage()->set('Global', 'scopeNamesPlural', $name, $labelPlural);
        $this->getLanguage()->set($name, 'labels', 'Create ' . $name, $labelCreate);

        $this->getMetadata()->save();
        $this->getLanguage()->save();

        $layoutsPath = "application/Fox/Core/Templates/Layouts/{$type}";
        if ($this->getFileManager()->isDir($layoutsPath)) {
            $this->getFileManager()->copy($layoutsPath, 'custom/Fox/Custom/Resources/layouts/' . $name);
        }

        return true;
    }

    public function update($name, $data)
    {
        if (!$this->getMetadata()->get('scopes.' . $name)) {
            throw new Error('Entity ['.$name.'] does not exist.');
        }

        if (isset($data['stream'])) {
            $scopeData = array(
                'stream' => (true == $data['stream'])
            );
            $this->getMetadata()->set('scopes', $name, $scopeData);
        }

        if (!empty($data['labelSingular'])) {
            $labelSingular = $data['labelSingular'];
            $this->getLanguage()->set('Global', 'scopeNames', $name, $labelSingular);
            $labelCreate = $this->getLanguage()->translate('Create') . ' ' . $labelSingular;
            $this->getLanguage()->set($name, 'labels', 'Create ' . $name, $labelCreate);
        }

        if (!empty($data['labelPlural'])) {
            $labelPlural = $data['labelPlural'];
            $this->getLanguage()->set('Global', 'scopeNamesPlural', $name, $labelPlural);
        }

        if (isset($data['sortBy'])) {
            $entityDefsData = array(
                'collection' => array(
                    'sortBy' => $data['sortBy'],
                    'asc' => !empty($data['asc'])
                )
            );
            $this->getMetadata()->set('entityDefs', $name, $entityDefsData);
        }

        $this->getMetadata()->save();
        $this->getLanguage()->save();

        return true;
    }

    public function delete($name)
    {
        if (!$this->isCustom($name)) {
            throw new Forbidden;
        }

        $normalizedName = Util::normilizeClassName($name);

        $unsets = array(
            'entityDefs',
            'clientDefs',
            'scopes'
        );
        $res = $this->getMetadata()->delete('entityDefs', $name);
        $res = $this->getMetadata()->delete('clientDefs', $name);
        $res = $this->getMetadata()->delete('scopes', $name);

        $this->getFileManager()->removeFile("custom/Fox/Custom/Resources/metadata/entityDefs/{$name}.json");
        $this->getFileManager()->removeFile("custom/Fox/Custom/Resources/metadata/clientDefs/{$name}.json");
        $this->getFileManager()->removeFile("custom/Fox/Custom/Resources/metadata/scopes/{$name}.json");

        $this->getFileManager()->removeFile("custom/Fox/Custom/Entities/{$normalizedName}.php");
        $this->getFileManager()->removeFile("custom/Fox/Custom/Services/{$normalizedName}.php");
        $this->getFileManager()->removeFile("custom/Fox/Custom/Controllers/{$normalizedName}.php");
        $this->getFileManager()->removeFile("custom/Fox/Custom/Repositories/{$normalizedName}.php");

        try {
            $this->getLanguage()->delete('Global', 'scopeNames', $name);
            $this->getLanguage()->delete('Global', 'scopeNamesPlural', $name);
        } catch (\Exception $e) {}

        $this->getMetadata()->save();
        $this->getLanguage()->save();

        return true;
    }

    protected function isCustom($name)
    {
        return $this->getMetadata()->get('scopes.' . $name . '.isCustom');
    }

    public function createLink(array $params)
    {
        $linkType = $params['linkType'];

        $entity = $params['entity'];
        $link = $params['link'];
        $entityForeign = $params['entityForeign'];
        $linkForeign = $params['linkForeign'];

        $label = $params['label'];
        $labelForeign = $params['labelForeign'];

        if (empty($linkType)) {
            throw new Error();
        }
        if (empty($entity) || empty($entityForeign)) {
            throw new Error();
        }
        if (empty($entityForeign) || empty($linkForeign)) {
            throw new Error();
        }

        if ($this->getMetadata()->get('entityDefs.' . $entity . '.links.' . $link)) {
            throw new Conflict('Link ['.$entity.'::'.$link.'] already exists.');
        }
        if ($this->getMetadata()->get('entityDefs.' . $entityForeign . '.links.' . $linkForeign)) {
            throw new Conflict('Link ['.$entityForeign.'::'.$linkForeign.'] already exists.');
        }

        if ($entity === $entityForeign) {
            if ($link === ucfirst($entity) || $linkForeign === ucfirst($entity)) {
                throw new Conflict();
            }
        }

        switch ($linkType) {
            case 'oneToMany':
                if ($this->getMetadata()->get('entityDefs.' . $entityForeign . '.field.' . $linkForeign)) {
                    throw new Conflict('Field ['.$entityForeign.'::'.$linkForeign.'] already exists.');
                }
                $dataLeft = array(
                    'links' => array(
                        $link => array(
                            'type' => 'hasMany',
                            'foreign' => $linkForeign,
                            'entity' => $entityForeign,
                            'isCustom' => true
                        )
                    )
                );
                $dataRight = array(
                    'fields' => array(
                        $linkForeign => array(
                            'type' => 'link'
                        )
                    ),
                    'links' => array(
                        $linkForeign => array(
                            'type' => 'belongsTo',
                            'foreign' => $link,
                            'entity' => $entity,
                            'isCustom' => true
                        )
                    )
                );
                break;
            case 'manyToOne':
                if ($this->getMetadata()->get('entityDefs.' . $entity . '.field.' . $link)) {
                    throw new Conflict('Field ['.$entity.'::'.$link.'] already exists.');
                }
                $dataLeft = array(
                    'fields' => array(
                        $link => array(
                            'type' => 'link'
                        )
                    ),
                    'links' => array(
                        $link => array(
                            'type' => 'belongsTo',
                            'foreign' => $linkForeign,
                            'entity' => $entityForeign,
                            'isCustom' => true
                        )
                    )
                );
                $dataRight = array(
                    'links' => array(
                        $linkForeign => array(
                            'type' => 'hasMany',
                            'foreign' => $link,
                            'entity' => $entity,
                            'isCustom' => true
                        )
                    )
                );
                break;
            case 'manyToMany':
                $dataLeft = array(
                    'links' => array(
                        $link => array(
                            'type' => 'hasMany',
                            'foreign' => $linkForeign,
                            'entity' => $entityForeign,
                            'isCustom' => true
                        )
                    )
                );
                $dataRight = array(
                    'links' => array(
                        $linkForeign => array(
                            'type' => 'hasMany',
                            'foreign' => $link,
                            'entity' => $entity,
                            'isCustom' => true
                        )
                    )
                );
                if ($entityForeign == $entity) {
                    $dataLeft['links'][$link]['midKeys'] = ['leftId', 'rightId'];
                    $dataRight['links'][$linkForeign]['midKeys'] = ['rightId', 'leftId'];
                }
                break;
        }

        $this->getMetadata()->set('entityDefs', $entity, $dataLeft);
        $this->getMetadata()->set('entityDefs', $entityForeign, $dataRight);
        $this->getMetadata()->save();

        $this->getLanguage()->set($entity, 'fields', $link, $label);
        $this->getLanguage()->set($entity, 'links', $link, $label);
        $this->getLanguage()->set($entityForeign, 'fields', $linkForeign, $labelForeign);
        $this->getLanguage()->set($entityForeign, 'links', $linkForeign, $labelForeign);

        $this->getLanguage()->save();

        return true;
    }

    public function updateLink(array $params)
    {
        $entity = $params['entity'];
        $link = $params['link'];
        $entityForeign = $params['entityForeign'];
        $linkForeign = $params['linkForeign'];

        $label = $params['label'];
        $labelForeign = $params['labelForeign'];

        if (empty($entity) || empty($entityForeign)) {
            throw new Error();
        }
        if (empty($entityForeign) || empty($linkForeign)) {
            throw new Error();
        }

        $this->getLanguage()->set($entity, 'fields', $link, $label);
        $this->getLanguage()->set($entity, 'links', $link, $label);
        $this->getLanguage()->set($entityForeign, 'fields', $linkForeign, $labelForeign);
        $this->getLanguage()->set($entityForeign, 'links', $linkForeign, $labelForeign);

        $this->getLanguage()->save();

        return true;
    }

    public function deleteLink(array $params)
    {
        $entity = $params['entity'];
        $link = $params['link'];

        if (!$this->getMetadata()->get("entityDefs.{$entity}.links.{$link}.isCustom")) {
            throw new Error();
        }

        $entityForeign = $this->getMetadata()->get("entityDefs.{$entity}.links.{$link}.entity");
        $linkForeign = $this->getMetadata()->get("entityDefs.{$entity}.links.{$link}.foreign");

        if (empty($entity) || empty($entityForeign)) {
            throw new Error();
        }
        if (empty($entityForeign) || empty($linkForeign)) {
            throw new Error();
        }

        $this->getMetadata()->delete('entityDefs', $entity, array(
            'fields.' . $link,
            'links.' . $link
        ));
        $this->getMetadata()->delete('entityDefs', $entityForeign, array(
            'fields.' . $linkForeign,
            'links.' . $linkForeign
        ));
        $this->getMetadata()->save();

        return true;
    }
}
