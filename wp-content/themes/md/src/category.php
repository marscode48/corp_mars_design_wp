<?php get_header(); ?>

<main id="main-inquiry">

  <!-- Top Parallax -->
  <section class="top-parallax">
    <div class="gsap-top-image bg-category"></div>
    <h1 class="gsap-top-title">Categories</h1>
    <div class="hero__footer">
      <span class="hero__scrolltext">scroll</span>
    </div>
  </section>

  <!-- カテゴリ別一覧 -->
  <section class="news-page">

    <div class="news-page__head appear up">
      <?php
        $cat = get_the_category();
        $catname = $cat[0]->cat_name;
        $catid = $cat[0]->term_id;
      ?>

      <h2 class="page-title item">
        <?php echo esc_html($catname); ?>
      </h2>
    </div>

    <div class="news-page__body">
      <div class="news-page__main">
        <article class="main-link appear up">
          <ul>
            <!-- ループ -->
            <?php if(have_posts()): ?>
              <?php while(have_posts()):the_post(); ?>
                <li class="news-list item">
                  <div class="news-date-cat">
                    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                    <?php
                      echo '<a href="' . esc_url(get_category_link($catid)) . '">' . esc_html($catname) . '</a>';
                    ?>
                  </div>
                  <p>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </p>
                </li>
              <?php endwhile; ?>
            <?php endif; ?>
          </ul>
        </article>

        <!-- ページネーション -->
        <?php
          if (function_exists("pagination")) {
            pagination($wp_query->max_num_pages);
          }
        ?>
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
  </section>

</main>

<?php get_footer(); ?>