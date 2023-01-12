<?php

namespace App\Controller;

use App\Controller\Controller as Controller;
use App\Model\UserManager;


class HomeController extends Controller{

    /**
     * @var UserManager
     */
    private $userManager;

    public function __construct()
    {
        $this->userManager = new UserManager();
    }


    public function show(){
        $content = "ceci est le contenu de ma page. "; 
        $userTest = $this->userManager->findAll();

        foreach($userTest as $user){
            //var_dump($user);
        }
        $arrayToTemplate = [
            'title' => 'Camille PICHAUD', 
            'content' => $content,
            'Accueil' => [],
            'user' => $user,
        ];
        $this->render($arrayToTemplate, 'home');
    }
}