function comutarMenu() {
  let listElement = document.getElementById("menu-hidde");
  if (listElement.style.display == "none") {
    listElement.style.display = "block";
  } else {
    listElement.style.display = "none";
  }
}

function openOpcaoForca() {
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

function openOpcaoFraqueza() {
  let opcaoElement = document.getElementById("flecha-fraqueza");
  let explicacaoElemente = document.getElementById("explicacao-fraquezas");
  if (opcaoElement.innerHTML == "arrow_forward") {
    opcaoElement.innerHTML = "arrow_downward";
    explicacaoElemente.style.display = "block";
  } else {
    opcaoElement.innerHTML = "arrow_forward";
    explicacaoElemente.style.display = "none";
  }
}

function openOpcaoOportunidade() {
  let opcaoElement = document.getElementById("flecha-oportunidade");
  let explicacaoElemente = document.getElementById("explicacao-oportunidade");
  if (opcaoElement.innerHTML == "arrow_forward") {
    opcaoElement.innerHTML = "arrow_downward";
    explicacaoElemente.style.display = "block";
  } else {
    opcaoElement.innerHTML = "arrow_forward";
    explicacaoElemente.style.display = "none";
    oportunidade;
  }
}

function openOpcaoAmeacas() {
  let opcaoElement = document.getElementById("flecha-ameacas");
  let explicacaoElemente = document.getElementById("explicacao-ameacas");
  if (opcaoElement.innerHTML == "arrow_forward") {
    opcaoElement.innerHTML = "arrow_downward";
    explicacaoElemente.style.display = "block";
  } else {
    opcaoElement.innerHTML = "arrow_forward";
    explicacaoElemente.style.display = "none";
    oportunidade;
  }
}
