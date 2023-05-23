<?php 
    include('connexion.php');
    $id_client = $_GET['id_client'];
    $requete = $con->prepare('SELECT *  FROM client, contrat WHERE client.id_client = ? AND contrat.id_client = ? LIMIT 1');
    $requete->execute(array($id_client, $id_client));
    $resultat = $requete->fetch();
    ?>
<!DOCTYPE html>
<html>
<head>
	<title>Mon espace</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="..\CSS\style.css">

</head>
<body>
<?php include('header.html');?>
<!--Espace client-->
<section class="my-5">
    <div class="container">
    
        <h2 class="pb-5">
            Contrat numéro : 
            <span><?php echo $resultat['id_contrart']; ?></span>
        </h2>
        <div>
            <b>Nom : </b>
            <span><?php echo $resultat['nom']; ?></span>
        </div>
        <div>
            <b>Prénom : </b>
            <span><?php echo $resultat['prenom']; ?></span>
        </div>
        <div>
            <b>Adresse : </b>
            <span><?php echo $resultat['adresse']; ?></span>
        </div>
        <div>
            <b>Téléphone : </b>
            <span><?php echo $resultat['telephone']; ?></span>
        </div>
        <div>
            <b>CIN : </b>
            <span><?php echo $resultat['cin']; ?></span>
        </div>
        <div>
            <b>Email : </b>
            <span><?php echo $resultat['email']; ?></span>
        </div>
        <div>
            <b>Type d'assurance : </b>
            <span><?php echo $resultat['type']; ?></span>
        </div>
        <div>
            <b>Période : </b>
            <span><?php echo $resultat['periode']; ?></span>
        </div>
        <div>
            <b>Date début : </b>
            <span><?php echo $resultat['date_debut']; ?></span>
        </div>
        <div>
            <b>Date fin : </b>
            <span><?php echo $resultat['date_fin']; ?></span>
        </div>
       
    </div>
</section>
<?php include('footer.html');?>
    </body>
    </html>