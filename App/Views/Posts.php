<!--HEADER-->
<?php require "header.php"?>

<main class="container">
    <section class="container">

    <?php if (!empty($postTest)) {
        foreach ($postTest as $key => $value ) {
            echo "<div class='all-posts' >";    
                echo "Post ".$value['id'].":";
                echo "<h2>".$value['title']."</h2>";
                echo "<p>".$value['content']."</p>";
                echo "<p>".$value['created_at']."</p>";
            echo "<div>";
       } 
    }else{
        echo "Vous n'avez aucun post";
    } ?>
    </section>
</main>

<?php require "footer.php"?>