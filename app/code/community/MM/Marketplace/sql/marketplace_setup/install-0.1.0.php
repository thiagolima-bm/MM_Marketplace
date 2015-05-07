<?php

/* @var $installer Mage_Customer_Model_Resource_Setup */
$installer = $this;

/* @var $installer Mage_Catalog_Model_Resource_Eav_Mysql4_Setup */
$setup = new Mage_Eav_Model_Entity_Setup('core_setup');

// Add ean to prduct attribute set
$codigo = 'user_id';

$config = array(
    'position' => 1,
    'required'=> 0,
    'label' => 'User Id',
    'type' => 'int',
    'input'=>'hidden',
    'apply_to'=>'simple,bundle,grouped,configurable'
    );

$setup->addAttribute('catalog_product', $codigo , $config);

$installer->endSetup();