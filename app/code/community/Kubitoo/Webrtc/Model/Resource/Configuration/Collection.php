<?php
class Kubitoo_Webrtc_Model_Resource_Configuration_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    protected function _construct()
    {
        parent::_construct();

        $this->_init(
            'kubitoo_webrtc/configuration', 
            'kubitoo_webrtc/configuration'
        );
    }
}