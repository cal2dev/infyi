<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'user_tag_master',
  ));
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'userTagId',
   'columnName' => 'user_tag_id',
   'type' => 'integer',
   'nullable' => false,
   'options' => 
   array(
   'unsigned' => false,
   ),
   'id' => true,
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
$metadata->mapOneToOne(array(
		'fieldName' => 'UserDataId',
		'targetEntity' => 'UserData',
		'cascade' =>
		array(
		),
		'fetch' => 2,
		'mappedBy' => NULL,
		'inversedBy' => NULL,
		'nullable' => false,
		'joinColumns' => array( 0 => array( 'name' => 'user_data_id',
				'referencedColumnName' => 'user_data_id',
		),
		),
		'orphanRemoval' => false,
));
$metadata->mapOneToOne(array(
		'fieldName' => 'tagId',
		'targetEntity' => 'TagMaster',
		'cascade' =>
		array(
		),
		'fetch' => 2,
		'mappedBy' => NULL,
		'inversedBy' => NULL,
		'nullable' => false,
		'joinColumns' => array( 0 => array( 'name' => 'tag_id',
				'referencedColumnName' => 'tag_id',
		),
		),
		'orphanRemoval' => false,
));
$metadata->mapField(array(
		'fieldName' => 'userHash',
		'columnName' => 'user_hash',
		'type' => 'string',
		'nullable' => true,
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