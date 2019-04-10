<?php require_once 'app/views/header.php'; ?>

<section class="main_container">
    <h2>Contact</h2>

    <p>Si vous souhaitez me contacter, vous pouvez m'envoyer un courrier a l'adresse suivante :</p>
    <p>
        <?php echo $contact['firstname'] . ' ' . $contact['lastname'] ?>
        <br>
        <?php echo $contact['adress'] ?>
    </p>

    <p> Ou m'envoyer un mail directement depuis cette page </p>
    <form method="post" action="<?php echo BASE_URL; ?>/contact/view" class="mail">
        <input type="text" name="subject" id="subject" placeholder="Sujet">
        <textarea name="msg" id="msg" cols="70" rows="20" placeholder="Message" class="editor"></textarea>
        <button type="submit">Envoyer</button>
    </form>
</section>
<?php require_once 'app/views/footer.php'; ?>