<?php

namespace App\Controller;

use App\Model\PostManager;
use App\Controller\Controller as Controller ;

class LoginController extends Controller{


     /**
     * @var PostManager
     */
    private $postManager;

    public function __construct()
    {
        $this->postManager = new PostManager();
    }

    public function show(){
        $content = "ceci est le contenu de mon post.";

        $arrayToTemplate = [
            'title' => 'Camille PICHAUD', 
            'Accueil' => [],
        ];  
        $this->render($arrayToTemplate, __CLASS__); 
    }
}