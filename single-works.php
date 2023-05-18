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
                <img class="works-eyecatch__image" src="http://yukuro-createfolio.local/wp-content/uploads/2023/03/img_sample-img.jpg" alt="">
              <?php endif; ?>
            </div>

            <!-- ####### 作品説明リスト ####### -->
            <div class="works-desc">
              <p class="works-desc__label">【 担当箇所 】</p>
              <ul class="works-card__management-list works-card__management-list--works">
                <?php
                if ($terms = get_the_terms($post->ID, 'works-responsible-person')) {
                  foreach ($terms as $term) {
                    echo '<li class="works-card__management-item works-card__management-item--single">' . $term->name . '</li>';
                  }
                }
                ?>
              </ul>
              <!-- ####### 作品詳細 ####### -->
              <div class="works-contents">
                <?php the_content(); ?>
              </div>
            </div>
          </section>
          <!-- ⬆︎ /////////////////// 投稿本文 End /////////////////// ⬆︎ -->

          <!-- ⬇︎ ############ 関連記事一覧 Start ############ ⬇︎ -->
        <?php get_template_part('article-parts/related-article_list'); ?>
        <!-- ⬆︎ ############ 関連記事一覧 End ############ ⬆︎ -->
        
        </article>

        


      <?php endwhile; ?>

      <?php get_footer(); ?>