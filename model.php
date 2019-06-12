<?php
// Hier zet je de functions die alle gegevens ophalen
function get_latest_plants()
{

    $pdo = dbConnect();

    $query = 'SELECT * FROM `plants` ORDER BY `discovery_date` DESC LIMIT 10';
    $statement = $pdo->query($query);

    return $statement;
}

function get_all_plants()
{
    $pdo = dbConnect();

    $query = 'SELECT * FROM `plants` ORDER BY `plant_name`';
    $statement = $pdo->query($query);

    return $statement;
}
