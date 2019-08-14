<?php
class Kubitoo_Webrtc_Model_Resource_Configuration extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('kubitoo_webrtc/configuration', 'entity_id');
    }
}