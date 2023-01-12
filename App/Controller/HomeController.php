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

    
    public function contactForm(){

        if (isset($_POST['contact_form'])) {
           
            if (
                !empty($_POST['email_contact']) 
                && !empty($_POST['nom_contact']) 
                && !empty($_POST['content'])
                && !empty($_POST['prenom_contact']) ) 
            {
                $email = htmlspecialchars($_POST['email_contact']);
                $nom = htmlspecialchars($_POST['nom_contact']);
                $prenom = htmlspecialchars($_POST['prenom_contact']);
                $content = htmlspecialchars($_POST['content']);

                //Email 
                $emailSend = htmlspecialchars($_POST['email_contact']);
                $sujet = "Information";
                $content = "Nous vous contacterons le plus vite possible au sujet de :  $content\n";
                $message = "";
                $message .= "Email: $email\n";
                $message .= "Nom: $nom\n";
                $message .= "Message: $content\n";
                $header = "From: camillepichaud@myddleware.com";

                
                mail($emailSend, $sujet, $message, $header);     
 
 
                $error_message= 'Votre Message à bien été envoyé';
                $class = "success";
                $arrayToTemplate = [
                    'error_message' => $error_message,
                    'class' => $class
                ];
                $this->render($arrayToTemplate, 'home'); 
            }else {
                $error_message = 'Veuillez remplir tous les champs';
                $class = "error";
                $arrayToTemplate = [
                    'error_message' => $error_message,
                    'class' => $class
                ];
                $this->render($arrayToTemplate, 'home'); 
            }
        }      
    }
}