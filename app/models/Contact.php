<?php
    require_once 'app/models/Database.php';

    class Contact extends Database
    {
        public function getContact()
        {
            $req = 'SELECT * FROM author';
            $res = parent::exeRequest($req);
            $test = $res->fetch(\PDO::FETCH_OBJ);
            var_dump($test);
        }
    }