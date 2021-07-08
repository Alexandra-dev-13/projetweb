<!-- Besoin d'un développeur?Mecontacter::malexandra13@yahoo.com -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vives les vacances avec RealHoliday</title>
    <!-- BOOTSTRAP -->
    <link href="bootstrap.css" rel="stylesheet">
    <!--  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <!-- HEADER -->
<div class="bg-dark" id="acceuil">
        <div class="container">
          <div class="row">
            <nav class="col navbar navbar-expand-lg navbar-dark d-flex fixed-top bg-dark">
              <a class="navbar-brand" href="index.html"><span class="bold">R</span>EAL<span class="bold">H</span>OLIDAY</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div id="navbarContent" class="collapse navbar-collapse justify-content-end menu" onclick="menuDefilant();">
                    <ul class="navbar-nav naviguation ">
                    <li class="nav-item active">
                        <a class="nav-link" href="#acceuil" onclick="menuDefilant();">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#presentation" onclick="menuDefilant();">Présentation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#activite" onclick="menuDefilant();">Activité</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#photo" onclick="menuDefilant();">Photos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact" onclick="menuDefilant();">Contacts</a>
                    </li>
                    </ul>
              </div>
            </nav>
          </div>
        </div>
</div>


<!-- CAROUSEL 2 -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/vue.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Partez en famille</h5>
          <p>Offrez le meilleur à ceux que vous aimez et partagez des moments fabuleux !</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/vue1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Envie de s'évader</h5>
          <p>Parfois un peu d'évasion serait le bienvenue et ferait le plus grand bien !</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/vue2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Voyager</h5>
          <p>Confiez-nous vos reves d'evasion en famille ou entre amis, nous trouverons la formule qui comblera vos attentes</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



<!-- CONTENU SUR LES OFFRES -->
<div class="container mt-5" id="presentation">
    <div class="row">
        <div class="col-md-6">
            <h1>NOUS PROPOSONS LES MEILLEURS ENDROITS POUR LES VACANCES</h1>
        </div>
        <div class="col-md-6" style="color: rgb(27, 89, 131);">
            <p>Les vacances sont un moment où l’on se doit de privilégier le repos, c’est un moment pour se ressourcer 
                et revenir avec le plein d’énergie positive. Durant nos jours et semaines de dur labeur, nous avons souvent
                peu de temps à consacrer à nos goûts pour certaines activités ou pour en découvrir d’autres tout simplement.
                Si vous vous demandez quoi faire pendant ses vacances, REALHOLIDAY vous propose les meilleures plages de la cote d'ivoire et quelques idées d’activités très appréciées des vacanciers.
            </p>
        </div>
    </div>
</div>



<!-- SECTION -->
<div class="container mt-5" id="activite">
    <div class="row">
        <div class="col-lg-4 mb-3 col-md-6">
            <div class="card">
                <div class="card-body" style="background-color: darkolivegreen; color:white;">
                    <h5 class="card-title">La lecture</h5>
                    <p class="card-text">
                        C’est un moment privilégié, car la lecture se pratique généralement seul et nous transporte loin du tumulte du quotidien, à travers des mots, des aventures, et cela à n’importe quel endroit ou moment, comme durant un long voyage et des heures d’avion.
                        
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 mb-3 col-md-6">
            <div class="card">
                <div class="card-body" style="background-color: darkgoldenrod; color:white;">
                    <h5 class="card-title">Les jeux</h5>
                    <p class="card-text">
                        En vacance, s’adonne aux plaisirs des jeux de société, tels que le Monopoly, le Scrabble.
                        Il n’y a rien de mieux pour passer un agréable moment en famille et replonger en enfance.
                        On joue souvent au UNO car c’est un jeu simple pour jouer avec les enfants.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 mb-3">
            <div class="card">
                <div class="card-body" style="background-color: darkkhaki; color:white;">
                    <h5 class="card-title">Les visites culturelles</h5>
                    <p class="card-text">
                        Que ce soit au cœur de sa propre ville ou dans d’autres contrées, il est toujours très reposant de flâner, dans un château et découvrir
                        son histoire ou celle d’une autre civilisation, dans un musée pour découvrir ou redécouvrir les artistes qui ont dessiné le monde.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JUMBOTRON -->
<div class="container mt-5 mb-3" id="photo">
    <div class="row">
        <div class="col">
        <h1 class="jumbotron text-center">Vos futures destinations</h1>
        </div>
    </div>
</div>

