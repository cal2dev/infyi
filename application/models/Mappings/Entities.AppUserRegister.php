<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'app_user_register',
  ));
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'regId',
   'columnName' => 'Reg_id',
   'type' => 'integer',
   'nullable' => false,
   'options' => 
   array(
   'unsigned' => false,
   ),
   'id' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'regUniqueId',
   'columnName' => 'Reg_unique_id',
   'type' => 'string',
   'nullable' => true,
   'length' => 120,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'regRecordhash',
   'columnName' => 'Reg_recordHash',
   'type' => 'string',
   'nullable' => true,
   'length' => 120,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'regUserName',
   'columnName' => 'Reg_user_name',
   'type' => 'string',
   'nullable' => true,
   'length' => 120,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'regEmailId',
   'columnName' => 'Reg_email_id',
   'type' => 'string',
   'nullable' => false,
   'length' => 120,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'regPassword',
   'columnName' => 'Reg_password',
   'type' => 'string',
   'nullable' => false,
   'length' => 120,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'regFirstname',
   'columnName' => 'Reg_firstname',
   'type' => 'string',
   'nullable' => false,
   'length' => 100,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'regLastname',
   'columnName' => 'Reg_lastname',
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
   'columnName' => 'Reg_active',
   'type' => 'boolean',
   'nullable' => false,
   'options' => 
   array(
   'default' => '0',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'regStatus',
   'columnName' => 'Reg_status',
   'type' => 'integer',
   'nullable' => false,
   'options' => 
   array(
   'unsigned' => false,
   'default' => '0',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'regUnlogincount',
   'columnName' => 'Reg_unlogincount',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'regNow',
   'columnName' => 'Reg_now',
   'type' => 'string',
   'nullable' => true,
   'length' => 100,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'regCstamp',
   'columnName' => 'Reg_cstamp',
   'type' => 'datetime',
   'nullable' => false,
   'options' => 
   array(
   'default' => 'CURRENT_TIMESTAMP',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'regUstamp',
   'columnName' => 'Reg_ustamp',
   'type' => 'datetime',
   'nullable' => false,
   'options' => 
   array(
   'default' => 'CURRENT_TIMESTAMP',
   ),
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_IDENTITY);