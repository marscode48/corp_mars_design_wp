<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
            <?php $html_tag = (is_home() || is_front_page()) ? 'h1' : 'div'; ?>
            <<?php echo $html_tag; ?> class="logo">
              <a href="<?php echo esc_url(home_url()); ?>">
                <img src="<?php echo esc_url(get_theme_file_uri('images/logo.png')); ?>" alt="Mars Design" />
              </a>
            </<?php echo $html_tag; ?>>
            
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
