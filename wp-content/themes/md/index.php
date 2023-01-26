<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mars Design</title>
    <meta name="description" content="デザインからコーディネートまでを手掛けるインテリアショップです。"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="css/vendors/ress.min.css" />
    <link rel="stylesheet" href="css/vendors/swiper.min.css" />
    <link rel="stylesheet" href="./style.css" />
  </head>


  <body>
    <div id="global-container">
      <div id="container">
        <div class="nav-trigger"></div>
        <div class="mobile-menu__cover"></div>
        
        <!-- header -->
        <header id="header" class="header">
          <div class="header__inner">
            <h1 class="logo">
              <a href="index.html">
                <img src="images/logo.png" alt="Mars Design" />
              </a>
            </h1>
            
            <nav class="header__nav">
              <ul class="header__ul">
                <li class="header__li"><a href="concept.html">Concept</a></li>
                <li class="header__li"><a href="news.html">News</a></li>
                <li class="header__li"><a href="works.html">Works</a></li>
                <li class="header__li"><a href="inquiry.html">Inquiry</a></li>
              </ul>
            </nav>
            
            <div class="mobile-menu__btn">
              <span></span>
              <span></span>
            </div>
            <div class="mobile-menu__mask"></div>
    
          </div>
        </header>
    
    
        <main>

          <!-- メインビジュアル -->
          <div id="mainvisual" class="mainvisual hero">

            <!-- Hero Slider -->
            <div class="swiper swiper-hero">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="hero__title">理想空間を創造する</div>
                  <img src="images/mainvisual-1.jpg" alt="" />
                </div>
                <div class="swiper-slide">
                  <div class="hero__title">こだわり抜く喜び</div>
                  <img src="images/mainvisual-2.jpg" alt="" />
                </div>
                <div class="swiper-slide">
                  <div class="hero__title">憧れを実現する幸せ</div>
                  <img src="images/mainvisual-3.jpg" alt="" />
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
                  <a href="concept.html">
                    <img class="gsap-image" src="images/mainconcept.jpg" alt="">
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
                    <a href="concept.html" class="arrow-anime">
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
                  <li class="news-list item">
                    <div class="news-date">
                      <time datetime="2021-01-01">2023.01.01</time>
                      <a href="news.html">
                        NEWS
                      </a>
                    </div>
                    <p>
                      <a href="news.html">タイトルタイトルタイトルタイトル</a>
                    </p>
                  </li>
                  <li class="news-list item">
                    <div class="news-date">
                      <time datetime="2021-01-01">2023.01.01</time>
                      <a href="news.html">
                        EVENT
                      </a>
                    </div>
                    <p>
                      <a href="news.html">タイトルタイトルタイトルタイトル</a>
                    </p>
                  </li>
                  <li class="news-list item">
                    <div class="news-date">
                      <time datetime="2021-01-01">2023.01.01</time>
                      <a href="news.html">
                        NEWS
                      </a>
                    </div>
                    <p>
                      <a href="news.html">タイトルタイトルタイトルタイトル</a>
                    </p>
                  </li>
                </ul>
              </div>

              <div class="news__footer appear up">
                <div class="section-link item">
                  <a href="news.html" class="arrow-anime">
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
                              <div class="subslide-media"><img src="images/flow-01.jpg" alt=""></div>
                              <p class="subslide-text">お客様が理想とするインテリアをお伺いします。</p>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="subslide">
                              <div class="subslide-media"><img src="images/flow-02.jpg" alt=""></div>
                              <p class="subslide-text">イメージを作成し、プランを絞り込みます。</p>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="subslide">
                              <div class="subslide-media"><img src="images/flow-03.jpg" alt=""></div>
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
                              <div class="subslide-media"><img src="images/flow-04.jpg" alt=""></div>
                              <p class="subslide-text">実際のプランと見積概算書の作成をします。</p>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="subslide">
                              <div class="subslide-media"><img src="images/flow-05.jpg" alt=""></div>
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
                              <div class="subslide-media"><img src="images/flow-06.jpg" alt=""></div>
                              <p class="subslide-text">インテリアを発注し、施工します。</p>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="subslide">
                              <div class="subslide-media"><img src="images/flow-07.jpg" alt=""></div>
                              <p class="subslide-text">お客様と最終的な確認を行い、完成となります。</p>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="subslide">
                              <div class="subslide-media"><img src="images/flow-08.jpg" alt=""></div>
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
                    
                    <a href="works.html" class="swiper-slide">
                      <article class="slide">
                        <div class="slide-media img-cover"><img src="images/work-01.jpg" alt=""></div>
                      </article>
                    </a>
    
                    <a href="works.html" class="swiper-slide">
                      <article class="slide">
                        <div class="slide-media img-cover"><img src="images/work-02.jpg" alt=""></div>
                      </article>
                    </a>
    
                    <a href="works.html" class="swiper-slide">
                      <article class="slide">
                        <div class="slide-media img-cover"><img src="images/work-03.jpg" alt=""></div>
                      </article>
                    </a>
    
                    <a href="works.html" class="swiper-slide">
                      <article class="slide">
                        <div class="slide-media img-cover"><img src="images/work-04.jpg" alt=""></div>
                      </article>
                    </a>
    
                    <a href="works.html" class="swiper-slide">
                      <article class="slide">
                        <div class="slide-media img-cover"><img src="images/work-05.jpg" alt=""></div>
                      </article>
                    </a>
    
                    <a href="works.html" class="swiper-slide">
                      <article class="slide">
                        <div class="slide-media img-cover"><img src="images/work-06.jpg" alt=""></div>
                      </article>
                    </a>
    
                    <a href="works.html" class="swiper-slide">
                      <article class="slide">
                        <div class="slide-media img-cover"><img src="images/work-07.jpg" alt=""></div>
                      </article>
                    </a>
    
                    <a href="works.html" class="swiper-slide">
                      <article class="slide">
                        <div class="slide-media img-cover"><img src="images/work-08.jpg" alt=""></div>
                      </article>
                    </a>
    
                    <a href="works.html" class="swiper-slide">
                      <article class="slide">
                        <div class="slide-media img-cover"><img src="images/work-09.jpg" alt=""></div>
                      </article>
                    </a>
    
                    <a href="works.html" class="swiper-slide">
                      <article class="slide">
                        <div class="slide-media img-cover"><img src="images/work-10.jpg" alt=""></div>
                      </article>
                    </a>
    
                  </div>
                  
                </div>
              </div>

              <div class="works__footer appear up">
                <div class="section-link item">
                  <a href="works.html" class="arrow-anime">
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
                <a href="inquiry.html" class="arrow-anime">
                  Inquiry
                </a>
              </div>
            </div>
          </section>

        </main>
        
        
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
                  <a href="index.html">
                    <img src="images/logo.png" alt="Mars Design">
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
                  <li class="footer__li item"><a href="concept.html">Concept</a></li>
                  <li class="footer__li item"><a href="news.html">News</a></li>
                  <li class="footer__li item"><a href="works.html">Works</a></li>
                  <li class="footer__li item"><a href="inquiry.html">Inquiry</a></li>
                </ul>
              </nav>
            </div>

            <div class="footer__copyright appear up">
              <div class="item">&copy; Mars Design Inc.
              </div>
            </div>
          </div>
        </footer>

      </div>

      <!-- モバイルメニュー -->
      <nav class="mobile-menu">
        <div class="logo">
          <a href="index.html"><img src="images/logo.png" alt=""></a>
        </div>
        <ul class="mobile-menu__ul">
          <li class="mobile-menu__li"><a href="concept.html">Concept</a></li>
          <li class="mobile-menu__li"><a href="news.html">News</a></li>
          <li class="mobile-menu__li"><a href="works.html">Works</a></li>
          <li class="mobile-menu__li"><a href="inquiry.html">Inquiry</a></li>
        </ul>
      </nav>
      
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
    <script src="js/vendors/swiper-bundle.min.js"></script>
    <script src="js/vendors/scroll-polyfill.js"></script>
    <script src="js/libs/menu-open.js"></script>
    <script src="js/libs/slider-swiper.js"></script>
    <script src="js/libs/smooth-scroll.js"></script>
    <script src="js/libs/scroll-observer.js"></script>
    <script src="js/libs/parallax-animation.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
