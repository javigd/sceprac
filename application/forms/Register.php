<?php

class Application_Form_Register extends Zend_Form
{

    public function init()
    {
        $this->setMethod('post');
        
        $name = new Zend_Form_Element_Text('name');
        $name ->setLabel('name')
                ->addFilter('StripTags')
                ->setRequired(true);
        
        $password = new Zend_Form_Element_Password('password');
        $password->setLabel('password')
                ->addFilter('StripTags')
                ->setRequired(true);
        
        $submit = new Zend_Form_Element_Submit('SubmittedRF');
        $submit->setLabel('Submit');
        
        $this->addElements(array($name, $password, $submit));
        
    }
}

