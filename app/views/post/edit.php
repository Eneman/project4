<?php require_once 'app/views/header.php'; ?>

<section class="main_container">
    <h2>Edition</h2>

    <form method="post" action="<?php echo BASE_URL; ?>/post/edit/<?php echo $post["post_id"];?> class="post_editor">
        Titre : <input type="text" name="post_title" required value="<?php echo $post["post_title"]; ?>"> <br>
        Chapitre : <textarea name="post_content" cols="100" rows="30" required ><?php echo $post["post_content"]; ?></textarea> <br>
        <input type="submit">
    </form>

</section>
<?php require_once 'app/views/footer.php'; ?>