<?php 
    include('connexion.php');
    $id_client = $_GET['id_client'];
    $requete = $con->prepare('SELECT *  FROM client WHERE id_client = ? ');
    $requete->execute(array($id_client));
    $resultat = $requete->fetch();
    $requete2 = $con->prepare('SELECT *  FROM contrat WHERE id_client = ? ');
    $requete2->execute(array($id_client));
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
<!--Espace client-->
<section class="my-5">
    <div class="container">
    
        <h2 class="pb-5">
            Client numéro : 
            <span><?php echo $resultat['id_client']; ?></span>
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
            <?php  ?>
            <h5 class="py-5">Liste des contrats assurances : </h5>
            <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Numéro de contrat</th>
                            <th scope="col">Type d'assurance</th>
                            <th scope="col">Période</th>
                            <th scope="col">Date début</th>
                            <th scope="col">Date fin</th>
                            <th scope="col">Opérations</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($resultat2 as $ligne){?>
                        <tr>
                            <th scope="row"><?php echo $ligne['id_contrart']; ?></th>
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
        <a href="nouvelle-contrat_client.php?id_client=<?php echo $ligne['id_client']; ?>" >Ajouter une nouvelle contrat</a>                            
       
    </div>
</section>
    
<?php include('footer.html');?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
    </html>