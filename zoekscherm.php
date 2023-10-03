<?php



//Voordat we verder gaan: checken of er uberhaupt een $_GET is ingevuld
if (empty($_GET['zoekveld'])){
    echo "Vul wat in, faka met jou.";
}else{
    echo $_GET['zoekveld'];
}

//de zoekdata filteren

//Connectie naar de database

//Zoekvraag versturen naar de database
//resultaten ophalen uit de database

//Controleren OF er resultaten zijn

//ALS er GEEN resultaten zijn dan 'error/foutmelding'

//ALS er WEL resultaten zijn dan toon resultaten

