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
class MM_Marketplace_Block_Adminhtml_Catalog_Product_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
    protected function _prepareForm()
    {
        $form = new Varien_Data_Form();
        $this->setForm($form);
        $fieldset = $form->addFieldset('product_form', array('legend'=>Mage::helper('marketplace')->__('Product Information')));

        if ($this->getRequest()->getParam('id')) {
            
            $fieldset->addField('entity_id', 'hidden', array(
                'name'      => 'product_id',
            ));  
        } 
        
        
        $fieldset->addField('name', 'text', array(
            'label'     => Mage::helper('marketplace')->__('Product Name'),
            'required'  => true,
            'name'      => 'name',
          //  'note'		=> Mage::helper('catalog')->__('Name that will be shown')
        ));

        $fieldset->addField('description', 'textarea', array(
            'label'     => Mage::helper('marketplace')->__('Description'),
            'required'  => true,
            'name'      => 'description',
          //  'note'        => Mage::helper('catalog')->__('Name that will be shown')
        ));

        $fieldset->addField('price', 'text', array(
            'label'     => Mage::helper('marketplace')->__('Price'),
            'required'  => true,
            'name'      => 'price',
          //  'note'        => Mage::helper('catalog')->__('Name that will be shown')
        ));

         $fieldset->addField('qty', 'text', array(
            'label'     => Mage::helper('marketplace')->__('Qty'),
            'required'  => true,
            'name'      => 'qty',
          //  'note'        => Mage::helper('catalog')->__('Name that will be shown')
        ));

         $fieldset->addField('weight', 'text', array(
            'label'     => Mage::helper('marketplace')->__('Weight'),
            'required'  => true,
            'name'      => 'weight',
            'note'        => Mage::helper('marketplace')->__('Product Weight in kilos')
        ));

        

        if ( Mage::getSingleton('adminhtml/session')->getmarketplaceData() )
        {
            $form->setValues(Mage::getSingleton('adminhtml/session')->getmarketplaceData());
            Mage::getSingleton('adminhtml/session')->setmarketplaceData(null);
        } elseif ( Mage::registry('marketplace_product') ) {
            $form->setValues(Mage::registry('marketplace_product')->getData());
        }
        return parent::_prepareForm();
    }
}