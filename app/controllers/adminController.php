<?php
    require_once 'app\models\Admin.php';
    require_once 'app\models\Post.php';

    class AdminController
    {
        public function indexAction()
        {
            require_once 'app\views\admin\index.php';
        }

        public function postlistAction()
        {
            $adminModel = new Admin();
            $postList = $adminModel->listPost();
            require_once 'app\views\admin\postlist.php';
        }
        
        public function commentlistAction()
        {
            $adminModel = new Admin();
            $commentList = $adminModel->listComments();
            require_once 'app\views\admin\commentlist.php';
        }

        public function createAction()
        {
            if(!array_key_exists ( 'post_title' , $_POST ))
            {
                require_once 'app\views\admin\create.php';
            }
            else
            {
                $adminModel = new Admin();
                $newPost = $adminModel->createPost($_POST['post_title'], $_POST['post_content']);
                header("Location: /FORMATION/PROJET4/post/view/last");
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
                $adminModel = new Admin();
                $post = $postModel->getPost($postID);
                if($post){
                    if(!array_key_exists ( 'post_title' , $_POST ))
                    {
                        require_once 'app\views\admin\edit.php';
                    }
                    else
                    {
                        $adminModel->editPost($_POST['post_title'], $_POST['post_content'], $postID);
                        header("Location: /FORMATION/PROJET4/post/view/$postID");
                    }
                }
            }
        }

        public function deleteAction($postID = null)
        {
            if($postID == null)
            {
                /* 404 */
            }
            else
            {
                $postModel = new Post();
                $adminModel = new Admin();
                $post = $postModel->getPost($postID);
                if($post){
                    
                        $adminModel->deletePost($postID);
                        header("Location: /FORMATION/PROJET4/admin/postlist");
                    
                }
            }
        }
        public function deletecommentAction($comID = null)
        {
            if($comID == null)
            {
                /* 404 */
            }
            else
            {
                $adminModel = new Admin();
                $comment = $adminModel->getComment($comID);
                if($comment){
                    
                    $adminModel->deleteComment($comID);
                    header("Location: /FORMATION/PROJET4/admin/commentlist");
                }
            }
        }

        public function loginAction()
        {
            if (isset($_POST['pwd']))
            {
                $adminModel = new Admin();
                $realPwd = $adminModel->checkPassword();
                $pwd = $_POST['pwd'];
                if (password_verify($pwd, $realPwd[0]))
                {
                    echo "MOT DE PASSE OK";
                    session_start();
                    $_SESSION['test'] = 'pwd';
                }
                else
                {
                    echo "MAUVAIS MOT DE PASSE";
                }
            }
            else
            {
                require_once 'app\views\admin\login.php';
            }
        }
    }