<?php require_once 'app/views/header.php'; ?>

<section class="main_container">
    <h2><?php echo $post['post_title']; ?></h2>

    <p class="post_content"><?php echo $post['post_content']; ?></p>

</section>

<section class="comments_container">
    <form method="post" action="<?php echo BASE_URL; ?>/post/comment/<?php echo $post["post_id"];?> class="comments">
    Nom : <input type="text" name="com_author" required>
    <textarea name="com_content" cols="100" rows="10" placeholder="Taper votre commentaire" required ></textarea>
    
    <input type="submit" value="Envoyer">
    </form>

    <?php foreach($comments as $comment) {?>
        <article class="post_container" id="<?php echo $post['com_id']?>">
            <h3 class="com_author"><?php echo $comment['com_author']; ?></h3>
            <p class="com_report"><i class="fas fa-exclamation-triangle"></i><?php echo $comment['com_report']; ?></p>
            <p class="com_content"><?php echo $comment['com_content']; ?> ...</p>
            <p class="com_date"><?php echo $comment['com_date']; ?></p>
        </article>
    <?php } ?>
</section>
<?php require_once 'app/views/footer.php'; ?>