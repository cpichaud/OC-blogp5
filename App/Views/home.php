<!--HEADER-->

<?php 
require "Auth.php" ;
require "header.php"?>

<section class="top-home">
    <div class="container">
        <div class="logo text-center text-light">
            <div class="name-home">    

            </div>
        </div>
    </div>
</section>
<main class="container">
    <!-- download CV -->
    <section>
    <div class="container-cv">
      <button type="button" class="button">
      <span><a href="../public/pdf/CV_PICHAUD_Camille.png" download>TÉLÉCHARGER MON CV</a></span>
      </button>
    </div>
        
    </section>
    <section class="form-home">
      <h2>POUR ME CONTACTER</h2>
      <?php if (isset($error_message)) {
              echo "<p class='$class'>$error_message</p";
      } ?>
      <form method="POST" action ="/blog-oc-p5/OC-blogp5/public/index.php?page=home&action=contactForm">
        <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
              <input type="text" id="nom_contact" class="form-control" name="nom_contact"/>
              <label class="form-label" for="nom_contact">Nom*</label>
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
              <input type="text" id="prenom_contact" class="form-control" name="prenom_contact"/>
              <label class="form-label" for="prenom_contact">Prénom*</label>
            </div>
          </div>
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="email" id="email_contact" class="form-control"  name="email_contact"/>
          <label class="form-label" for="email_contact">Email*</label>
        </div>

        <!-- Message input -->
        <div class="form-outline mb-4">
          <textarea id="content" class="form-control" name="content"></textarea> 
          <label class="form-label" for="content">Message*</label> 
        </div>

        <!-- Submit button -->
        <div class="d-flex justify-content-center">
            <button type="submit" name="contact_form" class="btn btn-primary btn-block btn-lg gradient-custom-4 text-light mb-5">
              Envoyer
            </button>
        </div>
      </form>
    </section>
</main>

<?php require "footer.php"?>