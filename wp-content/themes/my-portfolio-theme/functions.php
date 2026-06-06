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

  wp_enqueue_script(
    'jquery'
  );

  wp_enqueue_script(
    'main-js',
    get_template_directory_uri() . '/js/main.js',
    array('jquery'),
    filemtime(get_template_directory() . '/js/main.js'),
    true
  );

  
}
  
  add_action('wp_enqueue_scripts', 'myportfolio_enqueue_assets');
  
  add_action('init', function() {
    if (!session_id()) {
      session_start();
    }

    if (!isset($_SESSION['token'])) {
      $_SESSION['token'] = bin2hex(random_bytes(32));
    }
  });