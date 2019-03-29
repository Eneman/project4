<?php
    class AboutController
    {
        public function viewAction()
        {
            require_once 'app\models\About.php';
            $aboutModel = new About();
            $about = $aboutModel->getAbout();
            require_once 'app\views\about\index.php';
        }
    }