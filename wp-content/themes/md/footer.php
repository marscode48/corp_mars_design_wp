        <!-- footer -->
        <footer id="footer" class="footer">
          <div class="footer__inner">
            <div class="top-link appear right">
              <div class="item">
                <a href="#container" class="arrow-anime">
                  TOP
                </a>
              </div>
            </div>

            <div class="footer__flex appear up">
              <div class="footer__info">
                <p class="logo item">
                  <a href="<?php echo esc_url(home_url()); ?>">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/logo.png')); ?>" alt="Mars Design">
                  </a>
                </p>
                <p class="info item">
                  マーズデザイン株式会社<br>
                  〒151-0053<br>
                  東京都渋谷区代々木X-X-X<br>
                  TEL 03-XXXX-XXXX
                </p>
              </div>

              <nav class="footer__nav">
                <ul class="footer__ul">
                  <li class="footer__li item"><a href="<?php echo esc_url(home_url('/cpncept/')); ?>">Concept</a></li>
                  <li class="footer__li item"><a href="<?php echo esc_url(home_url('/news/')); ?>">News</a></li>
                  <li class="footer__li item"><a href="<?php echo esc_url(home_url('/works/')); ?>">Works</a></li>
                  <li class="footer__li item"><a href="<?php echo esc_url(home_url('/inquiry/')); ?>">Inquiry</a></li>
                </ul>
              </nav>
            </div>

            <div class="footer__copyright appear up">
              <div class="item">
                &copy; <?php echo esc_html(bloginfo('name')); ?>
              </div>
            </div>
          </div>
        </footer>

      </div>
      <!-- モバイルメニュー -->
      <nav class="mobile-menu">
        <div class="logo">
          <a href="<?php echo esc_url(home_url()); ?>">
            <img src="<?php echo esc_url(get_theme_file_uri('images/logo.png')); ?>" alt="">
          </a>
        </div>
        <ul class="mobile-menu__ul">
          <li class="mobile-menu__li"><a href="<?php echo esc_url(home_url('/concept/')); ?>">Concept</a></li>
          <li class="mobile-menu__li"><a href="<?php echo esc_url(home_url('/news/')); ?>">News</a></li>
          <li class="mobile-menu__li"><a href="<?php echo esc_url(home_url('/works/')); ?>">Works</a></li>
          <li class="mobile-menu__li"><a href="<?php echo esc_url(home_url('/inquiry/')); ?>">Inquiry</a></li>
        </ul>
      </nav>
    </div>

    <?php wp_footer(); ?>
  </body>
</html>
