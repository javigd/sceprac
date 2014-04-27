<?php

class Application_Form_Register extends Zend_Form
{

    public function init()
    {
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
        
        /*   Another way to do a form:
        $this->setMethod('post');
        $this->setAttrib('action', 'save');
        $this->addElement('text', 'email', array(
            'label'     => 'Email',
            'required'  => true,
            'filter'    => array('StringTrim'),
            'validators'=> array('EmailAddress')
        ));
        $this->addElement('text', 'login');
        $this->addElement('password', 'password');
        $this->addElement('submit', 'SAVE');
        */
    }
    
/**<form action="page.php" method="post">
 *      <input type="text" name="name" />
 * </form> 
 */

}

