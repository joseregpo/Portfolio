<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>La Maison de la Culture</title>

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:300,400,900,700italic,700,300,600">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Orbitron" > 
  <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/animate.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">

</head>

<body>
  <?php
session_start();
// On récupère nos variables de session 
    if (isset($_SESSION['utilisateur'])) { 
      echo 'Vous etes deja connecte';
    }
    else{
      ?>
  <div class="loader"></div>
  <div id="myDiv"></div>
    <!--HEADER-->
    <div class="header">
      <div class="bg-color">
        <header id="main-header">
          <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href="#">Ni<span class="logo-dec">mes</span></a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                  <li class=""><a href="../index.php">Accueil</a></li>
                  <li class="active"><a href="connexion.php">Connexion</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </header><br><br><br><br><br><br>
    <section id="contact" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center white">
            <h2 class="service-title pad-bt15">Connectez Vous!</h2>
            <form  method="POST"  action="../php/verification.php" role="form" class="contactForm"><br>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="utilisateur" id="utilisateur" placeholder="Votre email"/>
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="password" class="form-control" name="Mdp" id="Mdp" placeholder="Mot de Passe"/>
                    <div class="validation"></div><br>
                    <div class="col-md-12 text-center white">
                    <button type="submit" class="btn btn-danger">Se connecter</button>
                <button type="reset" class="btn btn-danger">Annuler</button>
                <br>
                </div>
                  </div>
                </div><br>
                    
            </form>
      </div>
      <footer id="footer">
      <div class="container">
        <div class="row text-center"><br><br>
          <div class="credits">
            Designed by <a>Perez Jose</a>
          </div>
        </div>
      </div>
      </div>
      </div>
      </footer>
   </body>         
    <!---->
    <!---->
    
    
    <!---->
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
  <script src="contactform/Calcul.js"></script>
  <script src="js/map.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

</footer>
</html>

    <?php }
    ?>
