<?php

        include_once('BDD_PDO.php');
        $sql= "SELECT * FROM etudiant";
        $sth = $dbh->query($sql);
        $result = $sth->fetchAll();

        foreach($result as $row){
            echo $row['nom'].", ";
            echo $row['prenom'].", ";
            echo $row['ville'].", ";
            echo $row['email'].", ";
            echo $row['cp']."<br>";
        }

        $dbh = NULL;


?>