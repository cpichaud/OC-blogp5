<?php

namespace App\Controller;

use App\Model\Manager;
use App\Controller\Controller as Controller ;

class RegisterController extends Controller{


    /**
     * @return Response
     */
    public function show(){


        //if log redirect -> home


        $content = "Inscription";

        $arrayToTemplate = ['title' => 'Inscription', 'content' => $content ,'posts' =>[]];

        $this->render($arrayToTemplate, 'register');
    }


}