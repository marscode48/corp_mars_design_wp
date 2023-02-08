<?php
/*
 * Template Name: Concept
 */
?>

<?php get_header(); ?>

<main id="main-inquiry">

<!-- Top Parallax -->
<section class="top-parallax">
  <div class="gsap-top-image bg-concept"></div>
  <h1 class="gsap-top-title">
    <?php the_title(); ?>
  </h1>
  <div class="hero__footer">
    <span class="hero__scrolltext">scroll</span>
  </div>
</section>

<!-- Concept -->
<section class="concept-page">
  <div class="concept-page__container">
    <div class="concept-page__head appear up">
      <h2 class="page-title item">
        私たちのインテリアとは
      </h2>
    </div>
    <div class="concept-page__body card-parallax">
      <div class="concept-page__flex">
        <div class="concept-page__card gsap-card appear down">
          <div class="concept-page__item item">
            <p class="concept-page__image">
              <img class="gsap-concept-image" 
              src="<?php echo esc_url(get_theme_file_uri('images/concept-1.jpg')); ?>" alt=""/>
            </p>
            <p class="concept-page__circle">
              <img class="gsap-concept-circle" src="<?php echo esc_url(get_theme_file_uri('images/card-logo1.svg')); ?>" alt="">
            </p>
            <h3 class="concept-page__title gsap-concept-title">色彩と空間</h3>
            <p class="concept-page__description gsap-concept-description">
              テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>
          </div>
        </div>
        <div class="concept-page__card gsap-card appear up">
          <div class="concept-page__item item">
            <p class="concept-page__image">
              <img class="gsap-concept-image" 
              src="<?php echo esc_url(get_theme_file_uri('images/concept-2.jpg')); ?>" alt=""/>
            </p>
            <p class="concept-page__circle">
              <img class="gsap-concept-circle" src="<?php echo esc_url(get_theme_file_uri('images/card-logo2.svg')); ?>" alt="">
            </p>
            <h3 class="concept-page__title gsap-concept-title">厳選した素材</h3>
            <p class="concept-page__description gsap-concept-description">
              テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>
          </div>
        </div>
        <div class="concept-page__card gsap-card appear down">
          <div class="concept-page__item item">
            <p class="concept-page__image">
              <img class="gsap-concept-image" 
              src="<?php echo esc_url(get_theme_file_uri('images/concept-3.jpg')); ?>" alt=""/>
            </p>
            <p class="concept-page__circle">
              <img class="gsap-concept-circle" src="<?php echo esc_url(get_theme_file_uri('images/card-logo3.svg')); ?>" alt="">
            </p>
            <h3 class="concept-page__title gsap-concept-title">暮らしと調和</h3>
            <p class="concept-page__description gsap-concept-description">
              テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>
          </div>
        </div>
        <div class="concept-page__card gsap-card appear up">
          <div class="concept-page__item item">
            <p class="concept-page__image">
              <img class="gsap-concept-image" 
              src="<?php echo esc_url(get_theme_file_uri('images/concept-4.jpg')); ?>" alt=""/>
            </p>
            <p class="concept-page__circle">
              <img class="gsap-concept-circle" src="<?php echo esc_url(get_theme_file_uri('images/card-logo4.svg')); ?>" alt="">
            </p>
            <h3 class="concept-page__title gsap-concept-title">強い耐久性</h3>
            <p class="concept-page__description gsap-concept-description">
              テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="concept-page__foot appear up">
      <div class="home-link item">
        <a href="<?php echo esc_url(home_url()); ?>" class="arrow-anime">
          Home
        </a>
      </div>
    </div>
  </div>
</section>


</main>

<?php get_footer(); ?>