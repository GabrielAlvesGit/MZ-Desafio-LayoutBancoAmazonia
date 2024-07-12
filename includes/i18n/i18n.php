<?php 
/* ========= I18n - PT/EN ======== */
function wpmziq_get_language_switcher() {
  if (function_exists('icl_get_languages')) {
    $languages = icl_get_languages('skip_missing=0');
    if (!empty($languages)) {
      $langs = "";
      foreach ($languages as $l) {
        $class = $l['active'] ? ' class="modal__language__item active"' : ' class="modal__language__item"';
        $idioma = "";

        if ($l['language_code'] == "pt-br") {
          $idioma = "Português";
        } elseif ($l['language_code'] == "en") {
          $idioma = "Inglês";
        } elseif ($l['language_code'] == "es") {
          $idioma = "Espanhol";
        } else {
          $idioma = $l['translated_name'];
        }
        $langs .= '<li' . $class . '><a href="' . $l['url'] . '">' . $idioma . '</a></li>';
      }
      echo $langs;
    }
  }
}

define('LANG_DOMAIN', 'your-text-domain'); 
?>