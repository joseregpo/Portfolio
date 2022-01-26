<?php
// On établit la connexion
    require_once('BDD_PDO.php');
    $cnx=connection('pratique_1'); 
    
        if($cnx) { 
// --------------------------------------------------
// Exécution d'une requête statistique avec paramètres
// --------------------------------------------------
// Préparation de la requête
        $req=$cnx->prepare("SELECT COUNT(*) as 'effectif' FROM adherents WHERE ville = :uneVille"); 
// Définition des paramètres
        $uneVille = $_POST['ville'];
        $req->bindParam(':uneVille', $uneVille, PDO::PARAM_STR);
// Exécution de la requête
        $req->execute();
// Récupération des données sous la forme d'un tableau associatif indexé par le nom des colonnes
        $ligne=$req->fetch(PDO::FETCH_ASSOC);
        echo "<br> <p>Nombre de membres provenant de $uneVille : ".$ligne['effectif']."</p>";
    }else{ 
            echo "Echec de la connexion";
        } 
        deconnection('pratique_1');
?>