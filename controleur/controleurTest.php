<?php

function afficherFormulaireTest(){
    //créer un formulaireTest dans vue
    //rechercher le formulaire à partir de la racine
    require_once "vue/formulaireTest.php";
    //il manque le routeur, le point d'entrée, dans index.php
}

function ajouterTest(){
    if(!isset($_POST["CeQueVousVoulez"]) || strlen($_POST["CeQueVousVoulez"]) <= 5){
        header("Location: index.php?ressource=/test");
        return;
    }
    echo "Ajout avec succes";
}