<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'tag_master',
  ));
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'tagId',
   'columnName' => 'tag_id',
   'type' => 'integer',
   'nullable' => false,
   'options' => 
   array(
   'unsigned' => false,
   ),
   'id' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'tagName',
   'columnName' => 'tag_name',
   'type' => 'string',
   'nullable' => false,
	'length' => 120,
   'options' => 
   array(
    'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'tagdhash',
   'columnName' => 'tag_hash',
   'type' => 'string',
   'nullable' => false,
   'length' => 120,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'tagdSlug',
   'columnName' => 'tag_slug',
   'type' => 'string',
   'nullable' => false,
   'length' => 120,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));

$metadata->mapField(array(
   'fieldName' => 'cstamp',
   'columnName' => 'cstamp',
   'type' => 'datetime',
   'nullable' => false,
   'options' => 
   array(
//   'default' => 'CURRENT_TIMESTAMP',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'ustamp',
   'columnName' => 'ustamp',
   'type' => 'datetime',
   'nullable' => false,
   'options' => 
   array(
 //  'default' => '0000-00-00 00:00:00',
   ),
  ));

$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_IDENTITY);