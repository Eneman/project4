<?php
    class PostController
    {
        public function viewAction($postID)
        {
            require_once 'app\models\Post.php';
            $postModel = new Post();
            $post = $postModel->getPost($postID);
        }

        public function listAction()
        {
            require_once 'app\models\Post.php';
            $postModel = new Post();
            $postList = $postModel->listPost();
        }
    }