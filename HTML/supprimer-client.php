<?php 
include('connexion.php');
//Modification du contrat : 
    $id_client = $_GET['id_client'];

    $requete = $con->prepare('DELETE FROM client WHERE id_client=?');
    $requete->execute([$id_client]);
    header("Location: mon-espace.php");
?>