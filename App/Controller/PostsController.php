<?php

namespace App\Controller;

use App\Model\PostManager;
use App\Controller\Controller as Controller ;
use App\Model\UserManager;

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

    public function deletePost(){

        $postManager = new PostManager();  
        $post = $postManager->delete($_GET['id']);
        header('Location: /blog-oc-p5/OC-blogp5/public/index.php?page=posts'); 
    }

}