<?php
    class ContactController
    {
        public function viewAction()
        {
            require_once 'app\models\Contact.php';
            $contactModel = new Contact();
            $contact = $contactModel->getContact();
        }
    }