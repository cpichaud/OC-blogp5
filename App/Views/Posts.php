<!--HEADER-->
<?php require "header.php"?>

<main class="container">

    <?php if (!empty($post['content'])) {

        echo $post['content'];
    
    }else{
        echo "Vous n'avez aucun post";
    } ?>

</main>

<?php require "footer.php"?>