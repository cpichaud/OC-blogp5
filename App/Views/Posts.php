<!--HEADER-->
<?php 
require_once "Auth.php";
userLogin();
require_once "header.php"?>

<main>
    <?php if (isset($error_message)) {
        echo "<p class='$class'>$error_message</p";
    } ?>
    <section class="posts-section">

    <?php if (!empty($posts)) {
        foreach ($posts as $value ) {
            echo "
            <div class='all-posts' >
                <p>Post :".$value['id'].":</p>
                <h2>".$value['title']."</h2>
                <p>".$value['chapo']."</p>
                <p>".$value['content']."</p>
                <p>".$value['created_at']."</p>
                <div class='container-cv'>
                    <button type='button' class='button'>
                        <span><a href='index.php?page=posts&action=showById&amp;id=".$value['id']."'>Plus de d'information</a></span>
                    </button>
                </div>
            </div>";
       } 
    }else{
        echo "Vous n'avez aucun post";
    }?>
        <div class='container-cv'>
            <button type='button' class='button create'>
                <span><a href='index.php?page=Posts&action=createPost'>Créer un post</a></span>
            </button>
        </div>
    </section>
</main>

<?php require "footer.php"?>