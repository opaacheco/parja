function comutarMenu() {
  let listElement = document.getElementById("menu-hidde");
  let buttonHome = document.getElementById("btn");
  let humHome = document.getElementById("hum");
  let pHome = document.getElementById("p");
  if (listElement.style.display == "none") {
    listElement.style.display = "block";
    if (window.innerWidth <= 915) {
      buttonHome.style.position = "static";
      humHome.style.position = "static";
      pHome.style.position = "static";
    }
  } else {
    listElement.style.display = "none";
    if (window.innerWidth <= 915) {
      buttonHome.style.position = "absolute";
      humHome.style.position = "absolute";
      pHome.style.position = "absolute";
    }
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

const profileIcon = document.getElementById('profile-icon');
const dropdown = document.getElementById('dropdown');

if (profileIcon) {
  profileIcon.addEventListener('click', () => {
    dropdown.classList.toggle('active');  // Altera entre mostrar e esconder
  });
}
