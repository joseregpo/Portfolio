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
                  <li class=""><a href="#Calendrier">Calendrier</a></li>
                  <li class=""><a href="#Evenements">Prochaine Manifestations</a></li>
                  <li class="" ><a href="../php/PageMembre.php">Page Membre</a></li>
                  <?php 
                  session_start();
                  if(isset($_SESSION['utilisateur'])){?>
                   <li class=""><a href="../ppe2/php/logout.php">Deconnexion</a></li>   
                  <?php }else{ ?>
                    <li class=""><a href="../ppe2/sites/connexion.php">Connexion</a></li>
                  <?php }?>
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
                <h2 class="bnr-sub-title">Calendrier de cours et evenements</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Calendrier-->
    <br>
    <br>
    <section id="Calendrier">
      <div class="">
    <table class="table table-dark">
      <thead class="thead-dark">
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <th class= "text-center">
            Calendrier tout l'anée
          </th>
        </tr>
      </thead>
        <tr>
          <td>Lundi</td>
          <td> De 15h au 18h</td>
          <td>Cours Franco-Anglais</td>
          <td>De 17h au 20h</td>
          <td>Cours Franco-Espagnole</td>
          <td>De 18h jusqu'au 20h</td>
          <td>Cours Français</td>
        </tr>
         <tr>
          <td> Mardi</td>
          <td> De 15h au 18h</td>
          <td>Cours Franco-Anglais</td>
          <td>De 17h au 20h</td>
          <td>Cours Franco-Allenmand</td>
          <td>De 18h jusqu'au 20h</td>
          <td>Cours Français</td>
        </tr>
        <tr>
          <td>Mercredi</td>
          <td>De 15h jusqu'au 18h</td>
          <td>Cours Franco-Anglais</td>
          <td>De 17h jusqu'au 20h</td>
          <td>Cours Franco-Espagnole</td>
          <td>De 18h jusqu'au 20h</td>
          <td>Cours Français</td>
        </tr>
        <tr>
          <td>Jeudi</td>
          <td>De 15h jusqu'au 18h</td>
          <td>Cours Franco-Allenmand</td>
          <td>De 17h jusqu'au 20h</td>
          <td>Cours Franco-Espagnole</td>
          <td> De 18h jusqu'au 20h</td>
          <td>Cours Français</td>
        </tr>
        <tr>
          <td>Vendredi</td>
          <td>De 15h jusqu'au 18h</td>
          <td>Cours Franco-Anglais</td>
          <td>De 17h jusqu'au 20h</td>
          <td>Cours de Français</td>
          <td>De 22h jusqu'au</td>
          <td>Cours Franco-Anglais</td>
        </tr>
        <tr>
          <td>Samendi</td>
          <td>De 15h jusqu'au 18h</td>
          <td>Cours Franco-Anglais</td>
          <td>De 17h jusqu'au 20h</td>
          <td>Cours de Français</td>
          <td>De 22h jusqu'au</td>
          <td>Cours Franco-Anglais</td>
        </tr>
        <tr>
          <td>Dimanche</td>
          <td>De 15h jusqu'au 18h</td>
          <td>Cours Franco-Anglais</td>
          <td>De 17h jusqu'au 20h</td>
          <td>Cours de Français</td>
          <td>De 22h jusqu'au</td>
          <td>Cours Franco-Anglais</td>
        </tr>
    </table>
  </div>
  <!--------------------------------------------------------------------------------->
  <section id="contact" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center white">
            <h2 class="service-title pad-bt15">Section des statiquites</h2>
            <p class="sub-title pad-bt15">Voici les Stats des toutes nos Adherents</p>
            <hr class="bottom-line white-bg">
            <!------------------php section------------------>
              <?php
            // On établit la connexion
                require_once('../php/BDD_PDO.php');
                $cnx=connection('ppe2'); 
                    if($cnx) { 
                      //requette 1 Ville
                        $req=$cnx->prepare("SELECT COUNT(*) as 'effectif' FROM adherents WHERE adresse = :uneVille"); 
                        $uneVille = "Nimes";
                        $req->bindParam(':uneVille', $uneVille, PDO::PARAM_STR);
                        $req->execute();
                        $ligne=$req->fetch(PDO::FETCH_ASSOC);
                        //requette 2 JTotal
                        $req2=$cnx->prepare("SELECT COUNT(*) as 'Total' FROM adherents"); 
                        $req2->execute();
                        $ligne2=$req2->fetch(PDO::FETCH_ASSOC);
                        //requette 3 sections
                        /*$req3=$cnx->prepare("SELECT COUNT	(*),	 (YEAR(DATE()) - YEAR (datenaissance)) AS 'Adults' FROM	adherents WHERE (YEAR(DATE()) - YEAR (datenaissance)) < 26");
                        $req3->execute();
                        $ligne3=$req3->fetch(PDO::FETCH_ASSOC);    */  
                        echo "<br><p class='sub-title pad-bt15'>Nombre total d'adherents: <br><br>".$ligne2['Total']."</p>";
                        echo "<p class='sub-title pad-bt15'>Nombre de membres provenant de $uneVille :<br><br>".$ligne['effectif']."</p>";
                        /*echo "Nombre de Adultes Inscrits : ".$ligne3['Adults'];*/
                    }else{ 
                        echo "Echec de la connexion";
                    }
              ?>
          </div>
        </div>
      </div>
      <br>
      <br>
      <?php
                    $result = $cnx->prepare('SELECT * FROM adherents;');
                    $result->execute();
                      if($result->rowCount()>0) { 
                          echo "<table border=\"2\" class=\"table table-dark\">"; 
                          echo "<tr>"; 
                            echo "<th>Id</th>";
                            echo "<th>Nro de Categorie</th>"; 
                            echo "<th>Nom</th>"; 
                            echo "<th>Prénom</th>";
                            echo "<th>Date de naissance</th>"; 
                            echo "<th>Adressse</th>";  
                            echo "<th>Ville</th>"; 
                            echo "<th>Code Postal</th>"; 
                          echo "</tr>"; 
                    while ($donnees = $result->fetch()) { 
                          echo "<tr>"; 
                              echo "<td>".$donnees['idadherent']."</td>";
                              echo "<td>".$donnees['idtarif']."</td>"; 
                              echo "<td>".$donnees['nomadherent']."</td>"; 
                              echo "<td>".$donnees['prenomadherent']."</td>";
                              echo "<td>".$donnees['datenaissance']."</td>";
                              echo "<td>".$donnees['adresse']."</td>";   
                              echo "<td>".$donnees['ville']."</td>";
                              echo "<td>".$donnees['codepostal']."</td>";  
                              echo '</tr>'; 
                      } 
                    echo "</table>"; 
                    } 
                      else{ 
                            echo "Aucun enregistrement, désolé"; 
                      } 
                      $result2 = $cnx->prepare('SELECT * FROM adherents WHERE idtarif = 4 ;');
                      $result2->execute();
                      echo "<table border=\"2\" class=\"table table-dark\">";
                      while ($donnees = $result2->fetch()) { 
                        echo "<tr>";
                        echo "<th>Nom</th>"; 
                       echo "<th>Nro de Categorie</th>";
                       echo '</tr>';  
                       echo "<tr>";
                      echo "<td>".$donnees['idtarif']."</td>";
                      echo "<td>".$donnees['nomadherent']."</td>"; 
                      echo '</tr>';  
                    } 
                    echo "</table>"; 
                     
                        
                      /*
                    echo "<br>";
                    echo "<table border=\"2\" class=\"table table-dark\">"; 
                    //entête du tableau 
                          echo "<tr>"; 
                            echo "<th>Nombre de Adultes Inscrits</th>";
                            echo "<th>Nombre de Jeunes Inscrits</th>"; 
                            echo "<th>Nombre d'enfants Inscrits</th>"; 
                            echo "<th>Nombre d'Adolescentes Inscrits</th>";
                          echo "</tr>"; 
                          echo "<tr>"; 
                              echo "<td>".$adultes."</td>";
                              echo "<td>".$jeunes."</td>"; 
                              echo "<td>".$enfants."</td>"; 
                              echo "<td>".$ados."</td>";
                              echo '</tr>'; 
                          echo "</table>";*/
                    deconnection('ppe2');
            ?>
    </section>
  <!-------------------------------------------------------------------------------->
