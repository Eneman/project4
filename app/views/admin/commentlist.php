<?php require_once 'app/views/header.php'; ?>
<section class="comments_container">

    <?php foreach($commentList as $comment) {?>
        <article class="post_container" id="<?php echo $post['com_id']?>">
            <h3 class="com_author"><?php echo $comment['com_author']; ?></h3>
            <p class="com_report"><i class="fas fa-exclamation-triangle"></i><?php echo $comment['com_report']; ?></p>
            <p class="com_content"><?php echo $comment['com_content']; ?> ...</p>
            <p class="com_date"><?php echo $comment['com_date']; ?></p>
            <a href="<?php echo BASE_URL; ?>/admin/deletecomment/<?php echo $comment['com_id']?>">Supprimer le Commentaire</a>

        </article>
    <?php } ?>

</section>
<?php require_once 'app/views/footer.php'; ?>