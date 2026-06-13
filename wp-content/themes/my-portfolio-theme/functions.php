<?php

function myportfolio_enqueue_assets() {

  wp_enqueue_style(
    'reset',
    get_template_directory_uri() . '/css/reset.css',
    array(),
    filemtime(get_template_directory() . '/css/reset.css')
  );

  wp_enqueue_style(
    'style',
    get_template_directory_uri() . '/css/style.css',
    array(),
    filemtime(get_template_directory() . '/css/style.css')
  );

  // Slick CSS
  wp_enqueue_style(
    'slick-css',
    'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css'
  );

  wp_enqueue_style(
    'slick-theme',
    'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css'
  );
  
  // jQuery
  wp_enqueue_script(
    'jquery'
  );

  // Slick JS
  wp_enqueue_script(
    'slick-js',
    'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
    array('jquery'),
    null,
    true
  );


  // main.js
  wp_enqueue_script(
    'main-js',
    get_template_directory_uri() . '/js/main.js',
    array('jquery', 'slick-js'),
    filemtime(get_template_directory() . '/js/main.js'),
    true
  );
}
  
  add_action('wp_enqueue_scripts', 'myportfolio_enqueue_assets');
  
  add_action('init', function() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (!isset($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
    }
    
});
  