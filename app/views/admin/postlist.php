<?php require_once 'app/views/header.php'; ?>

<section class="main_container">
    <h2>Derniers Chapitres</h2>

    <?php foreach($postList as $post) {?>
        <article class="post_container" id="<?php echo $post['post_id']?>">
            <h3 class="post_title"><?php echo $post['post_title']; ?></h3>
            <p class="post_content"><?php echo $post['post_content']; ?> ...</p>
            <p class="post_date"><?php echo $post['post_date']; ?></p>
            <a href="<?php echo BASE_URL; ?>/post/view/<?php echo $post['post_id']?>">Lire la suite</a>
            <a href="<?php echo BASE_URL; ?>/admin/edit/<?php echo $post['post_id']?>">Editer le Post</a>
            <a href="<?php echo BASE_URL; ?>/admin/delete/<?php echo $post['post_id']?>">Supprimer le Post</a>
        </article>
    <?php } ?>

</section>
<?php require_once 'app/views/footer.php'; ?>