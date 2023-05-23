<?php 

    include('connexion.php');
    $id_client = $_GET['id_client'];
    $type = htmlspecialchars($_POST['type']);
    $periode = htmlspecialchars($_POST['periode']);
    $date_debut = htmlspecialchars($_POST['dateDebut']);
    $date_fin = htmlspecialchars($_POST['dateFin']);
    
    
    if(isset($type) && isset($periode) && isset($date_debut) && isset($date_fin))
    {
        if(!empty($type) && !empty($periode) && !empty($date_debut) && !empty($date_fin))
        {
                

                $requete = $con->prepare('INSERT INTO contrat (id_client, type, periode, date_debut, date_fin) VALUES(?,?,?,?,?)');
                $requete->execute(array($id_client,$type, $periode, $date_debut, $date_fin));
                header("Location: mon-espace.php");  
        }
    }
?>