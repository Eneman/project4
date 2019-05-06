<?php
    require_once 'app/models/Database.php'; 

    class Admin extends Database
    {
        public function listPost()
        {
            $req = "SELECT *, DATE_FORMAT(post_date, '%d/%m/%Y %Hh%i') AS post_date, LEFT(post_content, 400) AS post_content FROM post ORDER BY post_id DESC";
            $res = parent::exeRequest($req);
            return $res->fetchAll();
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

        public function deletePost($p_id)
        {
            $req = 'DELETE FROM post  WHERE post_id = :p_id';
            $res = parent::exeRequest($req, ['p_id' => $p_id]);
            $req = 'DELETE FROM comment  WHERE post_id = :p_id';
            $res = parent::exeRequest($req, ['p_id' => $p_id]);
        }
        
        public function deleteComment($c_id)
        {
            $req = 'DELETE FROM comment  WHERE com_id = :c_id';
            $res = parent::exeRequest($req, ['c_id' => $c_id]);
            $req = 'DELETE FROM report  WHERE com_id = :c_id';
            $res = parent::exeRequest($req, ['c_id' => $c_id]);
        }

        public function listComments()
        {
            $req = 'SELECT * FROM comment ORDER BY com_report DESC';
            $res = parent::exeRequest($req);
            return $res->fetchAll();
        }
        
        public function getComment($c_id)
        {
            $req = 'SELECT * FROM comment WHERE com_id = :c_id';
            $res = parent::exeRequest($req, ['c_id' => $c_id]);
            return $res->fetchAll();
        }

        public function checkPassword()
        {
            $req = 'SELECT author_pwd FROM author';
            $res = parent::exeRequest($req);
            return $res->fetch();
        }

        public function editInfos($adress, $mail, $about)
        {
            $req = 'UPDATE author SET adress = :a_adress, mail = :a_mail, about = :a_about';
            $res = parent::exeRequest($req, ['a_adress' => $adress, 'a_mail' => $mail, 'a_about' => $about]);
        }

        public function editPassword($pwd)
        {
            $req = 'UPDATE author SET author_pwd = :a_pwd';
            $res = parent::exeRequest($req, ['a_pwd' => password_hash($pwd, PASSWORD_DEFAULT)]);
        }
    }

