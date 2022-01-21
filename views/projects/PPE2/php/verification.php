<?php 

if (isset($_POST['utilisateur']) && isset($_POST['Mdp'])) { 
  
  require_once('../php/BDD_PDO.php');
  //include_once('../php/PageMembre.php');
    $cnx=connection('ppe2');
    include('PageMembre.php');
    $utilisateur= $_POST["utilisateur"]; 
    $Mdp = $_POST["Mdp"]; 
// on teste si nos variables sont définies 
    $query = $cnx->prepare("SELECT * FROM adherents WHERE email=:utilisateur AND mdp=:Mdp LIMIT 1;");
    $query->bindParam(":utilisateur", $utilisateur, PDO::PARAM_STR);
    $query->bindParam(":Mdp",$Mdp,PDO::PARAM_STR);
    $query->execute();
  //verification de la requete
            if ($query->fetch()) { 
  // Cas oui, demarrage de Sessien
                session_start (); 
  // enregirstrement de nom d'utilisateur
                $_SESSION['utilisateur'] = $utilisateur; 
  // redirection
                header ('location: pageMembre.php');
            }else {
    echo '<p>Membre non reconnu.<p>'; 
    echo '<meta http-equiv="refresh" content="0;URL=../sites/connexion.php">'; 
    } 
} else {}


?> 