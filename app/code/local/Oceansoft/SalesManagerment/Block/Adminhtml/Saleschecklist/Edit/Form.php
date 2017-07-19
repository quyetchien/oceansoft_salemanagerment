<?php
class Oceansoft_SalesManagerment_Block_Adminhtml_Saleschecklist_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
    protected function _prepareForm()
    {
        $form = new Varien_Data_Form(
            array(
                'id' => 'edit_form',
                'action' => $this->getUrl('*/*/save', array('checklist_id' => $this->getRequest()->getParam('checklist_id'))
                ),
                'method' => 'post',
            )
        );
        $form->setUseContainer(true);
        $this->setForm($form);
        return parent::_prepareForm();
    }
}