<?php

namespace App\Controller;

use App\Controller\Controller as Controller ;

class BlablaController extends Controller{

    public function show(){
        
        $content = "ceci est le contenu de mon blabla.";

        $arrayToTemplate = ['title' => 'Mon blabla', 'content' => $content ,'posts' =>[]];

        $this->render($arrayToTemplate, 'blabla');
        
    }

}