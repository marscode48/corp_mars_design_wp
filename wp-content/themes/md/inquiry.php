<?php
/*
 * Template Name: Inquiry
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

<!-- Inquiry -->
<section class="inquiry-page">

  <div class="inquiry-page__head appear up">
    <h2 class="page-title item">
    ご依頼・お問い合わせ
    </h2>
  </div>
  
  <div class="inquiry-page__body">
    <!-- Contact Form 7 -->
    <?php echo do_shortcode('[contact-form-7 id="62" title="コンタクトフォーム1"]'); ?>
  </div>

  <div class="inquiry-page__foot appear up">
    <div class="home-link item">
      <a href="<?php echo esc_url(home_url()); ?>" class="arrow-anime">
        Home
      </a>
    </div>
  </div>
</section>


</main>

<?php get_footer(); ?>