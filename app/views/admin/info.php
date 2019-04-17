<?php require_once 'app/views/header.php'; ?>

<section class="main_container">
    <h2 class="text-center border border-light rounded">Gestion des Informations</h2>
    <div class="container form_container">
        <form method="post" action="<?php echo BASE_URL; ?>/admin/info" class="post_editor">
        <div class="form-group">
            <label for="mail">Email</label>
            <input type="email" name="mail" class="form-control" id="mail" aria-describedby="emailHelp" value="<?php echo $contact["mail"]; ?>">
        </div>
        <div class="form-group">
            <label for="adress">Adresse</label>
            <input type="text" name="adress" class="form-control" id="adress" value="<?php echo $contact["adress"]; ?>">
        </div>
        <div class="form-group">
            <label for="pwd">Mot de Passe</label>
            <input type="password" name="pwd" class="form-control" id="pwd" value="">
        </div>
        <div class="form-group">
            <label for="about">A propos</label>
            <textarea class="form-control editor" id="about" name="about" rows="19"><?php echo $about["about"]; ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
</section>
<?php require_once 'app/views/footer.php'; ?>
