<?php get_header(); ?>

<main>
  <!-- メインビジュアル -->
  <div id="mainvisual" class="mainvisual hero">

    <!-- Hero Slider -->
    <div class="swiper swiper-hero">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="hero__title">理想空間を創造する</div>
          <img src="<?php echo esc_url(get_theme_file_uri('images/mainvisual-1.jpg')); ?>" alt="" />
        </div>
        <div class="swiper-slide">
          <div class="hero__title">こだわり抜く喜び</div>
          <img src="<?php echo esc_url(get_theme_file_uri('images/mainvisual-2.jpg')); ?>" alt="" />
        </div>
        <div class="swiper-slide">
          <div class="hero__title">憧れを実現する幸せ</div>
          <img src="<?php echo esc_url(get_theme_file_uri('images/mainvisual-3.jpg')); ?>" alt="" />
        </div>
      </div>

      <div class="swiper-pagination"></div>
      
      <div class="hero__footer">
        <span class="hero__scrolltext">scroll</span>
      </div>
    </div>
  </div>


  <!-- Concept -->
  <section id="concept" class="concept">
    <div class="concept__inner">

      <div class="concept-parallax appear right">
        <div class="item">
          <a href="<?php echo esc_url(home_url('/concept/')); ?>">
            <img class="gsap-image" src="<?php echo esc_url(get_theme_file_uri('images/mainconcept.jpg')); ?>" alt="">
          </a>
        </div>
      </div>

      <div class="concept__heading appear left">
        <div class="concept__heading-inner">
          <h2 class="section-title">
            <span class="en item">Concept</span>
            <span class="ja item">私たちのインテリアとは</span>
          </h2>
          <p class="concept__lead">
            <span class="item">色彩と空間</span>
            <span class="item">素材と装飾</span>
            <span class="item">耐久と機能</span>
          </p>
          
          <div class="section-link item">
            <a href="<?php echo esc_url(home_url('/concept/')); ?>" class="arrow-anime">
              Concept
            </a>
          </div>

        </div>
      </div>
    </div>
  </section>


  <!-- News -->
  <section id="news" class="news">
    <div class="news__container">
      <div class="news__header appear up">
        <h2 class="section-title">
          <span class="en item">NEWS</span>
          <span class="ja item">お知らせ</span>
        </h2>
      </div>
      
      <div class="news__inner">
        <ul class="appear up">
          <?php
            $args = array(
              'posts_per_page' => 3
            );
          ?>
          <?php $posts = get_posts($args); ?>
          <?php foreach($posts as $post): ?>
            <?php setup_postdata($post); ?>
            <?php
              $cat = get_the_category();
              $catname = $cat[0]->cat_name;
              $catid = $cat[0]->term_id;
            ?>
            <li class="news-list item">
              <div class="news-date-cat">
                <time datetime="2021-01-01">
                  <?php the_time('Y.m.d'); ?>
                </time>
                <?php
                  echo '<a href="' . esc_url(get_category_link($catid)) . '">' . $catname . '</a>';
                ?>
              </div>
              <p>
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </p>
            </li>
          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
        </ul>
      </div>

      <div class="news__footer appear up">
        <div class="section-link item">
          <a href="<?php echo esc_url(home_url('/news/')); ?>" class="arrow-anime">
            News
          </a>
        </div>
      </div>
    </div>
  </section>


  <!-- Flow -->
  <section id="flow" class="flow">
    <div class="flow__header appear up">
      <h2 class="section-title">
        <span class="en item">FLOW</span>
        <span class="ja item">コーディネートまでの流れ</span>
      </h2>
    </div>
    <div class="flow__inner">

      <!-- Flow Pagination Slider -->
      <div class="swiper-pagination-main"></div>

      <!-- Flow NestedSlider Main -->
      <div class="swiper swiper-main">
        <div class="swiper-wrapper">

          <!-- Step1 -->
          <div class="swiper-slide">
            <div class="mainslide">
              <div class="mainslide-title">ヒアリング・プラン提案</div>
              <!-- Flow NestedSlider Sub -->
              <div class="swiper swiper-sub">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="subslide">
                      <div class="subslide-media"><img src="<?php echo esc_url(get_theme_file_uri('images/flow-01.jpg')); ?>" alt=""></div>
                      <p class="subslide-text">お客様が理想とするインテリアをお伺いします。</p>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="subslide">
                      <div class="subslide-media"><img src="<?php echo esc_url(get_theme_file_uri('images/flow-02.jpg')); ?>" alt=""></div>
                      <p class="subslide-text">イメージを作成し、プランを絞り込みます。</p>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="subslide">
                      <div class="subslide-media"><img src="<?php echo esc_url(get_theme_file_uri('images/flow-03.jpg')); ?>" alt=""></div>
                      <p class="subslide-text">プランに適したインテリアを選択します。</p>
                    </div>
                  </div>
                </div>
                <div class="swiper-pagination-sub"></div>
              </div>
            </div>
          </div>

          <!-- Step2 -->
          <div class="swiper-slide">
            <div class="mainslide">
              <div class="mainslide-title">お見積り・ご契約</div>
              <!-- Flow NestedSlider Sub -->
              <div class="swiper swiper-sub">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="subslide">
                      <div class="subslide-media"><img src="<?php echo esc_url(get_theme_file_uri('images/flow-04.jpg')); ?>" alt=""></div>
                      <p class="subslide-text">実際のプランと見積概算書の作成をします。</p>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="subslide">
                      <div class="subslide-media"><img src="<?php echo esc_url(get_theme_file_uri('images/flow-05.jpg')); ?>" alt=""></div>
                      <p class="subslide-text">ご予算を合わせて、ご契約となります。</p>
                    </div>
                  </div>
                </div>
                <div class="swiper-pagination-sub"></div>
              </div>
            </div>
          </div>

          <!-- Step3 -->
          <div class="swiper-slide">
            <div class="mainslide">
              <div class="mainslide-title">施工・完成</div>
              <!-- Flow NestedSlider Sub -->
              <div class="swiper swiper-sub">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="subslide">
                      <div class="subslide-media"><img src="<?php echo esc_url(get_theme_file_uri('images/flow-06.jpg')); ?>" alt=""></div>
                      <p class="subslide-text">インテリアを発注し、施工します。</p>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="subslide">
                      <div class="subslide-media"><img src="<?php echo esc_url(get_theme_file_uri('images/flow-07.jpg')); ?>" alt=""></div>
                      <p class="subslide-text">お客様と最終的な確認を行い、完成となります。</p>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="subslide">
                      <div class="subslide-media"><img src="<?php echo esc_url(get_theme_file_uri('images/flow-08.jpg')); ?>" alt=""></div>
                      <p class="subslide-text">完成後に問題はないかをアフターフォローします。</p>
                    </div>
                  </div>
                </div>
                <div class="swiper-pagination-sub"></div>
              </div>
            </div>
          </div>

        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
  </section>


  <!-- Works -->
  <section id="works" class="works">

    <div class="works__container">
      <div class="works__header appear up">
        <h2 class="section-title">
          <span class="en item">WORKS</span>
          <span class="ja item">コーディネート実例</span>
        </h2>
      </div>

      <div class="works__inner">

        <!-- Works Loop Slider -->
        <div class="swiper swiper-works">
          <div class="swiper-wrapper">
            
            <a href="<?php echo esc_url(home_url('/works/')); ?>" class="swiper-slide">
              <article class="slide">
                <div class="slide-media img-cover"><img src="<?php echo esc_url(get_theme_file_uri('images/work-01.jpg')); ?>" alt=""></div>
              </article>
            </a>

            <a href="<?php echo esc_url(home_url('/works/')); ?>" class="swiper-slide">
              <article class="slide">
                <div class="slide-media img-cover"><img src="<?php echo esc_url(get_theme_file_uri('images/work-02.jpg')); ?>" alt=""></div>
              </article>
            </a>

            <a href="<?php echo esc_url(home_url('/works/')); ?>" class="swiper-slide">
              <article class="slide">
                <div class="slide-media img-cover"><img src="<?php echo esc_url(get_theme_file_uri('images/work-03.jpg')); ?>" alt=""></div>
              </article>
            </a>

            <a href="<?php echo esc_url(home_url('/works/')); ?>" class="swiper-slide">
              <article class="slide">
                <div class="slide-media img-cover"><img src="<?php echo esc_url(get_theme_file_uri('images/work-04.jpg')); ?>" alt=""></div>
              </article>
            </a>

            <a href="<?php echo esc_url(home_url('/works/')); ?>" class="swiper-slide">
              <article class="slide">
                <div class="slide-media img-cover"><img src="<?php echo esc_url(get_theme_file_uri('images/work-05.jpg')); ?>" alt=""></div>
              </article>
            </a>

            <a href="<?php echo esc_url(home_url('/works/')); ?>" class="swiper-slide">
              <article class="slide">
                <div class="slide-media img-cover"><img src="<?php echo esc_url(get_theme_file_uri('images/work-06.jpg')); ?>" alt=""></div>
              </article>
            </a>

            <a href="<?php echo esc_url(home_url('/works/')); ?>" class="swiper-slide">
              <article class="slide">
                <div class="slide-media img-cover"><img src="<?php echo esc_url(get_theme_file_uri('images/work-07.jpg')); ?>" alt=""></div>
              </article>
            </a>

            <a href="<?php echo esc_url(home_url('/works/')); ?>" class="swiper-slide">
              <article class="slide">
                <div class="slide-media img-cover"><img src="<?php echo esc_url(get_theme_file_uri('images/work-08.jpg')); ?>" alt=""></div>
              </article>
            </a>

            <a href="<?php echo esc_url(home_url('/works/')); ?>" class="swiper-slide">
              <article class="slide">
                <div class="slide-media img-cover"><img src="<?php echo esc_url(get_theme_file_uri('images/work-09.jpg')); ?>" alt=""></div>
              </article>
            </a>

            <a href="<?php echo esc_url(home_url('/works/')); ?>" class="swiper-slide">
              <article class="slide">
                <div class="slide-media img-cover"><img src="<?php echo esc_url(get_theme_file_uri('images/work-10.jpg')); ?>" alt=""></div>
              </article>
            </a>

          </div>
          
        </div>
      </div>

      <div class="works__footer appear up">
        <div class="section-link item">
          <a href="<?php echo esc_url(home_url('/works/')); ?>" class="arrow-anime">
            Works
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Inquiry -->
  <section id="inquiry" class="inquiry">
    <div class="inquiry__header appear up">
      <h2 class="section-title">
        <span class="en item">INQUIRY</span>
        <span class="ja item">ご依頼・お問い合わせ</span>
      </h2>
    </div>

    <div class="inquiry__inner">
      <a class="inquiry__link" href="inquiry.html">
        <div class="inquiry-parallax">
          <div class="inquiry__message">
            <p class="inquiry__left">コーディネートのご依頼</p>
            <p class="inquiry__right">お問い合わせはこちら</p>
          </div>
        </div>
      </a>
    </div>

    <div class="inquiry__footer appear up">
      <div class="section-link item">
        <a href="<?php echo esc_url(home_url('/inquiry/')); ?>" class="arrow-anime">
          Inquiry
        </a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>