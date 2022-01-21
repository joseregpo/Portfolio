<?php

        include('BDD_PDO.php');
        $cnx=connection('ppe2');

        if($cnx){
        $result = $cnx->prepare('INSERT INTO adherents ( idtarif, nomadherent, prenomadherent, datenaissance, adresse, ville, codepostal, email, mdp) 
        VALUES (:idtarif, :nomadherent, :prenomadherent, :datenaissance, :ville, :adresse, :codepostal, :email, :Mdp)');

        
        $result->bindParam(':nomadherent', $nom, PDO::PARAM_STR);
        $result->bindParam(':idtarif', $idtarif, PDO::PARAM_INT);
        $result->bindParam(':prenomadherent', $prenom, PDO::PARAM_STR);
        $result->bindParam(':datenaissance', $birthday, PDO::PARAM_STR);
        $result->bindParam(':adresse', $adresse, PDO::PARAM_STR);
        $result->bindParam(':ville', $ville, PDO::PARAM_STR);
        $result->bindParam(':codepostal', $codepostal, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':Mdp', $Mdp, PDO::PARAM_STR);

        $nom = $_POST["nom"]; 
        $prenom = $_POST["prenom"];
        $birthday = $_POST["birthday"]; 
        $adresse = $_POST["Adresse"];
        $ville = $_POST["ville"];
        $codepostal = $_POST["codepostal"];
        $email = $_POST["email"];
        $Mdp = $_POST["Mdp"];


        $time = strtotime( $birthday);
        $myDate = date( 'y-m-d', $time );
        $birthday = $myDate;
        
        //An example date of birth.
        $userDob = $birthday;
        //Create a DateTime object using the user's date of birth.
        $dob = new DateTime($userDob);
        //We need to compare the user's date of birth with today's date.
        $now = new DateTime();
        //Calculate the time difference between the two dates.
        $difference = $now->diff($dob);
        //Get the difference in years, as we are looking for the user's age.
        $age = $difference->y;
        if ($age < 18 && $age > 12){
            $idtarif = 9;
        }
        if ($age > 18 && $age < 26){
            $idtarif = 4;
        }
        if ($age < 12){
            $idtarif = 8;
        }
        if ($age > 26){
            $idtarif = 1;
        }
        
        $result->execute();

        
        echo '<p>'.$result->rowCount()." personne inscrit <p>";
        echo "<p>Il s'agit de $prenom $nom habitant à $adresse $ville $codepostal et son age est : $age</p>";
        echo '<p>Son identifant est : '.$cnx->lastInsertId().'</p>'; // Dernier id autoincrémenté inséré

        }
        else
        {
            echo "error";
        }

        deconnection("ppe2");

?>