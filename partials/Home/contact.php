  <!-- Contact -->
  <?php if(have_posts('')): while(have_posts('')): the_post(); ?>
  <?php if( have_rows('contact')): while( have_rows('contact')): the_row(); ?>
  <section class="pageHome__contact">
    <div class="container flex">

      <!-- Box - Esquerda - Imagem -->
      <?php if( have_rows('contact_image')): while( have_rows('contact_image')): the_row(); ?>
      <article class="pageHome__contact__img hidden">
        <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('name_image'); ?>">
      </article>
      <?php endwhile; endif; ?>

      <!-- Box - Direita -->
      <?php if( have_rows('contents')): while( have_rows('contents')): the_row(); ?>
      <article class="pageHome__contact__contents hidden">
        <div class="pageHome__contact__content">
          <?php the_sub_field('content');?>
        </div>

        <!-- Cards -->
        <?php if( have_rows('cards')): while( have_rows('cards')): the_row(); ?>
        <div class="pageHome__contact__cards">

          <!-- Cards - Esquerda -->
          <?php if( have_rows('card_left')): while( have_rows('card_left')): the_row(); ?>
          <div class="contact__card card__mailing">
            <img src="<?php the_sub_field('image');?>" alt="<?php the_sub_field('name_image');?>">
            <?php the_sub_field('content');?>
            <?php
                  if( $link = get_sub_field("link_know_more") ) {
                      $link_url = esc_url($link["url"]);
                      $link_title = esc_html($link["title"]);
                      $link_target = esc_attr($link["target"] ? $link["target"] : "_self");
                      echo <<<END
                          <a href="$link_url" target="$link_target" class="text">
                              $link_title
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <mask id="mask0_2074_15600" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24"
                                    height="24">
                                    <rect x="24" width="24" height="24" transform="rotate(90 24 0)" fill="#D9D9D9"></rect>
                                  </mask>
                                  <g mask="url(#mask0_2074_15600)">
                                    <path
                                      d="M18.4991 11.9992L13.1914 17.3069L12.4837 16.5992L16.5837 12.4992L6.69141 12.4992L6.69141 11.4992L16.5837 11.4992L12.4837 7.39918L13.1914 6.69148L18.4991 11.9992Z"
                                      fill="#007025"></path>
                                  </g>
                                </svg>
                          </a>
                      END;
                  }
                ?>
          </div>
          <?php endwhile; endif?>

          <!-- Cards - Direita -->
          <?php if( have_rows('card_right')): while( have_rows('card_right')): the_row(); ?>
          <div class="contact__card card__faleComRI">
            <img src="<?php the_sub_field('image');?>" alt="<?php the_sub_field('name_image');?>">
            <?php the_sub_field('content');?>
            <?php
                  if( $link = get_sub_field("link_know_more") ) {
                      $link_url = esc_url($link["url"]);
                      $link_title = esc_html($link["title"]);
                      $link_target = esc_attr($link["target"] ? $link["target"] : "_self");
                      echo <<<END
                          <a href="$link_url" target="$link_target" class="text">
                              $link_title
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <mask id="mask0_2074_15600" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24"
                                    height="24">
                                    <rect x="24" width="24" height="24" transform="rotate(90 24 0)" fill="#D9D9D9"></rect>
                                  </mask>
                                  <g mask="url(#mask0_2074_15600)">
                                    <path
                                      d="M18.4991 11.9992L13.1914 17.3069L12.4837 16.5992L16.5837 12.4992L6.69141 12.4992L6.69141 11.4992L16.5837 11.4992L12.4837 7.39918L13.1914 6.69148L18.4991 11.9992Z"
                                      fill="#007025"></path>
                                  </g>
                                </svg>
                          </a>
                      END;
                  }
                ?>
          </div>
          <?php endwhile; endif?>

        </div>
        <?php endwhile; endif; ?>
      </article>
      <?php endwhile; endif; ?>
    </div>
  </section>
  <?php endwhile; endif;?>
  <?php endwhile; endif;?>