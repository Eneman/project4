<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Maquette Graphique</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo BASE_URL; ?>/public/assets/main.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=9qrbi8545615l7v6s565owh9c30xo5ubpfssxlch2pvj07mo">
    </script>
    <script>
        tinymce.init({
            selector: '.editor'
        });
    </script>
</head>
<body>
    <div class="header">
        <h1><a href="<?php echo BASE_URL; ?>/post/list">jeAn forteroche</a></h1>
        <nav class="navigation_menu">
            <div><a href="<?php echo BASE_URL; ?>/post/list">Accueil</a></div>
            <div><a href="<?php echo BASE_URL; ?>/contact/view">Contacts</a></div>
            <div><a href="<?php echo BASE_URL; ?>/about/view">A propos</a></div>
            <div><a href="<?php echo BASE_URL; ?>/admin/index">Administration</a></div>
        </nav>
    </div>  
