<?php require_once 'app/views/header.php'; ?>

<section class="main_container">
    <h2 class="text-center border border-light rounded">Edition</h2>

    <form method="post" action="<?php echo BASE_URL; ?>/admin/edit/<?php echo $post["post_id"];?> class="post_editor">
        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" id="title" class="form-control" name="post_title" required value="<?php echo $post["post_title"]; ?>">
        </div>
        <div class="form-group">
            <label for="chapter">Chapitre</label>
            <textarea type="text" id="title" class="form-control editor" id="chapter" name="post_content" rows="19" required >
                <?php echo $post["post_content"]; ?>
            </textarea>
        </div>
        <button class="btn btn-primary" type="submit">Enregistrer</button>
    </form>
</section>
<?php require_once 'app/views/footer.php'; ?>