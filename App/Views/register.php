<!--HEADER-->
<?php require "header.php"?>
<main class="register-image">
  <section class="vh-100 bg-image"
    style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6 register-form">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Inscription</h2>

                <form method="POST">

                  <div class="form-outline mb-4">
                    <input type="text" id="pseudo" class="form-control form-control-lg" />
                    <label class="form-label" for="pseudo">Pseudo</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" id="nom" class="form-control form-control-lg" />
                    <label class="form-label" for="nom">Nom</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" id="prenom" class="form-control form-control-lg" />
                    <label class="form-label" for="prenom">Prénom</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="email" id="email" class="form-control form-control-lg" />
                    <label class="form-label" for="email">Email</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="email" id="telephone" class="form-control form-control-lg" />
                    <label class="form-label" for="telephone">Téléphone</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="password" class="form-control form-control-lg" />
                    <label class="form-label" for="password">Password</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="repeat-pass" class="form-control form-control-lg" />
                    <label class="form-label" for="repeat-pass">Repeat your password</label>
                  </div>

                  <div class="d-flex justify-content-center">
                    <button type="button"
                      class="btn btn-primary btn-block btn-lg gradient-custom-4 text-body">S'enregistrer</button>
                  </div>

                  <p class="text-center text-muted mt-5 mb-0">Vous avez déjà un compte ? <a href="http://localhost/blog-oc-p5/OC-blogp5/public/index.php?page=connecion"
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


