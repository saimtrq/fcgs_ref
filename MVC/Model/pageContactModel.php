<?php
include '../../config.php';

function create_contact($nomForm,$emailForm,$sujetForm,$messageForm,$currentDate,$bdd){
    $connexion = getConnexion();
    $result = $connexion->prepare("INSERT INTO CONTACT (CONTACT_NOM,CONTACT_EMAIL,CONTACT_SUJET,CONTACT_MESSAGE,CONTACT_ISDELETE,CONTACT_VALIDE,CONTACT_DATE) VALUES(:nomForm, :emailForm, :sujetForm, :messageForm, :'0', :'0', :currentDate )"); 
    $result -> execute([
        'nomForm' => $nomForm,
        'emailForm' => $emailForm,
        'sujetForm' => $sujetForm,
        'messageForm' => $messageForm,
        'currentDate' => $currentDate,
    ]);
}



