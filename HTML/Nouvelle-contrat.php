<?php 

//Insert new client
    include('connexion.php');
    $type = htmlspecialchars($_POST['type']);
    $periode = htmlspecialchars($_POST['periode']);
    $date_debut = htmlspecialchars($_POST['dateDebut']);
    $date_fin = htmlspecialchars($_POST['dateFin']);
    $email = $_GET['email'];
   
    
    if(isset($type) && isset($periode) && isset($date_debut) && isset($date_fin))
    {
        if(!empty($type) && !empty($periode) && !empty($date_debut) && !empty($date_fin))
        {
                $requete1 = $con->prepare('SELECT id_client  FROM client WHERE  email = ? LIMIT 1');
                $requete1->execute(array($email));
                $resultat1 = $requete1->fetch();

                $requete = $con->prepare('INSERT INTO contrat (id_client, type, periode, date_debut, date_fin) VALUES(?,?,?,?,?)');
                $requete->execute(array($resultat1['id_client'],$type, $periode, $date_debut, $date_fin));
                header("Location: mon-espace.php");  
        }
    }
?>