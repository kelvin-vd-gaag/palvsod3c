<?php

Voordat we verder gaan: checken of er uberhaupt een $_GET is ingevuld
if (empty($_GET['zoekveld'])){
   echo "Vul wat in, faka met jou.";
}else{
    $username = "root";
    $password = "";

    $conn = new PDO("");
//    echo strip_tags($_GET['zoekveld']);
}

//Connectie naar de database

//Zoekvraag versturen naar de database
//resultaten ophalen uit de database

//Controleren OF er resultaten zijn

//ALS er GEEN re    sultaten zijn dan 'error/foutmelding'

//ALS er WEL resultaten zijn dan toon resultaten

