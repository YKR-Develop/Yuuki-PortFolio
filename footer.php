<!-- ===================================================
  footer.php
  共通フッターパーツの定義
================================================== -->

<!-- ⬇︎-------------------------------------------------
  フッター PC画面
-------------------------------------------------⬇︎ -->
<footer class="footer-pc is-pc is-tab">
  <div class="footer-pc__inner">
    <!-- ===== フッターロゴ Footer-Logo ===== -->
    <a href="index.html" class="footer-pc__logo">
      <img class="footer-pc__logo-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ico/ico_logo.png" alt="Yukuro CreateFolio">
    </a>
    <!-- ===== フッターロゴ Footer-Logo ===== -->

    <!-- ===== フッターナビ Footer-Nav ===== -->
    <nav class="footer-pc__nav">
      <ul class="footer-pc__nav-list">
        <!-- ===== Home ===== -->
        <li class="footer-pc__nav-item">
          <p class="footer-pc__nav-title"><a class="footer-pc__nav-link" href="index.html">Home</a></p>
          <!-- ===== サブナビ Footer-navchild ===== -->
          <ul class="footer-pc__navchild-list">
            <li class="footer-pc__navchild-item">
              <a class="footer-pc__navchild-link" href="index.html#works-top">Works</a>
            </li>
            <li class="footer-pc__navchild-item">
              <a class="footer-pc__navchild-link" href="index.html#about-top">About</a>
            </li>
            <li class="footer-pc__navchild-item">
              <a class="footer-pc__navchild-link" href="index.html#blog-top">Blog</a>
            </li>
            <li class="footer-pc__navchild-item">
              <a class="footer-pc__navchild-link" href="index.html#news-top">News</a>
            </li>
            <li class="footer-pc__navchild-item">
              <a class="footer-pc__navchild-link" href="index.html#contact">Contact</a>
            </li>
          </ul>
          <!-- ===== サブナビ Footer-navchild ===== -->
        </li>
        <!-- ===== Home ===== -->

        <!-- ===== Works ===== -->
        <li class="footer-pc__nav-item">
          <p class="footer-pc__nav-title"><a class="footer-pc__nav-link" href="/works/works_top.html">Works</a></p>
          <!-- ===== サブナビ Footer-navchild ===== -->
          <ul class="footer-pc__navchild-list">
            <li class="footer-pc__navchild-item">
              <a class="footer-pc__navchild-link" href="/works/works_website.html">Webサイト制作</a>
            </li>
            <li class="footer-pc__navchild-item">
              <a class="footer-pc__navchild-link" href="/works/works_programing.html">プログラミング</a>
            </li>
            <li class="footer-pc__navchild-item">
              <a class="footer-pc__navchild-link" href="/works/works_uiuxdesign.html">UI UXデザイン</a>
            </li>
            <li class="footer-pc__navchild-item">
              <a class="footer-pc__navchild-link" href="/works/works_photoshop.html">PhotoShop</a>
            </li>
            <li class="footer-pc__navchild-item">
              <a class="footer-pc__navchild-link" href="/works/works_illustrator.html">Illustrator</a>
            </li>
            <li class="footer-pc__navchild-item">
              <a class="footer-pc__navchild-link" href="/works/works_molding&dress.html">造形・衣装作品</a>
            </li>
          </ul>
          <!-- ===== サブナビ Footer-navchild ===== -->
        </li>
        <!-- ===== Works ===== -->

        <!-- ===== About ===== -->
        <li class="footer-pc__nav-item">
          <p class="footer-pc__nav-title"><a class="footer-pc__nav-link" href="about.html">About</a></p>
          <!-- ===== サブナビ Footer-navchild ===== -->
          <ul class="footer-pc__navchild-list">
            <li class="footer-pc__navchild-item">
              <a class="footer-pc__navchild-link" href="about.html#production-overview">制作・開発概要</a>
            </li>
            <li class="footer-pc__navchild-item">
              <a class="footer-pc__navchild-link" href="about.html#about-me">私について</a>
            </li>
            <li class="footer-pc__navchild-item">
              <a class="footer-pc__navchild-link" href="about.html#skill">スキル</a>
            </li>
          </ul>
          <!-- ===== サブナビ Footer-navchild ===== -->
        </li>
        <!-- ===== About ===== -->

        <!-- ===== Blog ===== -->
        <li class="footer-pc__nav-item">
          <p class="footer-pc__nav-title"><a class="footer-pc__nav-link" href="blog/blog.html">Blog</a></p>
          <!-- ===== サブナビ Footer-navchild ===== -->
          <ul class="footer-pc__navchild-list">
            <li class="footer-pc__navchild-item">
              <a class="footer-pc__navchild-link" href="/blog/web-design_category.html">Web制作/開発・デザイン</a>
            </li>
            <li class="footer-pc__navchild-item">
              <a class="footer-pc__navchild-link" href="/blog/handmade_category.html">ハンドメイド</a>
            </li>
          </ul>
          <!-- ===== サブナビ Footer-navchild ===== -->
        </li>
        <!-- ===== Blog ===== -->

      </ul>
    </nav>
    <!-- ===== フッターナビ Footer-Nav ===== -->

    <!-- ===== SNSナビ SNS-Nav ===== -->
    <div class="footer-pc__sns-box">
      <div class="footer-pc__sns-item">
        <a class="footer-pc__sns-link" href="Twitter:URL">
          <img class="footer-pc__sns-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ico/ico_twitter-footer.svg" alt="Twitter">
        </a>
      </div>
      <div class="footer-pc__sns-item">
        <a class="footer-pc__sns-link" href="Instagram:URL">
          <img class="footer-pc__sns-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ico/ico_instagram-footer.svg" alt="Instagram">
        </a>
      </div>
      <div class="footer-pc__sns-item">
        <a class="footer-pc__sns-link" href="Pinterest:URL">
          <img class="footer-pc__sns-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ico/ico_pinterest-footer.svg" alt="Pinterest">
        </a>
      </div>
    </div>
    <!-- ===== SNSナビ SNS-Nav ===== -->

    <!-- ===== フッターサブナビゲーション Footer-SubNav ===== -->
    <ul class="footer-pc__subnav">
      <li class="footer-pc__subnav-item">
        <a href="privacypolicy.html" class="footer-pc__subnav-link">プライバシーポリシー</a>
      </li>
      <li class="footer-pc__subnav-item">
        <a href="sitemap.html" class="footer-pc__subnav-link">サイトマップ</a>
      </li>
      <li class="footer-pc__subnav-item">
        <a href="index.html#contact" class="footer-pc__subnav-link">お問い合わせ</a>
      </li>
    </ul>
    <!-- ===== フッターサブナビゲーション Footer-SubNav ===== -->

    <!-- ===== フッターコピーライト Footer-CopyRight ===== -->
    <small class="footer-pc__copyright">&copy;2022 Yukuro CreateFolio. ALL Rights Reserved.</small>
    <!-- ===== フッターコピーライト Footer-CopyRight ===== -->
  </div>
