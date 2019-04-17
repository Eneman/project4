<?php require_once 'app/views/header.php'; ?>

<section class="main_container">
    <h2 class="text-center border border-light rounded">Gestion des Chapitres</h2>

    <?php foreach($postList as $post) {?>
        <article class="post_container border rounded" id="<?php echo $post['post_id']?>">
            <h3 class="post_title"><?php echo $post['post_title']; ?></h3>
            <small class="text-muted"><?php echo $post['post_date']; ?></small>
            <p class="post_content"><?php echo $post['post_content']; ?> ...</p>
            <div class="btn-group container d-flex justify-content-center">
                <a class="btn btn-primary" href="<?php echo BASE_URL; ?>/post/view/<?php echo $post['post_id']?>">Lire la suite</a>
                <a class="btn btn-primary" href="<?php echo BASE_URL; ?>/admin/edit/<?php echo $post['post_id']?>">Editer le Post</a>
                <a class="btn btn-danger"href="<?php echo BASE_URL; ?>/admin/delete/<?php echo $post['post_id']?>">Supprimer le Post</a>
            </div>
        </article>
    <?php } ?>

</section>
<?php require_once 'app/views/footer.php'; ?>