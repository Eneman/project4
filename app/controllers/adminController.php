<?php
    session_start();
    require_once 'app\models\Admin.php';
    require_once 'app\models\Post.php';
    require_once 'app\models\About.php';
    require_once 'app\models\Contact.php';

    class AdminController
    {
        public function checkSession()
        {
            if (!isset($_SESSION['connected']))
            {
                header("Location: /FORMATION/PROJET4/admin/login");
            }
        }

        public function indexAction()
        {
            $this->checkSession();
            require_once 'app\views\admin\index.php';
        }

        public function postlistAction()
        {
            $this->checkSession();
            $adminModel = new Admin();
            $postList = $adminModel->listPost();
            require_once 'app\views\admin\postlist.php';
        }
        
        public function commentlistAction()
        {
            $this->checkSession();
            $adminModel = new Admin();
            $commentList = $adminModel->listComments();
            require_once 'app\views\admin\commentlist.php';
        }

        public function createAction()
        {
            $this->checkSession();
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
            $this->checkSession();
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

        public function infoAction()
        {
            $this->checkSession();
            $aboutModel = new About();
            $contactModel = new Contact();
            $adminModel = new Admin();
            
            $contact = $contactModel->getContact();
            $about = $aboutModel->getAbout();

            if(!array_key_exists ( 'adress' , $_POST ))
            {
                require_once 'app\views\admin\info.php';
            }
            else
            {
                $adminModel->editInfos($_POST['adress'], $_POST['mail'], $_POST['about']);
                header("Location: /FORMATION/PROJET4/admin/index");
            }
            
        }

        public function deleteAction($postID = null)
        {
            $this->checkSession();
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
            $this->checkSession();
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
            if (isset($_POST['pwd']) && isset($_SESSION['connected']) == false)
            {
                $adminModel = new Admin();
                $realPwd = $adminModel->checkPassword();
                $pwd = $_POST['pwd'];
                if (password_verify($pwd, $realPwd[0]))
                {
                    session_start();
                    $_SESSION['connected'] = 1;
                    header("Location: /FORMATION/PROJET4/admin/index");
                }
                else
                {
                    echo "MAUVAIS MOT DE PASSE";
                }
            }
            elseif(isset($_SESSION['connected']))
            {
                session_destroy();
                /* echo "Vous etes deja connecté"; */
                header("Location: /FORMATION/PROJET4/post/list");
            }
            else
            {
                require_once 'app\views\admin\login.php';
            }
        }
    }