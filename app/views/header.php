<?php session_start();
    echo $_SESSION['test'];
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Maquette Graphique</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo BASE_URL; ?>/public/assets/main.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
    <div class="header">
        <h1>jeAn forteroche</h1>
        <nav class="navigation_menu">
            <div><a href="<?php echo BASE_URL; ?>/post/list">Accueil</a></div>
            <div><a href="<?php echo BASE_URL; ?>/contact/view">Contacts</a></div>
            <div><a href="<?php echo BASE_URL; ?>/contact/view">A propos</a></div>
        </nav>
    </div>  
