<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'app_sessions',
   'indexes' => 
   array(
   'ci_sessions_timestamp' => 
   array(
    'columns' => 
    array(
    0 => 'timestamp',
    ),
   ),
   ),
  ));
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'columnName' => 'id',
   'type' => 'string',
   'nullable' => false,
   'length' => 40,
   'options' => 
   array(
   'fixed' => false,
   ),
   'id' => true,
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
   'fieldName' => 'timestamp',
   'columnName' => 'timestamp',
   'type' => 'integer',
   'nullable' => false,
   'options' => 
   array(
   'unsigned' => true,
   'default' => '0',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'data',
   'columnName' => 'data',
   'type' => 'blob',
   'nullable' => false,
   'length' => 65535,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_IDENTITY);