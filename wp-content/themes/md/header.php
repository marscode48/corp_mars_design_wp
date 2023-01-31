<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="<?php echo esc_url(get_theme_file_uri('images/favicon.ico')); ?>" />

    <?php wp_head(); ?>
  </head>


  <body>
    <div id="global-container">
      <div id="container">
        <div class="nav-trigger"></div>
        <div class="mobile-menu__cover"></div>
        
        <!-- header -->
        <header id="header" class="header">
          <div class="header__inner">
            <h1 class="logo">
              <a href="<?php echo esc_url(home_url()); ?>">
                <img src="<?php echo esc_url(get_theme_file_uri('images/logo.png')); ?>" alt="Mars Design" />
              </a>
            </h1>

            <!-- モバイルメニュー -->
            <nav class="mobile-menu">
              <div class="logo">
                <a href="<?php echo esc_url(home_url()); ?>">
                  <img src="<?php echo esc_url(get_theme_file_uri('images/logo.png')); ?>" alt="">
                </a>
              </div>
              <ul class="mobile-menu__ul">
                <li class="mobile-menu__li"><a href="<?php echo esc_url(home_url('/concept/')); ?>">Concept</a></li>
                <li class="mobile-menu__li"><a href="<?php echo esc_url(home_url('/news/')); ?>">News</a></li>
                <li class="mobile-menu__li"><a href="<?php echo esc_url(home_url('/works/')); ?>">Works</a></li>
                <li class="mobile-menu__li"><a href="<?php echo esc_url(home_url('/inquiry/')); ?>">Inquiry</a></li>
              </ul>
            </nav>
            
            <!-- デスクトップメニュー -->
            <nav class="header__nav">
              <ul class="header__ul">
                <li class="header__li"><a href="<?php echo esc_url(home_url('/concept/')); ?>">Concept</a></li>
                <li class="header__li"><a href="<?php echo esc_url(home_url('/news/')); ?>">News</a></li>
                <li class="header__li"><a href="<?php echo esc_url(home_url('/works/')); ?>">Works</a></li>
                <li class="header__li"><a href="<?php echo esc_url(home_url('/inquiry/')); ?>">Inquiry</a></li>
              </ul>
            </nav>
            
            <div class="mobile-menu__btn">
              <span></span>
              <span></span>
            </div>
            <div class="mobile-menu__mask"></div>
    
          </div>
        </header>
