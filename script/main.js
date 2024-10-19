const hamburguer = document.querySelector(".hamburguer");
const menu = document.querySelector(".nav-hidde");

hamburguer.addEventListener("click", () => {
  menu.classList.toggle("nav-show");
  menu.classList.toggle("nav-hidde");
});
