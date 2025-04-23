<?php get_header(); ?>

<div class="container">
  <!-- ⬇︎ /////////////////// メインビジュアル Start /////////////////// ⬇︎ -->
  <?php get_template_part('parts/visual'); ?>

  <!-- ================================================================================ -->

  <!-- ⬇︎ /////////////////// SideNav SNS / Top Start /////////////////// ⬇︎ -->
  <?php get_sidebar(); ?>
  <!-- ⬆︎ /////////////////// SideNav SNS / Top End /////////////////// ⬆︎ -->


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

      <!-- ⬇︎ /////////////////// カテゴリカルーセル Start /////////////////// ⬇︎ -->
      <article class="contents__article">
        <section class="contents__article-inner">
          <!-- ===== コンテンツ見出し Heading ===== -->
          <h2 class="contents-heading">
            <span class="contents-heading__main">
              Category
            </span>
            <span class="contents-heading__sub">
              カテゴリ
            </span>
          </h2>
          <!-- ===== コンテンツ見出し Heading ===== -->

          <!-- タブナビゲーション ここから ***************** -->
          <nav class="tab">
            <ul class="tab__list">
              <li class="tab__item tab__item--three-tab">
                <a class="tab__link" href="#recommended-articles">
                  <img class="tab__icon" src="http://ykr2024-portfolio.com/wp-content/uploads/2023/03/ico_pickup.svg" alt="Web制作">
                  Web制作
                </a>
              </li>
              <li class="tab__item tab__item--three-tab">
                <a class="tab__link" href="#feature-articles">
                  <img class="tab__icon" src="http://ykr2024-portfolio.com/wp-content/uploads/2023/03/ico_special-feature.svg" alt="特集記事">
                  デザイン
                </a>
              </li>
              <li class="tab__item tab__item--three-tab">
                <a class="tab__link" href="#ranking-articles">
                  <img class="tab__icon" src="http://ykr2024-portfolio.com/wp-content/uploads/2023/03/ico_ranking.svg" alt="ランキング">
                  制作ツール
                </a>
              </li>
            </ul>
          </nav>

          <!-- ⬇︎ ############ Web制作 Start ############ ⬇︎ -->
          <div id="recommended-articles" class="tab__area">
            <div class="blog-wrapper">
              <?php
              $args = array(
                'post_type' => 'post',
                'posts_per_page' => 4,
                'orderby' => 'date',
                'category_name' => 'web-production'
              );
              $posts = get_posts($args);
              foreach ($posts as $post) :
                setup_postdata($post);
                $custom_posts = get_posts($args);
              ?>
                <!-- ===== Web制作 ブログカード ここから ===== -->
                <div class="blog-card">
                  <!-- ブログサムネイル -->
                  <a href="<?php the_permalink(); ?>" class="blog-card__thumb">
                    <?php
                    if (has_post_thumbnail()) :
                      the_post_thumbnail();
                    else :
                    ?>
                      <img class="blog-card__image" src="https://ykr2024-portfolio.com/wp-content/uploads/2023/03/img_sample-img.jpg" alt="">
                    <?php endif; ?>
                  </a>

                  <!-- ブログタイトル / カテゴリー / 投稿日 -->
                  <div class="blog-card__label">
                    <div class="blog-card__inner">
                      <h4 class="blog-card__title">
                        <a class="blog-card__title-link" href="<?php the_permalink(); ?>">
                          <?php the_title(); ?>
                        </a>
                      </h4>

                      <div class="blog-card__category-link">
                        <?php
                        $categories = get_the_category();
                        foreach ($categories as $category) {
                          $cat_name = $category->name;
                          $cat_link = esc_url(get_category_link($category->term_id));
                          if ($category->parent) {
                            echo sprintf("<a href='%s'>%s</a> ", $cat_link, $cat_name);
                          }
                        }
                        ?>
                      </div>

                      <div class="blog-card__date-box">
                        <time class="blog-card__date">
                          <?php the_time('Y.m.d'); ?>
                        </time>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- ===== Web制作 ブログカード ここまで ===== -->
              <?php endforeach;
              wp_reset_postdata(); ?>
              <!-- ===== ページ遷移ボタン ===== -->
              <div class="primary-button">
                <a class="primary-button__link" href="<?php echo esc_url(get_tag_link('41')); ?>">Web制作 一覧<span class="primary-button__arrow"></span></a>
              </div>
            </div>
          </div>
          <!-- ⬆︎ ############ Web制作 End ############ ⬆︎ -->

          <!-- ============================================================================== -->

          <!-- ⬇︎ ############ デザイン Start ############ ⬇︎ -->
          <div id="feature-articles" class="tab__area">
            <div class="blog-wrapper">
              <?php
              $args = array(
                'post_type' => 'post',
                'posts_per_page' => 4,
                'orderby' => 'date',
                'category_name' => 'design'
              );
              $posts = get_posts($args);
              foreach ($posts as $post) :
                setup_postdata($post);

                $custom_posts = get_posts($args);

              ?>
                <!-- ===== デザイン ブログカード ここから ===== -->
                <div class="blog-card">
                  <!-- ブログサムネイル -->
                  <a href="<?php the_permalink(); ?>" class="blog-card__thumb">
                    <?php
                    if (has_post_thumbnail()) :
                      the_post_thumbnail();
                    else :
                    ?>
                      <img class="blog-card__image" src="https://ykr2024-portfolio.com/wp-content/uploads/2023/03/img_sample-img.jpg" alt="">
                    <?php endif; ?>
                  </a>

                  <!-- ブログタイトル / カテゴリー / 投稿日 -->
                  <div class="blog-card__label">
                    <div class="blog-card__inner">
                      <h4 class="blog-card__title">
                        <a class="blog-card__title-link" href="<?php the_permalink(); ?>">
                          <?php the_title(); ?>
                        </a>
                      </h4>

                      <div class="blog-card__category-link">
                        <?php
                        $categories = get_the_category();
                        foreach ($categories as $category) {
                          $cat_name = $category->name;
                          $cat_link = esc_url(get_category_link($category->term_id));
                          if ($category->parent) {
                            echo sprintf("<a href='%s'>%s</a> ", $cat_link, $cat_name);
                          }
                        }
                        ?>
                      </div>

                      <div class="blog-card__date-box">
                        <time class="blog-card__date">
                          <?php the_time('Y.m.d'); ?>
                        </time>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- ===== デザイン ブログカード ここまで ===== -->
              <?php endforeach;
              wp_reset_postdata(); ?>
              <!-- ===== ページ遷移ボタン ===== -->
              <div class="primary-button">
                <a class="primary-button__link" href="<?php echo esc_url(get_tag_link('42')); ?>">デザイン一覧<span class="primary-button__arrow"></span></a>
              </div>
            </div>
          </div>
          <!-- ⬆︎ ############ デザイン End ############ ⬆︎ -->

          <!-- ============================================================================== -->

          <!-- ⬇︎ ############ 制作ツール Start ############ ⬇︎ -->
          <div id="ranking-articles" class="tab__area">
            <div class="blog-wrapper">
              <?php
              $args = array(
                'post_type' => 'post',
                'posts_per_page' => 4,
                'orderby' => 'date',
                'category_name' => 'tool'
              );

              $the_query = new WP_Query($args);
              if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
              ?>

                  <!-- ===== 制作ツール ブログカード ここから ===== -->
                  <div class="blog-card">
                    <!-- ブログサムネイル -->
                    <a href="<?php the_permalink(); ?>" class="blog-card__thumb">
                      <?php
                      if (has_post_thumbnail()) :
                        the_post_thumbnail();
                      else :
                      ?>
                        <img class="blog-card__image" src="https://ykr2024-portfolio.com/wp-content/uploads/2023/03/img_sample-img.jpg" alt="">
                      <?php endif; ?>
                    </a>

                    <!-- ブログタイトル / カテゴリー / 投稿日 -->
                    <div class="blog-card__label">
                      <div class="blog-card__inner">
                        <h4 class="blog-card__title">
                          <a class="blog-card__title-link" href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                          </a>
                        </h4>

                        <div class="blog-card__category-link">
                          <?php
                          $categories = get_the_category();
                          foreach ($categories as $category) {
                            $cat_name = $category->name;
                            $cat_link = esc_url(get_category_link($category->term_id));
                            if ($category->parent) {
                              echo sprintf("<a href='%s'>%s</a> ", $cat_link, $cat_name);
                            }
                          }
                          ?>
                        </div>

                        <div class="blog-card__date-box">
                          <time class="blog-card__date">
                            <?php the_time('Y.m.d'); ?>
                          </time>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- ===== 制作ツール ブログカード ここまで ===== -->

              <?php endwhile;
              endif;
              wp_reset_postdata(); ?>
              <!-- ===== ページ遷移ボタン ===== -->
              <div class="primary-button">
                <a class="primary-button__link" href="<?php echo esc_url(get_tag_link('43')); ?>">制作ツール 一覧<span class="primary-button__arrow"></span></a>
              </div>
            </div>
          </div>
          <!-- ⬆︎ ############ 制作ツール End ############ ⬆︎ -->
        </section>
      </article>
      <!-- ⬆︎ /////////////////// 最新の記事カルーセル End /////////////////// ⬆︎ -->

      <!-- ================================================================================ -->

      <!-- ⬇︎ /////////////////// 記事一覧 Start /////////////////// ⬇︎ -->
      <article class="contents__article contents__article--white-bg">
        <section class="contents__article-inner">
          <!-- ===== コンテンツ見出し Heading ===== -->
          <h2 class="contents-heading">
            <span class="contents-heading__main">
              Article
            </span>
            <span class="contents-heading__sub">
              記事一覧
            </span>
          </h2>
          <!-- ===== コンテンツ見出し Heading ===== -->

          <div class="blog-list">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="blog-card">
                  <!-- ブログサムネイル -->
                  <a href="<?php the_permalink(); ?>" class="blog-card__thumb">
                    <?php
                    if (has_post_thumbnail()) :
                      the_post_thumbnail();
                    else :
                    ?>
                      <img class="blog-card__image" src="http://ykr2024-portfolio.com/wp-content/uploads/2023/03/img_sample-img.jpg" alt="">
                    <?php endif; ?>
                  </a>
                  <div class="blog-card__label">
                    <div class="blog-card__inner">
                      <h4 class="blog-card__title">
                        <a class="blog-card__title-link" href="<?php the_permalink(); ?>">
                          <?php the_title(); ?>
                        </a>
                      </h4>

                      <div class="blog-card__category-link">
                        <?php
                        $categories = get_the_category();  // カテゴリ情報を配列で取得
                        foreach ($categories as $category) :
                          $parent = $category->parent; // 親カテゴリーIDを取得
                          if ($parent) {
                            echo '<a class="c-meta__cat c-meta__cat--sub" href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>';
                          }
                        endforeach;
                        ?>
                      </div>

                      <div class="blog-card__date-box">
                        <time class="blog-card__date">
                          <?php the_time('Y.m.d'); ?>
                        </time>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            <?php else : ?>

              <div class="post-wrap">
                <p>記事が見つかりません</p>
              </div>
            <?php endif; ?>
          </div>
          <!-- ===== ページ遷移ボタン ===== -->
          <div class="primary-button">
            <a class="primary-button__link" href="<?php echo home_url(); ?>/web-design">記事一覧はこちら<span class="primary-button__arrow"></span></a>
          </div>
    </div>
    </section>
    </article>
    <!-- ⬆︎ /////////////////// 記事一覧 End /////////////////// ⬆︎ -->

    <!-- ================================================================================ -->

    <!-- ⬇︎ ############ アフィリエイト広告エリア Start ############ ⬇︎ -->
    <!-- <div class="blog-affiliate">
        <a href="アフィリエイトリンク:URL" class="blog-affiliate__thumb">
          <img class="blog-affiliate__image" src="http://ykr2024-portfolio.com/wp-content/uploads/2023/03/img_blog-affiliate.png" alt="アフィリエイト広告">
        </a>
        <a href="アフィリエイトリンク:URL" class="blog-affiliate__thumb">
          <img class="blog-affiliate__image" src="http://ykr2024-portfolio.com/wp-content/uploads/2023/03/img_blog-affiliate.png" alt="アフィリエイト広告">
        </a>
        <a href="アフィリエイトリンク:URL" class="blog-affiliate__thumb">
          <img class="blog-affiliate__image" src="http://ykr2024-portfolio.com/wp-content/uploads/2023/03/img_blog-affiliate.png" alt="アフィリエイト広告">
        </a>
      </div> -->
    <!-- ⬆︎ ############ アフィリエイト広告エリア End ############ ⬆︎ -->

    <!-- ================================================================================ -->

    <!-- ⬇︎ ############ ブログボトムナビゲーション Start ############ ⬇︎ -->
    <?php get_template_part('article-parts/blog_bottom-nav'); ?>
    <!-- ⬆︎ ############ ブログボトムナビゲーション End ############ ⬆︎ -->
  </div>

</div>

<!-- =================================================== ページ内コンテンツ End =================================================== -->

<!-- ⬇︎ /////////////////// Footer フッター_PC Start /////////////////// ⬇︎ -->
<?php get_footer(); ?>
<!-- ⬆︎ /////////////////// Footer フッター_PC End /////////////////// ⬆︎ -->