<?php 

//Insert new client
    include('connexion.php');
    $id_client = $_GET['id_client'];
   
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
        <h2 class="text-center pb-5">Remplissez le contrat si dessous</h2>
        <form class="row g-2" method="POST" action="ajouter-contrat.php?id_client=<?php echo $id_client; ?>">
        <div class="mb-3">
                <label for="type" class="form-label">Type d'assurance</label>
                <select class="form-select" aria-label="Choisissez le type d'assurance" id="type" name="type">
                    <option value="Auto">Auto / Moto</option>
                    <option value="Habitation">Habitation</option>
                    <option value="Santé">Santé</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="periode" class="form-label">Période</label>
                <select class="form-select" aria-label="Choisissez la période" id="periode" name="periode">
                    <option value="Une année">Une année</option>
                    <option value="6 mois">6 mois</option>
                    <option value="3 mois">3 mois</option>
                </select>
            </div>
            <div class="col-6">
                <label for="dateDebut" class="form-label">Date début</label>
                <input type="date" class="form-control" id="dateDebut" name="dateDebut" value = "<?php echo date("Y-m-d"); ?>">
            </div>
            <div class="col-6 mb-3">
                <label for="dateFin" class="form-label">dateFin</label>
                <input type="date" class="form-control" id="dateFin" name="dateFin">
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
</section>
<?php include('footer.html');?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
    </html>