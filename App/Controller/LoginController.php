<?php

namespace App\Controller;

use App\Model\UserManager;
use App\Controller\Controller as Controller ;

class LoginController extends Controller{


     /**
     * @var UserManager
     */
    private $userManager;

    public function __construct()
    {
        $this->userManager = new UserManager();
    }

    public function show(){
       
        $arrayToTemplate = [
            'title'   => 'Camille PICHAUD', 
            'Accueil' => [],
        ];  
        $this->render($arrayToTemplate, __CLASS__); 
    }
    
    public function logout(){
       
        $arrayToTemplate = [
            'title'   => 'Camille PICHAUD', 
            'Accueil' => [],
        ];  
        $this->render($arrayToTemplate, 'logout'); 
    }
}