<!-- ===================================================
  blog-bottom-nav.php
  トップページパーツの定義
================================================== -->
<div class="blog-nav">

        <!-- ===== カテゴリー Start ===== -->
        <div class="blog-nav__item blog-nav-category">
          <p class="blog-nav__label">
            カテゴリー
          </p>
          <div class="blog-accordion">
            <div class="accordion__item">
              <!-- アコーディオンナビゲーション ここから ***************** -->
              <div class="accordion">
                <!-- ===== アコーディオンメニュー 出力 ===== -->
                <?php
                wp_nav_menu(array(
                  'theme_location' => 'category-menu',
                  'menu_class' => 'accordion-blog',
                  'container' => false,
                  'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                ));
                ?>
              </div>
              <!-- アコーディオンナビゲーション ここまで ***************** -->
            </div>

          </div>
        </div>
        <!-- ===== カテゴリー End ===== -->

        <!-- ===== 関連キーワード Start ===== -->
        <div class="blog-nav__item blog-nav-keyword">
          <p class="blog-nav__label">
            関連キーワード
          </p>
          <div class="blog-nav__keyword">
            <a href="#" class="blog-nav__keyword-link">
              レジン
            </a>
            <a href="#" class="blog-nav__keyword-link">
              Webデザイン
            </a>
            <a href="#" class="blog-nav__keyword-link">
              アクセサリー
            </a>
            <a href="#" class="blog-nav__keyword-link">
              PHP
            </a>
            <a href="#" class="blog-nav__keyword-link">
              WordPress
            </a>
            <a href="#" class="blog-nav__keyword-link">
              AdobeXD
            </a>
            <a href="#" class="blog-nav__keyword-link">
              Udemy
            </a>
            <a href="#" class="blog-nav__keyword-link">
              副業
            </a>
            <a href="#" class="blog-nav__keyword-link">
              コスプレ
            </a>
            <a href="#" class="blog-nav__keyword-link">
              造形
            </a>
          </div>

        </div>
        <!-- ===== 関連キーワード End ===== -->

        <!-- ===== 筆者プロフィール Start ===== -->
        <div class="blog-nav__item blog-nav-profile">
          <p class="blog-nav__label">
            筆者プロフィール
          </p>
          <?php get_template_part(('parts/profile')); ?>
        </div>
        <!-- ===== 筆者プロフィール End ===== -->
      </div>