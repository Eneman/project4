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
            $comments = $postModel->getComments($postID);
            require_once 'app\views\post\view.php';
        }

        public function listAction()
        {
            $postModel = new Post();
            $postList = $postModel->listPost();
            require_once 'app\views\post\index.php';
        }

        public function commentAction($postID = null)
        {
            if($postID == null)
            {
                /* 404 */
            }
            else
            {
                if(!array_key_exists ( 'com_content' , $_POST ))
                {
                    header("Location: list");
                }
                else
                {
                    $postModel = new Post();
                    $newComment = $postModel->createComment($_POST['com_author'], $_POST['com_content'], $postID);
                    header("Location: /FORMATION/PROJET4/post/view/$postID");
                }
            }
        }

        public function reportCommentAction($comID)
        {                
            $postModel = new Post();
            $ip=$_SERVER['REMOTE_ADDR'];
            $temp = $postModel->reportComment($comID);
            echo $temp['com_report'];
        }
    }