</section>
  <section id="Evenements" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">Prochaines Évenements</h2>
            <p class="sub-title pad-bt15">Regardez et profitez de tous nos événements <br>en vous inscrivant sur un ou plusieurs des nos ateliers ou courses</p>
            <hr class="bottom-line">
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="blog-sec">
              <div class="blog-img">
                <a href="../index.html">
                  <img src="../img/blog01.jpg" alt="" class="img-responsive">
                </a>
              </div>
              <div class="blog-info">
                <h2>Pour les gens qui veulent une experience dans la nature</h2>
                <p>Cannotage sur la rivière de la gard en groupe, le 15 mai.<br> Il faut s'inscrire pour participer</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="blog-sec">
              <div class="blog-img">
                <a href="../index.html">
                  <img src="../img/blog02.jpg" alt="" class="img-responsive">
                </a>
              </div>
              <div class="blog-info">
                <h2>Pour les gens qui veulent connaître la ville de Nîmes</h2>
                <p>Promenade sur l'esplanade feucheres et les jardins de la fontaine<br>le 7 fèvrier, avec tous les autres membres des engagés à la maison de la culture.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="blog-sec">
              <div class="blog-img">
                <a href="../index.html">
                  <img src="../img/blog03.jpg" alt="" class="img-responsive">
                </a>
              </div>
              <div class="blog-info">
                <h2>Cafe linguistique</h2>
                <p>Le Vendredi 25 Janvier au café olive dans le boulevard victor hugo de Nîmes <br> Gens qui ne sont pas inscrit au club international sont aussi bienvenues!.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer id="footer">
      <div class="container">
        <div class="row text-center">
          <div class="credits">
            Designed by <a>Perez Jose</a>
          </div>
        </div>
      </div>
    </footer>
  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery.easing.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/wow.js"></script>
  <script src="../js/jquery.bxslider.min.js"></script>
  <script src="../js/custom.js"></script>
  <script src="../contactform/contactform.js"></script>
  <script src="../contactform/Calcul.js"></script>
  <script src="../js/map.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
</body>
</html>
