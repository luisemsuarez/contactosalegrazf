<?php

class ContactosAlegraController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $contactosalegra = new Application_Model_ContactosAlegraMapper();
        $this->view->entries = $contactosalegra->fetchAll();
    }


}

