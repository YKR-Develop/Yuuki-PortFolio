<!-- ===================================================
  header.php
  共通ヘッダーパーツ・ナビゲーションパーツの定義
================================================== -->
<?php get_template_part('templates/head'); ?>
<?php wp_head(); ?>

<body>

  <!-- ⬇︎ -------------------------------------------------
  お問い合わせ サンクスページダイレクト
-------------------------------------------------⬇︎ -->
  <script>
    document.addEventListener('wpcf7mailsent', function(event) {
      location = 'http://ykr2024-portfolio.com/?page_id=757';
    }, false);
  </script>

  <!-- ⬇︎ -------------------------------------------------
  固定ナビゲーション PC画面
-------------------------------------------------⬇︎ -->
  <!-- -------------------------------------------------
  固定ナビゲーション メインビジュアルなしVer
------------------------------------------------- -->
  <?php if (is_post_type_archive('news')) : ?>
    <header class="header-single is-tab">
      <div class="header-single__inner">
        <!-- ##### ロゴ画像 出力 ##### -->
        <?php the_custom_logo(); ?>

        <nav class="header-single-nav">
          <?php wp_nav_menu(array(
            'theme_location' => 'global-nav',
            'container' => false,
            'items_wrap' => '<ul>%3$s</ul>'
          )); ?>
        </nav>

        <!-- ##### 検索フォーム 出力 #####-->
        <?php get_search_form(); ?>

      </div>
    </header>

  <?php elseif (is_page(775)) : ?>

    <header class="header-single is-tab">
      <div class="header-single__inner">
        <!-- ##### ロゴ画像 出力 ##### -->
        <?php the_custom_logo(); ?>

        <nav class="header-single-nav">
          <?php wp_nav_menu(array(
            'theme_location' => 'global-nav',
            'container' => false,
            'items_wrap' => '<ul>%3$s</ul>'
          )); ?>
        </nav>

        <!-- ##### 検索フォーム 出力 #####-->
        <?php get_search_form(); ?>

      </div>
    </header>

  <?php elseif (is_single()) : ?>

    <header class="header-single is-tab">
      <div class="header-single__inner">
        <!-- ##### ロゴ画像 出力 ##### -->
        <?php the_custom_logo(); ?>

        <nav class="header-single-nav">
          <?php wp_nav_menu(array(
            'theme_location' => 'global-nav',
            'container' => false,
            'items_wrap' => '<ul>%3$s</ul>'
          )); ?>
        </nav>

        <!-- ##### 検索フォーム 出力 #####-->
        <?php get_search_form(); ?>

      </div>
    </header>

  <?php elseif (is_tag()) : ?>

    <header class="header-single is-tab">
      <div class="header-single__inner">
        <!-- ##### ロゴ画像 出力 ##### -->
        <?php the_custom_logo(); ?>

        <nav class="header-single-nav">
          <?php wp_nav_menu(array(
            'theme_location' => 'global-nav',
            'container' => false,
            'items_wrap' => '<ul>%3$s</ul>'
          )); ?>
        </nav>

        <!-- ##### 検索フォーム 出力 #####-->
        <?php get_search_form(); ?>

      </div>
    </header>

  <?php elseif (is_tax('works-cat', array('web-site', 'ui-ux-design', 'photoshop', 'illustrator', 'handmade-works'))) : ?>
    <header class="header-single is-tab">
      <div class="header-single__inner">
        <!-- ##### ロゴ画像 出力 ##### -->
        <?php the_custom_logo(); ?>

        <nav class="header-single-nav">
          <?php wp_nav_menu(array(
            'theme_location' => 'global-nav',
            'container' => false,
            'items_wrap' => '<ul>%3$s</ul>'
          )); ?>
        </nav>

        <!-- ##### 検索フォーム 出力 #####-->
        <?php get_search_form(); ?>

      </div>
    </header>

  <?php elseif (is_404()) : ?>
    <header class="header-single is-tab">
      <div class="header-single__inner">
        <!-- ##### ロゴ画像 出力 ##### -->
        <?php the_custom_logo(); ?>

        <nav class="header-single-nav">
          <?php wp_nav_menu(array(
            'theme_location' => 'global-nav',
            'container' => false,
            'items_wrap' => '<ul>%3$s</ul>'
          )); ?>
        </nav>

        <!-- ##### 検索フォーム 出力 #####-->
        <?php get_search_form(); ?>

      </div>
    </header>

  <?php elseif (is_search()) : ?>
    <header class="header-single is-tab">
      <div class="header-single__inner">
        <!-- ##### ロゴ画像 出力 ##### -->
        <?php the_custom_logo(); ?>

        <nav class="header-single-nav">
          <?php wp_nav_menu(array(
            'theme_location' => 'global-nav',
            'container' => false,
            'items_wrap' => '<ul>%3$s</ul>'
          )); ?>
        </nav>

        <!-- ##### 検索フォーム 出力 #####-->
        <?php get_search_form(); ?>

      </div>
    </header>
    <!-- -------------------------------------------------
    特定の固定ページ
    ------------------------------------------------- -->
  <?php elseif (is_page('757') || is_page('775')) : ?>


  <?php elseif (is_category(array('41', '42', '43', '10', '9', '8'))) : ?>

    <header class="header-single is-tab">
      <div class="header-single__inner">
        <!-- ##### ロゴ画像 出力 ##### -->
        <?php the_custom_logo(); ?>

        <nav class="header-single-nav">
          <?php wp_nav_menu(array(
            'theme_location' => 'global-nav',
            'container' => false,
            'items_wrap' => '<ul>%3$s</ul>'
          )); ?>
        </nav>

        <!-- ##### 検索フォーム 出力 #####-->
        <?php get_search_form(); ?>

      </div>
    </header>

  <?php else : ?>
    <!-- -------------------------------------------------
    固定ナビゲーション ビジュアルありVer
    ------------------------------------------------- -->
    <header class="header-fixed is-fixed-header is-tab">
      <div class="header-fixed__inner">
        <!-- ##### ロゴ画像 出力 ##### -->
        <?php the_custom_logo(); ?>

        <nav class="header-nav">
          <?php wp_nav_menu(array(
            'theme_location' => 'global-nav',
            'container' => false,
            'items_wrap' => '<ul>%3$s</ul>'
          )); ?>
        </nav>

        <!-- ##### 検索フォーム 出力 #####-->
        <?php get_search_form(); ?>

      </div>
    </header>
  <?php endif; ?>


  <!-- ======================================================================= -->

  <!-- ⬇︎-------------------------------------------------
固定ナビゲーション SP画面
-------------------------------------------------⬇︎ -->
  <header class="header-mobile is-sp">
    <div class="header-mobile__nav">
      <!-- ##### ロゴ画像の出力 ##### -->
      <?php the_custom_logo(); ?>

      <!-- ##### 検索フォーム 出力 ##### -->
      <?php get_search_form(); ?>

    </div>
  </header>

  <!-- ⬇︎-------------------------------------------------
ボトムナビゲーション SP画面
-------------------------------------------------⬇︎ -->
  <nav class="bottom-nav is-sp">
    <?php wp_nav_menu(array(
      'theme_location' => 'bottom-nav',
      'menu_class' => 'bottom-menu',
      'container' => false,
      'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
    ));
    ?>
  </nav>