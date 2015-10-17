<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'user_register',
  ));
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'registerId',
   'columnName' => 'register_id',
   'type' => 'integer',
   'nullable' => false,
   'options' => 
   array(
   'unsigned' => false,
   ),
   'id' => true,
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
   'nullable' => false,
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
   'nullable' => false,
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
   'nullable' => false,
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
   'nullable' => false,
   'length' => 100,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'regActive',
   'columnName' => 'reg_active',
   'type' => 'boolean',
   'nullable' => false,
   'options' => 
   array(
   'default' => '0',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'regStatus',
   'columnName' => 'reg_status',
   'type' => 'integer',
   'nullable' => false,
   'options' => 
   array(
   'unsigned' => false,
   'default' => '0',
   ),
  ));

$metadata->mapField(array(
   'fieldName' => 'regNow',
   'columnName' => 'reg_now',
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
 //  'default' => 'CURRENT_TIMESTAMP',
   ),
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_IDENTITY);