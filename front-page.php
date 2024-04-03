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
      <div class="contents__article" id="works-top">
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
          <section class="contents__wrapper top-works">
            <!-- ===== 各要素タイトル Title / link ===== -->
            <div class="contents-title">
              <h3 class="contents-title__title">Webサイト</h3>
            </div>
            <!-- ===== 各要素タイトル Title / link ===== -->

            <div class="top-works__contents">
              <div class="top-works__thumb">
                <img class="top-works__image" src="https://ykr2024-portfolio.com/wp-content/uploads/2023/04/img_top-works-webthumb.jpg" alt="Webサイト制作">
              </div>

              <div class="top-works__desc">
                <div class="top-works__text-box">
                  <p class="top-works__text">
                    WFからデザイン・コーディングで制作したサイトを始め、PHPを用いてWordPressを構築したサイトを掲載しております。<br>詳細にはプロジェクトの概要やデザインの意図などをまとめております。
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
                        <a class="top-works__mockup-link" href="<?php the_permalink() ?>">
                          <div class="top-works__mockup-thumb">
                            <img class="top-works__mockup-image" src="<?php print $thumbnail; ?>" alt="<?php the_title() ?>">
                          </div>
                        </a>
                        <h4 class="top-works__mockup-label"><?php the_title() ?></h4>
                      </li>
                    <?php endwhile; ?>
                  <?php endif;
                  wp_reset_postdata(); ?>
                </ul>
              </div>
            </div>

            <div class="primary-button">
              <a class="primary-button__link" href="<?php echo get_category_link(55); ?>">Webサイト 実績はこちら<span class="primary-button__arrow"></span></a>
            </div>

          </section>
          <!-- ⬆︎ ############ Webサイト制作 各要素コンテンツ Start ############ ⬆︎ -->


          <!-- ⬇︎ ############ UI UXデザイン 各要素コンテンツ Start ############ ⬇︎ -->
          <section class="contents__wrapper top-works">
            <!-- ===== 各要素タイトル Title / link ===== -->
            <div class="contents-title">
              <h3 class="contents-title__title">UI UXデザイン</h3>
            </div>
            <!-- ===== 各要素タイトル Title / link ===== -->


            <div class="top-works__contents top-works__contents--odd">
              <div class="top-works__thumb top-works__thumb--odd">
                <img class="top-works__image" src="https://ykr2024-portfolio.com/wp-content/uploads/2023/04/img_top-works-uiuxthumb.jpg" alt="UIUXデザイン">
              </div>

              <div class="top-works__desc">
                <div class="top-works__text-box">
                  <p class="top-works__text">
                    Figmaを使用し制作したアプリのUI UXデザインを掲載しております。<br>ペルソナやカスタマージャーニーなどを用いた実践的な観点で制作するように心がけています。
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
                        <a class="top-works__mockup-link" href="<?php the_permalink() ?>">
                          <div class="top-works__mockup-thumb top-works__mockup-thumb">
                            <img class="top-works__mockup-image" src="<?php print $thumbnail; ?>" alt="<?php the_title() ?>">
                          </div>
                        </a>
                        <h4 class="top-works__mockup-label"><?php the_title() ?></h4>
                      </li>
                    <?php endwhile; ?>
                  <?php endif;
                  wp_reset_postdata(); ?>
                </ul>
              </div>
            </div>

            <div class="primary-button">
              <a class="primary-button__link" href="<?php echo get_category_link(56); ?>">UI UXデザイン 実績はこちら<span class="primary-button__arrow"></span></a>
            </div>

          </section>
          <!-- ⬆︎ ############ UI UXデザイン 各要素コンテンツ Start ############ ⬆︎ -->


          <!-- ⬇︎ ############ ハンドメイド 各要素コンテンツ Start ############ ⬇︎ -->
          <section class="contents__wrapper top-works">
            <!-- ===== 各要素タイトル Title / link ===== -->
            <div class="contents-title contents-title--works">
              <h3 class="contents-title__title">ハンドメイド</h3>
            </div>
            <!-- ===== 各要素タイトル Title / link ===== -->

            <div class="top-works__contents">
              <div class="top-works__thumb top-works__thumb">
                <img class="top-works__image" src="https://ykr2024-portfolio.com/wp-content/uploads/2023/04/img_top-works-handmadethumb.jpg" alt="ハンドメイド">
              </div>

              <div class="top-works__desc">
                <div class="top-works__text-box">
                  <p class="top-works__text">
                    私が個人的に制作した衣装や造形作品などを掲載しています。<br>
                    モノづくりに対するこだわりや過程などを作品詳細やブログにまとめておりますので、ぜひご覧ください。
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
                        <a class="top-works__mockup-link" href="<?php the_permalink() ?>">
                          <div class="top-works__mockup-thumb">
                            <img class="top-works__mockup-image" src="<?php print $thumbnail; ?>" alt="<?php the_title() ?>">
                          </div>
                        </a>
                        <h4 class="top-works__mockup-label"><?php the_title() ?></h4>
                      </li>
                    <?php endwhile; ?>
                  <?php endif;
                  wp_reset_postdata(); ?>
                </ul>
              </div>
            </div>

            <div class="primary-button">
              <a class="primary-button__link" href="<?php echo get_category_link(61); ?>">ハンドメイド作品はこちら<span class="primary-button__arrow"></span></a>
            </div>
          </section>
          
          <!-- ⬆︎ ############ ハンドメイド 各要素コンテンツ Start ############ ⬆︎ -->
        </section>
      </div>
      <!-- ⬆︎ /////////////////// Top_Works 制作実績 End /////////////////// ⬆︎ -->

      <!-- ================================================================================ -->

      <!-- ⬇︎ /////////////////// Top_About 当サイトについて Start /////////////////// ⬇︎ -->
      <div class="contents__article contents__article--white-bg" id="about-top">
        <!-- ===== コンテンツ見出し Heading ===== -->
        <section class="contents__article-inner">
          <h2 class="contents-heading">
            <span class="contents-heading__main">
              About
            </span>
            <span class="contents-heading__sub">
              当サイトについて
            </span>
          </h2>
          <!-- ===== コンテンツ見出し Heading ===== -->

          <!-- ⬇︎ ############ About 各要素コンテンツ Start ############ ⬇︎ -->
          <div class="top-about">
            <!-- ===== About 説明 Text ===== -->
            <div class="top-about__desc">
              <p class="top-about__text">
                当サイトを閲覧してくださりありがとうございます。
              </p>
              <p class="top-about__text">
                こちらのポートフォリオ兼ブログサイトでは、<br>制作したWebサイト / UI UXデザイン / ハンドメイド作品の掲載と、「モノづくり」を中心とした情報をブログにて発信しています。
              </p>
              <p class="top-about__text">
                小さな頃から時間を忘れるほど好きだった何かを作ることとそこに対するこだわりを活かす仕事を考えていたときに、「Webデザイン」という仕事に出会いました。
              </p>
              <p class="top-about__text">
                時間を忘れるほどサイト制作の勉強に夢中になり清掃員から転職し、2年ほど都内のシステム会社で勤務した後、現在は転職活動をしております。
              </p>
            </div>

            <!-- ===== Profile 画像 ===== -->
            <div class="top-about__profile-img">
              <img class="top-about__image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img/img_top_profile-img.png" alt="プロフィール写真">
            </div>
          </div>

          <!-- ===== ページ遷移ボタン ===== -->
          <div class="primary-button">
            <a class="primary-button__link" href="<?php echo home_url(); ?>/about">About 詳細はこちら<span class="primary-button__arrow"></span></a>
          </div>

          <!-- ⬆︎ ############ About 各要素コンテンツ Start ############ ⬆︎ -->
        </section>
      </div>
      <!-- ⬆︎ /////////////////// Top_About Yuuki PortFolio について End /////////////////// ⬆︎ -->

      <!-- ================================================================================ -->

      <!-- ⬇︎ /////////////////// Top_Blog ブログ Start /////////////////// ⬇︎ -->
      <div class="contents__article" id="blog-top">
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
            Webサイト / デザインに関するアウトプットの投稿をはじめ、ハンドメイドや衣装・造形製作関連などの情報を幅広く発信しています。
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
                    <img class="tab__icon" src="	http://ykr2024-portfolio.com/wp-content/uploads/2023/03/ico_category_web-design.svg" alt="Web制作・デザイン">
                    Web制作・デザイン
                  </a>
                </li>
                <li class="tab__item tab__item--two-tab">
                  <a class="tab__link" href="#handmade_articles">
                    <img class="tab__icon" src="	http://ykr2024-portfolio.com/wp-content/uploads/2023/03/ico_category_handmade.svg" alt="ハンドメイド">
                    ハンドメイド
                  </a>
                </li>
              </ul>
            </nav>

            <!-- ⬇︎ ############ Web制作・デザイン Start ############ ⬇︎ -->
            <div id="web-design_articles" class="tab__area">

              <div class="blog-wrapper">
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
                        <img class="blog-card__image" src="https://ykr2024-portfolio.com/wp-content/uploads/2023/03/img_sample-img.jpg" alt="">
                      <?php endif; ?>
                    </a>

                    <!-- ブログタイトル / カテゴリー / 投稿日 -->
                    <div class="blog-card__label">
                      <div class="blog-card__inner">
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


                        <div class="blog-card__date-box">
                          <time class="blog-card__date">
                            <?php the_time('Y.m.d'); ?>
                          </time>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- ===== Web制作・デザイン ブログカード ここまで ===== -->
                <?php endforeach;
                wp_reset_postdata(); ?>
              </div>
            </div>
            <!-- ⬆︎ ############ Web制作・デザイン End ############ ⬆︎ -->

            <!-- ============================================================================== -->

            <!-- ⬇︎ ############ ハンドメイド Start ############ ⬇︎ -->
            <div id="handmade_articles" class="tab__area">
              <div class="blog-wrapper">
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
                        <img class="blog-card__image" src="https://ykr2024-portfolio.com/wp-content/uploads/2023/03/img_sample-img.jpg" alt="">
                      <?php endif; ?>
                    </a>

                    <!-- ブログタイトル / カテゴリー / 投稿日 -->
                    <div class="blog-card__label">
                      <div class="blog-card__inner">
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

                        <div class="blog-card__date-box">
                          <time class="blog-card__date">
                            <?php the_time('Y.m.d'); ?>
                          </time>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- ===== ハンドメイド ブログカード ここまで ===== -->
                <?php endforeach;
                wp_reset_postdata(); ?>
              </div>
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
            <!-- ===== Web制作・デザイン カテゴリ Start ===== -->
            <div class="blog-category__item blog-category__item--top">
              <a href="<?php echo home_url(); ?>/web-design" class="blog-category__thumb-link">
                <h4 class="blog-category__title">Web制作・デザイン</h4>
                <img class="blog-category__image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog_img/img_blog-category_programing-visual.jpg" alt="Web制作・デザイン">
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
      </div>
      <!-- ⬆︎ ############ Blog 各要素コンテンツ Start ############ ⬆︎ -->
      </section>
      </article>
      <!-- ⬆︎ /////////////////// Top_Blog ブログ End /////////////////// ⬆︎ -->

      <!-- ================================================================================ -->

      <!-- ⬇︎ /////////////////// Top_News お知らせ Start /////////////////// ⬇︎ -->

      <!-- ⬆︎ /////////////////// Top_News お知らせ End /////////////////// ⬆︎ -->

      <!-- ================================================================================ -->

      <!-- ⬇︎ /////////////////// Contact お問い合わせ Start /////////////////// ⬇︎ -->
      <div class="contents__article contents__article--white-bg" id="contact">
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
          <?php echo do_shortcode('[contact-form-7 id="756"  html_class="form-box" title="Yukuro CreataFolio お問い合わせフォーム"]'); ?>
          <!-- ===== お問い合わせフォーム form-box ===== -->
      </div>
      <!-- ⬆︎ /////////////////// Contact お問い合わせ End /////////////////// ⬆︎ -->

    </div>
  </div>
</div>
<?php get_footer(); ?>