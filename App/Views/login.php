<!--HEADER-->

<?php
use App\Model\UserManager;



require("Auth.php");
        
?>
<?php require "header.php";?>
<main class="register-image">
  <section class="vh-100 bg-image">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6 register-form">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Connexion</h2>
                <?php if (isset($error_message)) {
                    echo "<p class='$class'>$error_message</p";
                } ?> 

                <form method="POST" action ="/blog-oc-p5/OC-blogp5/public/index.php?page=login&action=loginAction">
                  <div class="form-outline mb-4">
                    <input type="email" id="email" class="form-control form-control-lg" name="email"/>
                    <label class="form-label" for="email">Email</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="password" class="form-control form-control-lg" name="password" />
                    <label class="form-label" for="password">Password</label>
                  </div>

                  <div class="container-cv">
                    <button name="submit" class="button">
                        <span>Se connecter</span>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>


