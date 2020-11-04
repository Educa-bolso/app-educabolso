const botaoPerfil = document.querySelector(".informacao button");
const caixaPerfil = document.querySelector(".caixa-perfil");

botaoPerfil.addEventListener("click", () => {
  caixaPerfil.classList.toggle("active");
});
