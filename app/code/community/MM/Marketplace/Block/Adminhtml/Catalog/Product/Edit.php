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
class MM_Marketplace_Block_Adminhtml_Catalog_Product_Edit extends Mage_Adminhtml_Block_Catalog_Product_Edit // Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('catalog/product/edit.phtml');
        $this->setId('product_edit');
        
       
    }
 
    public function getHeaderText()
    {
        if( Mage::registry('marketplace_product') && Mage::registry('marketplace_product')->getId() ) {
            return Mage::helper('marketplace')->__("Edit Product '%s'", $this->htmlEscape(Mage::registry('marketplace_product')->getName()));
        } else {
            return Mage::helper('marketplace')->__('Add Product');
        }
    }

    public function getSaveUrl()
    {
        return $this->getUrl('*/*/saveProduct', array('_current'=>true, 'back'=>null));
    }
}