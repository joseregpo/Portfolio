
<?php 

function connection($nombd){
        
        $server="localhost";
        $user="root";
        $passwd="";

        try{
            $cnx= new PDO("mysql:host=localhost;dbname=$nombd",$user,$passwd);
            $cnx-> exec("SET CHARACHTER SET utf8");
            echo 'Connected<br>';
            return $cnx;
        }
        catch(PDOException $e){
            print "Erreur :".$e->getMessage().'<br>';
            die();
            return 0;
        }
}


function deconnection($nombd){
        $nombd=NULL;
}


?>