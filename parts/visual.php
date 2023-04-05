  <?php if (is_page('757') || is_page('775')) : ?>

  <?php elseif (is_category(array('41', '42', '43', '10', '9', '8'))) : ?>

  <?php else : ?>
    <!-- ⬇︎ ############ メインビジュアル Start ############ ⬇︎ -->
    <div class="main_visual is-hero-img">
      <!-- アイキャッチ画像をヘッダー画像として出力 -->
      <?php if (is_page()) : ?>
        <div class="main_visual__eye-catching"><?php echo get_the_post_thumbnail(); ?></div>

        <!-- ============= Works 制作実績 ビジュアル構文 ここから ============= -->
        <!-- Works 制作実績 -->
      <?php elseif (is_post_type_archive('works')) : ?>
        <img class="main_visual__img" src="http://yukuro-createfolio.local/wp-content/uploads/2023/03/img_works-visual.jpg" alt="Works 制作実績">

        <!-- Works ハンドメイド | カテゴリー -->
      <?php elseif (is_category(59)) : ?>
        <img class="main_visual__img" src="http://yukuro-createfolio.local/wp-content/uploads/2023/03/img_category-thumb_moldingdress.jpg" alt="Works ハンドメイド">

        <!-- Works Illustrator | カテゴリー -->
      <?php elseif (is_category(60)) : ?>
        <img class="main_visual__img" src="http://yukuro-createfolio.local/wp-content/uploads/2023/03/img_category-thumb_illustrator.jpg" alt="Works Illustrator">

        <!-- Works PhotoShop | カテゴリー -->
      <?php elseif (is_category(59)) : ?>
        <img class="main_visual__img" src="http://yukuro-createfolio.local/wp-content/uploads/2023/03/img_category-thumb_photoshop.jpg" alt="Works PhotoShop">

        <!-- Works UI UXデザイン | カテゴリー -->
      <?php elseif (is_category(56)) : ?>
        <img class="main_visual__img" src="http://yukuro-createfolio.local/wp-content/uploads/2023/03/img_category-thumb_uiuxdesign.jpg" alt="Works UIUXデザイン">

        <!-- Works Webサイト | カテゴリー -->
      <?php elseif (is_category(61)) : ?>
        <img class="main_visual__img" src="http://yukuro-createfolio.local/wp-content/uploads/2023/03/img_category-thumb_website.jpg" alt="Works Webサイト">

        <!-- ============= Works 制作実績 ビジュアル構文 ここまで ============= -->

        <!-- ============= Blog ブログ ビジュアル構文 ここから ============= -->
        <!-- ブログカテゴリー「Web制作・デザイン」 -->
      <?php elseif (is_category('web-design')) : ?>
        <img class="main_visual__img" src="http://yukuro-createfolio.local/wp-content/uploads/2023/03/img_blog-category_programing-visual.jpg" alt="Web制作・デザイン">

        <!-- ブログカテゴリー「ハンドメイド」 -->
      <?php elseif (is_category('handmade')) : ?>
        <img class="main_visual__img" src="http://yukuro-createfolio.local/wp-content/uploads/2023/03/img_blog-category_molding-visual.jpg" alt="ハンドメイド">

        <!-- ブログトップページ -->
      <?php elseif (is_archive('')) : ?>
        <img class="main_visual__img" src="http://yukuro-createfolio.local/wp-content/uploads/2023/03/img_blog-visual-e1678929424771.jpg" alt="Yukuro CreateLog ブログ">
        <!-- ============= Blog ブログ ビジュアル構文 ここまで ============= -->


      <?php elseif (is_page()) : ?>
        <img class="main_visual__img" src="<?php header_image(); ?>" alt="">

      <?php else : ?>
      <?php endif; ?>

      <div class="main_visual__inner is-tab">
        <div class="main_visual__menu  is-top-header">

          <!-- ##### ロゴ画像の出力 ##### -->
          <?php the_custom_logo(); ?>

          <!-- ##### メインビジュアルナビゲーション出力 ##### -->

          <?php
          wp_nav_menu(array(
            'theme_location' => 'visual-nav',
            'container' => 'nav',
            'depth' => 1,
            'items_wrap' => '<ul>%3$s</ul>'
          ))
          ?>
        </div>
      </div>

      <!-- ##### キャッチフレーズ出力 ※ トップページのみ ##### -->
      <?php if (is_page('145')) : ?>
        <p class="main_visual__text-line">
          <span class="main_visual__catch js-text-animation">
            <?php bloginfo('description'); ?>
          </span>
          <br>
          <span class="main_visual__sub-catch js-text-animation">まだ知らない自分</span>
        </p>
      <?php else : ?>
      <?php endif; ?>

      <!-- ##### ページタイトル ※トップページ以外 ##### -->
      <?php if (is_home() || is_front_page()) : ?>

      <?php elseif (is_page('757')) : ?>


      <?php elseif (is_post_type_archive('works')) : ?>
        <!-- メインタイトル -->
        <h1 class="page-heading">
          <span class="page-heading__main-heading js-text-animation">
            Works
          </span>
          <br>
          <?php if (is_category()) : ?>
            <span class="page-heading__sub-heading">
              <?php single_cat_title(); ?>
            </span>

          <?php else : ?>

            <span class="page-heading__sub-heading js-text-animation">
              制作実績
            </span>

          <?php endif; ?>
        </h1>

      <?php elseif (is_archive()) : ?>
        <!-- メインタイトル -->
        <h1 class="page-heading">
          <span class="page-heading__main-heading js-text-animation">
            Blog
          </span>
          <br>
          <?php if (is_category()) : ?>
            <span class="page-heading__sub-heading">
              <?php single_cat_title(); ?>
            </span>

          <?php else : ?>

            <span class="page-heading__sub-heading js-text-animation">
              ブログ
            </span>

          <?php endif; ?>
        </h1>

      <?php else : ?>
        <!-- メインタイトル -->
        <h1 class="page-heading">
          <span class="page-heading__main-heading js-text-animation">
            <?php the_title(); ?>
          </span>
          <br>
          <span class="page-heading__sub-heading">
            <?php echo post_custom("wps_subtitle"); ?>
          </span>
        </h1>
      <?php endif; ?>
    </div>
  <?php endif; ?>
  <!-- ⬆︎ ############ メインビジュアル End ############ ⬆︎ -->