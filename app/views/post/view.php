<?php require_once 'app/views/header.php'; ?>

<section class="main_container">
    <h2 class="text-center border border-light rounded"><?php echo $post['post_title']; ?></h2>

    <p class="post_content"><?php echo $post['post_content']; ?></p>

</section>

<section class="comments_container">
    <form method="post" action="<?php echo BASE_URL; ?>/post/comment/<?php echo $post["post_id"];?>" class="comments">
    <div class="form-group">
        <input id="author" class="form-control" type="text" name="com_author" placeholder="Nom" required>
    </div>
    <textarea class="form-control" name="com_content" cols="100" rows="10" placeholder="Taper votre commentaire" required ></textarea>
    
    <button class="btn btn-primary" type="submit">Envoyer</button>
    </form>

    <?php foreach($comments as $comment) {?>
        <article class="post_container" id="<?php echo $comment['com_id']?>">
            <h3 class="com_author">
                <?php echo htmlspecialchars($comment['com_author']); ?>
                <span class="com_report h5"><i class="fas fa-exclamation-triangle" onclick="report(this)"></i><span><?php echo $comment['com_report']; ?></span></span>
            </h3>
            <small class="text-muted"><?php echo $comment['com_date']; ?></small>
            <p class="com_content"><?php echo htmlspecialchars($comment['com_content']); ?> ...</p>
        </article>
    <?php } ?>
</section>
<?php require_once 'app/views/footer.php'; ?>