//  Formulaire 
function formulaire(nomForm){
    var prixAn      =   50;
    var NombAdults  =   nomForm.Adults.value ;
    var NomEnfants  =   nomForm.enfants.value;
    var NomAdos     =   nomForm.Ados.value;
    var NomJeunes   =   nomForm.jeunes.value;
    var AnJeunes = 50 - (50*0.10);
    var AnAdos = 50 - (50*0.20);
    var AnEnfants = 50 - (50*0.30);
    var PrixEnfants = NomEnfants * AnEnfants; 
    var PrixAdos    = NomAdos * AnAdos;
    var PrixAdultes = NombAdults * prixAn;
    var Prixjeunes  = NomJeunes * AnJeunes;
    var prixTotal   = PrixAdos + PrixAdultes + PrixEnfants + Prixjeunes;
    
    window.document.getElementById("PrixEnfants").innerHTML = PrixEnfants + "€" ;
    window.document.getElementById("PrixAdos").innerHTML =  PrixAdos + "€" ;
    window.document.getElementById("PrixAdultes").innerHTML =  PrixAdultes + "€" ;
    window.document.getElementById("Prixjeunes").innerHTML = Prixjeunes + "€" ;
    window.document.getElementById("prixTotal").innerHTML = prixTotal + " €";
    
}

// info
function nikos_over(){
   window.alert("Nikos mationni, 19 ans, Chef de manifestations au club international, eleve à la CCI et trés ambitieux");
}
function florian_over(){
    window.alert("Florian Romain, 18 ans, Chef d'ouvres au club international, eleve à la CCI et trés ambitieux");    
 }
 function theo_over(){
    window.alert("Theo Robert, 18 ans, meilleur employée de la maison de la culture, eleve à la CCI et trés ambitieux");   
 }
 function jose_over(){
    window.alert("Jose Gregorio Perez, trés passionée par l'informatique, 21 ans, foundateur du club international");   
 }
