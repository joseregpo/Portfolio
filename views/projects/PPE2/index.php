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
  <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

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
                  <li class="active"><a href="#main-header">Accueil</a></li>
                  <li class=""><a href="#Info">Info</a></li>
                  <li class=""><a href="#service">Courses</a></li>
                  <li class=""><a href="#portfolio">Les Ateliers</a></li>
                  <li class=""><a href="#testimonial">Experiences</a></li>
                  <li class=""><a href="#blog">Blog</a></li>
                  <li class="" ><a href="../PPE2/Sites/Calendrier.php">Calendrier</a></li>
                  <li class="" ><a href="../PPE2/php/PageMembre.php">Page Membre</a></li>
                  <li class=""><a href="#contact">Contactez Nous</a></li>
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
                <h2 class="bnr-sub-title">Bienvenue sur le club international de Nimes</h2>
                <p class="bnr-para">Profitez d'apprendre les differents langues du monde et des connaître de gens de differents origins</p>
                <div class="brn-btn">
                  <a href="#contact" class="btn btn-download">Inscrivez vous!</a>
                  <a href="#service" class="btn btn-more">Lire plus</a>
                </div>
                <div class="overlay-detail">
                  <a href="#feature"><i class="fa fa-angle-down"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ HEADER-->
    <!---->
    <section id="Info" class="section-padding wow fadeIn delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img alt="" src="img/ser01.png">
              </div>
              <h3 class="pad-bt15">Des bonnes connaisances</h3>
              <p>Profitez d'apprendre des choses trés interessantes et amusez-vous au même temps!</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img alt="" src="img/ser02.png">
              </div>
              <h3 class="pad-bt15">Nouvelles rencontres</h3>
              <p>C'est le moment de cherche ce nouvelle ami qui va vous faire experimenter des experiences incroyables, ou peut être la personne qui vous acompagnera le reste de votre vie!</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img alt="" src="img/ser03.png">
              </div>
              <h3 class="pad-bt15">low-cost</h3>
              <p>En revanche des sites de rencontre ou des cours de langues privées, le club international de la ville de Nîmes n'a pas de coûts élévés pour que toute le monde peut participer aux activitées sans limitations économiques</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img alt="" src="img/ser04.png">
              </div>
              <h3 class="pad-bt15">Secure</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!---->
    <!---->
    <section id="service" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">Ce qu'on fait</h2>
            <p class="sub-title pad-bt15">On met ensembles de gens de differents nationalitées pour les reunir avec des gens françaises et faire un mélange de cultures.</p>
            <hr class="bottom-line">
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3><span>A</span>nglais</h3>
              <p>Apprenez la langue la plus populaire du monde en participant à nos soirées multiculturelles et en vous amusant!</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3><span>F</span>rançais</h3>
              <p>La langue du romance, la langue de l'art et de la béauté, inscrivez vous et rencontrez les gens les plus fières du monde</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3><span>E</span>spagnol</h3>
              <p>Venez apprenez l'espagnol en profitant de la dance latina, venez connaître tout les choses peu connus de la culture hispane!</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3><span>A</span>llemande</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!---->
    <!---->
    <!---->
    <!---->
    <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">Les Ateliers</h2>
            <p class="sub-title pad-bt15">On reuni nos abonées <br>grâce aux differents ateliers qu'on organise<br>tout les programmes ont le même
            coût par an de 50 euros pour les adultes,<br> offerte pour les enfants de moins de 12 ans <br> 
            35 euros pour les enfants entre 12 et 18 ans <br>
            et 45 euros pour les jeunes entre 16 et 18 ans<br>
            </p>
            <hr class="bottom-line">
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
            <figure>
              <img alt="" src="img/port01.jpg" class="img-responsive w70">
              <figcaption>
                <h2>Adhésion Anglo-français</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
            <figure>
              <img  alt="" src="img/port02.jpg" class="img-responsive w70">
              <figcaption>
                <h2>Adhésion hispano-français</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
            <figure>
              <img  alt="" src="img/port03.jpg" class="img-responsive w70">
              <figcaption>
                <h2>Adhésion franco-allemand</h2>
                <p>La meilleur façon d'apprendre l'allemand c'est de partager avec les gens qui ont la culture allemand, profitez d'un inmersion directe dans nos differents activités dans le groupe franco-allemand. Disponible en forfait mensuelle seulement.</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
            <figure>
              <img  alt="" src="img/port04.jpg" class="img-responsive w70">
              <figcaption>
                <h2>Adhésion double hispano-allemand</h2>
                <p>Avec cette adhésion vous pourriez partarger avec des gens qui parle au moins un de ces 2 langues, en plus vous aurez de reduction dans nos autres ateliers dans le club international. Disponible en forfait annuelle ou mensuelle.</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
            <figure>
              <img alt="" src="img/port05.jpg" class="img-responsive w70">
              <figcaption>
                <h2>Adhésion double anglo-allemand</h2>
                <p>Avec cette adhésion vous pourriez partarger avec des gens qui parle au moins un de ces 2 langues, en plus vous aurez de reduction dans nos autres ateliers dans le club international. Disponible en forfait annuelle ou mensuelle.</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
            <figure>
              <img alt="" src="img/port06.jpg" class="img-responsive w70">
              <figcaption>
                <h2>Adhésion totale</h2>
                <p>Cette adhésion vous permettre de pouvoir participer à tous nos ateliers dans le club international, avec celui-ci vous serez informé de tout info pendant toute l'anée. Disponible en forfait annuelle ou mensuelle.</p>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </section>
    <!---->
    <!---->
    <section id="testimonial" class="wow fadeInUp delay-05s">
      <div class="bg-testicolor">
        <div class="container section-padding">
          <div class="row">
            <div class="testimonial-item">
              <ul class="bxslider">
                <li>
                  <blockquote>
                    <img alt="" src="img/Nikos.jpg" class="img-responsive w70"  onmouseover="nikos_over()">
                    <p>De nouvelles rencontres et plus d'autres choses, c'est ce qu'on trovue
                      au club international </p>
                    
                  </blockquote>
                  <small>Mationi Nikos, CIO</small>
                </li>
                <li>
                  <blockquote>
                    <img  alt="" src="img/Florian.jpg" class="img-responsive w70" onmouseover="florian_over()">
                    <p>Être polilingue, égal à faire parti des plusieurs cultures, une éxperience de vie </p>
                  </blockquote>
                  <small>Roman Florian, CIO</small>
                </li>
                <li>
                  <blockquote>
                    <img  alt="" src="img/theo.jpg" class="img-responsive w70" onmouseover="theo_over()">
                    <p>Travailler ici c'est des meilleures decisions de ma vie, j'ai trouvé ma copine dans le club international</p>
                  </blockquote>
                  <small>Robert Theo, Employé</small>
                </li>
                <li>
                  <blockquote>
                    <img alt="" src="img/pic-cv-2019.jpg" class="img-responsive w70" onmouseover="jose_over()">
                    <p>C'est ici oú le monde commence!</p>
                  </blockquote>
                  <small>Perez Jose, Foundateur.</small>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!---->
    <section id="blog" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">Les Tarifs</h2>
            <p class="sub-title pad-bt15">Consultez tous les tarifs<br>des nos cours!</p>
            <hr class="bottom-line">
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="blog-sec">
              <div class="blog-img">
                <a href="">
                  <img  alt="" src="img/blog01.jpg" class="img-responsive w70">
                </a>
              </div>
              <div class="blog-info">
                <h2>Tarifs pour les adultes</h2>
                <div class="blog-comment">
                  <p>Par année
                  <span><a href="#"><i class="fa fa-comments"></i></a> 50 euros</span>
                  </p>
                  <p>Par mois
                  <span><a href="#"><i class="fa fa-comments"></i></a> 4.1 euros</span>
                  </p>
                </div>
                <br><p>Les Adults ont le prix complet de 50 euros par année, possible aussi de prendre un engagement mensuelle à l'Accueil de la maison de la culture.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="blog-sec">
              <div class="blog-img">
                <a href="">
                  <img  alt="" src="img/blog02.jpg" class="img-responsive w70">
                </a>
              </div>
              <div class="blog-info">
                <h2>Tarifs pour les Adolescentes</h2>
                <div class="blog-comment">
                  <p>Par année
                  <span><a href="#"><i class="fa fa-comments"></i></a> 40 euros</span>
                  </p>
                  <p>Par mois
                  <span><a href="#"><i class="fa fa-comments"></i></a> 3.3 euros</span>
                  </p>
                </div>
                <br><p>Les Adolescentes ont une reduction de 20% sur le prix de l'anée, également possible aussi de prendre un engagement mensuelle à l'Accueil de la maison de la culture.<br>
                les gens de entre 16 et 18 ans ont une reduction de 10% à la place.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="blog-sec">
              <div class="blog-img">
                <a href="">
                  <img alt="" src="img/blog03.jpg" class="img-responsive w70">
                </a>
              </div>
              <div class="blog-info">
                <div class="blog-info">
                  <h2>Tarifs pour les enfants</h2>
                  <div class="blog-comment">
                    <p>Par année
                    <span><a href="#"><i class="fa fa-comments"></i></a> 35 euros</span>
                    </p>
                    <p>Par mois
                    <span><a href="#"><i class="fa fa-comments"></i></a> 2.9 euros</span>
                    </p>
                  </div>
                  <br><p>Les enfants ont la plus intéressante reduction, celle-ci est de 30%, également possible aussi de prendre un engagement mensuelle à l'Accueil de la maison de la culture.</p>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    <!---->
      </div>
      </section>
    <section id="contact" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center white">
            <h2 class="service-title pad-bt15">Contactez Nous</h2>
            <p class="sub-title pad-bt15">Dans la formulaire à gauche vous pouviez estimer <br>le prix pour chaque personne et le prix total <br>
            avec celui à droite vous pouvez nous envoyer un message</p>
            <hr class="bottom-line white-bg">
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="loction-info white">
              <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>Place de la Maison Carrée<br>30000 Nîmes</p>
              <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>Maisondelaculture@Nimes</p>
              <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+33 07 83 60 72 19</p>
              <div class="col-md-6 col-sm-6 col-xs-12">
            <form method="post" name="prix" id="prix">
                Nombre d'adults
				<br>
				<input type="text" class="form-control" placeholder="Nombre d'adults" name="Adults" id="Adults"><br>
                Nombre d'enfants moins de 12 ans
				<br>
				<input type="text" class="form-control" placeholder="Nombre d'enfants moins de 12 ans" name="enfants" id="enfants"><br>
                Nombre d'enfants entre 12 et 16 ans
				<br>
				<input type="text" class="form-control" placeholder="Nombre d'enfants entre 12 et 16 ans" name="Ados" id="Ados"><br>
                Nombre d'enfants entre 16 et 18 ans
				<br>
				<input type="text" class="form-control" placeholder="Nombre d'enfants entre 16 et 18 ans" name="jeunes" id="jeunes"><br>
              <button type="button" class="btn btn-danger" onClick="formulaire(prix)"> Calculer le prix par an </button> 
              <button type="reset" class="btn btn-danger">Annuler</button>       
            </form>
            <br>
            <br>
            <form  method="POST"  action="../ppe2/php/INSCRIPTION.php" role="form" class="contactForm">
                <span class="sub-title">Inscrivez vous avec le formulaire ci-dessous</span><br>
                <br>
                <div class="col-md-6 padding-right-zero">
                  <div class="form-group">
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" data-rule="minlen:1" data-msg="Minimun 4 characteres" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prenom" data-rule="minlen:1" data-msg="minimun 8 characteres dans ce champ" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="birthday" id="birthday" placeholder="Date de naissance AAAA-MM-YY" data-rule="minlen:1" data-msg="minimun 8 characteres dans ce champ" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="Adresse" id="Adresse" placeholder="Adresse" data-rule="minlen:1" data-msg="minimun 8 characteres dans ce champ" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="ville" id="ville" placeholder="ville" data-rule="minlen:1" data-msg="minimun 8 characteres dans ce champ" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="codepostal" id="codepostal" placeholder="codepostal" data-rule="minlen:1" data-msg="minimun 8 characteres dans ce champ" />
                    <div class="validation"></div>
                  </div>
                </div><br>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="email" data-rule="minlen:1" data-msg="minimun 8 characteres dans ce champ" />
                    <div class="validation"></div>
                  </div>
                </div><br>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="password" class="form-control" name="Mdp" id="Mdp" placeholder="Mot de passe" data-rule="minlen:1" data-msg="minimun 8 characteres dans ce champ" />
                    <div class="validation"></div>
                  </div>
                </div><br>
                <button type="submit" class="btn btn-danger">S'Inscrire</button>
                <br/>
                <button type="reset" class="btn btn-danger">Annuler</button>    
            </form>
            </div>
            </div>
          </div>
           
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="contact-form">
              <div id="sendmessage">Inscription envoyée, Merci et à bientôt!</div>
              <div id="errormessage"></div>
              <form  method="post"  action="../php/formulaire.php" role="form" class="contactForm">
                <span class="sub-title">Envoyez-nous un message</span><br>
                <br>
                <div class="col-md-6 padding-right-zero">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nom et Prenom" data-rule="minlen:4" data-msg="Minimun 4 characteres" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Adresse Email" data-rule="email" data-msg="Adresse email invalide" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Ateliers à prendre" data-rule="minlen:4" data-msg="minimun 8 characteres dans ce champ" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="5"  data-msg="Please write something for us" placeholder="Autres Messages"></textarea>
                    <div class="validation"></div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-submit">Inscription</button><br/><br/>
                    <h4>Prix</h4>
                    <a class=prix>Le total pour les Adultes est de:</a>
                    <div class="text-prix"><div id="PrixAdultes"></div></div><br/>
                    <a class=prix>Le total pour les enfants est de:</a>
                    <div class="text-prix">
                    <div id="PrixEnfants"></div></div><br/>
                    <a class=prix>Le total pour les Adolescents est de:</a>
                    <div class="text-prix">
                    <div id="PrixAdos"></div></div><br/>
                    <a class=prix>Le total pour les Jeunes est de:</a>
                    <div class="text-prix">
                    <div id="Prixjeunes"></div></div><br/>
                    <a class=prix>Le total par an est de:</a>
                    <div class="text-prix">
                    <div id="prixTotal"></div></div><br/>
            </div>
            </form>
          </div>
        </div>
      </div>
    </section>
      <section>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2877.8508283615724!2d4.3539259155037735!3d43.838190879115345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b42da098916a27%3A0x852af3d137b29d9b!2sMaison+Carr%C3%A9e!5e0!3m2!1ses!2sfr!4v1544522866485" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
      </section>
   </body>         
    <!---->
    <!---->
    <footer id="footer">
      <div class="container">
        <div class="row text-center">
          <div class="credits">
            Designed by <a>Perez Jose</a>
          </div>
        </div>
      </div>
    
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
