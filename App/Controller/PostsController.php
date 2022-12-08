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
        $postManager = new PostManager();  
        $post = $postManager->findById($_GET['id']);
        $arrayToTemplate = [
            'title' => 'Camille PICHAUD', 
            'Accueil' => [],
            'post' => $post
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
                    $title = htmlspecialchars($_POST['title']);
                    $content = htmlspecialchars($_POST['content']);
                    $dateCreate = new DateTime();
                    $updateCreate = new DateTime();
                    $user_id = $_SESSION['id'];
                    var_dump('toto', $user_id);
                    die();
                    // $pass_hash = password_hash($_POST['password'], PASSWORD_DEFAULT, ['cost' => 12]);
            
                    // // var_dump(htmlspecialchars($_POST['password']));
                    // // die();
                   
                    // $password = $pass_hash;
                    
                    // $nom = htmlspecialchars($_POST['nom']);
                    // $prenom = htmlspecialchars($_POST['prenom']);
                    // $role =0;
            
                    // $userManager = new UserManager();
                    // $user = $userManager->createUser(
                    //     $prenom, 
                    //     $nom, 
                    //     $email, 
                    //     $telephone, 
                    //     $password,
                    //     $role); 
            
                    // header('Location: /blog-oc-p5/OC-blogp5/public/index.php?page=login');   
                    
                }else {
                    echo "Veuillez remplir tous les champs";
                }
            }      
        } catch (\Exception $e) {
            echo "Error";
        }
  
        $arrayToTemplate = [
            'title' => 'Camille PICHAUD', 
            'Accueil' => [],
        ];
        $this->render($arrayToTemplate, "createPost");  
    }
}