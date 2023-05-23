<?php
try
{
    $dbName = 'amana-assurannce';
    $charset = 'utf8';
    $username = 'root';
    $password = '';

    $con = new PDO("mysql:host=localhost; dbname=$dbName; port=3306; charset=utf8", $username, $password);
}
catch(Exception $e)
{
    echo 'Erreur: ' .$e->getMessage();
}

?>