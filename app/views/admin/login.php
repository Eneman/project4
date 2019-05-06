<?php require_once 'app/views/header.php'; ?>

<section class="main_container">
    <h2 class="text-center border border-light rounded">Connexion</h2>
    <form action="<?php echo BASE_URL; ?>/admin/login" method="post">
        <div class="form-row connection_form">
            <div class="col">
                <input class="form-control" type="password" name="pwd" id="pwd" placeholder="Mot de Passe">
            </div>
            <div class="col">
                <button class="btn btn-primary" type="submit">Connexion</button>
            </div>
        </div>
    </form>
</section>
<?php require_once 'app/views/footer.php'; ?>