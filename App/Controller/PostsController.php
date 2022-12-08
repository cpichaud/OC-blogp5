<?php

namespace App\Controller;

use App\Model\PostManager;
use App\Controller\Controller as Controller ;
use App\Model\UserManager;
use DateTime;

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
        $userManager = new UserManager();
        $user = $userManager->findById(15);
        $postManager = new PostManager();  
        $post = $postManager->findById($_GET['id']);
        $arrayToTemplate = [
            'title' => 'Camille PICHAUD', 
            'Accueil' => [],
            'post' => $post,
            'user' => $user
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
                    $comment_id = NULL;
                  
                    $post = $postManager->createPost(
                        $title, 
                        $content, 
                        $createDate->format('Y-m-d h:m:i'), 
                        $updateCreate->format('Y-m-d h:m:i'), 
                        $user_id,
                        $comment_id
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

    public function deletePost(){
        $postManager = new PostManager();  
        $post = $postManager->delete($_GET['id']);
        header('Location: /blog-oc-p5/OC-blogp5/public/index.php?page=posts'); 
    }
}