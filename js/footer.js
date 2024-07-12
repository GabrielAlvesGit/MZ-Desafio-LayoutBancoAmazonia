/* ============ Footer ============ */
/* ============ Footer SiteMap ============ */
var btnSiteMap = document.querySelector('.js-siteMap-toggle');
var footerNavigation = document.querySelector('.js-footerNavigation');

function toggleMenu() {
  if (footerNavigation.classList.contains("active")) {
    footerNavigation.classList.remove("active");
    btnSiteMap.classList.remove("active");
  } else {
    footerNavigation.classList.add("active");
    btnSiteMap.classList.add("active");
  }
}

