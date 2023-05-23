<?php 

//Insert new client
    include('connexion.php');
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $cin = htmlspecialchars($_POST['cin']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $cpassword = htmlspecialchars($_POST['cpassword']);
    echo $email;
    if(isset($nom) && isset($prenom) && isset($telephone) && isset($cin) && isset($email) && isset($password) && isset($cpassword) && isset($adresse) )
    {
        if(!empty($nom) && !empty($prenom) && !empty($telephone) && !empty($cin) && !empty($email) && !empty($password) && !empty($cpassword) && !empty($adresse))
        {
                
                try
               { 
                    $requete = $con->prepare('INSERT INTO client (nom, prenom, cin, email, adresse, telephone, password)  VALUES(?,?,?,?,?,?,?)');
                    $requete->execute(array($nom, $prenom, $cin, $email, $adresse, $telephone, $password));
               }

               catch(Exception $e)
                {
                    echo 'Erreur: ' .$e->getMessage();
                }
           
        }
    }
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
    <header>
        <nav class="navbar navbar-expand-md bg-primary navbar-dark">
            <div class="container py-4 d-flex justify-content-between">	
                        <a href="amana.html" class="navbar-brand text-uppercase fw-bold">
                            <span class="bg-light bg-gradient p-2 rounded-3 text-primary">Amana Assurance</span> 
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a href="amana.html#experience-amana" class="nav-link">L'expérience Amana</a>
                                </li>
                                <li class="nav-item active">
                                    <a href="amana.html#nos-avantages" class="nav-link">Nos avantages</a>
                                </li>
                                <li class="nav-item active">
                                    <a href="amana.html#nos-plans" class="nav-link">Nos plans</a>
                                </li>
                                <li class="nav-item active">
                                    <a href="amana.html#contact" class="nav-link">Contact</a>
                                </li>
                                <li class="nav-item active">
                                    <a href="inscrire.html" class="nav-link">S'inscrire</a>
                                </li>
                                <li class="nav-item active">
                                <a href="mon-espace.php" class="nav-link">Mon espace</a>

                                </li>
                            </ul>
                        </div>	
            </div>
        </nav>
    </header>
<!--Formulaire d'inscription-->
<section>
    <div class="container my-5 w-50">
        <h2 class="text-center pb-5">Remplissez le contrat si dessous</h2>
        <form class="row g-2" method="POST" action="Nouvelle-contrat.php?email=<?php echo $email; ?>">
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
    <footer>
        <div class="container-fluid bg-light">
            <div class="row d-flex align-items-start p-5">
                <div class="col">
                    <a href="amana.html" class="navbar-brand text-uppercase fw-bold">
                        <span class="bg-light bg-gradient p-2 rounded-3 text-primary">Amana Assurance</span> 
                    </a>
                </div>
                <div class="col">
                    <h5>Lien utiles</h5>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a href="amana.html#experience-amana" class="nav-link">L'expérience Amana</a>
                        </li>
                        <li class="nav-item active">
                            <a href="amana.html#nos-avantages" class="nav-link">Nos avantages</a>
                        </li>
                        <li class="nav-item active">
                            <a href="amana.html#nos-plans" class="nav-link">Nos plans</a>
                        </li>
                        <li class="nav-item active">
                            <a href="amana.html#contact" class="nav-link">Contact</a>
                        </li>
                        <li class="nav-item active">
                                <a href="inscrire.html" class="nav-link">S'inscrire</a>
                            </li>
                            <li class="nav-item active">
                            <a href="mon-espace.php" class="nav-link">Mon espace</a>

                            </li>
                    </ul>
                </div>
                <div class="col">
                    <h5>Restez-branchés</h5>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#" class="text-decoration-none text-primary" data-bs-toggle="tooltip"
        title="LinkedIn">
                                <i class="fab fa-linkedin fa-2x"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-decoration-none text-primary" data-bs-toggle="tooltip"
        title="Instagram">
                                <i class="fab fa-instagram fa-2x"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-decoration-none text-primary" data-bs-toggle="tooltip"
        title="Facebook">
                                <i class="fab fa-facebook fa-2x"></i>
                            </a>
                        </li>
                </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-primary text-light p-2">
            <p class="text-center">Copyright Amana Assurance - 2023</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
    </html>