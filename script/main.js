function comutarMenu() {
  let listElement = document.getElementById("menu-hidde");
  if (listElement.style.display == "none") {
    listElement.style.display = "block";
  } else {
    listElement.style.display = "none";
  }
}

function openOpcao() {
  let opcaoElement = document.getElementById("flecha-forca");
  let explicacaoElemente = document.getElementById("explicacao-forca");
  if (opcaoElement.innerHTML == "arrow_forward") {
    opcaoElement.innerHTML = "arrow_downward";
    explicacaoElemente.style.display = "block";
  } else {
    opcaoElement.innerHTML = "arrow_forward";
    explicacaoElemente.style.display = "none";
  }
}
