<!-- Header Top -->
<?php $header = get_page_by_title('header');?>
<div class="header__top">
  <div class="container flex">
    <h1>Relações com Investidores</h1>

    <!-- Header top - Nav -->
    <ul class="header__top__navigation">
      <ul class="header__top__navigation__list">
        <li class="header__top__navigation__list__item"><a class="header__top__navigation__list__item__link"
            href="#">Últimas atualizações</a>
        </li>
      </ul>

      <ul class="header__top__navigation__list">
        <li class="header__top__navigation__list__item__ticker"><span class="name">BAZA3</span></li>
        <li class="header__top__navigation__list__item__ticker"><span class="price">R$ 90,49</span></li>
        <li class="header__top__navigation__list__item__ticker"><span class="variation--action">1,15%</span></li>
      </ul>

      <ul class="header__top__navigation__list">
        <li class="header__top__navigation__list__item__ticker"><span class="name">IBOV</span></li>
        <li class="header__top__navigation__list__item__ticker"><span class="price">R$ 119.662</span></li>
        <li class="header__top__navigation__list__item__ticker"><span class="variation--action">0,08%</span></li>
      </ul>

      <ul class="header__top__navigation__list quick__access__link">
        <li class="header__top__navigation__list__item toggle-acessibilidade">
          <img class="js-modal-acessibilidade" src="<?= get_stylesheet_directory_uri(); ?>/img/iconeAcessibilidade.svg"
            alt="">
          <?php 
            if ( $link = get_field("link_global_acessibilidade", "option") ) {
                $link_url = esc_url($link["url"]);
                $link_title = esc_html($link["title"]);
                $link_target = esc_attr($link["target"] ? $link["target"] : "_self");

                echo <<<END

              <a class="header__top__navigation__list__item__link acessibilidade" href="$link_url" target="$link_target">
                $link_title
              </a>

              END;
              }
            ?>
          <ul class="modal__acessibilidade__list">
            <li class="modal__acessibilidade__item">
              <span class="acessibilidade__increase">A+</span>
            </li>
            <li class="modal__acessibilidade__item">
              <span class="acessibilidade__decrease">A-</span>
            </li>
            <li class="modal__acessibilidade__item">
              <svg class=" js-close-modal" xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13"
                fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M6 12.5C2.68629 12.5 0 9.81371 0 6.5C0 3.18629 2.68629 0.5 6 0.5C9.31371 0.5 12 3.18629 12 6.5C12 9.81371 9.31371 12.5 6 12.5ZM6 11.4091C3.28897 11.4089 1.09131 9.21111 1.09131 6.50003C1.09131 3.78895 3.28897 1.59116 6 1.59094V11.4091Z"
                  fill="white"></path>
              </svg>
            </li>
          </ul>
        </li>
        <li class="header__top__navigation__list__item toggle-language">
          <img class="js-modal-language" src="<?= get_stylesheet_directory_uri(); ?>/img/iconLinguagem.svg" alt="">
          <a class="header__top__navigation__list__item__link linguagem"
            href="#"><?php _e('Linguagem', LANG_DOMAIN); ?></a>
          <ul class="modal__language__list">
            <?php wpmziq_get_language_switcher(); ?>
          </ul>
        </li>
        <li class="header__top__navigation__list__item">
          <img src="<?= get_stylesheet_directory_uri(); ?>/img/iconeInstitucional.svg" alt="">
          <a class="header__top__navigation__list__item__link institucional" href="">Institucional</a>
        </li>
      </ul>
    </ul>
  </div>
</div>