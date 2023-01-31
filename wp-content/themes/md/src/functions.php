<?php

/**************************************************
CSSファイルの読み込み
**************************************************/
function my_enqueue_styles() {
  wp_enqueue_style('ress', get_theme_file_uri('css/vendors/ress.min.css'), array(), false, 'all');
  wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Montserrat:400,700|Noto+Sans+JP&display=swap', false);
  wp_enqueue_style('swiper', get_theme_file_uri('css/vendors/swiper.min.css'), array(), false, 'all');
  wp_enqueue_style('style', get_stylesheet_uri(), array('ress'), false, 'all');
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');

/**************************************************
JSファイルの読み込み
**************************************************/
function st_enqueue_scripts() {
  wp_enqueue_script('gsap', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js', array(), '3.11.3', true);
  wp_enqueue_script('gsap-scroll', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js', array(), '3.11.3', true);
  wp_enqueue_script('swiper', get_theme_file_uri('js/vendors/swiper-bundle.min.js'), array(), false, true);
  wp_enqueue_script('scroll-polyfill', get_theme_file_uri('js/vendors/scroll-polyfill.js'), array(), false, true);
  wp_enqueue_script('menu-open', get_theme_file_uri('js/libs/menu-open.js'), array(), false, true);
  wp_enqueue_script('slider-swiper', get_theme_file_uri('js/libs/slider-swiper.js'), array(), false, true);
  wp_enqueue_script('smooth-scroll', get_theme_file_uri('js/libs/smooth-scroll.js'), array(), false, true);
  wp_enqueue_script('scroll-observer', get_theme_file_uri('js/libs/scroll-observer.js'), array(), false, true);
  wp_enqueue_script('parallax-animation', get_theme_file_uri('js/libs/parallax-animation.js'), array(), false, true);
  wp_enqueue_script('main', get_theme_file_uri('js/main.js'), array(), false, true);
}
add_action('wp_enqueue_scripts', 'st_enqueue_scripts');

/**************************************************
投稿のアーカイブページを作成
**************************************************/
function post_has_archive($args, $post_type) {
  if ('post' == $post_type) {
    $args['rewrite'] = true; // リライトを有効にする
    $args['has_archive'] = 'news'; // 任意のスラッグ名
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);