const profile = document.getElementById("changeProfile");
const changeImg = document.getElementById("changeImg");
const changeEmail = document.getElementById("changeEmail");
const changePassword = document.getElementById("changePassword");
const deletAccount = document.getElementById("deletAccount");

const divProfile = document.getElementById("info-base");
const divChangeImg = document.getElementById("change-img");
const divChangeEmail = document.getElementById("change-email");
const divChangePassword = document.getElementById("change-password");
const divDeletAccount = document.getElementById("delete-account");

profile.onclick = function() {
    divProfile.classList.remove("d-none");

    divChangeImg.classList.add("d-none");

    divChangeEmail.classList.add("d-none");

    divChangePassword.classList.add("d-none");

    divDeletAccount.classList.add("d-none");
}

changeImg.onclick = function() {
    divProfile.classList.add("d-none");

    divChangeImg.classList.remove("d-none");

    divChangeEmail.classList.add("d-none");

    divChangePassword.classList.add("d-none");

    divDeletAccount.classList.add("d-none");
}

changeEmail.onclick = function() {
     divProfile.classList.add("d-none");

    divChangeImg.classList.add("d-none");

    divChangeEmail.classList.remove("d-none");

    divChangePassword.classList.add("d-none");

    divDeletAccount.classList.add("d-none");
}

changePassword.onclick = function() {
     divProfile.classList.add("d-none");

    divChangeImg.classList.add("d-none");

    divChangeEmail.classList.add("d-none");

    divChangePassword.classList.remove("d-none");

    divDeletAccount.classList.add("d-none");
}

deletAccount.onclick = function() {
     divProfile.classList.add("d-none");

    divChangeImg.classList.add("d-none");

    divChangeEmail.classList.add("d-none");

    divChangePassword.classList.add("d-none");

    divDeletAccount.classList.remove("d-none");
}
