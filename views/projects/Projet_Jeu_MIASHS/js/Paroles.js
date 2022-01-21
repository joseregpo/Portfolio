
document.querySelector("#SubmitParole").addEventListener('click', function () {
  const xhr = new XMLHttpRequest();
  xhr.open("post", "https://mi-phpmut.univ-tlse2.fr/~21_L2_PROJET/postParole.php");
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        document.querySelector("#warning3").style.display = "none";
        document.querySelector("#GoodMsg").style.display = "flex";
      }
  };
  const cat = document.querySelector("#catSubmit").value;
  const parole = document.querySelector("#LyricSubmit").value;
  const celebrite = document.querySelector("#AuthorSubmit").value;
  const noEtud = document.querySelector("#EtuSubmit").value;
  donnees = "cat=" + cat + "&parole=" + parole + "&chanteur=" + celebrite+"&noPart=" + noEtud;
  if(cat != "" && parole != "" && celebrite != "" && noEtud != ""){
    xhr.send(donnees);
  }else{
    document.querySelector("#GoodMsg").style.display = "none";
    document.querySelector("#warning3").style.display = "flex";
  }
});
