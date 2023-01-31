<?php get_header(); ?>

<main id="main-inquiry">

<!-- Top Parallax -->
<section class="top-parallax">
  <div class="gsap-top-image bg-inquiry"></div>
  <h2 class="gsap-top-title">News</h2>
  <div class="hero__footer">
    <span class="hero__scrolltext">scroll</span>
  </div>
</section>

<!-- News -->
<section class="news-page">

<div class="news-page__head appear up">
  <h2 class="page-title item">
  お知らせ
  </h2>
</div>

<div class="news-page__body">
  <div class="news-page__main">
    <article class="main-link appear up">
      <ul>
        <?php if(have_posts()): ?>
          <?php while(have_posts()):the_post(); ?>
            <li class="news-list item">
            <?php
              $cat = get_the_category();
              $catname = $cat[0]->cat_name;
              $catid = $cat[0]->term_id;
            ?>
              <div class="news-date-cat">
                <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                <?php
                  echo '<a href="' . esc_url(get_category_link($catid)) . '">' . $catname . '</a>';
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
        <li class="item">
          <a href="#">ニュース</a>
        </li>
        <li class="item">
          <a href="#">イベント</a>
        </li>
        <li class="item">
          <a href="#">プレスリリース</a>
        </li>
      </ul>
    </div>
    <div class="side-link appear up">
      <h3 class="side-title item">Archive</h3>
      <ul>
        <li class="item">
          <a href="#">2022年12月</a>
        </li>
        <li class="item">
          <a href="#">2022年11月</a>
        </li>
        <li class="item">
          <a href="#">2022年10月</a>
        </li>
      </ul>
    </div>
  </div>
</div>       
<div class="news-page__foot appear up">
  <div class="home-link item">
    <a href="index.html" class="arrow-anime">
      Home
    </a>
  </div>
</div>
</section>

</main>

<?php get_footer(); ?>