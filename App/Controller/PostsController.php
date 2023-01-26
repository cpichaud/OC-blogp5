<?php

namespace App\Controller;

use DateTime;
use App\Model\PostManager;
use App\Model\UserManager;
use App\Model\CommentManager;
use App\Controller\Controller as Controller ;

class PostsController extends Controller{


     /**
     * @var PostManager
     */
    private $postManager;

    public function __construct()
    {
        $this->postManager = new PostManager();
    }


    public function show(){
 
        $posts = $this->postManager->findAll();

        $arrayToTemplate = [
            'title' => 'Camille PICHAUD', 
            'Accueil' => [],
            'posts' => $posts,
        ];  
        $this->render($arrayToTemplate, __CLASS__); 
    }

    public function showById(){
        $commentManager = new CommentManager();
        $comment = $commentManager->findById($_GET['id']);
        $postManager = new PostManager();  
        $post = $postManager->findById($_GET['id']);
        $arrayToTemplate = [
            'title' => 'Camille PICHAUD', 
            'Accueil' => [],
            'post' => $post,
            'comment' => $comment
        ];
        
        $this->render($arrayToTemplate, "post");  
    }

    public function createPost(){     
        try {
            if (isset($_POST['createPost'])) {      
                if (
                    !empty($_POST['title']) 
                    && !empty($_POST['content'])
                    && !empty($_POST['chapo'])) 
                {
                    $postManager = new PostManager(); 

                    session_start();
                    $title = htmlspecialchars($_POST['title']);
                    $content = htmlspecialchars($_POST['content']);
                    $chapo = htmlspecialchars($_POST['chapo']);
                    $createDate = new DateTime();
                    $updateCreate =new DateTime();        
                    $user_id = intval($_SESSION['id']);
                  
                    $post = $postManager->createPost(
                        $title, 
                        $content, 
                        $createDate->format('Y-m-d h:m:i'), 
                        $updateCreate->format('Y-m-d h:m:i'), 
                        $user_id,
                        $chapo
                    ); 
                    
                    header('Location: /blog-oc-p5/OC-blogp5/public/index.php?page=posts');                      
                }else {
                    $error_message = 'Veuillez remplir tous les champs';
                    $class = "error";
                    $arrayToTemplate = [
                        'error_message' => $error_message,
                        'class' => $class
                    ];
                    $this->render($arrayToTemplate, 'createPost'); 
                }
            }      
        } catch (\Exception $e) {
            echo "Une erreur est survenue";
        }
  
        $arrayToTemplate = [
            'title' => 'Camille PICHAUD', 
            'Accueil' => [],
        ];
        $this->render($arrayToTemplate, "createPost");
    }

    public function editPost(){     
        try {
            $postManager = new PostManager();  
            $post = $postManager->findById($_GET['id']);
            if (isset($_POST['createPost'])) {      
                if (
                    !empty($_POST['title']) 
                    && !empty($_POST['content'])) 
                {
                    $postManager = new PostManager(); 

                    session_start();
                    $title = htmlspecialchars($_POST['title']);
                    $content = htmlspecialchars($_POST['content']);
                    $updateCreate =new DateTime();        
                    $user_id = intval($_SESSION['id']);
                    $id = intval($post['id']);
                    $chapo = htmlspecialchars($_POST['chapo']);
                  
                    $post = $postManager->editPost(
                        $id,
                        $title, 
                        $content,  
                        $updateCreate->format('Y-m-d H:i:s'), 
                        $user_id,
                        $chapo
                    ); 
                    
                    header('Location: /blog-oc-p5/OC-blogp5/public/index.php?page=posts');                      
                }else {
                    $error_message = 'Veuillez remplir tous les champs';
                    $class = "error";
                    $arrayToTemplate = [
                        'error_message' => $error_message,
                        'class' => $class
                    ];
                    $this->render($arrayToTemplate, 'editPost'); 
                }
            }      
        } catch (\Exception $e) {
            echo "Une erreur est survenue";
        }
  
        $arrayToTemplate = [
            'title' => 'Camille PICHAUD', 
            'Accueil' => [],
        ];
        $this->render($arrayToTemplate, "editPost");
    }

    public function deletePost(){
        $postManager = new PostManager();  
        $post = $postManager->delete($_GET['id']);
        header('Location: /blog-oc-p5/OC-blogp5/public/index.php?page=posts'); 
    }

    public function deleteComment(){
        $commentManager = new CommentManager();
        $comment = $commentManager->delete($_GET['id']);
        header('Location: /blog-oc-p5/OC-blogp5/public/index.php?page=posts'); 
    }

    public function validateComment(){
        try {
            $commentManager = new CommentManager();   
            $id = intval($_GET['id']);
            $validate = intval(1);
            $commentManager->validateComment(
                $id);   
            header('Location: /blog-oc-p5/OC-blogp5/public/index.php?page=posts'); 
                
        } catch (\Exception $e) {
            echo "Une erreur est survenue";
        }
    }
}