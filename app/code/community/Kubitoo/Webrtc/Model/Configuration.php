<?php
class Kubitoo_Webrtc_Model_Configuration extends Mage_Core_Model_Abstract
{
    const VISIBILITY_HIDDEN = '0';
    const VISIBILITY_DIRECTORY = '1';
    
    protected function _construct()
    {
    	$this->_init('kubitoo_webrtc/configuration');
    }
    
    /**
     * This method is used in grid and form for populating dropdown.
     */
    public function getAvailableVisibilies()
    {
        return array(
            self::VISIBILITY_HIDDEN 
                => Mage::helper('kubitoo_webrtc')
                       ->__('Not Active'),
            self::VISIBILITY_DIRECTORY
                => Mage::helper('kubitoo_webrtc')
                       ->__('Active on website'),
        );
    }
    
    public function getAvailableButtons()
    {
    	$button = Mage::getModel("kubitoo_webrtc/configuration")
    		->getCollection()
    		->addFieldToFilter('visibility', true)
    		->setOrder('entity_id', 'DESC')
    		->setPageSize(1)
    		->setCurPage(1);

    	return $button;
    }
    
    protected function _prepareUrlKey()
    {       
        return $this;
    }
}