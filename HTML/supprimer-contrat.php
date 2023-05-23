<?php 
include('connexion.php');
//Modification du contrat : 
    $id_contrat = $_GET['id_contrat'];

    $requete = $con->prepare('DELETE FROM contrat WHERE id_contrart=?');
    $requete->execute([$id_contrat]);
    header("Location: mon-espace.php");
?>