<?php
    require_once 'app\models\Post.php';

    class PostController
    {
        public function viewAction($postID = null)
        {
            if ($postID == null)
            {
                $postID = 1;
            }
            
            $postModel = new Post();
            $post = $postModel->getPost($postID);
            require_once 'app\views\post\view.php';
        }

        public function listAction()
        {
            $postModel = new Post();
            $postList = $postModel->listPost();
            require_once 'app\views\post\index.php';
        }
        
        public function createAction()
        {
            if(!array_key_exists ( 'post_title' , $_POST ))
            {
                require_once 'app\views\post\create.php';
            }
            else
            {
                $postModel = new Post();
                $newPost = $postModel->createPost($_POST['post_title'], $_POST['post_content']);
                header("Location: view/last");
            }
        }

        public function editAction($postID = null)
        {
            if($postID == null)
            {
                /* 404 */
            }
            else
            {
                $postModel = new Post();
                $post = $postModel->getPost($postID);
                if($post){
                    if(!array_key_exists ( 'post_title' , $_POST ))
                    {
                        require_once 'app\views\post\edit.php';
                    }
                    else
                    {
                        $targetID = $post['post_id'];
                        $postModel->editPost($_POST['post_title'], $_POST['post_content'], $targetID);
                        header("Location: /FORMATION/PROJET4/post/view/$targetID");
                    }
                }
            }
        }
    }