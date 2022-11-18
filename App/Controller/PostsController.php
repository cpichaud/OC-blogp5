<?php

namespace App\Controller;

use App\Model\PostManager;
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
 
     
        $postTest = $this->postManager->findAll();

        foreach($postTest as $post){
            var_dump($post);
        }
        $content = "ceci est le contenu de mon post.";

        $arrayToTemplate = [
            'title' => 'Camille PICHAUD', 
            'Accueil' => [],
            'post' => $post,
        ];
        
        $this->render($arrayToTemplate, __CLASS__);
        
    }


}