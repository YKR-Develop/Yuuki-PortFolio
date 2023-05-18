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

      <!-- ⬇︎ /////////////////// 投稿本文 Start /////////////////// ⬇︎ -->
      <article class="contents__article contents__article--single">
        <section class="contents__article-inner contents__article-inner--blog">

          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <!-- ####### 記事タイトル・投稿日時・カテゴリ ####### -->
              <div class="blog-heading">

                <h1 class="blog-heading__title">
                  <?php the_title(); ?>
                </h1>

                <div class="blog-heading__genre">
                  <div class="blog-heading__category">
                    <?php
                    $categories = get_the_category(); //カテゴリ情報を配列で取得
                    foreach ($categories as $category) :
                      $parent = $category->parent; //親カテゴリーIDを取得
                      if ($parent) {
                        echo '<a class="blog-heading__category-link" href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>';
                      }
                    endforeach;
                    ?>
                  </div>

                  <!-- 更新・投稿日時 -->
                  <time class="blog-heading__date">
                    <?php the_time('Y.m.d'); ?>
                  </time>
                </div>
              </div>

              <!-- ####### アイキャッチ ####### -->
              <div class="blog-eyecatch">
                <?php
                if (has_post_thumbnail()) :
                  the_post_thumbnail();
                else :
                ?>
                  <img class="blog-card__image" src="http://yukuro-createfolio.local/wp-content/uploads/2023/03/img_sample-img.jpg" alt="">
                <?php endif; ?>
              </div>

              <!-- ####### 目次 / 本文 ####### -->
              <div class="blog-contents">
                <?php
                $content = apply_filters('the_content', get_the_content());
                echo $content;
                ?>
              </div>
          <?php endwhile;
          endif; ?>
        </section>

        <!-- ⬇︎ ############ SNSシェアボタン Start ############ ⬇︎ -->
        <?php get_template_part('article-parts/sns-share'); ?>
        <!-- ⬆︎ ############ SNSシェアボタン End ############ ⬆︎ -->


        <!-- ⬇︎ ############ 前後記事ボタン Start ############ ⬇︎ -->
        <?php get_template_part('article-parts/prev_next'); ?>
        <!-- ⬆︎ ############ 前後記事ボタン End ############ ⬆︎ -->


        <!-- ⬇︎ ############ 関連記事一覧 Start ############ ⬇︎ -->
        <?php get_template_part('article-parts/related-article_list'); ?>
        <!-- ⬆︎ ############ 関連記事一覧 End ############ ⬆︎ -->

      </article>
      <!-- ⬆︎ /////////////////// 投稿本文 End /////////////////// ⬆︎ -->


      <!-- ⬇︎ ############ アフィリエイト広告エリア Start ############ ⬇︎ -->
      <div class="blog-affiliate">
        <a href="アフィリエイトリンク:URL" class="blog-affiliate__thumb">
          <img class="blog-affiliate__image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog_img/img_blog-affiliate.png" alt="アフィリエイト広告">
        </a>
        <a href="アフィリエイトリンク:URL" class="blog-affiliate__thumb">
          <img class="blog-affiliate__image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog_img/img_blog-affiliate.png" alt="アフィリエイト広告">
        </a>
        <a href="アフィリエイトリンク:URL" class="blog-affiliate__thumb">
          <img class="blog-affiliate__image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog_img/img_blog-affiliate.png" alt="アフィリエイト広告">
        </a>
      </div>
      <!-- ⬆︎ ############ アフィリエイト広告エリア End ############ ⬆︎ -->

      <!-- ================================================================================ -->

      <!-- ⬇︎ ############ ブログボトムナビゲーション Start ############ ⬇︎ -->
      <?php get_template_part('article-parts/blog_bottom-nav'); ?>
      <!-- ⬆︎ ############ ブログボトムナビゲーション End ############ ⬆︎ -->

      <!-- ================================================================================ -->

    </div>
  </div>

  <!-- =================================================== ページ内コンテンツ End =================================================== -->

  <?php get_footer(); ?>