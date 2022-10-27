<?php

namespace App\Controller;

use App\Controller\Controller as Controller ;

class PostsController extends Controller{

    public function show(){
        
        $content = "ceci est le contenu de mon post.";

        $arrayToTemplate = ['title' => 'Mon post', 'content' => $content ,'posts' =>[]];

        $this->render($arrayToTemplate, __CLASS__);
        
    }


}