<!-- ===================================================
  index.php
  トップページパーツの定義
================================================== -->
<?php get_header(); ?>

<div class="container container--top">

  <!-- ⬇︎ /////////////////// visual.php 読み込み /////////////////// ⬇︎ -->
  <?php get_template_part('parts/visual'); ?>

  <!-- ================================================================================ -->

  <!-- ⬇︎ /////////////////// sidebar.php 読み込み /////////////////// ⬇︎ -->
  <?php get_sidebar(); ?>

  <!-- =================================================== ページ内コンテンツ Start =================================================== -->
  <div class="contents">
    <div class="contents__inner">

      <!-- ⬇︎ /////////////////// Top_Works 制作実績 Start /////////////////// ⬇︎ -->
      <article class="contents__article contents__article--bg" id="works-top">
        <section class="contents__article-inner">
          <!-- ===== コンテンツ見出し Heading ===== -->
          <h2 class="contents-heading">
            <span class="contents-heading__main">
              Works
            </span>
            <span class="contents-heading__sub">
              制作実績
            </span>
          </h2>
          <!-- ===== コンテンツ見出し Heading ===== -->

          <!-- ⬇︎ ############ Webサイト制作 各要素コンテンツ Start ############ ⬇︎ -->
          <section class="contents__wrapper">
            <!-- ===== 各要素タイトル Title / link ===== -->
            <div class="contents-title contents-title--works">
              <h3 class="contents-title__title contents-title__title--works">Webサイト制作</h3>
              <!-- リンクあり -->
              <div class="contents-title__page-link is-pc">
                <a class="contents-title__link" href="/works/works_website.html">
                  Webサイト制作 制作実績はこちら
                </a>
              </div>
            </div>
            <!-- ===== 各要素タイトル Title / link ===== -->

            <!-- ===== 背景文字スクロール ===== -->
            <div class="scroll-anime is-pc is-tab">
              <div class="scroll-anime__box">
                <div class="scroll-anime__item">
                  <span class="scroll-anime__text">Coding</span>
                  <span class="scroll-anime__text">WordPress</span>
                  <span class="scroll-anime__text">EC</span>
                  <span class="scroll-anime__text">LP</span>
                </div>
                <div class="scroll-anime__item">
                  <span class="scroll-anime__text">Coding</span>
                  <span class="scroll-anime__text">WordPress</span>
                  <span class="scroll-anime__text">EC</span>
                  <span class="scroll-anime__text">LP</span>
                </div>
              </div>
            </div>
            <!-- ===== 背景文字スクロール ===== -->

            <div class="top-works">
              <div class="top-works__thumb">
                <img class="top-works__image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets//images/img/img_top-works-webthumb.jpg" alt="Webサイト制作">
              </div>

              <div class="top-works__desc">
                <p class="top-works__text">
                  デザインからコーディングで制作したHTMLサイトを始めPHPを用いたWordPressサイトやノーコードツールを利用したWebサイトなどを幅広く掲載しております。
                </p>

                <div class="top-works__mockup-box">

                  <!-- Webサイト モックアップ① -->
                  <div class="top-works__mockup-item">
                    <h4 class="top-works__mockup-title">
                      YuCoRea
                    </h4>
                    <a class="top-works__mockup" href="制作詳細ページURL">
                      <img class="top-works__mock-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/img_top-works_webmockup.png" alt="YuCoRea モックアップ">
                    </a>
                  </div>

                  <!-- Webサイト モックアップ② -->
                  <div class="top-works__mockup-item">
                    <h4 class="top-works__mockup-title">
                      Cafe MITAKE
                    </h4>
                    <a class="top-works__mockup" href="制作詳細ページURL">
                      <img class="top-works__mock-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/img_top-works_webmockup.png" alt="Cafe MITAKE モックアップ">
                    </a>
                  </div>
                </div>
              </div>

              <!-- ********  ※ スマホ〜タブレット限定 リンク ******** -->
              <div class="page-link-sp is-sp">
                <a class="page-link-sp__link" href="/works/works_website.html">
                  Webサイト制作 制作実績はこちら
                </a>
              </div>
            </div>
            <!-- ********  ※ スマホ〜タブレット限定 リンク ******** -->
          </section>
          <!-- ⬆︎ ############ Webサイト制作 各要素コンテンツ Start ############ ⬆︎ -->


          <!-- ⬇︎ ############ プログラミング開発 各要素コンテンツ Start ############ ⬇︎ -->
          <section class="contents__wrapper">
            <!-- ===== 各要素タイトル Title / link ===== -->
            <div class="contents-title contents-title--works">
              <h3 class="contents-title__title contents-title__title--works">プログラミング</h3>
              <!-- リンクあり -->
              <div class="contents-title__page-link is-pc">
                <a class="contents-title__link" href="/works/works_programing.html">
                  プログラミング 制作実績はこちら
                </a>
              </div>
            </div>
            <!-- ===== 各要素タイトル Title / link ===== -->

            <!-- ===== 背景文字スクロール ===== -->
            <div class="scroll-anime is-pc is-tab">
              <div class="scroll-anime__box">
                <div class="scroll-anime__item">
                  <span class="scroll-anime__text">Web</span>
                  <span class="scroll-anime__text">Game</span>
                  <span class="scroll-anime__text">Development</span>
                </div>
                <div class="scroll-anime__item">
                  <span class="scroll-anime__text">Web</span>
                  <span class="scroll-anime__text">Game</span>
                  <span class="scroll-anime__text">Development</span>
                </div>
              </div>
            </div>
            <!-- ===== 背景文字スクロール ===== -->

            <div class="top-works top-works--odd">
              <div class="top-works__thumb top-works__thumb--odd">
                <img class="top-works__image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets//images/img/img_top-works-devthumb.jpg" alt="プログラミング">
              </div>

              <div class="top-works__desc">
                <p class="top-works__text">
                  PHP / JavaScript等の基本的なプログラミング言語を用いて開発したツールやゲーム作品を主に掲載しております。ご興味がございましたら、是非ご利用してみて下さい。
                </p>

                <div class="top-works__mockup-box">

                  <!-- Webサイト モックアップ① -->
                  <div class="top-works__mockup-item">
                    <h4 class="top-works__mockup-title">
                      How Much Hobby?
                    </h4>
                    <a class="top-works__mockup" href="制作詳細ページURL">
                      <img class="top-works__mock-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/img_top-works-phonemockup.png" alt="YuCoRea モックアップ">
                    </a>
                  </div>

                  <!-- Webサイト モックアップ② -->
                  <div class="top-works__mockup-item">
                    <h4 class="top-works__mockup-title">
                      映姫様説教逃走ゲーム
                    </h4>
                    <a class="top-works__mockup" href="制作詳細ページURL">
                      <img class="top-works__mock-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/img_top-works_webmockup02.png" alt="Cafe MITAKE モックアップE">
                    </a>
                  </div>
                </div>
              </div>

              <!-- ********  ※ スマホ〜タブレット限定 リンク ******** -->
              <div class="page-link-sp is-sp">
                <a class="page-link-sp__link" href="/works/works_programing.html">
                  プログラミング 制作実績はこちら
                </a>
              </div>
            </div>
            <!-- ********  ※ スマホ〜タブレット限定 リンク ******** -->
          </section>
          <!-- ⬆︎ ############ プログラミング開発 各要素コンテンツ Start ############ ⬆︎ -->


          <!-- ⬇︎ ############ UI UXデザイン 各要素コンテンツ Start ############ ⬇︎ -->
          <section class="contents__wrapper">
            <!-- ===== 各要素タイトル Title / link ===== -->
            <div class="contents-title contents-title--works">
              <h3 class="contents-title__title contents-title__title--works">UI UXデザイン</h3>
              <!-- リンクあり -->
              <div class="contents-title__page-link is-pc">
                <a class="contents-title__link" href="/works/works_uiuxdesign.html">
                  UI UXデザイン 制作実績はこちら
                </a>
              </div>
            </div>
            <!-- ===== 各要素タイトル Title / link ===== -->

            <!-- ===== 背景文字スクロール ===== -->
            <div class="scroll-anime is-pc is-tab">
              <div class="scroll-anime__box">
                <div class="scroll-anime__item">
                  <span class="scroll-anime__text">App</span>
                  <span class="scroll-anime__text">Game</span>
                  <span class="scroll-anime__text">UI Design</span>
                </div>
                <div class="scroll-anime__item">
                  <span class="scroll-anime__text">App</span>
                  <span class="scroll-anime__text">Game</span>
                  <span class="scroll-anime__text">UI Design</span>
                </div>
              </div>
            </div>
            <!-- ===== 背景文字スクロール ===== -->

            <div class="top-works top-works">
              <div class="top-works__thumb top-works__thumb">
                <img class="top-works__image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/img_top-works-uiuxthumb.jpg" alt="プログラミング">
              </div>

              <div class="top-works__desc">
                <p class="top-works__text">
                  主にFigmaを使用して制作したアプリのUI UXデザインやゲームのUIデザインを掲載しております。
                  FigmaURLでデザインの詳細を確認することができます。
                </p>

                <div class="top-works__mockup-box">

                  <!-- Webサイト モックアップ① -->
                  <div class="top-works__mockup-item">
                    <h4 class="top-works__mockup-title">
                      デリバリーショップUI
                    </h4>
                    <a class="top-works__mockup" href="制作詳細ページURL">
                      <img class="top-works__mock-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/img_top-works-phonemockup.png" alt="デリバリーショップUI モックアップ">
                    </a>
                  </div>

                  <!-- Webサイト モックアップ② -->
                  <div class="top-works__mockup-item">
                    <h4 class="top-works__mockup-title">
                      運動管理アプリUI
                    </h4>
                    <a class="top-works__mockup" href="制作詳細ページURL">
                      <img class="top-works__mock-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/img_top-works-phonemockup.png" alt="運動管理アプリUI モックアップ">
                    </a>
                  </div>
                </div>
              </div>

              <!-- ********  ※ スマホ〜タブレット限定 リンク ******** -->
              <div class="page-link-sp is-sp">
                <a class="page-link-sp__link" href="/works/works_uiuxdesign.html">
                  UI UXデザイン制作 制作実績はこちら
                </a>
              </div>
            </div>
            <!-- ********  ※ スマホ〜タブレット限定 リンク ******** -->
          </section>
          <!-- ⬆︎ ############ UI UXデザイン 各要素コンテンツ Start ############ ⬆︎ -->

          <!-- ===== ページ遷移ボタン ===== -->
          <div class="primary-button">
            <a class="primary-button__link" href="/works/works_top.html">Works 詳細はこちら<span class="primary-button__arrow"></span></a>
          </div>
        </section>
      </article>
      <!-- ⬆︎ /////////////////// Top_Works 制作実績 End /////////////////// ⬆︎ -->

      <!-- ================================================================================ -->

      <!-- ⬇︎ /////////////////// Top_About Yukuro CreateFolioについて Start /////////////////// ⬇︎ -->
      <article class="contents__article" id="about-top">
        <!-- ===== コンテンツ見出し Heading ===== -->
        <section class="contents__article-inner">
          <h2 class="contents-heading">
            <span class="contents-heading__main">
              About
            </span>
            <span class="contents-heading__sub">
              Yukuro CreateFolioについて
            </span>
          </h2>
          <!-- ===== コンテンツ見出し Heading ===== -->

          <!-- ⬇︎ ############ About 各要素コンテンツ Start ############ ⬇︎ -->
          <section class="top-about">
            <!-- ===== About 説明 Text ===== -->
            <div class="top-about__desc">
              <p class="top-about__text">
                初めましてゆくろと申します。
              </p>
              <p class="top-about__text">
                当サイトを閲覧してくださりありがとうございます。
              </p>
              <p class="top-about__text">
                こちらのポートフォリオサイトでは、<br>
                Webサイト / プログラミング開発 / UI UXデザイン等の制作作品の掲載と、ブログでの情報発信を行なっております。
              </p>
              <p class="top-about__text">
                私は小さな頃から時間を忘れるほど好きだった「モノづくり」の力を活かせる職や仕事がないかと思った時に、「Webデザイン」という職に出会いました。
              </p>
              <p class="top-about__text">
                時間を忘れながらWeb制作の勉強をしていく内に清掃員から転職し、現在はアルバイトではありますが、webデザイナーとして都内の会社で勤務しています。
              </p>
            </div>

            <!-- ===== Profile 画像 ===== -->
            <div class="top-about__profile-img">
              <img class="top-about__image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/img_top_profile-img.png" alt="プロフィール写真">
            </div>
          </section>

          <!-- ===== ページ遷移ボタン ===== -->
          <div class="primary-button">
            <a class="primary-button__link" href="#">About 詳細はこちら<span class="primary-button__arrow"></span></a>
          </div>

          <!-- ⬆︎ ############ About 各要素コンテンツ Start ############ ⬆︎ -->
        </section>
      </article>
      <!-- ⬆︎ /////////////////// Top_About Yukuro CreteFolioについて End /////////////////// ⬆︎ -->

      <!-- ================================================================================ -->

      <!-- ⬇︎ /////////////////// Top_Blog ブログ Start /////////////////// ⬇︎ -->
      <article class="contents__article contents__article--bg" id="blog-top">
        <section class="contents__article-inner">
          <!-- ===== コンテンツ見出し Heading ===== -->
          <h2 class="contents-heading">
            <span class="contents-heading__main">
              Blog
            </span>
            <span class="contents-heading__sub">
              ブログ
            </span>
          </h2>
          <!-- ===== コンテンツ見出し Heading ===== -->

          <!-- ===== 説明 Description ===== -->
          <p class="contents__desc">
            Web制作やプログラミングに関するアウトプット投稿を始め、趣味でやっておりますハンドメイドや衣装・造形制作関連の記事などモノづくりに関する情報を幅広く発信しております。
          </p>

          <!-- ⬇︎ ############ 最新の記事一覧 各要素コンテンツ Start ############ ⬇︎ -->
          <!-- ===== 各要素タイトル Title / link ===== -->
          <div class="contents-title">
            <h3 class="contents-title__title">最新の記事</h3>
          </div>
          <!-- ===== 各要素タイトル Title / link ===== -->


          <!-- ⬆︎ ############ 最新の記事一覧 各要素コンテンツ End ############ ⬆︎ -->
          <div class="contents__wrapper">
            <!-- タブナビゲーション ここから ***************** -->
            <nav class="tab ">
              <ul class="tab__list tab__list--top-blog">
                <li class="tab__item tab__item--two-tab">
                  <a class="tab__link" href="#web-design_articles">
                    <img class="tab__icon" src="http://ykr2024-portfolio.com/wp-content/uploads/2023/03/ico_category_web-design.svg" alt="Web制作・デザイン">
                    Web制作・デザイン
                  </a>
                </li>
                <li class="tab__item tab__item--two-tab">
                  <a class="tab__link" href="#handmade_articles">
                    <img class="tab__icon" src="http://ykr2024-portfolio.com/wp-content/uploads/2023/03/ico_category_handmade.svg" alt="ハンドメイド">
                    ハンドメイド
                  </a>
                </li>
              </ul>
            </nav>

            
            
            <!-- ⬇︎ ############ Web制作・デザイン Start ############ ⬇︎ -->
            <div id="web-design_articles" class="tab__area">
              <?php
              $args = array(
                'post_type' => 'post',
                'posts_per_page' => 4,
                'orderby' => 'date',
                'category' => '7'
              );
              $posts = get_posts($args);
              foreach ($posts as $post) :
                setup_postdata($post);

                $custom_posts = get_posts($args);

              ?>
                <!-- ===== Web制作・デザイン ブログカード ここから ===== -->
                <div class="blog-card">
                  <!-- ブログサムネイル -->
                  <a href="<?php the_permalink(); ?>" class="blog-card__thumb">
                    <?php
                    if (has_post_thumbnail()) :
                      the_post_thumbnail();
                    else :
                    ?>
                      <img class="blog-card__image" src="<?php echo get_template_directory_uri(); ?>/img/dammy_png" alt="">
                    <?php endif; ?>
                  </a>

                  <!-- ブログタイトル / カテゴリー / 投稿日 -->
                  <div class="blog-card__label">
                    <h4 class="blog-card__title">
                      <a class="blog-card__title-link" href="/blog/article_sample.html">
                        <?php the_title(); ?>
                      </a>
                    </h4>

                    <div class="blog-card__category-link">
                      <?php
                      $categories = get_the_category();
                      foreach ($categories as $category) {
                        $cat_name = $category->name;
                        $cat_link = esc_url(get_category_link($category->term_id));
                        if ($category->parent) {
                          echo sprintf("<a href='%s'>%s</a> ", $cat_link, $cat_name);
                        }
                      }
                      ?>
                    </div>


                    <time class="blog-card__date">
                      <?php the_time('Y.m.d'); ?>
                    </time>
                  </div>
                </div>
                <!-- ===== Web制作・デザイン ブログカード ここまで ===== -->
              <?php endforeach;
              wp_reset_postdata(); ?>

            </div>
            <!-- ⬆︎ ############ Web制作・デザイン End ############ ⬆︎ -->

            <!-- ============================================================================== -->

            <!-- ⬇︎ ############ ハンドメイド Start ############ ⬇︎ -->
            <div id="handmade_articles" class="tab__area">
              <?php
              $args = array(
                'post_type' => 'post',
                'posts_per_page' => 4,
                'orderby' => 'date',
                'category' => '3',
                'orderby' => 'date',
                'order' => 'DESC'
              );
              $posts = get_posts($args);
              foreach ($posts as $post) :
                setup_postdata($post);

                $custom_posts = get_posts($args);
              ?>

                <!-- ===== ハンドメイド ブログカード ここから ===== -->
                <div class="blog-card">
                  <!-- ブログサムネイル -->
                  <a href="<?php the_permalink(); ?>" class="blog-card__thumb">
                    <?php
                    if (has_post_thumbnail()) :
                      the_post_thumbnail();
                    else :
                    ?>
                      <img class="blog-card__image" src="<?php echo get_template_directory_uri(); ?>/img/dammy_png" alt="">
                    <?php endif; ?>
                  </a>

                  <!-- ブログタイトル / カテゴリー / 投稿日 -->
                  <div class="blog-card__label">
                    <h4 class="blog-card__title">
                      <a class="blog-card__title-link" href="/blog/article_sample.html">
                        <?php the_title(); ?>
                      </a>
                    </h4>

                    <div class="blog-card__category-link">
                      <?php
                      $categories = get_the_category();
                      foreach ($categories as $category) {
                        $cat_name = $category->name;
                        $cat_link = esc_url(get_category_link($category->term_id));
                        if ($category->parent) {
                          echo sprintf("<a href='%s'>%s</a> ", $cat_link, $cat_name);
                        }
                      }
                      ?>
                    </div>

                    <time class="blog-card__date">
                      <?php the_time('Y.m.d'); ?>
                    </time>
                  </div>
                </div>
                <!-- ===== ハンドメイド ブログカード ここまで ===== -->
              <?php endforeach;
              wp_reset_postdata(); ?>
            </div>
            <!-- ⬆︎ ############ ハンドメイド End ############ ⬆︎ -->
          </div>
          <!-- ============================================================================== -->

          <!-- ⬇︎ ############ カテゴリー一覧 各要素コンテンツ Start ############ ⬇︎ -->
          <!-- ===== 各要素タイトル Title / link ===== -->
          <div class="contents-title">
            <h3 class="contents-title__title">カテゴリ</h3>
          </div>
          <!-- ===== 各要素タイトル Title / link ===== -->

          <div class="blog-category">
            <!-- ===== Web制作/開発・デザイン カテゴリ Start ===== -->
            <div class="blog-category__item">
              <a href="<?php echo esc_url(get_category_link('7')); ?>" class="blog-category__thumb-link">
                <h4 class="blog-category__title">Web制作/開発・デザイン</h4>
                <img class="blog-category__image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog_img/img_blog-category_programing-visual.jpg" alt="Web制作/開発・デザイン">
              </a>
              <ul class="blog-category__category-list">
                
              <?php
              $categories = get_categories('parent=7');
              foreach ($categories as $category) : ?>
                <li class="blog-category__category-item">
                  <a class="blog-category__category-link secondary-button" href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
                  <?php
                  $childs = get_categories('child_of=' . $category->term_id);
                  if ($childs) :
                  ?>
                    <ul class="blog-category__category-list">
                      <?php foreach ($childs as $child) : ?>
                        <li class="blog-category__category-item">
                          <a class="blog-category__category-link secondary-button" href="<?php echo get_category_link($child->term_id); ?>"><?php echo $child->name; ?></a>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                  <?php endif; ?>
                </li>
              <?php endforeach; ?>
            </ul>
            </div>
            <!-- ===== Web制作/開発・デザイン カテゴリ ENd ===== -->

            <!-- ===== ハンドメイド カテゴリ Start ===== -->
            <div class="blog-category__item">
              <a href="<?php echo esc_url(get_category_link('3')); ?>" class="blog-category__thumb-link">
                <h4 class="blog-category__title">ハンドメイド</h4>
                <img class="blog-category__image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog_img/img_blog-category_molding-visual.jpg" alt="ハンドメイド">
              </a>
              <ul class="blog-category__category-list">
              <?php
              $categories = get_categories('parent=3');
              foreach ($categories as $category) : ?>
                <li class="blog-category__category-item">
                  <a class="blog-category__category-link secondary-button" href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
                  <?php
                  $childs = get_categories('child_of=' . $category->term_id);
                  if ($childs) :
                  ?>
                    <ul class="blog-category__category-list">
                      <?php foreach ($childs as $child) : ?>
                        <li class="blog-category__category-item">
                          <a class="blog-category__category-link secondary-button" href="<?php echo get_category_link($child->term_id); ?>"><?php echo $child->name; ?></a>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                  <?php endif; ?>
                </li>
              <?php endforeach; ?>
            </ul>
            </div>
            <!-- ===== ハンドメイド カテゴリ ENd ===== -->

          </div>

          <!-- ⬆︎ ############ カテゴリー一覧 各要素コンテンツ End ############ ⬆︎ -->

          <!-- ===== ページ遷移ボタン ===== -->
          <div class="primary-button">
            <a class="primary-button__link" href="<?php echo home_url(); ?>/blog">Yukuro CreateLog<span class="primary-button__arrow"></span></a>
          </div>
          <!-- ⬆︎ ############ Blog 各要素コンテンツ Start ############ ⬆︎ -->
        </section>
      </article>
      <!-- ⬆︎ /////////////////// Top_Blog ブログ End /////////////////// ⬆︎ -->

      <!-- ================================================================================ -->

      <!-- ⬇︎ /////////////////// Top_News お知らせ Start /////////////////// ⬇︎ -->
      <article class="contents__article" id="news-top">
        <section class="contents__article-inner">
          <!-- ===== コンテンツ見出し Heading ===== -->
          <h2 class="contents-heading">
            <span class="contents-heading__main">
              News
            </span>
            <span class="contents-heading__sub">
              お知らせ
            </span>

            <div class="contents-heading__side-link is-pc">
              <a class="contents-heading__link" href="http://ykr2024-portfolio.com/?post_type=news">News お知らせ一覧はこちら</a>
            </div>
          </h2>
          <!-- ===== コンテンツ見出し Heading ===== -->

          <!-- ===== News お知らせ一覧 News-list ===== -->
          <ul class="news-list">
            <?php
            $top_news_n = get_post_meta(63, 'top-news-number', true); //　固定ページ「トップページ」のカスタムフィールドの値を設定（63は固定ページのID）
            $args_news = array(
              'post_type' => array('news'), // カスタム投稿タイプの指定
              'numberposts' => 4 // 表示件数指定
            );
            $myposts_news = get_posts($args_news);

            foreach ($myposts_news as $post) :
            ?>
              <li class="news-list__item">
                <time class="news-list__date">
                  <span><?php echo date("Y", strtotime($post->post_date)); ?></span><br>
                  <span class="news-list__date news-list__date--lg"><?php echo date("m.d", strtotime($post->post_date)); ?></span>
                </time>
                <p class="news-list__tag">
                  <?php $posttags = get_the_tags();
                  if ($posttags) {
                    foreach ($posttags as $tag) {
                      echo $tag->name . ' ';
                    }
                  }
                  ?>
                </p>
                <a class="news-list__text-link" href="<?php the_permalink(); ?>"><span class="title"><?php the_title(); ?></span></a>

              <?php endforeach; ?>
              <?php wp_reset_postdata(); ?>
          </ul>

        </section>
      </article>
      <!-- ⬆︎ /////////////////// Top_News お知らせ End /////////////////// ⬆︎ -->

      <!-- ================================================================================ -->

      <!-- ⬇︎ /////////////////// Contact お問い合わせ Start /////////////////// ⬇︎ -->
      <article class="contents__article contents__article--bg" id="contact">
        <section class="contents__article-inner">
          <!-- ===== コンテンツ見出し Heading ===== -->
          <h2 class="contents-heading">
            <span class="contents-heading__main">
              Contact
            </span>
            <span class="contents-heading__sub">
              お問い合わせ
            </span>
          </h2>
          <!-- ===== コンテンツ見出し Heading ===== -->
          <!-- ===== 説明 Description ===== -->
          <p class="contents__desc">
            下記入力フォームよりお問い合わせをお願い致します。<br>
            案件等に関しては、「企業」をご選択頂き、お問い合わせ項目の「案件のご依頼・相談」を選択の上、内容のご入力をお願い致します。
          </p>

          <!-- ===== お問い合わせフォーム form-box ===== -->
          <!-- <div class="form-box">

            
            <div class="form-box__item">
              <label class="form-box__label" for="name">お名前
                <span class="form-box__required">必須</span>
              </label>
              <input class="form-box__form required" type="text" id="name" name="name" placeholder="例) 山田太郎" required autocomplete="name">
            </div>

           
            <div class="form-box__item">
              <label class="form-box__label" for="email">メールアドレス
                <span class="form-box__required">必須</span>
              </label>
              <input class="form-box__form is-email required" type="text" id="email" name="email" placeholder="例) test@example.co.jp" required autocomplete="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
              <div class="is-error-email"></div>
            </div>

            
            <div class="form-box__item">

              <p class="form-box__label" for="request">個人 / 企業
                <span class="form-box__required">必須</span>
              </p>
              <label class="form-box__radio-box">
                <input class="form-box__radio is-request" type="radio" id="request" name="radio" value="個人" required checked>
                <span class="form-box__radio form-box__radio--text">個人</span>
              </label>
              <label class="form-box__radio-box">
                <input class="form-box__radio is-request" type="radio" id="request" name="radio" value="企業">
                <span class="form-box__radio form-box__radio--text">企業</span>
              </label>
              <div class="form-box__error-text" id="error-textbox"></div>
            </div>

            
            <div class="form-box__item">
              <label class="form-box__label" for="contents">お問い合わせ項目
                <span class="form-box__required">必須</span>
              </label>
              <select class="form-box__form form-box__form--select is-contents" name="contents" id="contents">
                <option class="form-box__form form-box__form--select" required value="選択して下さい">選択して下さい</option>
                <option class="form-box__form form-box__form--select" required value="案件のご依頼・ご相談">・案件のご依頼・ご相談</option>
                <option class="form-box__form form-box__form--select" required value="その他お問い合わせ">・その他お問い合わせ</option>
              </select>
              <div class="form-box__error-text" id="error-textbox"></div>
            </div>

       
            <div class="form-box__item">
              <label class="form-box__label" for="textarea">お問い合わせ内容
                <span class="form-box__required">必須</span>
              </label>
              <textarea class="form-box__form form-box__form--textarea required" name="textarea" id="textarea" placeholder="例) お問い合わせ内容を入力して下さい。"></textarea>
              <div class="form-box__error-text" id="error-textbox"></div>
            </div>

            
            <div class="form-box__item form-box__item--check">
              <label class="form-box__pribacypolicy">
                <input class="form-box__check required" type="checkbox" id="agree" required>
                <span class="form-box__checkmark"></span>
                <a class="form-box__pribacy-link" href="privacypolicy.html">プライバシーポリシーに同意する</a>
                <div class="form-box__error-text" id="error-textbox"></div>
              </label>
            </div>

            <div class="form-box__item form-box__item--button">
              <input class="form-box__button" id="submit-button" type="submit" name="form-button" value="入力内容を確認する" disabled>
            </div>
          </div> -->
          <!-- ===== お問い合わせフォーム form-box ===== -->
        </section>

        <!-- ===== お問い合わせフォーム form-box ===== -->
        <?php echo do_shortcode('[contact-form-7 id="756"  html_class="form-box" title="Yukuro CreataFolio お問い合わせフォーム"]'); ?>
        <!-- ===== お問い合わせフォーム form-box ===== -->
      </article>
      <!-- ⬆︎ /////////////////// Contact お問い合わせ End /////////////////// ⬆︎ -->

    </div>
  </div>
</div>
<?php get_footer(); ?>