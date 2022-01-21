// On recupere les categories 
let Cat_list
const xhr_Cat = new XMLHttpRequest();
xhr_Cat.open("get", "https://mi-phpmut.univ-tlse2.fr/~21_L2_PROJET/getCatParoles.php");
xhr_Cat.onreadystatechange = function () {
    if (xhr_Cat.readyState === 4 && xhr_Cat.status === 200) {
        response = JSON.parse(xhr_Cat.responseText);
        Cat_list = response.resultats;
        Cat_list.forEach((cate) => {
          Categ_Box.innerHTML += "<li><input type=\"radio\" name=\"ChoixJeux\" id=\""+cate.cat+"\"><label for=\""+cate.cat+"\">"+cate.intitule+"</label></li>"
        });
        }
    };
xhr_Cat.send();
// On recupere les chanteurs
let TimerInterval
let SendResults = document.querySelector("#SendResults")
let inputNom = document.querySelector("#NomJoeur")
let inputPrenom = document.querySelector("#PrenomJoeur")
let NumberJoueur = document.querySelector("#NumberJoueur")
const Choix = document.querySelector("#Choix")
const Resultat = document.querySelector("#Resultat")
const Categ_Box = document.querySelector("#Choix_Cat")
let Points = 0;
let round = 0;
let alreadyUsed = {};
let randomSelector, SelectedCategorie,paroles,SelectedListChanteur = null;

// Choix Parole prend un indice et la categorie choisi et affiche une nouvelle phrase
function ChoixParole(ListeParoles) {
  //On choisit les paroles à afficher à l'écrain
  document.querySelector("#Question").innerHTML = "La phrase est : " + ListeParoles[round].parole
}

// SubmitCategorie() s'occuppe des gerer la selection de la categorie du jeu
function SubmitCategorie(cate){
  const xhr_Paroles = new XMLHttpRequest();
  xhr_Paroles.open("get", "https://mi-phpmut.univ-tlse2.fr/~21_L2_PROJET/getParoles.php?cat="+cate+"&nb=6");
  xhr_Paroles.onreadystatechange = function () {
      if  (xhr_Paroles.readyState === 4 && xhr_Paroles.status === 200) {
          response = JSON.parse(xhr_Paroles.responseText);
          paroles = response.resultats;
          ChoixParole(paroles)
          LancerQuestionRandom(paroles)
          }
      };
  xhr_Paroles.send();
}
//LancerQuestionRanom() s'occupe de afficher une parole random dans la liste de la categorie choisi
function LancerQuestionRandom(paroles) {
  let position = Math.floor(Math.random() * paroles[round].lesAutres.length)
  ListeChanteur = paroles[round].lesAutres
  ListeChanteur.splice(position, 0, paroles[round].nom)
  Choix.innerHTML = ""
  // On ajoute les options correspondant pour le questionnaire
  ListeChanteur.forEach((Chanteur,index) => {
    Choix.innerHTML += "<li><input type=\"radio\" name=\"ChoixJeux\" id=\"Choix_"+(index)+"\" value=\""+Chanteur+"\"><label for=\"Choix_"+(index)+"\">" + Chanteur + "</label></li>";
  });
}
// AfficherResultatJeu() Affice le resultat final du jeu
function AfficherResultatJeu() {
  window.clearInterval(TimerInterval);
  document.querySelector("#jeu").style.display = "none"
  document.querySelector("#ResultatJeu").style.display = "flex"
  document.querySelector("#PoinstFinal").innerHTML = "Vous avez Fait un total de : <span class=\"points\">" + Points + "</span> points ! Felicitations"
}

// Gestion du chrono 
function afficherTimer() {
  document.querySelector("#timer").textContent = parseInt(document.querySelector("#timer").textContent) + 1;
}
// Selection() s'occupe de gerer la selection d'une phrase et
// Affiche un resultat selon la selection
function Selection(paroles) {
  let found = false;
  //let position
  let i = 0
  while( i < (paroles[round].lesAutres.length) && found == false){
    if ((document.querySelector("#Choix_"+i).checked == true) && (document.querySelector("#Choix_"+i).value) == paroles[round].nom){
      found = true
    }
    i++
  }
  if (found == true){
    Resultat.innerHTML = "<span class=\"victoire\">cooool !!!</span>";
    Points++
  }else{
    Resultat.innerHTML = "<span class=\"loser\">C'est Fauuuuuxxx !!!! booooooo</span>";
  }
  round++
  document.querySelector("#round").innerHTML = "Vous êtez dans le round : <span class=\"round\">" + (round + 1)
  document.querySelector("#points").innerHTML = "Vous avez : <span class=\"points\">" + Points + " Points !"
}
// Change la visibilitée entre les Inputs des données du joueur et les choix des catégories
function ShowCats() {
    if (inputNom.value != "" && inputPrenom.value != "" && NumberJoueur.value !=""){
      document.querySelector("#DonneJoueur").style.display = "none"
      document.querySelector("#ChoixCatMusique").style.display = "flex"
    }else{
      document.querySelector("#warning1").style.display = "flex";
    }
}
// Traitement d'envoi des résultats
function  SendResultsFunc() {
  const xhr_Post = new XMLHttpRequest();
  xhr_Post.open("post", "https://mi-phpmut.univ-tlse2.fr/~21_L2_PROJET/postChampion.php");
  xhr_Post.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr_Post.onreadystatechange = function () {
      if (xhr_Post.readyState === 4 && xhr_Post.status === 200) {
          const reponse = JSON.parse(xhr_Post.responseText);
          document.location.href="Champions.html";
      }
  };
  const timer = document.querySelector("#timer").textContent;
  const score = Points.toString();
  const noEtud = document.querySelector("#NumberJoueur").value;
  donnees = "noPart=" + noEtud + "&score=" + score +"&temps=" + timer;
  xhr_Post.send(donnees);
}
// Ici je met mes listeners
SendResults.addEventListener("click", SendResultsFunc);
document.querySelector("#ShowCategorie").addEventListener("click", ShowCats);
document.querySelector("#SubmitCategorie").addEventListener("click", function() {
  Categ_Box.childNodes.forEach(child => {    
    if (child.childNodes.length > 0){
      if (child.childNodes[0].checked){
        document.querySelector("#ChoixCatMusique").style.display = "none"
        document.querySelector("#jeu").style.display = "flex"
        SelectedCategorie = child.childNodes[0].id
          //Rappel du chrono chaque seconde
        TimerInterval = window.setInterval(afficherTimer, 1000); 
        SubmitCategorie(SelectedCategorie)  
      }else{
        document.querySelector("#warning2").style.display = "flex"
      }
    }
  });

});

document.querySelector("#SubmitChoice").addEventListener("click", function() {
  if (round < 4) {
    Selection(paroles)
    ChoixParole(paroles)
    LancerQuestionRandom(paroles)
  }else {
    AfficherResultatJeu()
  }
}); 
