<!-- --------------------------------------------------
  header.php
  ヘッダー / ナビゲーション ページ共通指定
--------------------------------------------------  -->
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head prefix="og: https://ogp.me/ns#">
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- タイトル -->
  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

  <!-- metaディスクリプション -->
  <meta name="description" content="<?php bloginfo('description'); ?>">

  <!-- OGPタグ -->
  <meta property="og:url" content="ページURL">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Yukuro CreateFolio | Home">
  <meta property="og:description" content="Yukuro CreateFolioはWebサイトの制作 / プログラミング開発などの作品を紹介しているポートフォリオ兼ブログサイトです。
  開発実績以外にも、オリジナルで制作したコスプレ衣装・小道具作品も掲載しております。">
  <meta property="og:site_name" content="Yukuro CreateFolioのトップ">
  <meta property="og:image" content="/images/img/img_ogp_thumb.jpg">

  <!-- Twitterカード -->
  <meta name="twitter:card" content="Summary Card">
  <meta name="twitter:site" content="@Yukuro_Cos2022">

  <!-- ファビコン / サイトアイコン -->
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/ico/ico_site-favicon 16*16.ico" sizes="16x16" type="image/svg+xml" />
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/ico/ico_site-favicon 32*32.ico" sizes="32x32" type="image/svg+xml" />
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/ico/ico_site-favicon 48*48.ico" sizes="48x48" type="image/svg+xml" />
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/ico/ico_site-favicon 64*64.ico" sizes="62x62" type="image/svg+xml" />

  <!-- スマホ用アイコン画像 -->
  <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/images/ico/ico_apple-touch-icon.png">
  <!-- ###### ヘッダー 読み込み ###### -->
  <?php wp_head(); ?>

