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

profile.onclick = function () {
    divProfile.classList.remove("d-none");

    divChangeImg.classList.add("d-none");

    divChangeEmail.classList.add("d-none");

    divChangePassword.classList.add("d-none");

    divDeletAccount.classList.add("d-none");
}

changeImg.onclick = function () {
    divProfile.classList.add("d-none");

    divChangeImg.classList.remove("d-none");

    divChangeEmail.classList.add("d-none");

    divChangePassword.classList.add("d-none");

    divDeletAccount.classList.add("d-none");
}

changeEmail.onclick = function () {
    divProfile.classList.add("d-none");

    divChangeImg.classList.add("d-none");

    divChangeEmail.classList.remove("d-none");

    divChangePassword.classList.add("d-none");

    divDeletAccount.classList.add("d-none");
}

changePassword.onclick = function () {
    divProfile.classList.add("d-none");

    divChangeImg.classList.add("d-none");

    divChangeEmail.classList.add("d-none");

    divChangePassword.classList.remove("d-none");

    divDeletAccount.classList.add("d-none");
}

deletAccount.onclick = function () {
    divProfile.classList.add("d-none");

    divChangeImg.classList.add("d-none");

    divChangeEmail.classList.add("d-none");

    divChangePassword.classList.add("d-none");

    divDeletAccount.classList.remove("d-none");
}

$(window).resize(function () {
    if ($(window).width() < 722) {
        const divCompt = document.getElementById("compt");
        const divMobile = document.getElementById("mobile");
        const select = document.getElementById("floatingSelect");
        const value = select.value;

        divCompt.classList.add("d-none");
        divMobile.classList.remove("d-none");

        const divProfile = document.getElementById("info-base");
        const divChangeImg = document.getElementById("change-img");
        const divChangeEmail = document.getElementById("change-email");
        const divChangePassword = document.getElementById("change-password");
        const divDeletAccount = document.getElementById("delete-account");

        select.onchange = function () {
            const selectedOption = this.options[this.selectedIndex].value;
            console.log(selectedOption);
            if (selectedOption === "1") {
                divProfile.classList.remove("d-none");
                divChangeImg.classList.add("d-none");
                divChangeEmail.classList.add("d-none");
                divChangePassword.classList.add("d-none");
                divDeletAccount.classList.add("d-none");
            } else if (selectedOption === "2") {
                divProfile.classList.add("d-none");
                divChangeImg.classList.remove("d-none");
                divChangeEmail.classList.add("d-none");
                divChangePassword.classList.add("d-none");
                divDeletAccount.classList.add("d-none");
            } else if (selectedOption === "3") {
                divProfile.classList.add("d-none");
                divChangeImg.classList.add("d-none");
                divChangeEmail.classList.remove("d-none");
                divChangePassword.classList.add("d-none");
                divDeletAccount.classList.add("d-none");
            } else if (selectedOption === "4") {
                divProfile.classList.add("d-none");
                divChangeImg.classList.add("d-none");
                divChangeEmail.classList.add("d-none");
                divChangePassword.classList.remove("d-none");
                divDeletAccount.classList.add("d-none");
            } else if (selectedOption === "5") {
                divProfile.classList.add("d-none");
                divChangeImg.classList.add("d-none");
                divChangeEmail.classList.add("d-none");
                divChangePassword.classList.add("d-none");
                divDeletAccount.classList.remove("d-none");
            }
        };
    }
});

// code para previsualizar imagem carregada para o utilizador.

const fileInput = document.querySelector(".file-input input[type='file']");
const fileLabel = document.querySelector(".file-input");
const preview = document.querySelector("#preview");

fileInput.addEventListener("change", function () {

    preview.style.display = "block";
    preview.src = URL.createObjectURL(fileInput.files[0]);
});
