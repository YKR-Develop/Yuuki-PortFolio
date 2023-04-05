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
        <div class="pkz__inner pkz__inner--blog">
          <?php breadcrumbs(); ?>
        </div>
      </div>
      <!-- ⬆︎ /////////////////// パンくずリスト End /////////////////// ⬆︎ -->

      <!-- ================================================================================ -->

      <!-- ⬇︎ /////////////////// 投稿本文 Start /////////////////// ⬇︎ -->
      <article class="contents__article contents__article--bg">
        <section class="contents__article-inner contents__article-inner--blog">

          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <!-- ####### 記事タイトル・投稿日時・カテゴリ ####### -->
              <div class="blog-heading">
                <!-- 更新・投稿日時 -->
                <time class="blog-heading__date">
                  2022.04.04
                </time>

                <h1 class="blog-heading__title">
                  <?php the_title(); ?>
                </h1>

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

        <div class="blog-prev_next">
          <!-- ⬇︎ ############ 前後の記事ナビ Start ############ ⬇︎ -->
          <?php // 現在の投稿に隣接している前後の投稿を取得する
          $prev_post = get_previous_post(true); // 前の投稿を取得
          $next_post = get_next_post(true); // 次の投稿を取得
          if ($prev_post || $next_post) : // どちらか一方があれば表示
          ?>
            <ul class="blog-prev_next__list blog-prev_next__list--next">
              <?php if ($prev_post) : // 前の投稿があれば表示 
              ?>
                <a href="<?php echo get_permalink($prev_post->ID); ?>" class="blog-prev_next__item">
                  <div class="blog-prev_next__btn">
                    <span>&lt;&lt; Prev</span>
                  </div>
                  <div class="blog-prev_next__label">

                    <!-- サムネイル ここから -->
                    <div class="blog-prev_next__thumb">
                      <?php if (get_the_post_thumbnail($prev_post->ID)) : // 前の投稿に画像があれば表示 
                      ?>
                        <?php echo get_the_post_thumbnail($prev_post->ID, 'full'); ?>
                      <?php else : // 画像がなければ代替画像を表示 
                      ?>
                        <img src="http://yukuro-createfolio.local/wp-content/uploads/2023/03/img_sample-img.jpg" alt="代替画像">
                      <?php endif; ?>
                    </div>
                    <!-- サムネイル ここまで -->

                    <div class="blog-prev_next__title-inner">
                      <p class="blog-prev_next__title-text">
                        <?php echo get_the_title($prev_post->ID); ?>
                      </p>
                    </div>

                  </div>
                </a>
              <?php endif; ?>

              <?php if ($next_post) : // 次の投稿があれば表示 
              ?>
                <a href="<?php echo get_permalink($next_post->ID); ?>" class="blog-prev_next__item blog-prev_next__item--next">
                  <div class="blog-prev_next__btn blog-prev_next__btn--next">
                    <span>Next &gt;&gt;</span>
                  </div>

                  <div class="blog-prev_next__label">

                    <div class="blog-prev_next__title-inner">
                      <p class="blog-prev_next__title-text">
                        <?php echo get_the_title($next_post->ID); ?>
                      </p>
                    </div>
                    <!-- サムネイル ここから -->
                    <div class="blog-prev_next__thumb">
                      <?php if (get_the_post_thumbnail($next_post->ID)) : // 前の投稿に画像があれば表示 
                      ?>
                        <?php echo get_the_post_thumbnail($next_post->ID, 'full'); ?>
                      <?php else : // 画像がなければ代替画像を表示 
                      ?>
                        <img src="http://yukuro-createfolio.local/wp-content/uploads/2023/03/img_sample-img.jpg" alt="代替画像">
                      <?php endif; ?>
                    </div>
                    <!-- サムネイル ここまで -->

                  </div>
                </a>
              <?php endif; ?>
            </ul>
          <?php endif; ?>
          <!-- ⬆︎ ############ 前後の記事ナビ End ############ ⬆︎ -->
        </div>

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

      </article>
      <!-- ⬆︎ /////////////////// 投稿本文 End /////////////////// ⬆︎ -->


      <!-- ================================================================================ -->

      <!-- ⬇︎ ############ ブログボトムナビゲーション Start ############ ⬇︎ -->
      <?php get_template_part('templates/blog_bottom-nav'); ?>
      <!-- ⬆︎ ############ ブログボトムナビゲーション End ############ ⬆︎ -->

      <!-- ================================================================================ -->

    </div>
  </div>

  <!-- =================================================== ページ内コンテンツ End =================================================== -->

  <?php get_footer(); ?>