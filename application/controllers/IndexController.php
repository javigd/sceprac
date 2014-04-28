<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $register = new Application_Model_Register();
        $register->createUser(array(
            'username'      => 'Maximiliano',
            'password'  => 'maxi'
        ));
        
        //$form = new Application_Form_Register();
        //$this->view->form = $form;
    }


}

