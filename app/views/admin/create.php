<?php require_once 'app/views/header.php'; ?>

<section class="main_container">
    <h2>Nouveau Chapitre</h2>

    <form method="post" action="<?php echo BASE_URL; ?>/admin/create" class="post_editor">
        Titre : <input type="text" name="post_title" required> <br>
        Chapitre : <textarea name="post_content" cols="30" rows="10" class="editor"></textarea> <br>
        <input type="submit">
    </form>

</section>
<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=9qrbi8545615l7v6s565owh9c30xo5ubpfssxlch2pvj07mo">
</script>
<script>
  tinymce.init({
    selector: '.editor'
  });
</script>
<?php require_once 'app/views/footer.php'; ?>