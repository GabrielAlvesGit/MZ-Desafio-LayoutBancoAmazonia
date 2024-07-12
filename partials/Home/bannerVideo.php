<!-- Video -->
<?php if ( get_field("habilitar_filtro_video")) { ?>
<section class="pageHome__banners">
  <!-- Banner -->
  <article class="banners hidden">
    <?php if(have_rows('group')): while (have_rows('group')) : the_row(); ?>
    <div class="banner filtro">
      <video muted="" loop="" autoplay="" poster="<?php the_sub_field("capa_video"); ?>">
        <source src="<?php the_sub_field("video"); ?>" type="video/mp4" ;="" codecs="avc1.42E01E, mp4a.40.2">
      </video>
    </div>
    <?php endwhile; endif;  ?>
  </article>
</section>
<?php } else { ?>
<!-- Banner -->
<section class="pageHome__banners hidden">
  <article class="banners">
    <?php if(have_rows('group')): while (have_rows('group')) : the_row(); ?>
    <div class="banner">
      <video muted="" loop="" autoplay="" poster="<?php the_sub_field("capa_video"); ?>">
        <source src="<?php the_sub_field("video"); ?>" type="video/mp4" ;="" codecs="avc1.42E01E, mp4a.40.2">
      </video>
    </div>
    <?php endwhile; endif;  ?>
  </article>
</section>
<?php } ?>