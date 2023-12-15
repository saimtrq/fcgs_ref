<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="../../extras/css/bootstrap.css">
    <link rel="stylesheet" href="../../extras/css/pageContact.css">

</head>

<body>
    <?php require('../../extras/preconf/header.php'); ?>
    <?php
    if (isset($_GET['succes_contact'])) {
        $erreur = htmlspecialchars($_GET['succes_contact']);
        switch ($erreur) {
            case 'mail_envoyer':
                ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>L'email a été envoyé avec succes</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                break;
                case 'erreur_vide':
                    ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Tout les champs n'ont pas été remplis</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                    break;
        }
    }

    ?>
    <div class="fondAcceuil">
        <div class="titreAcceuil">
            <h1>CONTACT</h1>
        </div>
    </div>

    <div class="formulaireContactTout">
        <div class="contact">
            <div class="titreContact">
                <h4>CONTACT</h4>
            </div>
            <div class="formulaireContact">
                <form action="../Controler/pageContactController.php" method='post'>

                    <label for="nomForm">Nom</label>
                    <input type="text" id="nomForm" name="nomForm" placeholder="Your name..">

                    <label for="email">Email</label>
                    <input type="text" id="emailForm" name="emailForm" placeholder="Your last name..">

                    <label for="sujetForm">Sujet</label>
                    <input type="text" id="sujetForm" name="sujetForm" placeholder="Your last name..">

                    <label for="messageForm">Message</label>
                    <textarea id="messageForm" name="messageForm" placeholder="Write something.."
                        style="height:200px"></textarea>

                    <input type="submit" value="Envoyer">

                </form>
            </div>

        </div>
        <div class="localisation">
            <div class="titreLocalisation">
                <h4>LOCALISATION</h4>
            </div>
            <div class="elementLocalisation">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3460.12089778201!2d6.127063476782579!3d46.24081668128711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sfr!2sch!4v1695760276364!5m2!1sfr!2sch"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>


    <script src="extras/js/intro.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
<?php require('../../extras/preconf/footer.php'); ?>
</body>

</html>