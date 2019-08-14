<?php
class Kubitoo_Webrtc_Adminhtml_ConfigurationController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        // instantiate the grid container
        $configurationBlock = $this->getLayout()->createBlock('kubitoo_webrtc_adminhtml/configuration');
        
        // add the grid container as the only item on this page
        $this->loadLayout()
            ->_addContent($configurationBlock)
            ->renderLayout();
    }
    
    /**
     * This action handles both viewing and editing of existing configurations.
     */
    public function editAction()
    {
        /**
         * retrieving existing configuration data if an ID was specified,
         * if not we will have an empty Configuration entity ready to be populated.
         */
        $configuration = Mage::getModel('kubitoo_webrtc/configuration');
        if ($configurationId = $this->getRequest()->getParam('id', false)) {
            $configuration->load($configurationId);

            if ($configuration->getId() < 1) {
                $this->_getSession()->addError(
                    $this->__('This configuration no longer exists.')
                );
                return $this->_redirect(
                    'kubitoo_webrtc_admin/configuration/index'
                );
            }
        }
        
        // process $_POST data if the form was submitted
        if ($postData = $this->getRequest()->getPost('configurationData')) {
            try {
                $configuration->addData($postData);
                $configuration->save();
                
                $this->_getSession()->addSuccess(
                    $this->__('The configuration has been saved.')
                );
                
                // redirect to remove $_POST data from the request
                return $this->_redirect(
                    'kubitoo_webrtc_admin/configuration/edit', 
                    array('id' => $configuration->getId())
                );
            } catch (Exception $e) {
                Mage::logException($e);
                $this->_getSession()->addError($e->getMessage());
            }
            
            /**
             * if we get to here then something went wrong. Continue to
             * render the page as before, the difference being this time 
             * the submitted $_POST data is available.
             */
        }
        
        // make the current configuration object available to blocks
        Mage::register('current_configuration', $configuration);
        
        // instantiate the form container
        $configurationEditBlock = $this->getLayout()->createBlock(
            'kubitoo_webrtc_adminhtml/configuration_edit'
        );
        
        // add the form container as the only item on this page
        $this->loadLayout()
            ->_addContent($configurationEditBlock)
            ->renderLayout();
    }
    
    public function deleteAction()
    {
        $configuration = Mage::getModel('kubitoo_webrtc/configuration');

        if ($configurationId = $this->getRequest()->getParam('id', false)) {
            $configuration->load($configurationId);
        }
        
        if ($configuration->getId() < 1) {
            $this->_getSession()->addError(
                $this->__('This configuration no longer exists.')
            );
            return $this->_redirect(
                'kubitoo_webrtc_admin/configuration/index'
            );
        }
        
        try {
            $configuration->delete();
            
            $this->_getSession()->addSuccess(
                $this->__('The configuration has been deleted.')
            );
        } catch (Exception $e) {
            Mage::logException($e);
            $this->_getSession()->addError($e->getMessage());
        }

        return $this->_redirect(
            'kubitoo_webrtc_admin/configuration/index'
        );
    }
    
    protected function _isAllowed()
    {
        $actionName = $this->getRequest()->getActionName();
        switch ($actionName) {
            case 'index':
            case 'edit':
            case 'delete':
                // intentionally no break
            default:
                $adminSession = Mage::getSingleton('admin/session');
                $isAllowed = $adminSession
                    ->isAllowed('kubitoo_webrtc/configuration');
                break;
        }
        
        return $isAllowed;
    }
}