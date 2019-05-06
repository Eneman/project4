<?php require_once 'app/views/header.php'; ?>

<section class="main_container">
    <h2 class="text-center border border-light rounded">Contact</h2>

    <p>Si vous souhaitez me contacter, vous pouvez m'envoyer un courrier a l'adresse suivante :</p>
    <p>
        <?php echo $contact['firstname'] . ' ' . $contact['lastname'] ?>
        <br>
        <?php echo $contact['adress'] ?>
    </p>

    <p> Ou m'envoyer un mail directement depuis cette page </p>
    <form method="post" action="<?php echo BASE_URL; ?>/contact/view" class="mail">
    <div class="form-group">
        <label for="subject">Sujet *</label>
        <input class="form-control" type="text" name="subject" id="subject" placeholder="Sujet" required>
    </div>
    <div class="form-group">
        <label for="msg">Message *</label>
        <textarea class="form-control editor" name="msg" id="msg" cols="70" rows="20" required></textarea>
    </div>
        
        
        <button class="btn btn-primary" type="submit">Envoyer</button>
    </form>
</section>
<?php require_once 'app/views/footer.php'; ?>