<?php
class Kubitoo_Webrtc_Block_Adminhtml_Configuration_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    protected function _prepareCollection()
    {
        $collection = Mage::getResourceModel(
            'kubitoo_webrtc/configuration_collection'
        );
        $this->setCollection($collection);
        
        return parent::_prepareCollection();
    }
    
    public function getRowUrl($row)
    {
        return $this->getUrl(
            'kubitoo_webrtc_admin/configuration/edit', 
            array(
                'id' => $row->getId()
            )
        );
    }

    protected function _prepareColumns()
    {
        $this->addColumn('entity_id', array(
            'header' => $this->_getHelper()->__('ID'),
            'type' => 'number',
            'index' => 'entity_id',
        ));
        
        $this->addColumn('servicename', array(
        		'header' => $this->_getHelper()->__('Name'),
        		'type' => 'text',
        		'index' => 'servicename',
        ));
           
        $this->addColumn('tokenid', array(
            'header' => $this->_getHelper()->__('Token ID'),
            'type' => 'text',
            'index' => 'tokenid',
        ));  
        
        $configurationSingleton = Mage::getSingleton(
            'kubitoo_webrtc/configuration'
        );
        $this->addColumn('visibility', array(
            'header' => $this->_getHelper()->__('Visibility'),
            'type' => 'options',
            'index' => 'visibility',
            'options' => $configurationSingleton->getAvailableVisibilies()
        ));
        
        /**
         * Finally we add an action column with an edit link.
         */
        $this->addColumn('action', array(
            'header' => $this->_getHelper()->__('Action'),
            'width' => '50px',
            'type' => 'action',
            'actions' => array(
                array(
                    'caption' => $this->_getHelper()->__('Edit'),
                    'url' => array(
                        'base' => 'kubitoo_webrtc_admin' . '/configuration/edit',
                    ),
                    'field' => 'id'
                ),
            ),
            'filter' => false,
            'sortable' => false,
            'index' => 'entity_id',
        ));
        
        return parent::_prepareColumns();
    }
    
    protected function _getHelper()
    {
        return Mage::helper('kubitoo_webrtc');
    }
}