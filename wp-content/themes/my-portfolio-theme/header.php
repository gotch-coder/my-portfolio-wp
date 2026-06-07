<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="hirokiのWeb制作ポートフォリオです。HTML・CSS・JavaScript・PHP・WordPressを使用したWebサイト制作を行っています。">
  <meta name="keywords" content="Web制作, ポートフォリオ, HTML, CSS, PHP">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  <meta name="robots" content="noindex">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/PC_icon2.png" type="image/png">
  <!-- OGP設定 -->
  <meta property="og:title" content="Hello My Portfolio">
  <meta property="og:type" content="website">
  <meta property="og:image" content="https://www.hiroki-web2024.com/images/240316180731150.JPG">
  <meta property="og:url" content="https://www.dev.hiroki-web2024.com/site-1">
  <meta property="og:description" content="Web制作始めました。皆様のご要望に応えてまいります。">
  <meta property="og:site_name" content="Hello My Portfolio">
  <meta property="og:locale" content="ja_JP">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@hiroki_ge8mt">

  <!-- <body class="loading"> -->
  <!-- ローディング動画 -->
  <!-- <div id="loading">
      <p class="loading__text">Loading</p>
    </div> -->
  <?php wp_head(); ?>
</head>

<!-- <body <?php body_class('loading'); ?>> -->

<body>
  <!-- ヘッダー -->
  <header class="header">
    <div class="inner">
      <div class="header__bg">
        <a href="<?php echo home_url('/'); ?>" class="navi__btn title">My Portfolio</a>

        <div id="navi__content" class="nav-menu">
          <nav class="header__navi">
            <ul class="navi__list">
              <li>
                <a href="#about" class="navi__btn">About</a>
              </li>
              <li>
                <a href="#service" class="navi__btn">Service</a>
              </li>
              <li>
                <a href="#works" class="navi__btn">Works</a>
              </li>
              <li>
                <a href="#contact" class="navi__btn">Contact</a>
              </li>
            </ul>
          </nav>
        </div>
        <!-- ハンバーガーボタン（三本線） -->
        <button class="hamburger" id="hamburgerBtn" aria-label="メニューを開く">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </button>
      </div>

    </div>
  </header>