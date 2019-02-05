// Gere les connexions a la bdd + operations CRUD

<?php
    abstract class Database
    {
        private $db;

        protected function exeRequest($sql, $args = null)
        {
            if ($args == null)
            {
                $result = $this->connectDB()->query($sql);
            }
            else
            {
                $result = $this->connectDB()->prepare($sql);
                $result->execute($args);
            }

            return $result;
        }

        private function connectDB()
        {
            if($this->db == null)
            {
                this->db = new PDO('mysql:host=localhost;dbname=blog_jf;charset=utf8', 'root', '',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            }
            return $this->db;
        }
    }