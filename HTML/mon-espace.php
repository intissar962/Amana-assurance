<?php 
    include('connexion.php');
    $requete = $con->query('SELECT *  FROM client, contrat WHERE client.id_client = contrat.id_client');
    $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);
    $requete2 = $con->query('SELECT DISTINCT  *  FROM client');
    $resultat2 = $requete2->fetchAll(PDO::FETCH_ASSOC);
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
<!--Espace admin-->
<section class="my-5">
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="contrat-tab" data-bs-toggle="tab" data-bs-target="#contrat" type="button" role="tab" aria-controls="contrat" aria-selected="true">Liste des contrats</button>
            </li>
            <li class="nav-item" role="presentation">
                 <button class="nav-link" id="client-tab" data-bs-toggle="tab" data-bs-target="#client" type="button" role="tab" aria-controls="client" aria-selected="false">Liste des clients</button>
            </li>

        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="contrat" role="tabpanel" aria-labelledby="contrat-tab">
                <h2 class="py-5">Liste des contrats</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Numéro de contrat</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">Type d'assurance</th>
                            <th scope="col">Période</th>
                            <th scope="col">Date début</th>
                            <th scope="col">Date fin</th>
                            <th scope="col">Opérations</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($resultat as $ligne){?>
                        <tr>
                            <th scope="row"><?php echo $ligne['id_contrart']; ?></th>
                            <td><?php echo $ligne['nom']; ?></td>
                            <td><?php echo $ligne['prenom']; ?></td>
                            <td><?php echo $ligne['type']; ?></td>
                            <td><?php echo $ligne['periode']; ?></td>
                            <td><?php echo $ligne['date_debut']; ?></td>
                            <td><?php echo $ligne['date_fin']; ?></td>
                            <td>
                                <ul class="navbar-nav d-flex justify-content-center">
                                    <li class="nav-item ">
                                        <a href="contrat.php?id_client=<?php echo $ligne['id_client']; ?>">Voir</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="modifier-contrat.php?id_contrat=<?php echo $ligne['id_contrart']; ?>" >Modifier</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="supprimer-contrat.php?id_contrat=<?php echo $ligne['id_contrart']; ?>" >Supprimer</a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        
            <div class="tab-pane fade" id="client" role="tabpanel" aria-labelledby="client-tab">
            <h2 class="py-5">Liste des clients</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Numéro client</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">Adresse</th>
                            <th scope="col">Téléphone</th>
                            <th scope="col">CIN</th>
                            <th scope="col">Opérations</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($resultat2 as $ligne){?>
                        <tr>
                            <th scope="row"><?php echo $ligne['id_client']; ?></th>
                            <td><?php echo $ligne['nom']; ?></td>
                            <td><?php echo $ligne['prenom']; ?></td>
                            <td><?php echo $ligne['adresse']; ?></td>
                            <td><?php echo $ligne['telephone']; ?></td>
                            <td><?php echo $ligne['cin']; ?></td>
                            <td>
                                <ul class="navbar-nav d-flex justify-content-center">
                                    <li class="nav-item ">
                                        <a href="contrat-client.php?id_client=<?php echo $ligne['id_client']; ?>">Voir</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="modifier-client.php?id_client=<?php echo $ligne['id_client']; ?>" >Modifier</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="supprimer-client.php?id_client=<?php echo $ligne['id_client']; ?>" >Supprimer</a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
    </div>
    </div>
</section>



<?php include('footer.html');?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
    </html>