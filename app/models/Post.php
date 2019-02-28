<?php
    require_once 'app/models/Database.php'; 

    class Post extends Database
    {
        public function listPost()
        {
            $req = "SELECT *, DATE_FORMAT(post_date, '%d/%m/%Y %Hh%i') AS post_date, LEFT(post_content, 400) AS post_content FROM post";
            $res = parent::exeRequest($req);
            return $res->fetchAll();
        }

        public function getPost($postID)
        {
            if($postID == 'last')
            {
                $req = 'SELECT * FROM post ORDER BY post_id DESC LIMIT 1';
                $res = parent::exeRequest($req);
                return $res->fetch();
            }
            else
            {
                $req = 'SELECT * FROM post WHERE post_id = ?';
                $res = parent::exeRequest($req, [$postID]);
                return $res->fetch();
            }
        }

        public function createPost($p_title, $p_content)
        {
            $req = 'INSERT into post(post_title, post_content, post_date) VALUES(:p_title, :p_content, NOW())';
            $res = parent::exeRequest($req, ['p_title' => $p_title, 'p_content' => $p_content]);
        }

        public function editPost($p_title, $p_content, $p_id)
        {
            $req = 'UPDATE post SET post_title = :p_title, post_content = :p_content WHERE post_id = :p_id';
            $res = parent::exeRequest($req, ['p_title' => $p_title, 'p_content' => $p_content, 'p_id' => $p_id]);
        }

    }

