const botaoPerfil = document.querySelector("#botao");
const caixaPerfil = document.querySelector(".caixa-perfil");

botaoPerfil.addEventListener("click", () => {
  caixaPerfil.classList.toggle("active");
});
