<?php require_once 'app/views/header.php'; ?>

<section class="main_container">
    <h2 class="text-center border border-light rounded">Connexion</h2>
    <form action="<?php echo BASE_URL; ?>/admin/login" method="post">
        <input type="password" name="pwd" id="pwd">
        <input type="submit" value="Connexion">
    </form>
</section>
<?php require_once 'app/views/footer.php'; ?>