<!--HEADER-->
<?php 
require("Auth.php");
userLogin();
require("header.php")?>

<main class="container mt-5">
    <section class="container">
        <div class="form-home">
            <h2>Ajouter un commentaire <?php //echo $_SESSION['name'] ?></h2>
            <form method="POST">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" id="title" class="form-control"  name="title"/>
                            <label class="form-label" for="title">Titre</label>
                        </div>
                    </div>
                </div>

                <!-- Message input -->
                <div class="form-outline mb-4">
                        <textarea id="content" class="form-control" name="content"></textarea> 
                        <label class="form-label" for="content">Contenue</label> 
                    </div>

                <!-- Submit button -->
                <button type="submit" name="createComment" class="btn btn-primary btn-block mb-4">Ajouter</button>
            </form>
        </div>
    </section>
</main>
<div class="footer-other"></div>
<?php require "footer.php"?>