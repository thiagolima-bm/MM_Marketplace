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
class MM_Marketplace_Block_Adminhtml_Catalog_Form extends Mage_Adminhtml_Block_Widget_Form
{
    protected function _prepareLayout()
    {
        Varien_Data_Form::setElementRenderer(
            $this->getLayout()->createBlock('adminhtml/widget_form_renderer_element')
        );
        Varien_Data_Form::setFieldsetRenderer(
            $this->getLayout()->createBlock('adminhtml/widget_form_renderer_fieldset')
        );
        Varien_Data_Form::setFieldsetElementRenderer(
            $this->getLayout()->createBlock('marketplace/adminhtml_catalog_form_renderer_fieldset_element')
        );
    }
}
