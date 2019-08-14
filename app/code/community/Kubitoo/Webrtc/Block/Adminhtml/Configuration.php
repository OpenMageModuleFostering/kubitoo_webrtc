<?php
class Kubitoo_Webrtc_Block_Adminhtml_Configuration extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    protected function _construct()
    {
        parent::_construct();
        
        $this->_blockGroup = 'kubitoo_webrtc_adminhtml';
        
        $this->_controller = 'configuration';
        
        /**
         * The title of the page in the admin panel.
         */
        $this->_headerText = Mage::helper('kubitoo_webrtc')->__('Configuration Kubitoo');
    }
    
    public function getCreateUrl()
    {
        return $this->getUrl(
            'kubitoo_webrtc_admin/configuration/edit'
        );
    }
}