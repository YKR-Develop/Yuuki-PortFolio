<!-- ===================================================
  archive-works.php
  カスタム投稿 Works 制作実績一覧ページ
================================================== -->
<?php get_header(); ?>

<div class="container">

  <!-- ⬇︎ /////////////////// visual.php 読み込み /////////////////// ⬇︎ -->
  <?php get_template_part('parts/visual'); ?>

  <!-- ⬇︎ /////////////////// sidebar.php 読み込み /////////////////// ⬇︎ -->
  <?php get_sidebar(); ?>



  <!-- =================================================== ページ内コンテンツ Start =================================================== -->
  <div class="contents">
    <div class="contents__inner">

      <!-- ⬇︎ /////////////////// パンくずリスト Start /////////////////// ⬇︎ -->
      <div class="pkz">
        <div class="pkz__inner pkz__inner--blog">
          <?php breadcrumbs(); ?>
        </div>
      </div>
      <!-- ⬆︎ /////////////////// パンくずリスト End /////////////////// ⬆︎ -->

      <!-- ================================================================================ -->

      <!-- ⬇︎ /////////////////// Works 制作実績 Start /////////////////// ⬇︎ -->
      <article class="contents__article contents__article--works">
        <!-- ⬇︎ /////////////////// Works ナビゲーション Start /////////////////// ⬇︎ -->
        <div class="category-nav is-pc">
          <!-- ===== カテゴリーナビ 出力 ===== -->
          <?php
          wp_nav_menu(array(
            'menu' => 'works_menu',
            'theme_location' => 'category-nav',
            'menu_class' => 'category-nav__list',
            'container' => false,
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
          ));
          ?>
        </div>
        <!-- ⬆︎ /////////////////// Works ナビゲーション End /////////////////// ⬆︎ -->

        <!------ ##### セレクト絞り込みボタン ここから ##### ------>
        <div class="contents-works__button-area">
          <div class="contents-works__button-item">
            <p class="select-button__label">制作カテゴリー</p>
            <div class="select-button">
              <select class="select-button__item js-filter" name="category">
                <option class="select-button__option" value="all">全カテゴリー</option>
                <option class="select-button__option" value="is-coding">コーディング</option>
                <option class="select-button__option" value="is-wordpress">Wordpress</option>
                <option class="select-button__option" value="is-ec">ECサイト</option>
                <option class="select-button__option" value="is-lp">LP</option>
                <option class="select-button__option" value="is-cms">CMSサイト</option>
              </select>
            </div>
          </div>

          <div class="contents-works__button-item">
            <p class="select-button__label">業種</p>
            <div class="select-button">
              <select class="select-button__item js-filter" name="industry">
                <option class="select-button__option" value="all">全ての業種</option>
                <option class="select-button__option" value="is-corporate">コーポレート</option>
                <option class="select-button__option" value="is-restaurant">飲食</option>
                <option class="select-button__option" value="is-retail">小売</option>
                <option class="select-button__option" value="is-lodging">ホテル・旅館</option>
                <option class="select-button__option" value="is-hospital">病院・クリニック</option>
                <option class="select-button__option" value="is-other">その他</option>
              </select>
            </div>
          </div>
        </div>
        <!------ ##### セレクト絞り込みボタン ここまで ##### ------>

        <!------ 結果メッセージ ------>
        <p class="px-3">検索結果：<span class="js-filter-msg"></span></p>

        <div class="works-list js-filter-items">
          <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post();
              $thumbnail = (has_post_thumbnail()) ? get_the_post_thumbnail_url(get_the_ID(), 'large') : 'https://placehold.jp/500x250.png'; ?>
              <article class="works-card">
                <div class="works-card__works-image">
                  <img class="works-card__image" src="<?php print $thumbnail; ?>" alt="">
                </div>

                <h2 class="works-card__title"><?php the_title(); ?></h2>

                <div class="works-card__excerpt">
                  <?php the_excerpt(); ?>
                </div>

                <div class="works-card__genre">
                  <div class="works-card__category">
                    <?php
                    $terms = get_the_terms($post->ID, 'works-cat');
                    foreach ($terms as $term) {
                      if ($term->parent) {
                        echo $term->name;
                      }
                    }
                    ?>
                  </div>
                  <div class="works-card__industry">
                    <?php
                    if($terms = get_the_terms($post->ID, 'works-tag')) {
                      foreach($terms as $term) {
                        echo esc_html($term->name);
                      }
                    }
                    ?>
                  </div>

                </div>

                <div class="works-card__detail-link">
                  <a class="works-card__link" href="<?php the_permalink(); ?>">制作詳細はこちら</a>
                </div>

              </article>

            <?php endwhile; ?>

          <?php else : ?>
            何も投稿がありません。
          <?php endif; ?>
        </div>
    </div>

    <!-- ===== 作品制作実績 ここまで ===== -->
    </article>

    <!-- ⬆︎ /////////////////// Works ナビゲーション End /////////////////// ⬆︎ -->
  </div>
</div>
<?php get_footer(); ?>