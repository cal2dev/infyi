<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'app_user_data',
   'indexes' => 
   array(
   'Reg_id' => 
   array(
    'columns' => 
    array(
    0 => 'Reg_id',
    ),
   ),
   ),
  ));
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'dataId',
   'columnName' => 'Data_id',
   'type' => 'integer',
   'nullable' => false,
   'options' => 
   array(
   'unsigned' => false,
   ),
   'id' => true,
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
   'nullable' => true,
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
   'nullable' => true,
   'length' => 120,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'dataFirstname',
   'columnName' => 'Data_firstname',
   'type' => 'string',
   'nullable' => true,
   'length' => 100,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'dataLastname',
   'columnName' => 'Data_lastname',
   'type' => 'string',
   'nullable' => true,
   'length' => 100,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'dataImage',
   'columnName' => 'Data_image',
   'type' => 'text',
   'nullable' => true,
   'length' => 65535,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'dataGender',
   'columnName' => 'Data_gender',
   'type' => 'string',
   'nullable' => true,
   'length' => 20,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'dataBirthday',
   'columnName' => 'Data_birthday',
   'type' => 'string',
   'nullable' => true,
   'length' => 100,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'dataLocation',
   'columnName' => 'Data_location',
   'type' => 'string',
   'nullable' => true,
   'length' => 100,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'dataHometown',
   'columnName' => 'Data_hometown',
   'type' => 'string',
   'nullable' => true,
   'length' => 100,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'dataRelationship',
   'columnName' => 'Data_relationship',
   'type' => 'string',
   'nullable' => true,
   'length' => 100,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'dataTimezone',
   'columnName' => 'Data_timezone',
   'type' => 'string',
   'nullable' => true,
   'length' => 100,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'dataCstamp',
   'columnName' => 'Data_cstamp',
   'type' => 'datetime',
   'nullable' => false,
   'options' => 
   array(
   'default' => 'CURRENT_TIMESTAMP',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'dataUstamp',
   'columnName' => 'Data_ustamp',
   'type' => 'datetime',
   'nullable' => false,
   'options' => 
   array(
   'default' => 'CURRENT_TIMESTAMP',
   ),
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_IDENTITY);
$metadata->mapOneToOne(array(
   'fieldName' => 'reg',
   'targetEntity' => 'Entities.AppUserRegister',
   'cascade' => 
   array(
   ),
   'fetch' => 2,
   'mappedBy' => NULL,
   'inversedBy' => NULL,
   'joinColumns' => 
   array(
   0 => 
   array(
    'name' => 'Reg_id',
    'referencedColumnName' => 'Reg_id',
   ),
   ),
   'orphanRemoval' => false,
  ));