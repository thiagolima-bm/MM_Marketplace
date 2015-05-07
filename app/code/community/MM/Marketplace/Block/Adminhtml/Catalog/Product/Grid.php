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
class MM_Marketplace_Block_Adminhtml_Catalog_Product_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('productGrid');
        // This is the primary key of the database
        $this->setDefaultSort('name');
        $this->setDefaultDir('ASC');
        $this->setSaveParametersInSession(true);
        $this->setUseAjax(true);
    }
 
    protected function _prepareCollection()
    {
        
    
        $seller = Mage::getSingleton('admin/session')->getUser();
        $collection = Mage::getModel('catalog/product')->getCollection()->addAttributeToSelect('*');
        $collection->addAttributeToSelect('*');
        $collection->addFieldToFilter('user_id',$seller->getId());
        $this->setCollection($collection);

        return parent::_prepareCollection();
        
    }
 
    protected function _prepareColumns()
    {
         $this->addColumn('name', array(
            'header'    => Mage::helper('adminhtml')->__('Name'),
            'align'     =>'left',
            'index'     => 'name',
            'actions'   => array(
                array(
                    'caption'   => __('Edit'),
                    'url'       => array('base'=> '*/*/edit'),
                    'field'     => 'id'
                )
            ),
        ));

         $this->addColumn('price', array(
            'header'    => Mage::helper('adminhtml')->__('Price'),
            'align'     =>'left',
            'width'     => '200px',
            'index'     => 'price',
        ));
   
        return parent::_prepareColumns();
    }
    
 
    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/editProduct', array('id' => $row->getId()));
    }
 
    public function getGridUrl()
    {
      return $this->getUrl('*/*/grid', array('_current'=>true));
    }
 
 
 
}