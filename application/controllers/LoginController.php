<?php

class LoginController extends Zend_Controller_Action {

    public function init() {
        /* Initialize action controller here */
    }

    public function indexAction() {
        
        $request = $this->getRequest();
        $form = new Application_Form_Register();
        if ($this->getRequest()->isPost()) {
            if ($form->isValid($request->getPost())) {
                $register = new Application_Model_Register();
                $register->createUser(array(
                    'username'      => $form->getValue('name'),
                    'password'  => $form->getValue('password')
                ));
                return $this->_helper->redirector('index');
            }
        }
        
        $this->view->form = $form;
    }

}
