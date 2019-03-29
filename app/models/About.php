<?php
    require_once 'app/models/Database.php';

    class About extends Database
    {
        public function getAbout()
        {
            $req = 'SELECT about FROM author';
            $res = parent::exeRequest($req);
            return $res->fetch();
        }
    }