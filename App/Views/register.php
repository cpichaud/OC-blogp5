<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/blog/">
    <title><?= $title ?></title>
    <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  </head>
  <body>
    
<div class="container">
  <header class="blog-header lh-1 py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="link-secondary" href="#"><?= $title ?></a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="link-secondary" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="http://localhost/blog-oc-p5/OC-blogp5/public/index.php?page=register">Sign up</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
    <a class="p-2 link-secondary" href="http://localhost/blog-oc-p5/OC-blogp5/public/index.php?page=home">Home</a>
      <a class="p-2 link-secondary" href="http://localhost/blog-oc-p5/OC-blogp5/public/index.php?page=posts">Posts.</a></nav>
  </div>
</div>

<main>
  <section class="vh-100 bg-image"
    style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
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
                      class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">S'enregistrer</button>
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

<?php require 'footer.php' ?>