</head>

    <!-- =================================================== ページ内コンテンツ End =================================================== -->

  <!-- ⬇︎ /////////////////// 入れ替え用ヘッダー Start /////////////////// ⬇︎ -->
  <header class="header-fixed is-pc is-tab is-fixed-header">
    <div class="header-fixed__inner">

      <a class="header-fixed__top-link" href="<?php echo home_url(); ?>">
        <h1 class="header-fixed__logo">
          <img class="header-fixed__icon" src="<?php echo get_template_directory_uri(); ?>/images/ico/ico_logo.png" alt="Yukuro CreateFolio">
        </h1>
      </a>

      <!-- ===== ナビゲーション ====== -->
      <nav class="header-fixed__nav">
        <ul class="header-fixed__list">
          <!-- ===== worksリンク ===== -->
          <li class="header-fixed__toggle-item">
            <a class="header-fixed__link header-fixed__link--arrow" href="<?php echo home_url(); ?>/works/works_top.html">Works</a>
            <ul class="header-fixed__sublist">
              <li class="header-fixed__subitem">
                <a class="header-fixed__sublink" href="<?php echo home_url(); ?>/works/works_website.html">Webサイト制作</a>
              </li>
              <li class="header-fixed__subitem">
                <a class="header-fixed__sublink" href="<?php echo home_url(); ?>/works/works_programing.html">プログラミング</a>
              </li>
              <li class="header-fixed__subitem">
                <a class="header-fixed__sublink" href="<?php echo home_url(); ?>/works/works_uiuxdesign.html">UI UXデザイン</a>
              </li>
              <li class="header-fixed__subitem">
                <a class="header-fixed__sublink" href="<?php echo home_url(); ?>/works/works_photoshop.html">PhotoShop</a>
              </li>
              <li class="header-fixed__subitem">
                <a class="header-fixed__sublink" href="<?php echo home_url(); ?>/works/works_illustrator.html">Illustrator</a>
              </li>
              <li class="header-fixed__subitem">
                <a class="header-fixed__sublink" href="<?php echo home_url(); ?>/works/works_molding&dress.html">造形・衣装作品</a>
              </li>
            </ul>
          </li>

          <!-- ===== Aboutリンク ===== -->
          <li class="header-fixed__toggle-item">
            <a class="header-fixed__link header-fixed__link--arrow" href="/about.html">About</a>
            <ul class="header-fixed__sublist">
              <li class="header-fixed__subitem">
                <a class="header-fixed__sublink" href="/about.html#production-overview">制作・開発概要</a>
              </li>
              <li class="header-fixed__subitem">
                <a class="header-fixed__sublink" href="/about.html#about-me">私について</a>
              </li>
              <li class="header-fixed__subitem">
                <a class="header-fixed__sublink" href="/about.html#skill">スキル</a>
              </li>
            </ul>
          </li>

          <!-- ===== Blogリンク ===== -->
          <li class="header-fixed__toggle-item">
            <a class="header-fixed__link header-fixed__link--arrow" href="/blog/blog.html">Blog</a>
            <ul class="header-fixed__sublist">
              <li class="header-fixed__subitem">
                <a class="header-fixed__sublink" href="program-design_/blog/blog.html">Web制作/開発・デザイン</a>
              </li>
              <li class="header-fixed__subitem">
                <a class="header-fixed__sublink" href="molding-dress_/blog/blog.html">ハンドメイド</a>
              </li>

            </ul>
          </li>

          <!-- ===== Newsリンク ===== -->
          <li class="header-fixed__item">
            <a class="header-fixed__link" href="news.html">News</a>
          </li>

          <!-- ===== Contactリンク ===== -->
          <li class="header-fixed__item">
            <a class="header-fixed__link" href="i#contact">Contact</a>
          </li>
        </ul>
      </nav>
      <!-- ===== ナビゲーション ====== -->

      <!-- ===== 検索フォーム ====== -->
      <form role="search" method="get" class="searchform" action="#">
        <div>
          <input class="searchform__input" type="text" name="search" placeholder="Search">
          <input class="searchform__submit" type="submit" id="searchsubmit" value="" src="/images/ico/ico_search_pc.svg">
        </div>
      </form>
      <!-- ===== 検索フォーム ====== -->
    </div>
  </header>
  <!-- ⬆︎ /////////////////// 入れ替え用ヘッダー End /////////////////// ⬆︎ -->

  <!-- ⬇︎ /////////////////// ヘッダーナビゲーション__SP Start /////////////////// ⬇︎ -->
  <header class="header-mobile is-sp">
    <div class="header-mobile__nav">
      <!-- ロゴリンク -->
      <a class="header-mobile__top-link" href="/index.html">
        <h1 class="header-mobile__logo">
          <img class="header-mobile__logo-img" src="<?php echo get_template_directory_uri(); ?>/images/ico/ico_logo.png" alt="Yukuro CreateFolio">
        </h1>
      </a>
      <!-- ロゴリンク -->

      <!-- 検索フォーム ※WordPress検索のためid指定 -->
      <div class="search-open-btn"></div>
      <div class="search-wrap">
        <div class="search-close-btn">
          <span class="search-close-btn__border"></span>
          <span class="search-close-btn__border"></span>
        </div>
        <div class="search-area">
          <form class="search-wrap__form" role="search" method="get" action="">
            <input class="search-wrap__input" type="text" value="" name="" id="search-text" placeholder="search">
            <input class="search-wrap__submit" type="submit" id="searchsubmit" value="">
          </form>
        </div>
      </div>
      <!-- 検索フォーム -->
    </div>
  </header>
  <!-- ⬆︎ /////////////////// ヘッダーナビゲーション__SP End /////////////////// ⬆︎ -->

  <!-- ⬇︎ /////////////////// ボトムナビゲーション＿SP Start /////////////////// ⬇︎ -->
  <nav class="bottom-nav is-sp">
    <ul class="bottom-nav__list">

      <!-- ==== Homeリンク ==== -->
      <li class="bottom-nav__item">
        <a href="/index.html" class="bottom-nav__link">
          <img class="bottom-nav__icon" src="<?php echo get_template_directory_uri(); ?>/images/ico/ico_home_border-nav_sp.svg" alt="Homeリンク"><br>
          <span class="bottom-nav__text">
            Home
          </span>
        </a>
      </li>

      <!-- ==== Worksリンク ==== -->
      <li class="bottom-nav__item menu-width-max">
        <a href="/works/works_top.html" class="bottom-nav__link">
          <img class="bottom-nav__icon" src="<?php echo get_template_directory_uri(); ?>/images/ico/ico_works_border-nav_sp.svg" alt="Worksリンク"><br>
          <span class="bottom-nav__text">
            Works
          </span>
        </a>
      </li>

      <!-- ==== Aboutリンク ==== -->
      <li class="bottom-nav__item">
        <a href="//about.html" class="bottom-nav__link">
          <img class="bottom-nav__icon" src="<?php echo get_template_directory_uri(); ?>/images/ico/ico_about_border-nav_sp.svg" alt="Aboutリンク"><br>
          <span class="bottom-nav__text">
            About
          </span>
        </a>
      </li>

      <!-- ==== Blogリンク ==== -->
      <li class="bottom-nav__item bottom-nav__item--width-max">
        <a href="//blog/blog.html" class="bottom-nav__link">
          <img class="bottom-nav__icon" src="<?php echo get_template_directory_uri(); ?>/images/ico/ico_blog_border-nav_sp.svg" alt="Blogリンク"><br>
          <span class="bottom-nav__text">
            Blog
          </span>
        </a>
      </li>

      <!-- ==== Contactリンク ==== -->
      <li class="bottom-nav__item">
        <a href="//index.html#contact" class="bottom-nav__link">
          <img class="bottom-nav__icon" src="<?php echo get_template_directory_uri(); ?>/images/ico/ico_home_border-nav_sp.svg" alt="Contactリンク"><br>
          <span class="bottom-nav__text">
            Contact
          </span>
        </a>
      </li>

    </ul>
  </nav>
  <!-- ⬇︎ /////////////////// ボトムナビゲーション＿SP End /////////////////// ⬇︎ -->

<body>
    <!-- ###### サイドバー 読み込み ###### -->
    <?php get_sidebar(); ?>

