<?php 
/*=============== Funções para Limpar o Header ===============*/
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');


/*=============== Importação do CSS dentro da function - (Sem uso do Href='/style' no header) ===============*/
function head_css() {
    wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('head-style');
}

add_action('wp_enqueue_scripts', 'head_css');

/*=============== Adicionando En ===============*/
function get_language_shortcode() {
    return apply_filters( 'wpml_current_language', null );
}
add_shortcode( 'language', 'get_language_shortcode' );

/*=============== Register Menu  ===============*/
add_theme_support('menus');

/*=============== Menu  ===============*/
function register_my_menu() {
    register_nav_menu('menu-primary', __('Primary Menu'));
}
add_action('init', 'register_my_menu');

/*=============== Importação do breadcrumb Home > Sobre > Faq  ===============*/
function get_breadcrumb() {
    $home = 'Home'; 
    $url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $parts = parse_url($url);
    $path_parts = explode('/', trim($parts['path'], '/'));

    $breadcrumbs = array();
    $breadcrumbs[] = '<li class="item-home"><a class="bread-link bread-home" href="/" title="Home">' . $home . '</a></li>';
    
    $path = '';
    foreach ($path_parts as $part) {
        $path .= '/' . $part;
        if ($part !== end($path_parts)) {
            $breadcrumbs[] = '<li class="separator"> / </li>';
            $breadcrumbs[] = '<li class="item-cat"><a href="' . $path . '">' . ucwords(str_replace('_', ' ', $part)) . '</a></li>';
        } else {
            $breadcrumbs[] = '<li class="separator"> / </li>';
            $breadcrumbs[] = '<li class="item-current"><strong>' . ucwords(str_replace('_', ' ', $part)) . '</strong></li>';
        }
    }
    
    return implode('', $breadcrumbs);
}

/*=============== INCLUDES  ===============*/
function includeDir($path) {
    foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path)) as $file) {
        if ($file->isFile() && $file->getExtension() === 'php') {
            require_once $file->getPathname();
        }
    }
}

includeDir(__DIR__.'/includes/');

/*=============== MODE DESENVOLVEDOR  ===============*/
function developmentMode($string) {
    if( get_field("option") ) : 
        if( have_rows("option") ): while( have_rows("option") ) : the_row();
            the_sub_field($string);
        endwhile; endif;
    endif;
}

/*=============== Tratamento de erro  ===============*/
// if (isset($_GET['debug'])) {
//     define('WP_DEBUG', true);
//     ini_set('display_errors', 1);
//     ini_set('display_startup_errors', 1);
//     error_reporting(E_ALL);
// }
?>