  <!-- Footer -->
  <footer class="footer">
    <div class="footer__wrapping">

      <!-- Footer top -->
      <article class="footer__top">
        <div class="container flex">
          <div class="footer__top__siteMap">
            <button class="footer__top__btnMap js-siteMap-toggle" id="btnOpen" onclick="toggleMenu()">
              <span>Site map</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <mask id="mask0_2287_355" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24"
                  height="24">
                  <rect x="24" width="24" height="24" transform="rotate(90 24 0)" fill="#D9D9D9"></rect>
                </mask>
                <g mask="url(#mask0_2287_355)">
                  <path
                    d="M12.5946 6.09538L17.9023 11.4031L17.1946 12.1108L13.0946 8.01078L13.0946 17.9031L12.0946 17.9031L12.0946 8.01078L7.99464 12.1108L7.28694 11.4031L12.5946 6.09538Z"
                    fill="white"></path>
                </g>
              </svg>
            </button>
          </div>
        </div>
      </article>

      <!-- Footer center -->
      <article class="footer__center js-footerNavigation">
        <div class="container flex">
          <div class="footer__center__contacts">
            <address class="footer__center__contact">
              <?php the_field('content_contact', 'option'); ?>
            </address>
          </div>

          <div class="footer__center__navigation">
            <?php 
              $args = array(
                'menu' => 'primary',
                'theme_location' => 'menu-primary',
                'container' => false,
                'menu_class' => 'menu-footer-list',
              );
              wp_nav_menu($args);
            ?>
          </div>
        </div>
      </article>

      <!-- Footer bottom -->
      <article class="footer__bottom">
        <div class="container flex">

          <div class="footer__bottom__logo">
            <a href="<?php the_field('link_footer', 'option') ;?>">
              <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M49.3588 10H49.7749V54H32.7843L49.3588 10Z"
                  fill="white">
                </path>
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M45.0153 36.061C51.4581 38.197 53.9408 38.9588 63.7148 31.7023C63.8036 31.8083 63.8995 31.9072 64 32.0012C54.4574 49.9016 44.5478 50.0149 32.0012 43.1127L31.889 43.05C27.6133 40.6874 23.6485 38.0114 18.9847 36.4661C12.5419 34.3301 10.0592 33.5682 0.285201 40.8248C0.196368 40.7188 0.100522 40.6199 0 40.5259C9.54261 22.6255 19.4499 22.5122 31.9988 29.4144L32.111 29.4747C36.3867 31.8373 40.3515 34.5133 45.0153 36.0586"
                  fill="#FEC90E"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M32.6604 10H49.3565L20.9601 54H3.96245L32.6604 10Z"
                  fill="white"></path>
              </svg>
            </a>
          </div>

          <div class="footer__bottom__policyLinks">
            <ul class="footer__bottom__list">
              <?php if(have_rows('policy', 'option')): while(have_rows('policy', 'option')): the_row() ;?>
              <li class="footer__bottom__item">
                <?php if ( get_sub_field("habilitar_link_policy", 'option')) { ?>
                <?php 
                  if( $link = get_sub_field("link", 'option') ) {
                    $link_url = esc_url($link["url"]);
                    $link_title = esc_html($link["title"]);
                    $link_target = esc_attr($link["target"] ? $link["target"] : "_self");
                    echo <<<END
                        <a href="$link_url" target="$link_target">$link_title</a>
                    END;
                    }
                  ?>
                <?php } else { ?>
                <?php the_sub_field('title', 'option');?>
                <?php } ?>
              </li>
              <?php endwhile; endif; ?>
            </ul>
          </div>

          <div class="footer__bottom__powered">
            <a href="https://www.mzgroup.com.br/" target="_blank">Powered by <b>MZ</b></a>
          </div>

          <div class="footer__bottom__socialMedia">
            <ul class="footer__bottom__list">
              <?php if(have_rows('social_media', 'option')): while(have_rows('social_media', 'option')): the_row(); ?>
              <li class="footer__bottom__item">
                <a href="<?php the_sub_field('link', 'option'); ?>" target="_blank">
                  <?php if( have_rows('social_media_image', 'option')): while( have_rows('social_media_image', 'option')): the_row(); ?>
                  <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('name_image'); ?>">
                  <?php endwhile; endif; ?>
                </a>
              </li>
              <?php endwhile; endif; ?>
            </ul>
          </div>
        </div>
      </article>
    </div>
  </footer>

  <!-- Footer JS -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/footer.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/scrollAnimations.js"></script>