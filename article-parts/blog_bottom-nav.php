<!-- ===================================================
  blog-bottom-nav.php
  トップページパーツの定義
================================================== -->
<div class="blog-nav">
  <div class="blog-nav__inner">

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
    <div class="blog-nav__item">
      <p class="blog-nav__label">
        関連タグ
      </p>
        <ul class="blog-nav__tag-list">
        <?php
        $term_list = get_terms('post_tag');
        $result_list = [];
        foreach ($term_list as $term) {
        $u = (get_term_link( $term, 'post_tag' ));
        echo "<li><a href='".$u."'>".$term->name."</a></li>";
        }
        ?>
        </ul>

    </div>
    <!-- ===== 関連キーワード End ===== -->

    <!-- ===== 筆者プロフィール Start ===== -->
    <div class="blog-nav__item blog-nav-profile">
      <p class="blog-nav__label">
        筆者プロフィール
      </p>
      <?php get_template_part(('article-parts/profile')); ?>
    </div>
    <!-- ===== 筆者プロフィール End ===== -->
  </div>
</div>