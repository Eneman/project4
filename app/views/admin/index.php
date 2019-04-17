<?php require_once 'app/views/header.php'; ?>

<section class="main_container">
    <h2 class="text-center border border-light rounded">Outils d'Administration</h2>
    <ul class="admin_menu">
        <li><a href="<?php echo BASE_URL; ?>/admin/postlist">Gerer les posts</a></li>
        <li><a href="<?php echo BASE_URL; ?>/admin/commentlist">Gerer les Commentaires</a></li>
        <li><a href="<?php echo BASE_URL; ?>/admin/create">Creer un Post</a></li>
        <li><a href="<?php echo BASE_URL; ?>/admin/info">Modifier Informations</a></li>
        <li><a href="<?php echo BASE_URL; ?>/admin/login">Deconnexion</a></li>
    </ul>
</section>
<?php require_once 'app/views/footer.php'; ?>