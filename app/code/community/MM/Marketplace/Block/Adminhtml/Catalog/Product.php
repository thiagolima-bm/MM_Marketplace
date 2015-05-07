<?php
/**
 * MM Marketplace 
 * 
 * @category     MM
 * @package      MM_Marketplace 
 * @copyright    Copyright (c) 2015 MM (http://blog.meumagento.com.br/)
 * @author       MM (Thiago Caldeira de Lima)  
 * @version      Release: 0.1.0
 */
class MM_Marketplace_Block_Adminhtml_Catalog_Product extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'adminhtml_catalog_product';
        $this->_blockGroup = 'marketplace';
        $this->_headerText = Mage::helper('marketplace')->__('Product Manager');
       
        $this->_addButtonLabel = Mage::helper('marketplace')->__('Add Product');

        parent::__construct();
    }
}