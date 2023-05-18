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
      <article class="contents__article" id="works-top">
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
            <div class="contents-title">
              <h3 class="contents-title__title">Webサイト</h3>
              <!-- リンクあり -->
              <div class="contents-title__page-link is-pc">
                <a class="contents-title__link" href="<?php echo get_category_link(55); ?>">
                  Webサイト 制作実績はこちら
                </a>
              </div>
            </div>
            <!-- ===== 各要素タイトル Title / link ===== -->

            <div class="top-works">
              <div class="top-works__thumb">
                <img class="top-works__image" src="http://yukuro-createfolio.local/wp-content/uploads/2023/04/img_top-works-webthumb.jpg" alt="Webサイト制作">
              </div>

              <div class="top-works__desc">
                <div class="top-works__text-box">
                  <p class="top-works__text">
                    デザインからコーディングで制作したHTMLサイトを始めPHPを用いたWordPressサイトやノーコードツールを利用したWebサイトなどを幅広く掲載しております。
                  </p>
                  <p class="top-works__text">
                    詳細ページでは制作時に使用したペルソナやカスタマージャーニーマップなどの資料も閲覧できます。
                  </p>
                </div>

                <?php
                $args = array(
                  'post_type' => 'works',
                  'posts_per_page' => 2,
                  'tax_query' => array(
                    array(
                      'taxonomy' => 'works-cat',
                      'field'    => 'slug', //term_id、name、slug、term_taxonomy_idで指定可
                      'terms'    => 'web-site'
                    ),
                  ),
                );
                $the_query = new WP_Query($args);
                ?>

                <ul class="top-works__mockup-list">
                  <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post();
                      $thumbnail = (has_post_thumbnail()) ? get_the_post_thumbnail_url(get_the_ID(), 'large') : 'https://placehold.jp/500x250.png'; ?>
                      <li class="top-works__mockup-item">
                        <h4 class="top-works__mockup-label"><?php the_title() ?></h4>
                        <a class="top-works__mockup-link" href="<?php the_permalink() ?>">
                          <div class="top-works__mockup-thumb">
                            <img class="top-works__mockup-image" src="<?php print $thumbnail; ?>" alt="">
                          </div>
                        </a>
                      </li>
                    <?php endwhile; ?>
                  <?php endif;
                  wp_reset_postdata(); ?>
                </ul>
              </div>
            </div>
            <!-- ********  ※ スマホ〜タブレット限定 リンク ******** -->
            <div class="page-link-sp is-sp">
              <a class="page-link-sp__link" href="<?php echo get_category_link(55); ?>">
                Webサイト 制作実績はこちら
              </a>
            </div>
            <!-- ********  ※ スマホ〜タブレット限定 リンク ******** -->
          </section>
          <!-- ⬆︎ ############ Webサイト制作 各要素コンテンツ Start ############ ⬆︎ -->


          <!-- ⬇︎ ############ UI UXデザイン 各要素コンテンツ Start ############ ⬇︎ -->
          <section class="contents__wrapper">
            <!-- ===== 各要素タイトル Title / link ===== -->
            <div class="contents-title">
              <h3 class="contents-title__title">UI UXデザイン</h3>
              <!-- リンクあり -->
              <div class="contents-title__page-link is-pc">
                <a class="contents-title__link" href="<?php echo get_category_link(56); ?>">
                  UI UXデザイン 制作実績はこちら
                </a>
              </div>
            </div>
            <!-- ===== 各要素タイトル Title / link ===== -->


            <div class="top-works top-works--odd">
              <div class="top-works__thumb top-works__thumb--odd">
                <img class="top-works__image" src="http://yukuro-createfolio.local/wp-content/uploads/2023/04/img_top-works-uiuxthumb.jpg" alt="プログラミング">
              </div>

              <div class="top-works__desc">
                <div class="top-works__text-box">
                  <p class="top-works__text">
                    主にFigmaを使用して制作したアプリのUI UXデザインやゲームのUIデザインを掲載しております。
                  </p>
                  <p class="top-works__text">
                    詳細ページでは実際にFigmaからデザインを確認することができるURLと制作時に使用した資料などもご覧いただけます。
                  </p>
                </div>

                <?php
                $args = array(
                  'post_type' => 'works',
                  'posts_per_page' => 2,
                  'tax_query' => array(
                    array(
                      'taxonomy' => 'works-cat',
                      'field'    => 'slug', //term_id、name、slug、term_taxonomy_idで指定可
                      'terms'    => 'ui-ux-design'
                    ),
                  ),
                );
                $the_query = new WP_Query($args);
                ?>

                <ul class="top-works__mockup-list">
                  <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post();
                      $thumbnail = (has_post_thumbnail()) ? get_the_post_thumbnail_url(get_the_ID(), 'large') : 'https://placehold.jp/500x250.png'; ?>
                      <li class="top-works__mockup-item">
                        <h4 class="top-works__mockup-label"><?php the_title() ?></h4>
                        <a class="top-works__mockup-link" href="<?php the_permalink() ?>">
                          <div class="top-works__mockup-thumb">
                            <img class="top-works__mockup-image" src="<?php print $thumbnail; ?>" alt="">
                          </div>
                        </a>
                      </li>
                    <?php endwhile; ?>
                  <?php endif;
                  wp_reset_postdata(); ?>
                </ul>
              </div>
            </div>

            <!-- ********  ※ スマホ〜タブレット限定 リンク ******** -->
            <div class="page-link-sp is-sp">
              <a class="page-link-sp__link" href="<?php echo get_category_link(56); ?>">
                UI UXデザイン制作 制作実績はこちら
              </a>
            </div>
            <!-- ********  ※ スマホ〜タブレット限定 リンク ******** -->
          </section>
          <!-- ⬆︎ ############ UI UXデザイン 各要素コンテンツ Start ############ ⬆︎ -->


          <!-- ⬇︎ ############ ハンドメイド 各要素コンテンツ Start ############ ⬇︎ -->
          <section class="contents__wrapper">
            <!-- ===== 各要素タイトル Title / link ===== -->
            <div class="contents-title contents-title--works">
              <h3 class="contents-title__title">ハンドメイド</h3>
              <!-- リンクあり -->
              <div class="contents-title__page-link is-pc">
                <a class="contents-title__link" href="<?php echo get_category_link(61); ?>">
                  ハンドメイド 制作実績はこちら
                </a>
              </div>
            </div>
            <!-- ===== 各要素タイトル Title / link ===== -->

            <div class="top-works top-works">
              <div class="top-works__thumb top-works__thumb">
                <img class="top-works__image" src="http://yukuro-createfolio.local/wp-content/uploads/2023/04/img_top-works-handmadethumb.jpg" alt="ハンドメイド">
              </div>

              <div class="top-works__desc">
                <div class="top-works__text-box">
                  <p class="top-works__text">
                    私が趣味で制作しているハンドメイド作品を掲載しております。
                  </p>
                  <p class="top-works__text">
                    アクセサリーを始め、コスプレで使用する衣装の制作や小道具の制作など幅広いジャンルを制作しております。
                  </p>
                </div>

                <?php
                $args = array(
                  'post_type' => 'works',
                  'posts_per_page' => 2,
                  'tax_query' => array(
                    array(
                      'taxonomy' => 'works-cat',
                      'field'    => 'slug', //term_id、name、slug、term_taxonomy_idで指定可
                      'terms'    => 'handmade-works'
                    ),
                  ),
                );
                $the_query = new WP_Query($args);
                ?>

                <ul class="top-works__mockup-list">
                  <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post();
                      $thumbnail = (has_post_thumbnail()) ? get_the_post_thumbnail_url(get_the_ID(), 'large') : 'https://placehold.jp/500x250.png'; ?>
                      <li class="top-works__mockup-item">
                        <h4 class="top-works__mockup-label"><?php the_title() ?></h4>
                        <a class="top-works__mockup-link" href="<?php the_permalink() ?>">
                          <div class="top-works__mockup-thumb">
                            <img class="top-works__mockup-image" src="<?php print $thumbnail; ?>" alt="">
                          </div>
                        </a>
                      </li>
                    <?php endwhile; ?>
                  <?php endif;
                  wp_reset_postdata(); ?>
                </ul>
              </div>
            </div>
            <!-- ********  ※ スマホ〜タブレット限定 リンク ******** -->
            <div class="page-link-sp is-sp">
              <a class="page-link-sp__link" href="<?php echo get_category_link(61); ?>">
                ハンドメイド 制作実績はこちら
              </a>
            </div>
            <!-- ********  ※ スマホ〜タブレット限定 リンク ******** -->
          </section>
          <!-- ⬆︎ ############ ハンドメイド 各要素コンテンツ Start ############ ⬆︎ -->

          <!-- ===== ページ遷移ボタン ===== -->
          <div class="primary-button">
            <a class="primary-button__link" href="<?php echo home_url(); ?>/works">Works 詳細はこちら<span class="primary-button__arrow"></span></a>
          </div>
        </section>
      </article>
      <!-- ⬆︎ /////////////////// Top_Works 制作実績 End /////////////////// ⬆︎ -->

      <!-- ================================================================================ -->

      <!-- ⬇︎ /////////////////// Top_About Yukuro CreateFolioについて Start /////////////////// ⬇︎ -->
      <article class="contents__article contents__article--white-bg" id="about-top">
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
                初めまして”ゆくろ”と申します。
              </p>
              <p class="top-about__text">
                当サイトを閲覧してくださりありがとうございます。
              </p>
              <p class="top-about__text">
                こちらのポートフォリオサイトでは、<br>
                Webサイト / UI UXデザイン / ハンドメイド作品等の作品掲載をはじめ、web制作やハンドメイド制作などの「ものづくり」に関する情報をブログ記事で発信しております。
              </p>
              <p class="top-about__text">
                私は小さな頃から時間を忘れるほど好きだった「何かを作りたい」という探究心を活かせる仕事がないかと思った時に、「Webデザイン」という仕事に出会いました。
              </p>
              <p class="top-about__text">
                時間を忘れながらWeb制作の勉強をしていく内に元の仕事の清掃員から転職し、Webデザイナーとして現在、都内の会社で働いております。
              </p>
            </div>

            <!-- ===== Profile 画像 ===== -->
            <div class="top-about__profile-img">
              <img class="top-about__image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/img_top_profile-img.png" alt="プロフィール写真">
            </div>
          </section>

          <!-- ===== ページ遷移ボタン ===== -->
          <div class="primary-button">
            <a class="primary-button__link" href="<?php echo home_url(); ?>/about">About 詳細はこちら<span class="primary-button__arrow"></span></a>
          </div>

          <!-- ⬆︎ ############ About 各要素コンテンツ Start ############ ⬆︎ -->
        </section>
      </article>
      <!-- ⬆︎ /////////////////// Top_About Yukuro CreteFolioについて End /////////////////// ⬆︎ -->

      <!-- ================================================================================ -->

      <!-- ⬇︎ /////////////////// Top_Blog ブログ Start /////////////////// ⬇︎ -->
      <article class="contents__article" id="blog-top">
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
            Web制作やプログラミングに関するアウトプット投稿を始め、副業でやっておりますハンドメイドや衣装・造形制作関連の記事などモノづくりに関する情報を幅広く発信しております。
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
                    <img class="tab__icon" src="http://yukuro-createfolio.local/wp-content/uploads/2023/03/ico_category_web-design.svg" alt="Web制作・デザイン">
                    Web制作・デザイン
                  </a>
                </li>
                <li class="tab__item tab__item--two-tab">
                  <a class="tab__link" href="#handmade_articles">
                    <img class="tab__icon" src="http://yukuro-createfolio.local/wp-content/uploads/2023/03/ico_category_handmade.svg" alt="ハンドメイド">
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
                      <a class="blog-card__title-link" href="<?php the_permalink(); ?>">
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

          <div class="blog-category blog-category--top">
            <!-- ===== Web制作/開発・デザイン カテゴリ Start ===== -->
            <div class="blog-category__item blog-category__item--top">
              <a href="<?php echo home_url(); ?>/web-design" class="blog-category__thumb-link">
                <h4 class="blog-category__title">Web制作/開発・デザイン</h4>
                <img class="blog-category__image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog_img/img_blog-category_programing-visual.jpg" alt="Web制作/開発・デザイン">
              </a>

              <ul class="blog-category__category-list blog-category__category-list--top">
                <?php
                $categories = get_categories('parent=7');
                foreach ($categories as $category) : ?>
                  <li class="blog-category__category-item">
                    <a class="blog-category__category-link secondary-button" href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
                    <?php
                    $childs = get_categories('child_of=' . $category->term_id);
                    if ($childs) :
                    ?>
                      <ul class="blog-category__category-list blog-category__category-list--top">
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
            <div class="blog-category__item blog-category__item--top">
              <a href="<?php echo home_url(); ?>/handmade" class="blog-category__thumb-link">
                <h4 class="blog-category__title">ハンドメイド</h4>
                <img class="blog-category__image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog_img/img_blog-category_molding-visual.jpg" alt="ハンドメイド">
              </a>
              <ul class="blog-category__category-list blog-category__category-list--top">
                <?php
                $categories = get_categories('parent=3');
                foreach ($categories as $category) : ?>
                  <li class="blog-category__category-item">
                    <a class="blog-category__category-link secondary-button" href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
                    <?php
                    $childs = get_categories('child_of=' . $category->term_id);
                    if ($childs) :
                    ?>
                      <ul class="blog-category__category-list blog-category__category-list--top">
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
            <a class="primary-button__link" href="<?php echo home_url(); ?>/blog">Blog 一覧はこちら<span class="primary-button__arrow"></span></a>
          </div>
          <!-- ⬆︎ ############ Blog 各要素コンテンツ Start ############ ⬆︎ -->
        </section>
      </article>
      <!-- ⬆︎ /////////////////// Top_Blog ブログ End /////////////////// ⬆︎ -->

      <!-- ================================================================================ -->

      <!-- ⬇︎ /////////////////// Top_News お知らせ Start /////////////////// ⬇︎ -->
      <article class="contents__article contents__article--white-bg" id="news-top">
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
              <a class="contents-heading__link" href="<?php echo home_url(); ?>/news">News お知らせ一覧はこちら</a>
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
                  <?php echo get_the_excerpt(); ?>
                </p>
                <a class="news-list__text-link" href="<?php the_permalink(); ?>"><span class="title"><?php the_title(); ?></span></a>
              </li>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
          </ul>
          <!-- ********  ※ スマホ〜タブレット限定 リンク ******** -->
          <div class="page-link-sp is-sp">
            <a class="page-link-sp__link" href="<?php echo home_url(); ?>/news">
              News お知らせ一覧はこちら
            </a>
          </div>

        </section>
      </article>
      <!-- ⬆︎ /////////////////// Top_News お知らせ End /////////////////// ⬆︎ -->

      <!-- ================================================================================ -->

      <!-- ⬇︎ /////////////////// Contact お問い合わせ Start /////////////////// ⬇︎ -->
      <article class="contents__article" id="contact">
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