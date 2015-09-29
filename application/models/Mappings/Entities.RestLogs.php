<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'rest_logs',
  ));
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'columnName' => 'id',
   'type' => 'integer',
   'nullable' => false,
   'options' => 
   array(
   'unsigned' => false,
   ),
   'id' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'uri',
   'columnName' => 'uri',
   'type' => 'string',
   'nullable' => false,
   'length' => 255,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'method',
   'columnName' => 'method',
   'type' => 'string',
   'nullable' => false,
   'length' => 6,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'params',
   'columnName' => 'params',
   'type' => 'text',
   'nullable' => true,
   'length' => 65535,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'apiKey',
   'columnName' => 'api_key',
   'type' => 'string',
   'nullable' => false,
   'length' => 40,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'ipAddress',
   'columnName' => 'ip_address',
   'type' => 'string',
   'nullable' => false,
   'length' => 45,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'time',
   'columnName' => 'time',
   'type' => 'datetime',
   'nullable' => false,
   'options' => 
   array(
   'default' => 'CURRENT_TIMESTAMP',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'rtime',
   'columnName' => 'rtime',
   'type' => 'float',
   'nullable' => true,
   'precision' => 10,
   'scale' => 0,
  ));
$metadata->mapField(array(
   'fieldName' => 'authorized',
   'columnName' => 'authorized',
   'type' => 'string',
   'nullable' => false,
   'length' => 1,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'responseCode',
   'columnName' => 'response_code',
   'type' => 'smallint',
   'nullable' => false,
   'options' => 
   array(
   'unsigned' => false,
   ),
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_IDENTITY);