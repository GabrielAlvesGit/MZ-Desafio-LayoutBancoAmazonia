  <!-- News -->
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <section class="pageHome__news">
    <div class="container flex">
      <!-- Options -->
      <?php if( have_rows('link_options')): while( have_rows('link_options')): the_row(); ?>
      <article class="news__options">
        <ul class="news__list">
          <?php if(have_rows('item_options')): while(have_rows('item_options')): the_row(); ?>
          <li class="news__item hidden">
            <a class="news__link" href="<?php the_sub_field('link'); ?>">
              <?php if(have_rows('icon_options')): while(have_rows('icon_options')): the_row(); ?>
              <img src="<?php the_sub_field('icon'); ?>" alt="<?php the_sub_field('name_icon'); ?>">
              <?php endwhile; endif;?>
              <?php the_sub_field('title'); ?>
            </a>
          </li>
          <?php endwhile; endif;?>
        </ul>
      </article>
      <?php endwhile; endif?>

      <!-- Events -->
      <?php if( have_rows('events') ): while( have_rows('events') ): the_row(); ?>
      <article class="pageHome__events">

        <!-- Últimas Atualizações -->
        <?php if(have_rows('news')): while (have_rows('news')): the_row();?>
        <div class="pageHome__event hidden">
          <h2>
            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
              <g clip-path="url(#clip0_2084_7173)">
                <path d="M16.5 20L22.5 27H10.5L16.5 20Z" stroke="#2FEB6D" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round"></path>
                <path
                  d="M8.5 24H6.5C5.96957 24 5.46086 23.7893 5.08579 23.4142C4.71071 23.0391 4.5 22.5304 4.5 22V8C4.5 7.46957 4.71071 6.96086 5.08579 6.58579C5.46086 6.21071 5.96957 6 6.5 6H26.5C27.0304 6 27.5391 6.21071 27.9142 6.58579C28.2893 6.96086 28.5 7.46957 28.5 8V22C28.5 22.5304 28.2893 23.0391 27.9142 23.4142C27.5391 23.7893 27.0304 24 26.5 24H24.5"
                  stroke="#009933" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </g>
              <defs>
                <clipPath id="clip0_2084_7173">
                  <rect width="32" height="32" fill="white" transform="translate(0.5)"></rect>
                </clipPath>
              </defs>
            </svg>
            <?php the_sub_field('title'); ?>
          </h2>

          <ul class="pageHome__event__list">
            <?php if(have_rows('item_news')): while (have_rows('item_news')): the_row(); ?>
            <li class="pageHome__event__item">
              <?php 
                if ( $link = get_sub_field("link_item_news") ) {
                  $link_url = esc_url($link["url"]);
                  $link_title = esc_html($link["title"]);
                  $link_target = esc_attr($link["target"] ? $link["target"] : "_self");
                  $date_item_news = esc_html(get_sub_field('date_item_news'));
                  $title_item_news = esc_html(get_sub_field('title_item_news'));

                  echo <<<END
                      <span class="pageHome__event__icon">$date_item_news</span>
                      <a href="$link_url" target="$link_target">
                          $title_item_news
                      </a>
                  END;
              } 
              ?>
            </li>
            <?php endwhile; endif;?>
          </ul>

          <div class="pageHome__event__link">
            <?php
                if( $link = get_sub_field("link_view_more") ) {
                    $link_url = esc_url($link["url"]);
                    $link_title = esc_html($link["title"]);
                    $link_target = esc_attr($link["target"] ? $link["target"] : "_self");
                    echo <<<END
                        <a href="$link_url" target="$link_target" class="text">
                            $link_title
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <mask id="mask0_2072_7433" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                    <rect x="24" width="24" height="24" transform="rotate(90 24 0)" fill="#D9D9D9"></rect>
                                </mask>
                                <g mask="url(#mask0_2072_7433)">
                                    <path d="M18.4991 11.9989L13.1914 17.3066L12.4837 16.5989L16.5837 12.4989L6.69141 12.4989L6.69141 11.4989L16.5837 11.4989L12.4837 7.39894L13.1914 6.69124L18.4991 11.9989Z" fill="#4B4B4B"></path>
                                </g>
                            </svg>
                        </a>
                    END;
                }
              ?>
          </div>
        </div>
        <?php endwhile; endif; ?>

        <!-- Calendário de Eventos -->
        <?php if(have_rows('calendar')): while (have_rows('calendar')): the_row(); ?>
        <div class="pageHome__event hidden">
          <h2>
            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
              <g clip-path="url(#clip0_2084_7231)">
                <path
                  d="M26.5 5H6.5C5.94772 5 5.5 5.44772 5.5 6V26C5.5 26.5523 5.94772 27 6.5 27H26.5C27.0523 27 27.5 26.5523 27.5 26V6C27.5 5.44772 27.0523 5 26.5 5Z"
                  stroke="#009933" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M22.5 3V7" stroke="#2FEB6D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                </path>
                <path d="M10.5 3V7" stroke="#2FEB6D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                </path>
                <path d="M5.5 11H27.5" stroke="#2FEB6D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                </path>
              </g>
              <defs>
                <clipPath id="clip0_2084_7231">
                  <rect width="32" height="32" fill="white" transform="translate(0.5)"></rect>
                </clipPath>
              </defs>
            </svg>
            <?php the_sub_field('title'); ?>
          </h2>

          <ul class="pageHome__event__list">
            <?php if(have_rows('item_calendar')): while(have_rows('item_calendar')): the_row(); ?>
            <li class="pageHome__event__item">
              <?php if ( get_sub_field("habilitar_link_calender")) { ?>
              <?php 
                  if ( $link = get_sub_field("link_item_calendar") ) {
                    $link_url = esc_url($link["url"]);
                    $link_title = esc_html($link["title"]);
                    $link_target = esc_attr($link["target"] ? $link["target"] : "_self");
                    $date_item_calendar = esc_html(get_sub_field('date_item_calendar'));
                    $title_item_calendar = esc_html(get_sub_field('title_item_calendar'));

                    echo <<<END
                        <span class="pageHome__event__icon">$date_item_calendar</span>
                        <a class="disable__curso" href="$link_url" target="$link_target">
                            $title_item_calendar
                        </a>
                    END;
                } 
              ?>
              <?php } else { ?>
              <?php 
                if ( $link = get_sub_field("link_item_calendar") ) {
                    $link_url = esc_url($link["url"]);
                    $link_title = esc_html($link["title"]);
                    $link_target = esc_attr($link["target"] ? $link["target"] : "_self");
                    $date_item_calendar = esc_html(get_sub_field('date_item_calendar'));
                    $title_item_calendar = esc_html(get_sub_field('title_item_calendar'));

                    echo <<<END
                        <span class="pageHome__event__icon">$date_item_calendar</span>
                        <div class="item_calendar disable__curso">
                            $title_item_calendar
                        </div>
                    END;
                } 
                ?>
              <?php } ?>
            </li>
            <?php endwhile; endif;?>
          </ul>

          <div class="pageHome__event__link">
            <?php
                if( $link = get_sub_field("link_view_more") ) {
                    $link_url = esc_url($link["url"]);
                    $link_title = esc_html($link["title"]);
                    $link_target = esc_attr($link["target"] ? $link["target"] : "_self");
                    echo <<<END
                        <a href="$link_url" target="$link_target" class="text">
                            $link_title
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <mask id="mask0_2072_7433" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                    <rect x="24" width="24" height="24" transform="rotate(90 24 0)" fill="#D9D9D9"></rect>
                                </mask>
                                <g mask="url(#mask0_2072_7433)">
                                    <path d="M18.4991 11.9989L13.1914 17.3066L12.4837 16.5989L16.5837 12.4989L6.69141 12.4989L6.69141 11.4989L16.5837 11.4989L12.4837 7.39894L13.1914 6.69124L18.4991 11.9989Z" fill="#4B4B4B"></path>
                                </g>
                            </svg>
                        </a>
                    END;
                }
              ?>
          </div>
        </div>
        <?php endwhile; endif; ?>

        <!-- Central de Resultados -->
        <?php if(have_rows('results')): while (have_rows('results')): the_row(); ?>
        <div class="pageHome__event hidden">
          <h2>
            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
              <g clip-path="url(#clip0_2072_7376)">
                <path d="M27.5 27H5.5" stroke="#2FEB6D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                </path>
                <path
                  d="M18.5 10V22C18.5 22.5523 18.9477 23 19.5 23H24.5C25.0523 23 25.5 22.5523 25.5 22V10C25.5 9.44771 25.0523 9 24.5 9H19.5C18.9477 9 18.5 9.44771 18.5 10Z"
                  stroke="#009933" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path
                  d="M13.5 4H8.5C7.94772 4 7.5 4.44772 7.5 5V22C7.5 22.5523 7.94772 23 8.5 23H13.5C14.0523 23 14.5 22.5523 14.5 22V5C14.5 4.44772 14.0523 4 13.5 4Z"
                  stroke="#009933" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </g>
              <defs>
                <clipPath id="clip0_2072_7376">
                  <rect width="32" height="32" fill="white" transform="translate(0.5)"></rect>
                </clipPath>
              </defs>
            </svg><?php the_sub_field('title'); ?>
          </h2>

          <ul class="pageHome__event__list">
            <li class="pageHome__event__item">
              <ul class="tabs__list">
                <?php if(have_rows('item_tabs')): while (have_rows('item_tabs')): the_row(); ?>
                <li class="tabs__item"><?php the_sub_field('title'); ?></li>
                <?php endwhile; endif;?>
              </ul>
            </li>

            <?php if(have_rows('item_results')): while (have_rows('item_results')): the_row(); ?>
            <li class="pageHome__event__item">
              <?php 
                if ( $link = get_sub_field("link_item_results") ) {
                  $link_url = esc_url($link["url"]);
                  $link_title = esc_html($link["title"]);
                  $link_target = esc_attr($link["target"] ? $link["target"] : "_self");
                  $icon_results_array = get_sub_field('icon_results');
                  $icon_results = esc_url($icon_results_array['url']);
                  $name_icon_results = esc_attr(get_sub_field('name_icon_results'));
                  $title_item_results = esc_html(get_sub_field('title_item_results'));

                    echo <<<END
                    <span class="pageHome__event__icon icon__results">
                      <img src="$icon_results" alt="$name_icon_results">
                    </span>
                    <a href="$link_url" target="$link_target">
                      $title_item_results 
                    </a>
                    END;
                }
                ?>
            </li>
            <?php endwhile; endif;?>
          </ul>

          <div class="pageHome__event__link">
            <?php
                if( $link = get_sub_field("link_view_more") ) {
                    $link_url = esc_url($link["url"]);
                    $link_title = esc_html($link["title"]);
                    $link_target = esc_attr($link["target"] ? $link["target"] : "_self");
                    echo <<<END
                        <a href="$link_url" target="$link_target" class="text">
                            $link_title
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <mask id="mask0_2072_7433" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                    <rect x="24" width="24" height="24" transform="rotate(90 24 0)" fill="#D9D9D9"></rect>
                                </mask>
                                <g mask="url(#mask0_2072_7433)">
                                    <path d="M18.4991 11.9989L13.1914 17.3066L12.4837 16.5989L16.5837 12.4989L6.69141 12.4989L6.69141 11.4989L16.5837 11.4989L12.4837 7.39894L13.1914 6.69124L18.4991 11.9989Z" fill="#4B4B4B"></path>
                                </g>
                            </svg>
                        </a>
                    END;
                }
              ?>
          </div>
        </div>
        <?php endwhile; endif;?>

      </article>
      <?php endwhile; endif;?>
    </div>
  </section>
  <?php endwhile; endif; ?>