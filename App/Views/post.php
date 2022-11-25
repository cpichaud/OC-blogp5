<!--HEADER-->
<?php require "header.php"?>


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
    }?>
    </section>
</main>

<?php require "footer.php"?>