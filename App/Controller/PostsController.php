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

        // foreach($postTest as $post){
        //     $title = $post->getTitle();
        //     var_dump($title);
        // }
        $content = "ceci est le contenu de mon post.";

        $arrayToTemplate = [
            'title' => 'Camille PICHAUD', 
            'Accueil' => [],
            'postTest' => $postTest,
        ];
        
        $this->render($arrayToTemplate, __CLASS__);
        
    }


}