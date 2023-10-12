<?php

if (empty($_GET['zoekveld'])){
   echo "Vul wat in, faka met jou.";
}else{
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=localhost;dbname=google",$username, $password);
    // echo strip_tags($_GET['zoekveld']);

    //TODO: Fix deze code zodat je met behulp van een wildcard (%) alle restaurants kan vinden met 'bere' in de naam
    $select_restaurants = $conn->prepare("SELECT * FROM restaurants WHERE naam = :zoekveld" . "%");
    $select_restaurants->bindParam(":zoekveld", $_GET['zoekveld']);
    $select_restaurants->execute();
    $restaurants = $select_restaurants->fetchAll();

    // echo $restaurants[0]['naam'];
    // echo $restaurants[0]['locatie'];
    // echo $restaurants[1]['naam'];
    // echo $restaurants[1]['locatie'];

    foreach($restaurants as $eetzaak){
        echo $eetzaak['naam'] . " is gevestigd in: " . $eetzaak['locatie'] . "<br>";
    }
}


//Connectie naar de database

//Zoekvraag versturen naar de database
//resultaten ophalen uit de database

//Controleren OF er resultaten zijn

//ALS er GEEN re    sultaten zijn dan 'error/foutmelding'

//ALS er WEL resultaten zijn dan toon resultaten

