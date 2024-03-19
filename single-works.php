<!-- ===================================================
  index.php
  トップページパーツの定義
================================================== -->
<?php get_header(); ?>

<div class="container">

  <!-- ================================================================================ -->

  <!-- ⬇︎ /////////////////// sidebar.php 読み込み /////////////////// ⬇︎ -->
  <?php get_sidebar(); ?>

  <!-- =================================================== ページ内コンテンツ Start =================================================== -->
  <div class="contents">
    <div class="contents__inner">

      <!-- ⬇︎ /////////////////// パンくずリスト Start /////////////////// ⬇︎ -->
      <div class="pkz">
        <div id="breadcrumbs" class="pkz__inner pkz__inner--blog" typeof="BreadcrumbList" vocab="https://schema.org/">
          <?php if (function_exists('bcn_display')) {
            bcn_display();
          } ?>
        </div>
      </div>
      <!-- ⬆︎ /////////////////// パンくずリスト End /////////////////// ⬆︎ -->

      <!-- ================================================================================ -->
      <?php while (have_posts()) : the_post(); ?>
        <?php $terms = get_the_terms($post->ID, 'works'); ?>
        <!-- ⬇︎ /////////////////// 投稿本文 Start /////////////////// ⬇︎ -->
        <article class="contents__article contents__article--single">
          <section class="contents__article-inner contents__article-inner--works">

            <!-- ####### 作品タイトル・カテゴリ ####### -->
            <div class="works-label">
              <h1 class="works-label__title">
                <?php the_title(); ?>
              </h1>

              <div class="works-label__category-desc">
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
                  if ($terms = get_the_terms($post->ID, 'works-tag')) {
                    foreach ($terms as $term) {
                      echo esc_html($term->name);
                    }
                  }
                  ?>
                </div>
              </div>
            </div>

            <!-- ####### アイキャッチ ####### -->
            <div class="works-eyecatch">
              <?php
              if (has_post_thumbnail()) :
                the_post_thumbnail();
              else :
              ?>
                <img class="works-eyecatch__image" src="http://ykr2024-portfolio.com/wp-content/uploads/2023/03/img_sample-img.jpg" alt="">
              <?php endif; ?>
            </div>

            <!-- ####### 作品説明リスト ####### -->
            <div class="works-desc">

            <?php if (is_object_in_term($post->ID, 'works-cat', array('web-site'))) : ?>
              <div class="works-info">
                <p class="works-info__label">制作範囲</p>
                <ul class="works-info__list">
                  <?php
                  if ($terms = get_the_terms($post->ID, 'works-responsible-person')) {
                    foreach ($terms as $term) {
                      echo '<li class="works-info__item">' . $term->name . '</li>';
                    }
                  }
                  ?>
                </ul>
              </div>

              <div class="works-info">
                <p class="works-info__label">使用言語</p>
                <ul class="works-info__list">
                  <?php
                  if ($terms = get_the_terms($post->ID, 'works-language')) {
                    foreach ($terms as $term) {
                      echo '<li class="works-info__item">' . $term->name . '</li>';
                    }
                  }
                  ?>
                </ul>
              </div>

              <div class="works-info">
                <p class="works-info__label">制作ツール</p>
                <ul class="works-info__list">
                  <?php
                  if ($terms = get_the_terms($post->ID, 'works-tool')) {
                    foreach ($terms as $term) {
                      echo '<li class="works-info__item">' . $term->name . '</li>';
                    }
                  }
                  ?>
                </ul>
              </div>
              
              <div class="works-info">
                <p class="works-info__label">制作期間</p>
                <ul class="works-info__list">
                  <?php
                  if ($terms = get_the_terms($post->ID, 'works-production-period')) {
                    foreach ($terms as $term) {
                      echo '<li class="works-info__item">' . $term->name . '</li>';
                    }
                  }
                  ?>
                </ul>
              </div>

              <?php elseif(is_object_in_term($post->ID, 'works-cat', array('ui-ux-design'))): ?>
                <div class="works-info">
                <p class="works-info__label">制作範囲</p>
                <ul class="works-info__list">
                  <?php
                  if ($terms = get_the_terms($post->ID, 'works-responsible-person')) {
                    foreach ($terms as $term) {
                      echo '<li class="works-info__item">' . $term->name . '</li>';
                    }
                  }
                  ?>
                </ul>
              </div>

                <div class="works-info">
                <p class="works-info__label">制作ツール</p>
                <ul class="works-info__list">
                  <?php
                  if ($terms = get_the_terms($post->ID, 'works-tool')) {
                    foreach ($terms as $term) {
                      echo '<li class="works-info__item">' . $term->name . '</li>';
                    }
                  }
                  ?>
                </ul>
              </div>

              <div class="works-info">
                <p class="works-info__label">制作期間</p>
                <ul class="works-info__list">
                  <?php
                  if ($terms = get_the_terms($post->ID, 'works-production-period')) {
                    foreach ($terms as $term) {
                      echo '<li class="works-info__item">' . $term->name . '</li>';
                    }
                  }
                  ?>
                </ul>
              </div>
              <?php else: ?>
                <div class="works-info">
                <p class="works-info__label">制作範囲</p>
                <ul class="works-info__list">
                  <?php
                  if ($terms = get_the_terms($post->ID, 'works-responsible-person')) {
                    foreach ($terms as $term) {
                      echo '<li class="works-info__item">' . $term->name . '</li>';
                    }
                  }
                  ?>
                </ul>
              </div>
              
                <div class="works-info">
                <p class="works-info__label">制作期間</p>
                <ul class="works-info__list">
                  <?php
                  if ($terms = get_the_terms($post->ID, 'works-production-period')) {
                    foreach ($terms as $term) {
                      echo '<li class="works-info__item">' . $term->name . '</li>';
                    }
                  }
                  ?>
                </ul>
              </div>
              <?php endif;?>


              <!-- ####### 作品詳細 ####### -->
              <div class="works-contents">
                <?php the_content(); ?>
              </div>
            </div>
          </section>
          <!-- ⬆︎ /////////////////// 投稿本文 End /////////////////// ⬆︎ -->

          <!-- ⬇︎ ############ 関連記事一覧 Start ############ ⬇︎ -->

          <!-- ⬆︎ ############ 関連記事一覧 End ############ ⬆︎ -->

        </article>
    </div>
  </div>
<?php endwhile; ?>

<?php get_footer(); ?>