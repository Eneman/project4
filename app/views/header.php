<?php session_start(); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/assets/main.css">
    <title>Jean Forteroche</title>
  </head>
  <body>
    <header class="fixed-top">
      <div class="container-fluid text-center jf_title d-none d-md-block">
          <h1><a class="title_jf" href="http://hxbz.fr/PROJET4">Jean Forteroche<a></h1>
      </div>
      <nav class="navbar navbar-expand-md navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand d-block d-md-none" href="http://hxbz.fr/PROJET4">Jean Forteroche</a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav d-flex justify-content-around jf_menus">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo BASE_URL; ?>/post/list">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo BASE_URL; ?>/contact/view">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo BASE_URL; ?>/about/view">A propos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Administration
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/admin/postlist">Gerer les Chapitres</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/admin/commentlist">Gerer les commentaires</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/admin/create">Creer un post</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/admin/info">Modifier les informations</a>
                <a class="dropdown-item" id="connection" href="<?php echo BASE_URL; ?>/admin/login">
                  <?php echo(!isset($_SESSION['connected']) ? "Connexion" : "Deconnexion"); ?>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="page_container container">
        <div class="row">
        <div class="col d-none d-md-block"></div>
            <div class="col-12 col-md-8">
    