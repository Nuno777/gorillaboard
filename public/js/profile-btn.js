/*
o codigo usa uma array "divs" para armazenar todas as divs que precisam ser exibidas
ou escondidas e uma função "handleClick" para manter o código limpo.
Além disso, evita a repetição de código ao adicionar os eventos "click" aos
elementos do DOM. */


const profile = document.getElementById("changeProfile");
const changeImg = document.getElementById("changeImg");
const changeEmail = document.getElementById("changeEmail");
const changePassword = document.getElementById("changePassword");
const deletAccount = document.getElementById("deletAccount");

const divs = [
  document.getElementById("info-base"),
  document.getElementById("change-img"),
  document.getElementById("change-email"),
  document.getElementById("change-password"),
  document.getElementById("delete-account"),
];

function handleClick(event) {
  divs.forEach(div => {
    div.classList.remove("visible");
    div.classList.add("invisible");
  });

  switch (event.target) {
    case profile:
      divs[0].classList.remove("invisible");
      divs[0].classList.add("visible");
      break;
    case changeImg:
      divs[1].classList.remove("invisible");
      divs[1].classList.add("visible");
      break;
    case changeEmail:
      divs[2].classList.remove("invisible");
      divs[2].classList.add("visible");
      break;
    case changePassword:
      divs[3].classList.remove("invisible");
      divs[3].classList.add("visible");
      break;
    case deletAccount:
      divs[4].classList.remove("invisible");
      divs[4].classList.add("visible");
      break;
  }
}

profile.addEventListener("click", handleClick);
changeImg.addEventListener("click", handleClick);
changeEmail.addEventListener("click", handleClick);
changePassword.addEventListener("click", handleClick);
deletAccount.addEventListener("click", handleClick);
