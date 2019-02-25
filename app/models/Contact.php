<?php
    require_once 'app/models/Database.php';

    class Contact extends Database
    {
        public function getContact()
        {
            $req = 'SELECT * FROM author';
            $res = parent::exeRequest($req);
            return $res->fetch();
        }
    }