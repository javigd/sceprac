<?php

class TestController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        echo 1;
    }
    
    public function chatAction()
    {
        $this->view->assign('msg', 'This is a message that holds data');
        //echo 'Mum! Look! I\'m in the chat method!';
    }

}

