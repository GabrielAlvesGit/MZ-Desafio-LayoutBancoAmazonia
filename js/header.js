/* ============ Header ============ */
/* ============ Menu ============ */
var menu = document.querySelector('.header__bottom__Navgroup');
var headerBottomActive = document.querySelector('.js-header-bottom-active');

function handleClick(element) {
  element.classList.toggle("active");
  menu.classList.toggle("active");
  headerBottomActive.classList.toggle("active");
}

/* ============ Search ============ */
var search = document.querySelector('.search');
var menuclose = document.querySelector('.menu-primary');
var searchopen = document.querySelector('.js-target-search-open');
var searchclose = document.querySelector('.js-target-search-close');

search.addEventListener('click', () => {
  menuclose.classList.toggle('active');
  searchopen.classList.toggle('active');

  // Fechar o modal de busca ao clicar no ícone de fechar dentro do modal
  searchclose.addEventListener('click', () => {
    menuclose.classList.remove('active');
    searchopen.classList.remove('active');
  });

  // Fechar o modal de busca ao clicar fora do modal
  document.addEventListener('click', (event) => {
    if (!searchopen.contains(event.target) && !search.contains(event.target)) {
      menuclose.classList.remove('active');
      searchopen.classList.remove('active');
    }
  });

  // Prevenir que o clique dentro do modal feche o modal
  searchopen.addEventListener('click', (event) => {
    event.stopPropagation();
  });
});

/* ============ Acessibilidade Modal ============ */
// Função para abrir o modal
function openModalClick(iconElement, modalElement, toggleElement) {
  return function () {
    iconElement.classList.toggle("active");
    modalElement.classList.toggle("active");
    toggleElement.classList.toggle("active");
  }
}

// Selecionar todos os ícones de acessibilidade
var iconAcessibilidadeList = document.querySelectorAll('.js-modal-acessibilidade');
var toggleAcessibilidadeList = document.querySelectorAll('.toggle-acessibilidade');
var modalAcessibilidadeList = document.querySelectorAll('.modal__acessibilidade__list');

// Adicionar listeners aos ícones de acessibilidade
iconAcessibilidadeList.forEach((iconAcessibilidade, index) => {
  var modalAcessibilidade = modalAcessibilidadeList[index];
  var toggleAcessibilidade = toggleAcessibilidadeList[index];
  iconAcessibilidade.addEventListener('click', openModalClick(iconAcessibilidade, modalAcessibilidade, toggleAcessibilidade));
});

// Selecionar todos os ícones de linguagem
var iconLanguageList = document.querySelectorAll('.js-modal-language');
var toggleLanguageList = document.querySelectorAll('.toggle-language');

// Adicionar listeners aos ícones de linguagem
iconLanguageList.forEach((iconLanguage, index) => {
  var modalLanguage = document.querySelectorAll('.modal__language__list')[index];
  var toggleLanguage = toggleLanguageList[index];
  iconLanguage.addEventListener('click', openModalClick(iconLanguage, modalLanguage, toggleLanguage));
});

/* =============== Home - Central de Resultados =============== */
document.addEventListener('DOMContentLoaded', function () {
  var tabs = document.querySelectorAll('.tabs__item');

  // Adicionar listeners de clique às abas
  tabs.forEach((tab, index) => {
    tab.addEventListener('click', function () {
      console.log('Tab clicked:', this.textContent);
      tabs.forEach(t => t.classList.remove('tabs__item--active'));
      this.classList.add('tabs__item--active');
    });

    if (index === 0) {
      tab.classList.add('tabs__item--active');
    }
  });

});


