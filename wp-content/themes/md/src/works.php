<?php
/*
 * Template Name: Works
 */
?>

<?php get_header(); ?>

<main id="main-inquiry">

<!-- Top Parallax -->
<section class="top-parallax">
  <div class="gsap-top-image bg-inquiry"></div>
  <h1 class="gsap-top-title">
    <?php the_title(); ?>
  </h1>
  <div class="hero__footer">
    <span class="hero__scrolltext">scroll</span>
  </div>
</section>

<!-- Works -->
<section class="works-page">

  <div class="works-page__head appear up">
    <h2 class="page-title item">
    コーディネート実例
    </h2>
  </div>
  
  <div class="works-page__body">

    <!-- Works Thumb Slider-->
    <!-- swiper-main -->
    <div class="swiper swiper-main">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="slide">
            <div class="slide-image"><img src="<?php echo esc_url(get_theme_file_uri('images/work-01.jpg')); ?>" alt=""></div>
            <div class="slide-title">Work1</div>
            <div class="slide-text">テキストテキストテキストテキストテキストテキストテキスト</div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slide">
            <div class="slide-image"><img src="<?php echo esc_url(get_theme_file_uri('images/work-02.jpg')); ?>" alt=""></div>
            <div class="slide-title">Work2</div>
            <div class="slide-text">テキストテキストテキストテキストテキストテキストテキスト</div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slide">
            <div class="slide-image"><img src="<?php echo esc_url(get_theme_file_uri('images/work-03.jpg')); ?>" alt=""></div>
            <div class="slide-title">Work3</div>
            <div class="slide-text">テキストテキストテキストテキストテキストテキストテキスト</div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slide">
            <div class="slide-image"><img src="<?php echo esc_url(get_theme_file_uri('images/work-04.jpg')); ?>" alt=""></div>
            <div class="slide-title">Work4</div>
            <div class="slide-text">テキストテキストテキストテキストテキストテキストテキスト</div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slide">
            <div class="slide-image"><img src="<?php echo esc_url(get_theme_file_uri('images/work-05.jpg')); ?>" alt=""></div>
            <div class="slide-title">Work5</div>
            <div class="slide-text">テキストテキストテキストテキストテキストテキストテキスト</div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slide">
            <div class="slide-image"><img src="<?php echo esc_url(get_theme_file_uri('images/work-06.jpg')); ?>" alt=""></div>
            <div class="slide-title">Work6</div>
            <div class="slide-text">テキストテキストテキストテキストテキストテキストテキスト</div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slide">
            <div class="slide-image"><img src="<?php echo esc_url(get_theme_file_uri('images/work-07.jpg')); ?>" alt=""></div>
            <div class="slide-title">Work7</div>
            <div class="slide-text">テキストテキストテキストテキストテキストテキストテキスト</div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slide">
            <div class="slide-image"><img src="<?php echo esc_url(get_theme_file_uri('images/work-08.jpg')); ?>" alt=""></div>
            <div class="slide-title">Work8</div>
            <div class="slide-text">テキストテキストテキストテキストテキストテキストテキスト</div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slide">
            <div class="slide-image"><img src="<?php echo esc_url(get_theme_file_uri('images/work-09.jpg')); ?>" alt=""></div>
            <div class="slide-title">Work9</div>
            <div class="slide-text">テキストテキストテキストテキストテキストテキストテキスト</div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slide">
            <div class="slide-image"><img src="<?php echo esc_url(get_theme_file_uri('images/work-10.jpg')); ?>" alt=""></div>
            <div class="slide-title">Work10</div>
            <div class="slide-text">テキストテキストテキストテキストテキストテキストテキスト</div>
          </div>
        </div>
      </div>
      <div class="swiper-controller">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>

    <!-- swiper-thumb -->
    <div class="swiper swiper-thumb">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="thumb-image"><img src="<?php echo esc_url(get_theme_file_uri('images/work-01.jpg')); ?>" alt=""></div>
        </div>
        <div class="swiper-slide">
          <div class="thumb-image"><img src="<?php echo esc_url(get_theme_file_uri('images/work-02.jpg')); ?>" alt=""></div>
        </div>
        <div class="swiper-slide">
          <div class="thumb-image"><img src="<?php echo esc_url(get_theme_file_uri('images/work-03.jpg')); ?>" alt=""></div>
        </div>
        <div class="swiper-slide">
          <div class="thumb-image"><img src="<?php echo esc_url(get_theme_file_uri('images/work-04.jpg')); ?>" alt=""></div>
        </div>
        <div class="swiper-slide">
          <div class="thumb-image"><img src="<?php echo esc_url(get_theme_file_uri('images/work-05.jpg')); ?>" alt=""></div>
        </div>
        <div class="swiper-slide">
          <div class="thumb-image"><img src="<?php echo esc_url(get_theme_file_uri('images/work-06.jpg')); ?>" alt=""></div>
        </div>
        <div class="swiper-slide">
          <div class="thumb-image"><img src="<?php echo esc_url(get_theme_file_uri('images/work-07.jpg')); ?>" alt=""></div>
        </div>
        <div class="swiper-slide">
          <div class="thumb-image"><img src="<?php echo esc_url(get_theme_file_uri('images/work-08.jpg')); ?>" alt=""></div>
        </div>
        <div class="swiper-slide">
          <div class="thumb-image"><img src="<?php echo esc_url(get_theme_file_uri('images/work-09.jpg')); ?>" alt=""></div>
        </div>
        <div class="swiper-slide">
          <div class="thumb-image"><img src="<?php echo esc_url(get_theme_file_uri('images/work-10.jpg')); ?>" alt=""></div>
        </div>
      </div>
      <div class="swiper-scrollbar"></div>
    </div>

  </div>

  <div class="works-page__foot appear up">
    <div class="home-link item">
      <a href="<?php echo esc_url(home_url()); ?>" class="arrow-anime">
        Home
      </a>
    </div>
  </div>
</section>


</main>

<?php get_footer(); ?>