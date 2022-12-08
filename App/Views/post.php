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
    if($_SESSION['role'] == 1 && !empty($_SESSION['role'])){    ?>
        <div class="container-cv">
            <button name="submit" class="button deleted">            
                <?php  echo "<span><a href='index.php?page=posts&action=deletePost&amp;id=".$post['id']."'>Supprimer ce post</a></span>";?>
            </button>
        </div>  

    <?php } ?>
    </section>
</main>

<?php require "footer.php"?>