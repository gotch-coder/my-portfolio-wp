<?php

function myportfolio_enqueue_assets() {

  wp_enqueue_style(
    'reset',
    get_template_directory_uri() . '/css/reset.css'
  );

  wp_enqueue_style(
    'style',
    get_template_directory_uri() . '/css/style.css'
  );

}

add_action('wp_enqueue_scripts', 'myportfolio_enqueue_assets');