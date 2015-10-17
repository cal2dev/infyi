<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'user_data',
   'indexes' => 
   array(
   'user_data_id' => 
   array(
    'columns' => 
    array(
    0 => 'user_data_id',
    ),
   ),
   ),
  ));
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'UserDataId',
   'columnName' => 'user_data_id',
   'type' => 'integer',
   'nullable' => false,
   'options' => 
   array(
   'unsigned' => false,
   ),
   'id' => true,
  ));
$metadata->mapOneToOne(array(
		'fieldName' => 'register',
		'targetEntity' => 'UserRegister',
		'cascade' =>
		array(
		),
		'fetch' => 2,
		'mappedBy' => NULL,
		'inversedBy' => NULL,
		'nullable' => false,
		'joinColumns' => array( 0 => array( 'name' => 'register_id',
				'referencedColumnName' => 'register_id',
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
   'fieldName' => 'uniqueId',
   'columnName' => 'unique_id',
   'type' => 'string',
   'nullable' => true,
   'length' => 120,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'userName',
   'columnName' => 'user_name',
   'type' => 'string',
   'nullable' => true,
   'length' => 120,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'emailId',
   'columnName' => 'email_id',
   'type' => 'string',
   'nullable' => true,
   'length' => 120,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'password',
   'columnName' => 'password',
   'type' => 'string',
   'nullable' => true,
   'length' => 120,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'firstname',
   'columnName' => 'firstname',
   'type' => 'string',
   'nullable' => true,
   'length' => 100,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'lastname',
   'columnName' => 'lastname',
   'type' => 'string',
   'nullable' => true,
   'length' => 100,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));

$metadata->mapField(array(
   'fieldName' => 'gender',
   'columnName' => 'gender',
   'type' => 'string',
   'nullable' => true,
   'length' => 20,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'dob',
   'columnName' => 'dob',
   'type' => 'string',
   'nullable' => true,
   'length' => 100,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'location',
   'columnName' => 'location',
   'type' => 'string',
   'nullable' => true,
   'length' => 100,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));

$metadata->mapField(array(
   'fieldName' => 'timezone',
   'columnName' => 'timezone',
   'type' => 'string',
   'nullable' => true,
   'length' => 100,
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
 //  'default' => 'CURRENT_TIMESTAMP',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'ustamp',
   'columnName' => 'ustamp',
   'type' => 'datetime',
   'nullable' => false,
   'options' => 
   array(
//   'default' => 'CURRENT_TIMESTAMP',
   ),
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_IDENTITY);
