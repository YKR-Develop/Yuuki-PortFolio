<!-- ===================================================
  header.php
  共通ヘッダーパーツ・ナビゲーションパーツの定義
================================================== -->

<!-- head.php読み込み -->
<?php get_template_part('templates/head') ?>

<!-- ⬇︎ -------------------------------------------------
  固定ナビゲーション PC画面
-------------------------------------------------⬇︎ -->
<header class="header-fixed is-pc is-tab is-fixed-header">
  <div class="header-fixed__inner">

  <!-- トップページのリンク指定 -->
    <a class="header-fixed__top-link" href="<?php echo esc_url(home_url()); ?>">

    <!-- トップページのみロゴをh1タグで指定 PHP書き換え-->
    <?php $html_tag = (is_home() || is_front_page()) ? 'h1' : 'div'; ?>
      <<?php echo $html_tag; ?> class="header-fixed__logo">
        <img class="header-fixed__icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets//images/ico/ico_logo.png" alt="Yukuro CreateFolio">
      </<?php echo $html_tag; ?>
    </a>

    <!-- ===== ナビゲーション PHPでリンク内容書き換え ====== -->
    <nav class="header-fixed__nav">
      <ul class="header-fixed__list">
        <!-- ===== worksリンク ===== -->
        <li class="header-fixed__toggle-item">
          <a class="header-fixed__link header-fixed__link--arrow" href="<?php echo esc_url(home_url('/category/works/')); ?>">Works</a>
          <ul class="header-fixed__sublist">
            <li class="header-fixed__subitem">
              <a class="header-fixed__sublink" href="/works/works_website.html">Webサイト制作</a>
            </li>
            <li class="header-fixed__subitem">
              <a class="header-fixed__sublink" href="/works/works_programing.html">プログラミング</a>
            </li>
            <li class="header-fixed__subitem">
              <a class="header-fixed__sublink" href="/works/works_uiuxdesign.html">UI UXデザイン</a>
            </li>
            <li class="header-fixed__subitem">
              <a class="header-fixed__sublink" href="/works/works_photoshop.html">PhotoShop</a>
            </li>
            <li class="header-fixed__subitem">
              <a class="header-fixed__sublink" href="/works/works_illustrator.html">Illustrator</a>
            </li>
            <li class="header-fixed__subitem">
              <a class="header-fixed__sublink" href="/works/works_molding&dress.html">造形・衣装作品</a>
            </li>
          </ul>
        </li>

        <!-- ===== Aboutリンク ===== -->
        <li class="header-fixed__toggle-item">
          <a class="header-fixed__link header-fixed__link--arrow" href="<?php echo esc_url(home_url('/about/')); ?>">About</a>
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
          <a class="header-fixed__link header-fixed__link--arrow" href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a>
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
        <input class="searchform__submit" type="submit" id="searchsubmit" value="" src="//images/ico/ico_search_pc.svg">
      </div>
    </form>
    <!-- ===== 検索フォーム ====== -->
  </div>
</header>

<!-- ======================================================================= -->

<!-- ⬇︎-------------------------------------------------
固定ナビゲーション SP画面
-------------------------------------------------⬇︎ -->
<header class="header-mobile is-sp">
  <div class="header-mobile__nav">
    <!-- ロゴリンク -->
    <a class="header-mobile__top-link" href="<?php echo esc_url(home_url()); ?>">
      <h1 class="header-mobile__logo">
        <img class="header-mobile__logo-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets//images/ico/ico_logo.png" alt="Yukuro CreateFolio">
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

<!-- ======================================================================= -->

<!-- ⬇︎-------------------------------------------------
ボトムナビゲーション SP画面
-------------------------------------------------⬇︎ -->
<nav class="bottom-nav is-sp">
  <ul class="bottom-nav__list">

    <!-- ==== Homeリンク ==== -->
    <li class="bottom-nav__item">
      <a href="/index.html" class="bottom-nav__link">
        <img class="bottom-nav__icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets//images/ico/ico_home_border-nav_sp.svg" alt="Homeリンク"><br>
        <span class="bottom-nav__text">
          Home
        </span>
      </a>
    </li>

    <!-- ==== Worksリンク ==== -->
    <li class="bottom-nav__item menu-width-max">
      <a href="/works/works_top.html" class="bottom-nav__link">
        <img class="bottom-nav__icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets//images/ico/ico_works_border-nav_sp.svg" alt="Worksリンク"><br>
        <span class="bottom-nav__text">
          Works
        </span>
      </a>
    </li>

    <!-- ==== Aboutリンク ==== -->
    <li class="bottom-nav__item">
      <a href="//about.html" class="bottom-nav__link">
        <img class="bottom-nav__icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets//images/ico/ico_about_border-nav_sp.svg" alt="Aboutリンク"><br>
        <span class="bottom-nav__text">
          About
        </span>
      </a>
    </li>

    <!-- ==== Blogリンク ==== -->
    <li class="bottom-nav__item bottom-nav__item--width-max">
      <a href="//blog/blog.html" class="bottom-nav__link">
        <img class="bottom-nav__icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets//images/ico/ico_blog_border-nav_sp.svg" alt="Blogリンク"><br>
        <span class="bottom-nav__text">
          Blog
        </span>
      </a>
    </li>

    <!-- ==== Contactリンク ==== -->
    <li class="bottom-nav__item">
      <a href="//index.html#contact" class="bottom-nav__link">
        <img class="bottom-nav__icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets//images/ico/ico_home_border-nav_sp.svg" alt="Contactリンク"><br>
        <span class="bottom-nav__text">
          Contact
        </span>
      </a>
    </li>

  </ul>
</nav>

<?php wp_head(); ?>

<body>