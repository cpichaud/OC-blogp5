<?php

namespace App\Controller;

use App\Model\Manager;
use App\Controller\Controller as Controller ;

class RegisterController extends Controller{

    /**
     * @var Manager
     */
    private $manager;

    public function __construct()
    {
        $this->manager = new Manager();
    }


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