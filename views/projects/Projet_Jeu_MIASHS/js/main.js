
// Je declare Toutes mes Variables
const listeChanteurFR = ["Renaud","Johnny Halliday", "Etienne Daho", "Alain Souchon", "Alain Bashung", "Serge Gainsbourg", "Georges Brassens"]
const listeChanteurENG = ["Bob Marley", "Bob Dylan", "John Lennon", "The Jackson 5", "Bobby McFerrin"]
const CateFr = [
  {
    Chanteur :listeChanteurFR[0], 
    Paroles : "Te raconter la Terre",
    used : false
  },
  {
    Chanteur :listeChanteurFR[2], 
    Paroles : "Mais tout peut changer. Aujourd’hui est le dernier jour du reste de ta vie.",
    used : false
  },
  {
    Chanteur :listeChanteurFR[4], 
    Paroles : "on nous inflige des désirs qui nous affligent.",
    used : false
  },
  {
    Chanteur :listeChanteurFR[4], 
    Paroles : "J’ai crevé l’oreiller, j’ai du rêver trop fort. ",
    used : false
  },
  {
    Chanteur :listeChanteurFR[5], 
    Paroles : "Peut-on jamais savoir par où commence et quand finit l’indifférence.",
    used : false
  },
  {
    Chanteur :listeChanteurFR[6], 
    Paroles : "Je ne fais pourtant de tort à personne",
    used : false
  }
];
const CateENG = [
  {
    Chanteur :listeChanteurENG[0], 
    Paroles : "Get up, stand up, Stand up for your rights.",
    used : false
  },
  {
    Chanteur :listeChanteurENG[1], 
    Paroles : "Don't criticize what you can't understand.",
    used : false
  },
  {
    Chanteur :listeChanteurENG[2], 
    Paroles : "Imagine there's no countries.",
    used : false
  },
  {
    Chanteur :listeChanteurENG[3], 
    Paroles : "It’s easy as 1 2 3",
    used : false
  },
  {
    Chanteur :listeChanteurENG[4], 
    Paroles : "In every life we have some trouble",
    used : false
  }
];
const Choix = document.querySelector("#Choix")
const Resutlat = document.querySelector("#Resultat")
let CurrentNumber = Math.floor(Math.random() * 4)
let Points = 0;
let round = 1;
let SelectedCategorie = SelectedListChanteur = null;

// Je declare toutes mes fonctions
//LancerQuestionRanom() s'occupe de afficher une parole random dans la liste de la categorie choisi
function LancerQuestionRandom(ListeChanteurCategorie, Categorie) {
    ChoixParole(Categorie, CurrentNumber)
    Choix.innerHTML = ""
    // On ajoute les options correspondant pour le questionnaire
    for (let index = 0; index < ListeChanteurCategorie.length; index++) {
      Choix.innerHTML += "<li><input type=\"radio\" name=\"ChoixJeux\" id=\"Choix_" + index + "\"><label for=\"Choix1\">" + ListeChanteurCategorie[index] + "</label></li>";
    }   
}
// Choix Parole prend un indice et la categorie choisi et affiche une nouvelle phrase
function ChoixParole(ListeCategorie, index) {
    //On choisit les paroles à afficher à l'écrain
    document.querySelector("#Question").innerHTML = "La phrase est : " + ListeCategorie[index].Paroles
}
// Selection() s'occupe de gerer la selection d'une phrase et
// Affiche un resultat selon la selection
function Selection(ListeChoisi, CatChoisi) {
  let position = 0;
  for (let index = 0; index < ListeChoisi.length; index++) {
    if (document.querySelector("#Choix_"+index).checked == true){
      position = index
    }
  };
  if (ListeChoisi[position] == CatChoisi[CurrentNumber].Chanteur){
    Resutlat.innerHTML = "<span class=\"victoire\">cooool !!!</span>";
    CatChoisi[CurrentNumber].used = true
    Points++
  }else{
    Resutlat.innerHTML = "<span class=\"loser\">C'est Fauuuuuxxx !!!! booooooo</span>";
  }
  CurrentNumber = Math.floor(Math.random() * CatChoisi.length);
  if(CatChoisi[CurrentNumber].used == true && round < CatChoisi.length){
    while (CatChoisi[CurrentNumber].used == true){
      CurrentNumber = Math.floor(Math.random() * CatChoisi.length)
    }
  }
  round++
  document.querySelector("#round").innerHTML = "Vous êtez dans le round : <span class=\"round\">" + round
  document.querySelector("#points").innerHTML = "Vous avez : <span class=\"points\">" + Points + " Points !"
}
// SubmitCategorie() s'occuppe des gerer la selection de la categorie du jeu
function SubmitCategorie(){
  if (document.querySelector("#ChoixFR").checked == true){
    SelectedCategorie = CateFr
    SelectedListChanteur = listeChanteurFR
    LancerQuestionRandom(listeChanteurFR, SelectedCategorie)
  } else if (document.querySelector("#ChoixENG").checked == true){
    SelectedCategorie = CateENG
    SelectedListChanteur = listeChanteurENG
    LancerQuestionRandom(listeChanteurENG, SelectedCategorie)
  }
  // Agregar caso en el que el usuario no selecciona ninguna opcion
}
// AfficherResultatJeu() Affice le resultat final du jeu
function AfficherResultatJeu() {
  document.querySelector("#jeu").style.display = "none"
  document.querySelector("#ResultatJeu").style.display = "flex"
  document.querySelector("#PoinstFinal").innerHTML = "Vous avez Fait un total de : <span class=\"points\">" + Points + "</span> points ! Felicitations"
}
// Ici je met mes listeners
document.querySelector("#SubmitCategorie").addEventListener("click", function() {
  document.querySelector("#ChoixCatMusique").style.display = "none"
  document.querySelector("#jeu").style.display = "flex"
  SubmitCategorie()
});
document.querySelector("#SubmitChoice").addEventListener("click", function() {
  if (round < 5) {
    Selection(SelectedListChanteur, SelectedCategorie)
    ChoixParole(SelectedCategorie, CurrentNumber)
  }else {
    AfficherResultatJeu()
  }
}); 