<?php require_once 'app/views/header.php'; ?>

<section class="main_container">
    <h2>Contact</h2>

    <p>Si vous souhaitez me contacter, vous pouvez soit m'envoyer un courrier a l'adresse suivante :</p>
    <p>
        <?php echo $contact['firstname'] . ' ' . $contact['lastname'] ?>
        <br>
        <?php echo $contact['adress'] ?>
    </p>

    <p> Ou m'envoyer un mail a : <?php echo $contact['mail'] ?> </p>

</section>
<?php require_once 'app/views/footer.php'; ?>