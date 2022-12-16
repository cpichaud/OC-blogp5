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
        $content = "ceci est le contenu de mon post.";

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
        var_dump($comment);
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
                    && !empty($_POST['content'])) 
                {
                    $postManager = new PostManager(); 

                    session_start();
                    $title = htmlspecialchars($_POST['title']);
                    $content = htmlspecialchars($_POST['content']);
                    $createDate = new DateTime();
                    $updateCreate =new DateTime();        
                    $user_id = intval($_SESSION['id']);
                  
                    $post = $postManager->createPost(
                        $title, 
                        $content, 
                        $createDate->format('Y-m-d h:m:i'), 
                        $updateCreate->format('Y-m-d h:m:i'), 
                        $user_id,
                    ); 
                    
                    header('Location: /blog-oc-p5/OC-blogp5/public/index.php?page=posts');                      
                }else {
                    echo "Veuillez remplir tous les champs";
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
                  
                    $post = $postManager->editPost(
                        $id,
                        $title, 
                        $content,  
                        $updateCreate->format('Y-m-d H:i:s'), 
                        $user_id,
                    ); 
                    
                    header('Location: /blog-oc-p5/OC-blogp5/public/index.php?page=posts');                      
                }else {
                    echo "Veuillez remplir tous les champs";
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
}