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

    public function loginAction(){

        if (isset($_POST['submit'])) {   
            if (!empty($_POST['email']) && !empty($_POST['password'])) {
              $email = htmlspecialchars($_POST['email']);
              $password = $_POST['password'];  
              
              $userManager = new UserManager();
              $user = $userManager->findByEmail($_POST['email']); 
              $pass_verif = password_verify($_POST['password'], $user['password']);
              if($user['email'] !== null && $user['email'] == $email && $pass_verif == $password){
                    session_start();
                    $_SESSION['connecte'] = 1;
                    $_SESSION['role'] = $user['role'];
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['name'] = $user['nom'];
                    $_SESSION['post_id'] = $user['post_id'];
                    header('Location: /blog-oc-p5/OC-blogp5/public/index.php?page=home'); 
                }else{       
                    echo "Email ou mot de passe introuvable";
                }            
            }else {
                echo "Une erreur c'est produite";
                header('Location: /blog-oc-p5/OC-blogp5/public/index.php?page=login&action=loginAction');
            }
            
        }   
    }
}