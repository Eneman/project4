<?php
    require_once 'app/models/Database.php'; 

    class Post extends Database
    {
        public function listPost()
        {
            $req = "SELECT *, DATE_FORMAT(post_date, '%d/%m/%Y %Hh%i') AS post_date, LEFT(post_content, 400) AS post_content FROM post ORDER BY post_id DESC";
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


        public function getComments($postID)
        {
            $req = 'SELECT * FROM comment WHERE post_id = ? ORDER BY com_id DESC';
            $res = parent::exeRequest($req, [$postID]);
            return $res->fetchAll();
        }

        public function createComment($c_author, $c_content, $p_id)
        {
            $req = 'INSERT into comment(post_id, com_author, com_content, com_date) VALUES(:p_id, :c_author, :c_content, NOW())';
            $res = parent::exeRequest($req, ['p_id' => $p_id, 'c_author' => $c_author, 'c_content' => $c_content]);
        }

        public function reportComment($comID)
        {
            $req = 'UPDATE  comment SET com_report = com_report+1 WHERE com_id = ?';
            $res = parent::exeRequest($req, [$comID]);
            $req = 'SELECT com_report FROM comment WHERE com_id = ?';
            $res = parent::exeRequest($req, [$comID]);
            return $res->fetch();
        }
    }

