<?php
// LET OP: Het klopt dat de eerdere URLS homepage.php en alle-plantjes.php het nu even niet meer doen
// Dat wordt opgelost in de de volgende stap

function homepage(){
    $plantjes = get_latest_plants();
    include 'homepage.php';
}

function alle_plantjes(){
    $plantjes = get_all_plants();
    include 'alle_plantjes.php';
}