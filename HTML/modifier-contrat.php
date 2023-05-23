<?php 
    include('connexion.php');
        $id_contrat = $_GET['id_contrat'];
        $requete = $con->prepare('SELECT *  FROM client, contrat WHERE  contrat.id_contrart = ? LIMIT 1');
        $requete->execute(array($id_contrat));
        $resultat = $requete->fetch();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contrat</title>
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
        <h2 class="text-center pb-5">Modifier le contrat numéro <?php echo $id_contrat; ?></h2>
        <form class="row g-2" method="POST" action="update.php?id_contrat=<?php echo $id_contrat; ?>">
        <div class="mb-3">
                <label for="type" class="form-label">Type d'assurance</label>
                <select class="form-select" aria-label="Choisissez le type d'assurance" id="type" name="type">
                    <option value="Auto" <?php if($resultat['type'] == 'Auto') echo "selected"; ?>>Auto / Moto</option>
                    <option value="Habitation" <?php if($resultat['type'] == 'Habitation') echo "selected"; ?>>Habitation</option>
                    <option value="Santé" <?php if($resultat['type'] == 'Santé') echo "selected"; ?>>Santé</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="periode" class="form-label">Période</label>
                <select class="form-select" aria-label="Choisissez la période" id="periode" name="periode">
                    <option value="Une année" <?php if($resultat['periode'] == 'Une année') echo "selected"; ?>>Une année</option>
                    <option value="6 mois" <?php if($resultat['periode'] == '6 mois') echo "selected"; ?>>6 mois</option>
                    <option value="3 mois" <?php if($resultat['periode'] == '3 mois') echo "selected"; ?>>3 mois</option>
                </select>
            </div>
            <div class="col-6">
                <label for="dateDebut" class="form-label">Date début</label>
                <input type="date" class="form-control" id="dateDebut" name="dateDebut" value="<?php echo $resultat['date_debut']; ?>">
            </div>
            <div class="col-6 mb-3">
                <label for="dateFin" class="form-label">Date fin</label>
                <input type="date" class="form-control" id="dateFin" name="dateFin" value="<?php echo $resultat['date_fin']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>

    </div>
</section>
<?php include('footer.html');?>
    </body>
    </html>