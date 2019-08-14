<?php
class Kubitoo_Webrtc_Block_Adminhtml_Configuration_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
    protected function _prepareForm()
    {
        $form = new Varien_Data_Form(array(
            'id' => 'edit_form',
            'action' => $this->getUrl(
                'kubitoo_webrtc_admin/configuration/edit', 
                array(
                    '_current' => true,
                    'continue' => 0,
                )
            ),
            'method' => 'post',
        ));

        $form->setUseContainer(true);
        $this->setForm($form);
        
        $fieldset = $form->addFieldset(
            'general',
            array(
                'legend' => $this->__('Configuration Details')
            )
        );
        
        $configurationSingleton = Mage::getSingleton('kubitoo_webrtc/configuration');

        $this->_addFieldsToFieldset($fieldset, array(
            'servicename' => array(
                'label' => $this->__('Name'),
                'input' => 'text',
                'required' => true,
            ),
            'visibility' => array(
                'label' => $this->__('Active'),
                'input' => 'select',
                'required' => true,
                'options' => $configurationSingleton->getAvailableVisibilies(),
            ),
        	'tokenid' => array(
                'label' => $this->__('Token ID'),
                'input' => 'text',
                'required' => true,
            ),
            'textbutton' => array(
                'label' => $this->__('Text Button'),
                'input' => 'text',
                'required' => true,
            ),
            'language' => array(
                'label' => $this->__('Language'),
                'input' => 'select',
                'required' => true,
                'options' => array('en_US'=>'English','it_IT'=>'Italiano'),
            ),
            'htmlbutton' => array(
                'label' => $this->__('HTML Button'),
                'input' => 'hidden',
                'required' => true,
            ),
            'imgbutton' => array(
                'label' => $this->__('Img Button'),
                'input' => 'hidden',
                'required' => true,
            ),
            'idbutton' => array(
                'label' => $this->__('Id Button'),
                'input' => 'hidden',
                'required' => true,
            ),
        ));

        $fieldset->addType('custom_field', 'Kubitoo_Webrtc_Block_Adminhtml_Configuration_Edit_Field_Custom');

        $fieldset->addField('custom_field', 'custom_field', array(
            'label'     => 'Button',
            'name'      => 'Button',
            'value' => 'value1'
        ));


        return $this;
    }
    
    protected function _addFieldsToFieldset(Varien_Data_Form_Element_Fieldset $fieldset, $fields)
    {
        $requestData = new Varien_Object($this->getRequest()->getPost('configurationData'));
        
        foreach ($fields as $name => $_data) {
            if ($requestValue = $requestData->getData($name)) {
                $_data['value'] = $requestValue;
            }
            
            // wrap all fields with configurationData group
            $_data['name'] = "configurationData[$name]";
            
            // generally label and title always the same
            $_data['title'] = $_data['label'];
            
            // if no new value exists, use existing configuration data
            if (!array_key_exists('value', $_data)) {
                $_data['value'] = $this->_getConfiguration()->getData($name);
            }
            
            // finally call vanilla functionality to add field
            $fieldset->addField($name, $_data['input'], $_data);
        }
        
        return $this;
    }
    
    /**
     * Retrieve the existing configuration for pre-populating the form fields.
     * For a new configuration entry this will return an empty Configuration object.
     */
    protected function _getConfiguration() 
    {
        if (!$this->hasData('configuration')) {
            // this will have been set in the controller
            $configuration = Mage::registry('current_configuration');
            
            // just in case the controller does not register the configuration
            if (!$configuration instanceof Kubitoo_Webrtc_Model_Configuration) {
                $configuration = Mage::getModel('kubitoo_webrtc/configuration');
            }
            
            $this->setData('configuration', $configuration);
        }
        
        return $this->getData('configuration');
    }
}