<!-- CARTES DE MAISON  -->
<div class="container mb-3">
    <div class="row">
        <div class="col-lg-4 col-sm-6">
            <div class="card mb-3 shadow">
                <img src="img/assinie.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h3 class="card-title">Assinie</h3>
                    <p>Assinie est une localité du sud-est de la Côte d'Ivoire et appartenant au département d'Adiaké.</p>
                    <a href="https://fr.wikipedia.org/wiki/Assinie" class="btn btn-primary">Voir plus</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6">
            <div class="card mb-3 shadow">
                <img src="img/jacquevilleb.jpg" class="card-img-top"  alt="">
                <div class="card-body">
                    <h3 class="card-title">Jacqueville</h3>
                    <p>Jacqueville est le chef lieu du Département de Jacqueville en Côte d'Ivoire, dans la région des Lagunes.</p>
                    <a href="https://fr.wikipedia.org/wiki/Jacqueville_(C%C3%B4te_d'Ivoire)" class="btn btn-primary">Voir plus</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6">
            <div class="card mb-3 shadow">
                <img src="img/sassandrab.jpg" class="card-img-top"  alt="">
                <div class="card-body">
                    <h3 class="card-title">Sassandra</h3>
                    <p>Sassandra est une ville de Côte d'Ivoire, au bord du golfe de Guinée à l'embouchure du fleuve Sassandra.</p>
                    <a href="https://fr.wikipedia.org/wiki/Sassandra" class="btn btn-primary">Voir plus</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6">
            <div class="card mb-3 shadow">
                <img src="img/gbassam.jpg" class="card-img-top"  alt="">
                <div class="card-body">
                    <h3 class="card-title">Grand-Bassam</h3>
                    <p>Grand-Bassam est une ville historique et une ancienne capitale de la Côte d'Ivoire.</p>
                    <a href="https://fr.wikipedia.org/wiki/Grand-Bassam" class="btn btn-primary">Voir plus</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6">
            <div class="card mb-3 shadow">
                <img src="img/sanspedro.jpg" class="card-img-top"  alt="">
                <div class="card-body">
                    <h3 class="card-title">San-Pédro</h3>
                    <p>San-Pédro est une ville krou Sud-Ouest de la Côte d'Ivoire.</p>
                    <a href="https://fr.wikipedia.org/wiki/San-P%C3%A9dro" class="btn btn-primary">Voir plus</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6">
            <div class="card mb-3 shadow">
                <img src="img/fresco.jpg" class="card-img-top"  alt="">
                <div class="card-body">
                    <h3 class="card-title">Fresco</h3>
                    <p>Fresco ou localement Koyiri est une ville de Côte d'Ivoire située au sud-ouest. </p>
                    <a href="https://fr.wikipedia.org/wiki/Fresco_(C%C3%B4te_d%27Ivoire)" class="btn btn-primary">Voir plus</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 mb-3">
    <div class="row">
        <div class="col-lg-6 col-sm-6">
            <img src="img/img11.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 col-sm-6 text-center mt-5">
            <h3 class="">Nos Agents Immobiliers</h3>
            <h4>Alexandra.Bidicte MOUSSA VEKETO</h4>
            <p>Confiez-nous la réservation de votre appartement avant votre arrivée afin de profiter d'un séjour inoubliable.</p>
        </div>
    </div>

    <!--FORMUALIRE DE CONTACT  -->
    <div class="container mt-3" id="contact">
        <h2 class="text-center mt-5 mb-3"> Nous contacter pour une visite</h2>
        <div class="row">
            <div class="col">
                <form action="index.php" method="POST">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <span style="color: rgb(224, 21, 21); font-weight: bold;">*</span><label for="nom" class="form-label">Nom:</label>
                            <input type="text" id ="nom" name="nom" pattern="[a-zA-Z0-9À-ž\s]+" class="form-control" placeholder="Veuillez entrez votre nom svp" aria-label="nom" required="required" autocomplete="off">
                        </div>
                        <div class="col-lg-6 col-md-6" >
                            <span style="color: rgb(224, 21, 21); font-weight: bold;">*</span><label for="prenom" class="form-label">Prénom:</label>
                            <input type="text" id="prenom" name="prenom" pattern="[a-zA-Z0-9À-ž\s]+" class="form-control" placeholder="Veuillez entrer votre prénom svp" aria-label="prenom" required="required" autocomplete="off">
                        </div>
                        <div class="col-lg-12 col-md-6">
                           <span style="color: rgb(224, 21, 21); font-weight: bold;">*</span><label for="email" class="form-label">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Veuillez entrer votre email svp" required="required" autocomplete="off">
                        </div>
                        <div class="col-lg-12">
                           <span style="color: rgb(224, 21, 21); font-weight: bold;">*</span><label for="message" class="form-label">Message:</label>
                            <textarea class="form-control" id="message" name="message" pattern="[a-zA-Z0-9À-ž\s]+" placeholder="Entrer votre message" required="required"></textarea>
                            
                        </div>
                      <div class="col mt-3 text-center">
                          <button class="btn btn-primary" name="enregistrer">Envoyer</button>
                      </div>
                </div>
                </form>
        </div>
    </div>
<div class="container mt-3">
    <?php require_once ('php/formulaire.php');  ?>
</div>

    <!-- FOOTER -->
    <div class="container-fluid p-4 footer">
        <div class="row">
            <div class="col">
                <!-- Copyright -->
                    <div class="text-center p-3">
                        © 2021 Copyright
                        <p class="text-primary">ByAlexandraMoussaVeketo</p>
                    </div>
            </div>
        </div>
    </div>
</div>


 <!--JS BOOTSTRAP  -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> 
<!-- JS -->
<script src="js/script.js"></script>


</body>
</html>