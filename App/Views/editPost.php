<!--HEADER-->
<?php 
require_once "Auth.php";
userLogin();
require_once "header.php"?>

<main class="container mt-5">
    <section class="container">
        <div class="form-home">
            <h2>Modifier votre post <?php //echo $_SESSION['name'] ?></h2>
            <?php if (isset($error_message)) {
                    echo "<p class='$class'>$error_message</p";
            } ?> 
            <form method="POST">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" id="title" class="form-control"  name="title"/>
                            <label class="form-label" for="title">Titre</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" id="chapo" class="form-control" name="chapo"/>
                            <label class="form-label" for="chapo">Chapô</label>
                        </div>
                    </div>
                </div>

                <!-- Message input -->
                <div class="form-outline mb-4">
                    <textarea id="content" class="form-control" name="content"></textarea> 
                    <label class="form-label" for="content">Contenue</label> 
                </div>

                <!-- Submit button -->
                <button type="submit" name="createPost" class="btn btn-primary btn-block mb-4">Valider modification</button>
            </form>
        </div>
    </section>
</main>
<div class="footer-other"></div>
<?php require "footer.php"?>