</footer>

<!-- ======================================================================= -->

<!-- ⬇︎-------------------------------------------------
  フッター SP画面
-------------------------------------------------- ⬇︎ -->
<footer class="footer-sp is-sp">
  <!-- ===== フッターロゴ Footer-Logo ===== -->
  <a href="index.html" class="footer-sp__logo">
    <img class="footer-sp__logo-img" src="./images/ico/ico_logo.png" alt="Yukuro CreateFolio">
  </a>
  <!-- ===== フッターロゴ Footer-Logo ===== -->

  <!-- アコーディオンナビゲーション ここから ***************** -->
  <nav class="accordion accordion--footer">

    <!-- ===== Home ===== -->
    <div class="accordion__item">
      <p class="accordion__title js-accordion-title">Home</p>
      <ul class="accordion__menu-list">
        <li class="accordion__menu-item">
          <a class="accordion__menu-link" href="index.html">Top</a>
        </li>
        <li class="accordion__menu-item">
          <a class="accordion__menu-link" href="index.html#works-top">Works</a>
        </li>
        <li class="accordion__menu-item">
          <a class="accordion__menu-link" href="index.html#about-top">About</a>
        </li>
        <li class="accordion__menu-item">
          <a class="accordion__menu-link" href="index.html#blog-top">Blog</a>
        </li>
        <li class="accordion__menu-item">
          <a class="accordion__menu-link" href="index.html#news-top">News</a>
        </li>
        <li class="accordion__menu-item">
          <a class="accordion__menu-link" href="index.html#contact">Contact</a>
        </li>
      </ul>
    </div>
    <!-- ===== Home ===== -->

    <!-- ===== Works ===== -->
    <div class="accordion__item">
      <p class="accordion__title js-accordion-title">Works</p>
      <ul class="accordion__menu-list">

        <li class="accordion__menu-item">
          <a class="accordion__menu-link" href="/works/works_top.html">Top</a>
        </li>
        <li class="accordion__menu-item">
          <a class="accordion__menu-link" href="/works/works_website.html">Webサイト制作</a>
        </li>
        <li class="accordion__menu-item">
          <a class="accordion__menu-link" href="/works/works_programing.html">プログラミング</a>
        </li>
        <li class="accordion__menu-item">
          <a class="accordion__menu-link" href="/works/works_uiuxdesign.html">UI UXデザイン</a>
        </li>
        <li class="accordion__menu-item">
          <a class="accordion__menu-link" href="/works/works_photoshop.html">PhotoShop</a>
        </li>
        <li class="accordion__menu-item">
          <a class="accordion__menu-link" href="/works/works_illustrator.html">Illustrator</a>
        </li>
        <li class="accordion__menu-item">
          <a class="accordion__menu-link" href="/works/works_molding&dress.html">造形・衣装作品</a>
        </li>
      </ul>
    </div>
    <!-- ===== Works ===== -->

    <!-- ===== About ===== -->
    <div class="accordion__item">
      <p class="accordion__title js-accordion-title">About</p>
      <ul class="accordion__menu-list">

        <li class="accordion__menu-item">
          <a class="accordion__menu-link" href="about.html">Top</a>
        </li>
        <li class="accordion__menu-item">
          <a class="accordion__menu-link" href="about.html#production-overview">制作・開発概要</a>
        </li>
        <li class="accordion__menu-item">
          <a class="accordion__menu-link" href="about.html#about-me">私について</a>
        </li>
        <li class="accordion__menu-item">
          <a class="accordion__menu-link" href="about.html#skill">スキル</a>
        </li>

      </ul>
    </div>
    <!-- ===== About ===== -->

    <!-- ===== Blog ===== -->
    <div class="accordion__item">
      <p class="accordion__title js-accordion-title">Blog</p>
      <ul class="accordion__menu-list">

        <li class="accordion__menu-item">
          <a class="accordion__menu-link" href="/blog/blog.html">Top</a>
        </li>
        <li class="accordion__menu-item">
          <a class="accordion__menu-link" href="/blog/web-design_category.html">Web制作/開発・デザイン</a>
        </li>
        <li class="accordion__menu-item">
          <a class="accordion__menu-link" href="/blog/blog-handmade.html">ハンドメイド</a>
        </li>

      </ul>
    </div>
    <!-- ===== Blog ===== -->
  </nav>
  <!-- アコーディオンナビゲーション ここまで ***************** -->

  <!-- ===== SNSナビ SNS-Nav ===== -->
  <div class="footer-sp__sns-box">
    <div class="footer-sp__sns-item">
      <a class="footer-sp__sns-link" href="Twitter:URL">
        <img class="footer-sp__sns-icon" src="./images/ico/ico_twitter-footer.svg" alt="Twitter">
      </a>
    </div>
    <div class="footer-sp__sns-item">
      <a class="footer-sp__sns-link" href="Instagram:URL">
        <img class="footer-sp__sns-icon" src="./images/ico/ico_instagram-footer.svg" alt="Instagram">
      </a>
    </div>
    <div class="footer-sp__sns-item">
      <a class="footer-sp__sns-link" href="Pinterest:URL">
        <img class="footer-sp__sns-icon" src="./images/ico/ico_pinterest-footer.svg" alt="Pinterest">
      </a>
    </div>
  </div>
  <!-- ===== SNSナビ SNS-Nav ===== -->

  <!-- ===== フッターサブナビゲーション Footer-SubNav ===== -->
  <ul class="footer-sp__subnav">
    <li class="footer-sp__subnav-item">
      <a href="privacypolicy.html" class="footer-sp__subnav-link">プライバシーポリシー</a>
    </li>
    <li class="footer-sp__subnav-item">
      <a href="sitemap.html" class="footer-sp__subnav-link">サイトマップ</a>
    </li>
    <li class="footer-sp__subnav-item">
      <a href="index.html#contact" class="footer-sp__subnav-link">お問い合わせ</a>
    </li>
  </ul>
  <!-- ===== フッターサブナビゲーション Footer-SubNav ===== -->

  <!-- ===== フッターコピーライト Footer-CopyRight ===== -->
  <small class="footer-sp__copyright">&copy;2022 Yukuro CreateFolio. ALL Rights Reserved.</small>
  <!-- ===== フッターコピーライト Footer-CopyRight ===== -->
</footer>

<!-- ======================================================================= -->
<?php wp_footer(); ?>
</body>
</html>