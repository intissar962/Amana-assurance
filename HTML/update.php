<?php 
include('connexion.php');
//Modification du contrat : 
    $type =htmlspecialchars($_POST['type']);
    $periode = htmlspecialchars($_POST['periode']);
    $date_debut = htmlspecialchars($_POST['dateDebut']);
    $date_fin = htmlspecialchars($_POST['dateFin']);
    $id_contrat = $_GET['id_contrat'];

    $requete2 = $con->prepare('UPDATE contrat SET type=?, periode=?, date_debut=?, date_fin=? WHERE  id_contrart=?');
    $requete2->execute([$type, $periode, $date_debut, $date_fin, $id_contrat]);
    header("Location: mon-espace.php");
?>