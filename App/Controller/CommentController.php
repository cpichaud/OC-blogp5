<?php

namespace App\Controller;

use DateTime;
use App\Model\PostManager;
use App\Model\UserManager;
use App\Model\CommentManager;
use App\Controller\Controller as Controller ;

class CommentController extends Controller{


     /**
     * @var CommentManager
     */
    private $commentManager;

    public function __construct()
    {
        $this->commentManager = new CommentManager();
    }


    // public function show(){
 
    //     $comment = $this->commentManager->findAll();
    //     $content = "ceci est le contenu de mon post.";

    //     $arrayToTemplate = [
    //         'title' => 'Camille PICHAUD', 
    //         'Accueil' => [],
    //         'comment' => $comment,
    //     ];  
    //     $this->render($arrayToTemplate, __CLASS__); 
    // }

    // public function showById(){
    //     $postManager = new PostManager();  
    //     $post = $postManager->findById($_GET['id']);
    //     $arrayToTemplate = [
    //         'title' => 'Camille PICHAUD', 
    //         'Accueil' => [],
    //         'post' => $post,
    //     ];
        
    //     $this->render($arrayToTemplate, "post");  
    // }

    public function createComment(){     
        try {
            if (isset($_POST['createComment'])) {      
                if (
                    !empty($_POST['title']) 
                    && !empty($_POST['content'])) 
                {
                    $commentManager = new CommentManager(); 
                    $postManager = new PostManager();
                    session_start();
                    $title = htmlspecialchars($_POST['title']);
                    $content = htmlspecialchars($_POST['content']);
                    $created_at = new DateTime();
                    $updated_at = new DateTime();        
                    $user_id = intval($_SESSION['id']);
                    $post_id =  $postManager->findById($_GET['id']);
                    $post_id = intval($post_id['id']);

                    $comment = $commentManager->createComment(
                        $title, 
                        $content, 
                        $created_at->format('Y-m-d H:i:s'), 
                        $updated_at->format('Y-m-d H:i:s'), 
                        $user_id,
                        $post_id
                    ); 
                    
                    header('Location: /blog-oc-p5/OC-blogp5/public/index.php?page=posts');                      
                }else {
                    echo "Veuillez remplir tous les champs";
                }
            }      
        } catch (\Exception $e) {
            echo "Une erreur est survenue";
        }
  
        $arrayToTemplate = [
            'title' => 'Camille PICHAUD', 
            'Accueil' => [],
        ];
        $this->render($arrayToTemplate, "createComment");
    }

    // public function editPost(){     
    //     try {
    //         $postManager = new PostManager();  
    //         $post = $postManager->findById($_GET['id']);
    //         if (isset($_POST['createPost'])) {      
    //             if (
    //                 !empty($_POST['title']) 
    //                 && !empty($_POST['content'])) 
    //             {
    //                 $postManager = new PostManager(); 

    //                 session_start();
    //                 $title = htmlspecialchars($_POST['title']);
    //                 $content = htmlspecialchars($_POST['content']);
    //                 $updateCreate =new DateTime();        
    //                 $user_id = intval($_SESSION['id']);
    //                 $id = intval($post['id']);
                  
    //                 $post = $postManager->editPost(
    //                     $id,
    //                     $title, 
    //                     $content,  
    //                     $updateCreate->format('Y-m-d H:i:s'), 
    //                     $user_id,
    //                 ); 
                    
    //                 header('Location: /blog-oc-p5/OC-blogp5/public/index.php?page=comment');                      
    //             }else {
    //                 echo "Veuillez remplir tous les champs";
    //             }
    //         }      
    //     } catch (\Exception $e) {
    //         echo "Une erreur est survenue";
    //     }
  
    //     $arrayToTemplate = [
    //         'title' => 'Camille PICHAUD', 
    //         'Accueil' => [],
    //     ];
    //     $this->render($arrayToTemplate, "editPost");
    // }

    // public function deletePost(){
    //     $postManager = new PostManager();  
    //     $post = $postManager->delete($_GET['id']);
    //     header('Location: /blog-oc-p5/OC-blogp5/public/index.php?page=comment'); 
    // }
}