<?php
    class C_ADHERENTS {
        public $nom;
        public $prenom;
        public $age;
        public $adresse;
        public $ville;
        public $codePostal;
        public $email;
        function __construct($nom,$prenom,$age,$adresse,$ville,$codePostal,$email)
       {
           $this->nom=$nom;
           $this->prenom=$prenom;
           $this->age=$age;
           $this->adresse=$adresse;
           $this->ville=$ville;
           $this->codePostal=$codePostal;
       }
    }
    class C_EVENEMENTS {
        public $idtarif;
        public $nomEv;
        public $date;
        public $adresse;
        function __construct($idtarif,$nomEv,$date,$adresse)
        {
            $this->idtarif=$idtarif;
            $this->nomEv=$nomEv;
            $this->date=$date;
            $this->adresse=$adresse;
        }
    }
?>