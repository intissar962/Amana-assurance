<?php 

    include('connexion.php');
    $id_client = $_GET['id_client'];
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $email = htmlspecialchars($_POST['email']);
    $cin = htmlspecialchars($_POST['cin']);
    
    
    if(isset($nom) && isset($prenom) && isset($telephone) && isset($adresse) && isset($email) && isset($cin))
    {
        if(!empty($nom) && !empty($prenom) && !empty($adresse) && !empty($telephone) && !empty($email) && !empty($cin))
        {
                

            $requete = $con->prepare('UPDATE client SET nom=?, prenom=?, adresse=?, telephone=?, email=?, cin=?  WHERE  id_client=?');
            $requete->execute(array($nom, $prenom, $adresse, $telephone, $email, $cin, $id_client));
                header("Location: mon-espace.php");  
        }
    }
?>