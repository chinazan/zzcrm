<?php
namespace Fox\Core\Utils\Database\Orm\Fields;

class Email extends Base
{
    protected function load($fieldName, $entityName)
    {
        return array(
            $entityName => array(
                'fields' => array(
                    $fieldName => array(
                        'select' => 'emailAddresses.name',
                        'where' =>
                        array (
                            'LIKE' => \Fox\Core\Utils\Util::toUnderScore($entityName) . ".id IN (
                                SELECT entity_id
                                FROM entity_email_address
                                JOIN email_address ON email_address.id = entity_email_address.email_address_id
                                WHERE
                                    entity_email_address.deleted = 0 AND entity_email_address.entity_type = '{$entityName}' AND
                                    email_address.deleted = 0 AND email_address.name LIKE {value}
                            )",
                            '=' => \Fox\Core\Utils\Util::toUnderScore($entityName) . ".id IN (
                                SELECT entity_id
                                FROM entity_email_address
                                JOIN email_address ON email_address.id = entity_email_address.email_address_id
                                WHERE
                                    entity_email_address.deleted = 0 AND entity_email_address.entity_type = '{$entityName}' AND
                                    email_address.deleted = 0 AND email_address.name = {value}
                            )",
                            '<>' => \Fox\Core\Utils\Util::toUnderScore($entityName) . ".id IN (
                                SELECT entity_id
                                FROM entity_email_address
                                JOIN email_address ON email_address.id = entity_email_address.email_address_id
                                WHERE
                                    entity_email_address.deleted = 0 AND entity_email_address.entity_type = '{$entityName}' AND
                                    email_address.deleted = 0 AND email_address.name <> {value}
                            )"
                        ),
                        'orderBy' => 'emailAddresses.name {direction}',
                    ),
                    $fieldName .'Data' => array(
                        'type' => 'text',
                        'notStorable' => true
                    ),
                ),
                'relations' => array(
                    $fieldName.'es' => array(
                        'type' => 'manyMany',
                        'entity' => 'EmailAddress',
                        'relationName' => 'entityEmailAddress',
                        'midKeys' => array(
                            'entity_id',
                            'email_address_id',
                        ),
                        'conditions' => array(
                            'entityType' => $entityName,
                        ),
                        'additionalColumns' => array(
                            'entityType' => array(
                                'type' => 'varchar',
                                'len' => 100,
                            ),
                            'primary' => array(
                                'type' => 'bool',
                                'default' => false,
                            ),
                        ),
                    ),
                ),
            ),
        );
    }

}
