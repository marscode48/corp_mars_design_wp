<?php get_header(); ?>

<main id="main-inquiry">

<!-- Top Parallax -->
<section class="top-parallax">
  <div class="gsap-top-image bg-works"></div>
  <h1 class="gsap-top-title">Works</h1>
  <div class="hero__footer">
    <span class="hero__scrolltext">scroll</span>
  </div>
</section>

<!-- Works -->
<section class="works-page">

  <div class="works-page__head appear up">
    <h2 class="page-title item">コーディネート実例</h2>
  </div>
  
  <div class="works-page__body">

    <!-- Works Thumb Slider-->
    <!-- swiper-main -->
    <div class="swiper swiper-main">
      <div class="swiper-wrapper">
        
        <?php
          $args = array(
            'post_type' => 'works',
            'posts_per_page' => 10
          );
        ?>
        <?php $posts = get_posts($args); ?>
        <?php foreach($posts as $post): ?>
          <?php setup_postdata($post); ?>
            <div class="swiper-slide">
              <div class="slide">
                <div class="slide-image">
                  <img src="<?php the_post_thumbnail_url('full'); ?>" alt="">
                </div>
                <div class="slide-title"><?php the_title(); ?></div>
                <div class="slide-text"><?php the_content(); ?></div>
              </div>
            </div>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
      </div>
      <div class="swiper-controller">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>

    <!-- swiper-thumb -->
    <div class="swiper swiper-thumb">
      <div class="swiper-wrapper">
        
        <?php
          $args = array(
            'post_type' => 'works',
            'posts_per_page' => 10
          );
        ?>
        <?php $posts = get_posts($args); ?>
        <?php foreach($posts as $post): ?>
          <?php setup_postdata($post); ?>
            <div class="swiper-slide">
              <div class="thumb-image">
                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="">
              </div>
            </div>
          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
      </div>
      <div class="swiper-scrollbar"></div>
    </div>
  </div>

  <div class="works-page__foot appear up">
    <div class="home-link item">
      <a href="<?php echo esc_url(home_url()); ?>" class="arrow-anime">Home</a>
    </div>
  </div>
</section>


</main>

<?php get_footer(); ?>