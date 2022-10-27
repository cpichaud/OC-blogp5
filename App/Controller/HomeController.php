<?php

namespace App\Controller;

use App\Controller\Controller as Controller;

class HomeController extends Controller{

    public function show(){
        
        $content = "ceci est le contenu de ma page. ";

        $arrayToTemplate = ['title' => 'Camille PICHAUD', 'content' => $content ,'Accueil' => []];

        $this->render($arrayToTemplate, 'home');

       
        
    }

}