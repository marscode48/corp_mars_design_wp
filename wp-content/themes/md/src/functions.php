<?php

/**************************************************
タイトルタグ、サムネイル画像を出力
**************************************************/ 
function setup_my_theme() {
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'setup_my_theme');

/**************************************************
カスタム投稿タイプの追加
**************************************************/
function add_custom_post_type() {
  register_post_type('works', [
    'label' => 'コーディネート実例',
    'public' => true,
    'has_archive' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-store',
    'show_in_rest' => true,
    'supports' => ['thumbnail', 'title', 'editor']
    ]
  );
}
add_action('init', 'add_custom_post_type');

/**************************************************
カスタム投稿のシングルページを非表示
**************************************************/
add_filter('works_rewrite_rules', '__return_empty_array');
// 非表示から

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

/**************************************************
ページネーション
**************************************************/
function pagination($pages = '', $range = 2) {
  $showitems = ($range * 2) + 1;

  // 現在のページ数
  global $paged;
  if(empty($paged)) {
    $paged = 1;
  }

  // 全ページ数
  if($pages == '') {
    global $wp_query;
    $pages = $wp_query->max_num_pages;
    if(!$pages) {
      $pages = 1;
    }
  }

  // ページ数が2ぺージ以上の場合のみ、ページネーションを表示
  if(1 != $pages) {
    echo '<div class="page-nation appear up">';
    echo '<ul>';
    // 1ページ目でなければ、「前のページ」リンクを表示
    if($paged > 1) {
      echo '<li class="prev item"><a href="' . esc_url(get_pagenum_link($paged - 1)) . '">BACK</a></li>';
    }
    
    // ページ番号を表示（現在のページはリンクにしない）
    for ($i = 1; $i <= $pages; $i++) {
      if (1 != $pages &&(!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems )) {
        if ($paged == $i) {
          echo '<li class="active item">' .$i. '</li>';
        } else {
          echo '<li class="item"><a href="' . esc_url(get_pagenum_link($i)) . '">' .$i. '</a></li>';
        }
      }
    }

    // 最終ページでなければ、「次のページ」リンクを表示
    if ($paged < $pages) {
      echo '<li class="next item"><a href="' . esc_url(get_pagenum_link($paged + 1)) . '">NEXT</a></li>';
    }
    echo '</ul>';
    echo '</div>';
  }
}