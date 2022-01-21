// Les variables
let style = ""
let LesChampions
let ChampBox = document.querySelector("#ChampTable")
const xhr_Champs = new XMLHttpRequest();
xhr_Champs.open("get", "https://mi-phpmut.univ-tlse2.fr/~21_L2_PROJET/getChampions.php");
xhr_Champs.onreadystatechange = function () {
  if (xhr_Champs.readyState === 4 && xhr_Champs.status === 200) {
      const response = JSON.parse(xhr_Champs.responseText);
      LesChampions = response.resultats;
      console.log(LesChampions)
      LesChampions.forEach((Champion, index) => {
        if (index %2 != 0){
          style = "evenRow"
        }else{
          style = ""
        }
        ChampBox.innerHTML +="<tr class="+style+"><td>"+Champion.nom+" "+Champion.prenom+"</td><td>"+Champion.noPart+"</td><td>"+Champion.score+"</td><td>"+Champion.temps+"</td></tr>"
      });
    }
  };
xhr_Champs.send();