<?php require_once 'app/views/header.php'; ?>

<section class="main_container">
    <h2>Nouveau Chapitre</h2>

    <form method="post" action="<?php echo BASE_URL; ?>/admin/create" class="post_editor">
        Titre : <input type="text" name="post_title" required> <br>
        Chapitre : <textarea name="post_content" cols="30" rows="10" class="editor"></textarea> <br>
        <input type="submit">
    </form>

</section>

<?php require_once 'app/views/footer.php'; ?>