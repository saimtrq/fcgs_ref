<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomForm = $_POST['nomForm'];
    $emailForm = $_POST['emailForm'];
    $sujetForm = $_POST['sujetForm'];
    $messageForm = htmlspecialchars($_POST['messageForm']) ;
    
    if (!empty($nomForm) and !empty($emailForm) and !empty($sujetForm) and !empty($messageForm)) {
        construct_mail($nomForm,$emailForm,$sujetForm,$messageForm);
        create_contact($nomForm,$emailForm,$sujetForm,$messageForm,$currentDate);

        header('Location : pageContact.php?succes_contact=mail_envoyer');
    }else{
        header('Location : pageContact.php?succes_contact=erreur_vide');
    }
}

function construct_mail($nomForm,$emailForm,$sujetForm,$messageForm){
    $currentDate = date('Y-m-d');
    $sujet = "Accusé de réception - Prise de contact depuis FC Grand-Saconnex";
        $message = "
        <!DOCTYPE html>
        <html lang='fr'>
        <head>
            <meta charset='UTF-8'>
            <title>Accusé de réception</title>
        </head>
        <body>
            <p>Bonjour,</p>
            <p>Nous vous informons que nous avons bien reçu la prise de contact depuis le site du FC Grand-Saconnex.</p>
            <p>Voici les détails de la demande :</p>
            <ul>
                <li><strong>Nom :</strong> " . $nomForm . "</li>
                <li><strong>Email :</strong> " . $emailForm . "</li>
                <li><strong>Message :</strong> " . nl2br($sujetForm) . "</li>
            </ul>
            <p>Nous traiterons votre demande dans les plus brefs délais.</p>
            <p>Merci de nous faire confiance !</p>
            <br>
            <p>Cordialement,</p>
            <p>FC GRAND-SACONNEX</p>
        </body>
        </html>
";

        // Envoi de l'e-mail
        send_mail($emailForm,$sujetForm,$messageForm);
}

function send_mail($emailForm,$sujetForm,$messageForm){
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    mail($emailForm, $sujet, $message, $headers); 
}