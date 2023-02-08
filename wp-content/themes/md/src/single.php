<?php get_header(); ?>

<main id="main-inquiry">

<!-- Top Parallax -->
<section class="top-parallax">
  <div class="gsap-top-image bg-single"></div>
  <h1 class="gsap-top-title">Article</h1>
  <div class="hero__footer">
    <span class="hero__scrolltext">scroll</span>
  </div>
</section>

<!-- News投稿 -->
<section class="news-page">
  <?php if(have_posts()): ?>
    <?php while(have_posts()):the_post(); ?>
      <?php
        $cat = get_the_category();
        $catname = $cat[0]->cat_name;
        $catid = $cat[0]->term_id;
      ?>
      <div class="news-page__head appear up">
        <h2 class="page-title item">
          <?php the_title(); ?>
        </h2>
      </div>

      <div class="news-page__body">
        <div class="news-page__main">
          <article class="main-content appear up">
           <ul class="meta">
              <li class="date item"><?php the_time('Y-m-d'); ?></li>
              <li class="category item"><?php echo $catname; ?></li>
            </ul>
            <div class="text item">
              <?php the_content(); ?>
            </div>
            <ul class="post-link">
              <li class="prev item"><?php previous_post_link('%link', '< prev'); ?></li>
              <li class=" next item"><?php next_post_link('%link', 'next >'); ?></li>
            </ul>
          </article>

        </div>

        <div class="news-page__side">       
          <div class="side-link appear up">
            <h3 class="item">Category</h3>
            <ul>
            <!-- カテゴリ -->
            <?php
              $categories = get_categories();
              foreach ($categories as $category) {
                echo '<li><span class="item"><a href="' . esc_url(get_category_link($category->term_id)) . '">' . $category->name . '</a></span></li>';
              }
            ?>
            </ul>
          </div>
          <div class="side-link appear up">
            <h3 class="side-title item">Archive</h3>
            <ul>
              <!-- アーカイブ -->
              <?php
                wp_get_archives (array(
                  'type' => 'monthly',
                  'limit' => '6',
                  'format' => 'html',
                  'before' => '<span class="item">',
                  'after' => '</span>',
                ));
              ?>
            </ul>
          </div>
        </div>
      </div>       
      <div class="news-page__foot appear up">
        <div class="home-link item">
          <a href="<?php echo esc_url(home_url()); ?>" class="arrow-anime">
            Home
          </a>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</section>

</main>

<?php get_footer(); ?>  