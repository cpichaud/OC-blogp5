<?php

namespace App\Controller;

use App\Controller\Controller as Controller ;

class RegisterController extends Controller{

    public function show(){
        
        $content = "Inscription";

        $arrayToTemplate = ['title' => 'Inscription', 'content' => $content ,'posts' =>[]];

        $this->render($arrayToTemplate, 'register');
        
    }

}