<?php require_once 'app/views/header.php'; ?>

<section class="main_container">
    <h2 class="text-center border border-light rounded">Nouveau Chapitre</h2>

    <form method="post" action="<?php echo BASE_URL; ?>/admin/create" class="post_editor">
        <div class="form-group">
            <label for="title">Titre</label>
            <input id="title" class="form-control" type="text" name="post_title" required>
        </div>
        <div class="form-group">
            <label for="content">Chapitre</label>
            <textarea id="content" class="form-control editor" name="post_content" rows="19" ></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>

</section>

<?php require_once 'app/views/footer.php'; ?>