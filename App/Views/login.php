<!--HEADER-->

<?php
use App\Model\UserManager;

if (isset($_POST['submit'])) {

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];  
    
    $userManager = new UserManager();
    $user = $userManager->findByEmail($_POST['email']); 
    $pass_verif = password_verify($_POST['password'], $user['password']);
    if($user['email'] !== null && $user['email'] == $email && $pass_verif == $password){
          session_start();
          $_SESSION['connecte'] = 1;
          $_SESSION['role'] = $user['role'];
          $_SESSION['id'] = $user['id'];
          $_SESSION['name'] = $user['nom'];
          header('Location: /blog-oc-p5/OC-blogp5/public/index.php?page=home'); 
      }else{       
          echo "Email ou mot de passe introuvable";
      }            
  }else {
      echo "Une erreur c'est produite";
  }
}

require_once 'Auth.php';
if (isLogin()) {
  header('Location: /blog-oc-p5/OC-blogp5/public/index.php?page=home');
}
        
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

                <form method="POST">
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


