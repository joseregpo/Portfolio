<?php 

    session_start();
// On récupère nos variables de session 
    if (isset($_SESSION['utilisateur'])) { 
 // On teste pour voir si nos variables ont bien été enregistrées 
 ?>
       <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La Maison de la Culture</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Orbitron" > 
    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/animate.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>
<body>
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
                  <li class="active"><a href="../index.php">Accueil</a></li>
                  <li class=""><a  href="../php/logout.php">Déconnection </a></li>
                  <li class=""><a href="../sites/Calendrier">Calendrier</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </header>
        <div class="wrapper">
          <div class="container">
            <div class="row">
              <div class="banner-info text-center wow fadeIn delay-05s">
                <h1 class="bnr-title">Bienvenue</h1>
                <?php
                echo '<h2 class="bnr-sub-title">'.$_SESSION['utilisateur'].'</h2>';
?>
                <h2 class="bnr-title">Sur Votre Page Membre</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
} 
else { 
        echo "Vous n'avez pas l'autorisation d'accéder à cette page."; 
} 

?> 

