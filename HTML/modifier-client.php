<?php
include('connexion.php');
$id_client = $_GET['id_client'];
$requete = $con->prepare('SELECT *  FROM client WHERE  id_client = ? ');
        $requete->execute(array($id_client));
        $resultat = $requete->fetch();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Modifier les informations des clients</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="..\CSS\style.css">

</head>
<body>
<?php include('header.html');?>
<!--Formulaire d'inscription-->
<section>
    <div class="container my-5 w-50">
        <h2 class="text-center pb-5">Modifier les informations des clients</h2>
        <form class="row g-2" method="POST" action="update-client.php?id_client=<?php echo $id_client;?>">
            <div class="col-6">
                <label for="nom" class="form-label">Nom</label>
                <input type="tesxt" class="form-control" id="nom" name="nom" value="<?php echo $resultat['nom'];?>">
            </div>
            <div class="col-6">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="tesxt" class="form-control" id="prenom" name="prenom" value="<?php echo $resultat['prenom'];?>">
            </div>
            <div class="col-6">
                <label for="telephone" class="form-label">Téléphone</label>
                <input type="tel" class="form-control" id="telephone" name="telephone" value="<?php echo $resultat['telephone'];?>">
            </div>
            <div class="col-6">
                <label for="cin" class="form-label">CIN</label>
                <input type="tel" class="form-control" id="cin" name="cin" value="<?php echo $resultat['cin'];?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $resultat['email'];?>">
            </div>
            <div class="mb-3">
                <label for="adresse" class="form-label">Adresse</label>
                <textarea class="form-control" id="adresse" name="adresse" ><?php echo $resultat['adresse'];?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</section>
<?php include('footer.html');?>
    </body>
    </html>