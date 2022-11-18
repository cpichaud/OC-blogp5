<!--HEADER-->
<?php require "header.php"?>
<section class="top-home">
    <div class="container">
        <div class="logo text-center text-light">
            <!--<img src="../../public/images/home/logo.jpg" alt="logo" style="width: 300px;">-->
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
      <span><a href="/public/pdf/CV_PICHAUD_Camille.png" download>TÉLÉCHARGER MON CV</a></span>
      </button>
    </div>
        
    </section>
    <section class="form-home">
    <h2>POUR ME CONTACTER</h2>
    <form>
      <!-- 2 column grid layout with text inputs for the first and last names -->
      <div class="row mb-4">
        <div class="col">
          <div class="form-outline">
            <input type="text" id="form3Example1" class="form-control" />
            <label class="form-label" for="form3Example1">Nom</label>
          </div>
        </div>
        <div class="col">
          <div class="form-outline">
            <input type="text" id="form3Example2" class="form-control" />
            <label class="form-label" for="form3Example2">Prénom</label>
          </div>
        </div>
      </div>

      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="email" id="form3Example3" class="form-control" />
        <label class="form-label" for="form3Example3">Email</label>
      </div>

      <!-- Message input -->
      <div class="form-outline mb-4">
        <input type="textarea" id="form3Example4" class="form-control" />
        <label class="form-label" for="form3Example4">Message</label>
      </div>

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>

    </form>
    </section>
</main>

<?php require "footer.php"?>