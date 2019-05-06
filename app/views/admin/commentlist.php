<?php require_once 'app/views/header.php'; ?>

    <section class="main_container">
        <h2 class="text-center border border-light rounded">Gestion des Commentaires</h2>
    <?php foreach($commentList as $comment) {?>
        <article class="post_container" id="<?php echo $comment['com_id']?>">
            <h3 class="com_author">
                <?php echo $comment['com_author']; ?>
                <span class="com_report h5"><i class="fas fa-exclamation-triangle"></i><span><?php echo $comment['com_report']; ?></span></span>
            </h3>
            <small class="text-muted"><?php echo $comment['com_date']; ?></small>
            <p class="com_content"><?php echo $comment['com_content']; ?> ...</p>
            <a class="btn btn-danger" href="<?php echo BASE_URL; ?>/admin/deletecomment/<?php echo $comment['com_id']?>">Supprimer le Commentaire</a>
        </article>
    <?php } ?>
</section>

<?php require_once 'app/views/footer.php'; ?>