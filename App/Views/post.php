<!--HEADER-->
<?php 
require("Auth.php");
userLogin();
require("header.php")?>

<main class="container">
    <section class="container">

    <?php if (!empty($post)) {
         echo "<div class='all-posts' >
         Post :".$post['id'].":
             <h2>".$post['title']."</h2>
             <h2>".$post['chapo']."</h2>
             <p>".$post['content']."</p>
             <p>".$post['created_at']."</p>
         </div>";
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
    </section>
    <section class="comment">
        <h2 class ="title-comment m-5">Commentaire</h2>
    <?php }; 
    
    // COMMENTAIRE 
    if (!empty($comment)) {
        
        foreach ($comment as $value ) {
            echo "
            <div >
                <h2>".$value['title']."</h2>
                <p>".$value['content']."</p>
                <p>".$value['created_at']."</p>
                <p>".$value['firstname']."</p>
            </div>"; 
            if($_SESSION['role'] == 1 || !empty($_SESSION['role']) || $_SESSION['id'] == $value['user_id'] && !empty($_SESSION['id']) ){?>
            <!-- DELETE COMMENT -->
            <div class="container-cv">
                <button name="submit" class="button deleted">            
                    <?php echo "<span><a href='index.php?page=posts&action=deleteComment&amp;id=".$value['id']."'>Supprimer ce commentaire</a></span>";?>
                </button>
            </div> 
      <?php };
        };
    }else{
        echo "Vous n'avez aucun commentaire";
    }?>
   
   <!-- ADD COMMENT -->
        <div class="container-cv">
            <button name="submit" class="button">            
                <?php  echo "<span><a href='index.php?page=comment&action=createComment&amp;id=".$post['id']."'>Ajouter un commentaire</a></span>";?>
            </button>
        </div> 
    </section>
</main>

<?php require "footer.php"?>
