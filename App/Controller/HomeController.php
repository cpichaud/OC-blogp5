<?php

namespace App\Controller;

use App\Controller\Controller as Controller;
use App\Model\Manager;


class HomeController extends Controller{

    /**
     * @var Manager
     */
    private $manager;

    public function __construct()
    {
        $this->manager = new Manager();
    }


    public function show(){
        $content = "ceci est le contenu de ma page. ";
    

     
        $userTest = $this->manager->findAll();

        // foreach($userTest as $user){
            // var_dump($userTest);
            // die();
        // }
        $arrayToTemplate = [
            'title' => 'Camille PICHAUD', 
            'content' => $content ,
            'Accueil' => [],
        ];
        $this->render($arrayToTemplate, 'home');
    }
}