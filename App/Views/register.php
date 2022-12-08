<!--HEADER-->
<?php 
require_once "Auth.php";
require_once "header.php"
?>
<?php
use App\Model\UserManager;


try {

  if (isset($_POST['register'])) {

    if (
        !empty($_POST['email']) 
         && !empty($_POST['password'])
         && !empty($_POST['nom']) 
         && !empty($_POST['telephone'])
         && !empty($_POST['prenom']) ) 
    {
      $pass_hash = password_hash($_POST['password'], PASSWORD_DEFAULT, ['cost' => 12]);

      // var_dump(htmlspecialchars($_POST['password']));
      // die();
        $email = htmlspecialchars($_POST['email']);
        $password = $pass_hash;
        $telephone = htmlspecialchars($_POST['telephone']);
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $role =0;

        $userManager = new UserManager();
        $user = $userManager->createUser(
          $prenom, 
          $nom, 
          $email, 
          $telephone, 
          $password,
          $role); 

        header('Location: /blog-oc-p5/OC-blogp5/public/index.php?page=login');   
      
    }else {
        echo "Veuillez remplir tous les champs";
    }
  }      
} catch (\Throwable $th) {
  
}


require_once 'Auth.php';
if (isLogin()) {
  header('Location: /blog-oc-p5/OC-blogp5/public/index.php?page=home');
}
        
?>
<main class="register-image">
  <section class="vh-100 bg-image">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6 register-form">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Inscription</h2>

                <form method="POST">

                  <div class="form-outline mb-4">
                    <input type="text" id="nom" name="nom"class="form-control form-control-lg" />
                    <label class="form-label" for="nom">Nom</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" id="prenom" name="prenom" class="form-control form-control-lg" />
                    <label class="form-label" for="prenom">Prénom</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="email" id="email" name="email" class="form-control form-control-lg" />
                    <label class="form-label" for="email">Email</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="integer" id="telephone" name="telephone" class="form-control form-control-lg" />
                    <label class="form-label" for="telephone">Téléphone</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="password" name="password" class="form-control form-control-lg" />
                    <label class="form-label" for="password">Password</label>
                  </div>

                  <div class="d-flex justify-content-center">
                    <button type="submit" name="register" class="btn btn-primary btn-block btn-lg gradient-custom-4 text-body">
                      S'enregistrer
                    </button>
                  </div>

                  <p class="text-center text-muted mt-5 mb-0">Vous avez déjà un compte ? <a href="http://localhost/blog-oc-p5/OC-blogp5/public/index.php?page=login"
                      class="fw-bold text-body"><u>Se connecter</u></a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>


