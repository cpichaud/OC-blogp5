<?php

namespace App\Controller;

use App\Model\Manager;
use App\Controller\Controller as Controller ;

class RegisterController extends Controller{


    /**
     * @return Response
     */
    public function show(){

        $content = "Inscription";

        $arrayToTemplate = ['title' => 'Inscription', 'content' => $content ,'posts' =>[]];

        $this->render($arrayToTemplate, 'register');
    }

//     public function register(){
        
// if (isset($_POST['register'])) {
//         echo "ok";
//         die();
// }
//         $content = "Inscription";

//         $arrayToTemplate = ['title' => 'Inscription', 'content' => $content ,'posts' =>[]];

//         $this->render($arrayToTemplate, 'register');
//     }

}