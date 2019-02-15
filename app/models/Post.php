<?php
    require_once 'app/models/Database.php';

    class Post extends Database
    {
        public function listPost()
        {
            $req = 'SELECT * FROM post';
            $res = parent::exeRequest($req);
            return $res->fetchAll();
            var_dump($test);
        }

        public function getPost($postID)
        {
            $req = 'SELECT * FROM post WHERE post_id = ?';
            $res = parent::exeRequest($req, [$postID]);
            $test = $res->fetch();
            var_dump($test);
        }
    }

