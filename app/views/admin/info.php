<?php require_once 'app/views/header.php'; ?>

<section class="main_container">
    <h2>Edition des Données Personelles</h2>

    <form method="post" action="<?php echo BASE_URL; ?>/admin/info" class="post_editor">
    <input type="password" name="pwd" value="">
    <input type="text" name="adress" value="<?php echo $contact["adress"]; ?>">
    <input type="text" name="mail" value="<?php echo $contact["mail"]; ?>">
    <textarea name="about" id="" cols="100" rows="20" class="editor"><?php echo $about["about"]; ?></textarea>
    <input type="submit" value="Enregistrer">
    </form>
</section>
<?php require_once 'app/views/footer.php'; ?>