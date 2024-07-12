/* =============== Animação no Scroll PG =============== */
var elements = document.querySelectorAll('.hidden');

const myObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add('show');
    } else {
      entry.target.classList.remove('show');
    }
  })
})

elements.forEach((element) => myObserver.observe(element));