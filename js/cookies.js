/* ========= Cookies ======== */
var cookiesModal = document.getElementById("cookiescript__injected");
var closeModal = document.getElementById("cookiescript__close");
var activeModal = document.getElementById("cookiescript__badge");

/* ========= Cookies Injected ======== */
var checkboxStrict = document.getElementById("cookiescript_category_strict");
var checkboxPerformance = document.getElementById(
  "cookiescript_category_performance"
);
var checkboxTargeting = document.getElementById(
  "cookiescript_category_targeting"
);

// Clique nas checkboxes
var injected = document.querySelector(".cookiescript__injected__buttons");
var saveButton = document.getElementById("cookiescript__save");
var acceptButton = document.getElementById("cookiescript__accept");
var rejectButton = document.getElementById("cookiescript__reject");

checkboxStrict.addEventListener("click", toggleButtonsVisibility);
checkboxPerformance.addEventListener("click", toggleButtonsVisibility);
checkboxTargeting.addEventListener("click", toggleButtonsVisibility);

// Clique nos botões
closeModal.addEventListener("click", closeCookiesModal);
activeModal.addEventListener("click", openCookiesModal);
saveButton.addEventListener("click", closeCookiesModal);
acceptButton.addEventListener("click", closeCookiesModal);
rejectButton.addEventListener("click", closeCookiesModal);

/* ========= CheckBox ======== */
function toggleButtonsVisibility() {
  if (
    checkboxStrict.checked ||
    checkboxPerformance.checked ||
    checkboxTargeting.checked
  ) {
    saveButton.style.display = "block";
    acceptButton.style.display = "none";
    injected.style.flexDirection = "column";
  } else {
    saveButton.style.display = "none";
    acceptButton.style.display = "block";
    injected.style.display = "block";
  }
}

// Ocultar o modal quando o botão "Salvar e Fechar",
// "Aceitar todos", "Recusar todos" ou o ícone de fechar (X) for clicado
// Poderia ser configurado para salvar no ***localStorage****
function closeCookiesModal() {
  cookiesModal.style.display = "none";
}

function openCookiesModal() {
  cookiesModal.style.display = "block";
}