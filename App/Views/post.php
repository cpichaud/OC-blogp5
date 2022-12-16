<!--HEADER-->
<?php 
require_once "Auth.php";
userLogin();
require_once "header.php"?>

<main class="container">
    <section class="container">

    <?php if (!empty($post)) {
         echo "<div class='all-posts' >
         Post :".$post['id'].":
             <h2>".$post['title']."</h2>
             <p>".$post['content']."</p>
             <p>".$post['created_at']."</p>
         <div>";
    }else{
        echo "Une erreur c'est produite";
    }
    if($_SESSION['role'] == 1 && !empty($_SESSION['role']) || $_SESSION['id'] == $post['user_id'] && !empty($_SESSION['id']) ){ ?>
        <div class="container-cv">
            <button name="submit" class="button deleted">            
                <?php  echo "<span><a href='index.php?page=posts&action=deletePost&amp;id=".$post['id']."'>Supprimer ce post</a></span>";?>
            </button>
        </div>  
        <div class="container-cv">
            <button name="submit" class="button">            
                <?php  echo "<span><a href='index.php?page=posts&action=editPost&amp;id=".$post['id']."'>Modifier votre post</a></span>";?>
            </button>
        </div> 
    <?php }; 
    
    // COMMENTAIRE 
    if (!empty($comment)) {
        foreach ($comment as $value ) {
            echo "
            <div class='all-posts' >
                <h2>".$value['title']."</h2>
                <p>".$value['content']."</p>
                <p>".$value['created_at']."</p>
                <p>".$value['firstname']."</p>
            <div>";
       } 
    }else{
        echo "Vous n'avez aucun commentaire";
    }?>
    
    <div class="container-cv">
            <button name="submit" class="button">            
                <?php  echo "<span><a href='index.php?page=comment&action=createComment&amp;id=".$post['id']."'>Ajouter un commentaire</a></span>";?>
            </button>
        </div> 
    </section>
    <section class="section-comment">
        <div class="container-cv">
            
        </div> 

    </section>
</main>

<?php require "footer.php"?>