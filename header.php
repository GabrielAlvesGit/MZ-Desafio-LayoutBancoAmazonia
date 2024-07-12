<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="<?php bloginfo('name'); ?>">
  <link rel="shortcut icon" href="<?php the_field('global_favicon', 'option') ?>" />
  <title><?php bloginfo('name'); ?> <?php wp_title('|'); ?></title>

  <!-- Inicio Wordpress Header -->
  <?php wp_head(); ?>
  <!-- Final Wordpress Header -->
</head>

<body id="lang-<?= get_language_shortcode() ?>" <?php body_class(); ?>>

  <?php get_template_part('partials/Global/header'); ?>

  <!-- Breadcrumbs - Usado para Home > Faqs.. -->
  <div class="breadcrumbs">
    <ul class="breadcrumb container hidden-xs">
      <?php echo get_breadcrumb(); ?>
    </ul>
  </div>

  <main class="main">