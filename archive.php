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
        <div class="pkz__inner pkz__inner--blog">
        <?php breadcrumbs(); ?>
        </div>
      </div>
      <!-- ⬆︎ /////////////////// パンくずリスト End /////////////////// ⬆︎ -->

      <!-- ================================================================================ -->

      <!-- ⬇︎ /////////////////// 最新の記事カルーセル Start /////////////////// ⬇︎ -->
      <article class="contents__article contents__article--bg">
        <!-- ===== コンテンツ見出し Heading ===== -->
        <h2 class="contents-heading">
          <span class="contents-heading__main">
            Latest Articles
          </span>
          <span class="contents-heading__sub">
            最新の記事
          </span>
        </h2>
        <!-- ===== コンテンツ見出し Heading ===== -->

        <!-- ⬇︎ ############ 最新の記事一覧 Start ############ ⬇︎ -->
        <section class="contents__wrapper contents__wrapper--mb-none">

          <div class="article-slide swiper-container">
            <div class="article-slide__wrapper swiper-wrapper">

              <?php
              $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'orderby' => 'date'
              );
              $posts = get_posts($args);
              foreach ($posts as $post) :
                setup_postdata($post);
              ?>
                <!-- ##### スライド記事 ##### -->
                <div class="article-slide__item swiper-slide">

                  <!-- 記事サムネイル -->
                  <a href="<?php the_permalink(); ?>" class="article-slide__thumb">
                    <?php
                    if (has_post_thumbnail()) :
                      the_post_thumbnail();
                    else :
                    ?>
                      <img class="article-slide__image" src="<?php echo get_template_directory_uri(); ?>/img/dammy_png" alt="">
                    <?php endif; ?>
                  </a>

                  <!-- カテゴリー -->
                  <div class="article-slide__category">
                    <?php
                    $categories = get_the_category();
                    foreach ($categories as $category) {
                      // 親カテゴリーIDを取得
                      $parent = $category->parent;
                      // 親カテゴリーIDがない場合
                      if (!$parent) {
                        echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
                        break;
                      }
                    }
                    ?>
                  </div>

                  <!-- 記事タイトル / 投稿日時 -->
                  <a href="<?php the_permalink(); ?>" class="article-slide__label">
                    <h3 class=article-slide__title-link>
                      <?php the_title(); ?>
                    </h3>
                    <time class="article-slide__date">
                      <?php the_time('Y.m.d'); ?>
                    </time>
                  </a>

                </div>

              <?php endforeach;
              wp_reset_postdata(); ?>
            </div>

            <!-- ##### スライドショー ページネーション / スライドボタン -->
            <div class="swiper-pagination is-sp"></div>
            <div class="swiper-button-prev is-sp"></div>
            <div class="swiper-button-next is-sp"></div>

          </div>
        </section>
        <!-- ⬆︎ ############ 最新の記事一覧 Start ############ ⬆︎ -->

        <!-- タブナビゲーション ここから ***************** -->
        <nav class="tab">
          <ul class="tab__list">
            <li class="tab__item tab__item--three-tab">
              <a class="tab__link" href="#recommended-articles">
                <img class="tab__icon" src="http://yukuro-createfolio.local/wp-content/uploads/2023/03/ico_pickup.svg" alt="おすすめの記事">
                おすすめの記事
              </a>
            </li>
            <li class="tab__item tab__item--three-tab">
              <a class="tab__link" href="#feature-articles">
                <img class="tab__icon" src="http://yukuro-createfolio.local/wp-content/uploads/2023/03/ico_special-feature.svg" alt="特集記事">
                特集の記事
              </a>
            </li>
            <li class="tab__item tab__item--three-tab">
              <a class="tab__link" href="#ranking-articles">
                <img class="tab__icon" src="http://yukuro-createfolio.local/wp-content/uploads/2023/03/ico_ranking.svg" alt="ランキング">
                人気の記事
              </a>
            </li>
          </ul>
        </nav>

        <!-- ⬇︎ ############ おすすめの記事 Start ############ ⬇︎ -->
        <div id="recommended-articles" class="tab__area">

          <?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 4,
            'orderby' => 'date',
            'tag_id' => '33'
          );
          $posts = get_posts($args);
          foreach ($posts as $post) :
            setup_postdata($post);
            $custom_posts = get_posts($args);
          ?>
            <!-- ===== おすすめの記事 ブログカード ここから ===== -->
            <div class="blog-card">
              <!-- ブログサムネイル -->
              <a href="<?php the_permalink(); ?>" class="blog-card__thumb">
                <?php
                if (has_post_thumbnail()) :
                  the_post_thumbnail();
                else :
                ?>
                  <img class="blog-card__image" src="<?php echo get_template_directory_uri(); ?>/img/dammy_png" alt="">
                <?php endif; ?>
              </a>

              <!-- ブログタイトル / カテゴリー / 投稿日 -->
              <div class="blog-card__label">
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


                <time class="blog-card__date">
                  <?php the_time('Y.m.d'); ?>
                </time>
              </div>
            </div>
            <!-- ===== おすすめの記事 ブログカード ここまで ===== -->
          <?php endforeach;
          wp_reset_postdata(); ?>

        </div>
        <!-- ⬆︎ ############ おすすめの記事 End ############ ⬆︎ -->

        <!-- ============================================================================== -->

        <!-- ⬇︎ ############ 特集記事 Start ############ ⬇︎ -->
        <div id="feature-articles" class="tab__area">
          <?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 4,
            'orderby' => 'date',
            'tag_id' => '32'
          );
          $posts = get_posts($args);
          foreach ($posts as $post) :
            setup_postdata($post);

            $custom_posts = get_posts($args);

          ?>
            <!-- ===== 特集記事 ブログカード ここから ===== -->
            <div class="blog-card">
              <!-- ブログサムネイル -->
              <a href="<?php the_permalink(); ?>" class="blog-card__thumb">
                <?php
                if (has_post_thumbnail()) :
                  the_post_thumbnail();
                else :
                ?>
                  <img class="blog-card__image" src="<?php echo get_template_directory_uri(); ?>/img/dammy_png" alt="">
                <?php endif; ?>
              </a>

              <!-- ブログタイトル / カテゴリー / 投稿日 -->
              <div class="blog-card__label">
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

                <time class="blog-card__date">
                  <?php the_time('Y.m.d'); ?>
                </time>
              </div>
            </div>
            <!-- ===== 特集記事 ブログカード ここまで ===== -->
          <?php endforeach;
          wp_reset_postdata(); ?>
        </div>
        <!-- ⬆︎ ############ 特集記事 End ############ ⬆︎ -->

        <!-- ============================================================================== -->

        <!-- ⬇︎ ############ ランキング記事 Start ############ ⬇︎ -->
        <div id="ranking-articles" class="tab__area">
          <?php
          $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 4,
            'orderby' => 'meta_value_num',
            'meta_key' => '_custom_meta_views',
            'order' => 'DESC'
          );

          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
          ?>

              <!-- ===== 人気の記事 ブログカード ここから ===== -->
              <div class="blog-card">
                <!-- ブログサムネイル -->
                <a href="<?php the_permalink(); ?>" class="blog-card__thumb">
                  <?php
                  if (has_post_thumbnail()) :
                    the_post_thumbnail();
                  else :
                  ?>
                    <img class="blog-card__image" src="<?php echo get_template_directory_uri(); ?>/img/dammy_png" alt="">
                  <?php endif; ?>
                </a>

                <!-- ブログタイトル / カテゴリー / 投稿日 -->
                <div class="blog-card__label">
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

                  <time class="blog-card__date">
                    <?php the_time('Y.m.d'); ?>
                  </time>
                </div>
              </div>
              <!-- ===== 人気の記事 ブログカード ここまで ===== -->

          <?php endwhile;
          endif;
          wp_reset_postdata(); ?>


        </div>
        <!-- ⬆︎ ############ ランキング記事 End ############ ⬆︎ -->
      </article>
      <!-- ⬆︎ /////////////////// 最新の記事カルーセル End /////////////////// ⬆︎ -->

      <!-- ================================================================================ -->

      <!-- ⬇︎ /////////////////// カテゴリー記事一覧 Start /////////////////// ⬇︎ -->
      <article class="contents__article">
        <!-- ===== コンテンツ見出し Heading ===== -->
        <h2 class="contents-heading">
          <span class="contents-heading__main">
            Category
          </span>
          <span class="contents-heading__sub">
            カテゴリー
          </span>
        </h2>
        <!-- ===== コンテンツ見出し Heading ===== -->

        <div class="blog-category">
          <!-- ===== Web制作デザイン カテゴリ Start ===== -->
          <div class="blog-category__item">
            <a href="<?php echo esc_url(get_category_link('7')); ?>" class="blog-category__thumb-link">
              <h4 class="blog-category__title">Web制作・デザイン</h4>
              <img class="blog-category__image" src="http://yukuro-createfolio.local/wp-content/uploads/2023/03/img_blog-category_programing-visual.jpg" alt="Web制作/開発・デザイン">
            </a>

            <ul class="blog-category__category-list">
              <?php
              $categories = get_categories('parent=7');
              foreach ($categories as $category) : ?>
                <li class="blog-category__category-item">
                  <a class="blog-category__category-link secondary-button" href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
                  <?php
                  $childs = get_categories('child_of=' . $category->term_id);
                  if ($childs) :
                  ?>
                    <ul class="blog-category__category-list">
                      <?php foreach ($childs as $child) : ?>
                        <li class="blog-category__category-item">
                          <a class="blog-category__category-link secondary-button" href="<?php echo get_category_link($child->term_id); ?>"><?php echo $child->name; ?></a>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                  <?php endif; ?>
                </li>
              <?php endforeach; ?>
            </ul>

            <div class="blog-category__blog-list">
              <!-- ===== Web制作・開発 ブログカード 01 ここから ===== -->
              <?php
              $args = array(
                'post_type' => 'post',
                'posts_per_page' => 2,
                'orderby' => 'date',
                'category' => '7',
                'orderby' => 'date',
                'order' => 'DESC'
              );
              $posts = get_posts($args);
              foreach ($posts as $post) :
                setup_postdata($post);

                $custom_posts = get_posts($args);
              ?>

                <!-- ===== ハンドメイド ブログカード ここから ===== -->
                <div class="blog-card blog-card--category">
                  <!-- ブログサムネイル -->
                  <a href="<?php the_permalink(); ?>" class="blog-card__thumb">
                    <?php
                    if (has_post_thumbnail()) :
                      the_post_thumbnail();
                    else :
                    ?>
                      <img class="blog-card__image" src="<?php echo get_template_directory_uri(); ?>/img/dammy_png" alt="">
                    <?php endif; ?>
                  </a>

                  <!-- ブログタイトル / カテゴリー / 投稿日 -->
                  <div class="blog-card__label">
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

                    <time class="blog-card__date">
                      <?php the_time('Y.m.d'); ?>
                    </time>
                  </div>
                </div>
                <!-- ===== ハンドメイド ブログカード ここまで ===== -->
              <?php endforeach;
              wp_reset_postdata(); ?>
            </div>

            <!-- ===== ページ遷移ボタン ===== -->
            <div class="primary-button">
              <a class="primary-button__link" href="<?php echo esc_url(get_category_link('7')); ?>">Read More<span class="primary-button__arrow"></span></a>
            </div>
          </div>
          <!-- ===== Web制作・デザイン カテゴリ ENd ===== -->

          <!-- ===== ハンドメイド カテゴリ Start ===== -->
          <div class="blog-category__item">
            <a href="<?php echo esc_url(get_category_link('3')); ?>" class="blog-category__thumb-link">
              <h4 class="blog-category__title">ハンドメイド</h4>
              <img class="blog-category__image" src="http://yukuro-createfolio.local/wp-content/uploads/2023/03/img_blog-category_molding-visual.jpg" alt="ハンドメイド">
            </a>

            <ul class="blog-category__category-list">
              <?php
              $categories = get_categories('parent=3');
              foreach ($categories as $category) : ?>
                <li class="blog-category__category-item">
                  <a class="blog-category__category-link secondary-button" href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
                  <?php
                  $childs = get_categories('child_of=' . $category->term_id);
                  if ($childs) :
                  ?>
                    <ul class="blog-category__category-list">
                      <?php foreach ($childs as $child) : ?>
                        <li class="blog-category__category-item">
                          <a class="blog-category__category-link secondary-button" href="<?php echo get_category_link($child->term_id); ?>"><?php echo $child->name; ?></a>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                  <?php endif; ?>
                </li>
              <?php endforeach; ?>
            </ul>

            <div class="blog-category__blog-list">
              <!-- ===== ハンドメイド ブログカード 01 ここから ===== -->
              <?php
              $args = array(
                'post_type' => 'post',
                'posts_per_page' => 2,
                'orderby' => 'date',
                'category' => '3',
                'orderby' => 'date',
                'order' => 'DESC'
              );
              $posts = get_posts($args);
              foreach ($posts as $post) :
                setup_postdata($post);

                $custom_posts = get_posts($args);
              ?>

                <!-- ===== ハンドメイド ブログカード ここから ===== -->
                <div class="blog-card blog-card--category">
                  <!-- ブログサムネイル -->
                  <a href="<?php the_permalink(); ?>" class="blog-card__thumb">
                    <?php
                    if (has_post_thumbnail()) :
                      the_post_thumbnail();
                    else :
                    ?>
                      <img class="blog-card__image" src="<?php echo get_template_directory_uri(); ?>/img/dammy_png" alt="">
                    <?php endif; ?>
                  </a>

                  <!-- ブログタイトル / カテゴリー / 投稿日 -->
                  <div class="blog-card__label">
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

                    <time class="blog-card__date">
                      <?php the_time('Y.m.d'); ?>
                    </time>
                  </div>
                </div>
                <!-- ===== ハンドメイド ブログカード ここまで ===== -->
              <?php endforeach;
              wp_reset_postdata(); ?>
              <!-- ===== ハンドメイド ブログカード 01 ここまで ===== -->
            </div>

            <!-- ===== ページ遷移ボタン ===== -->
            <div class="primary-button">
              <a class="primary-button__link" href="<?php echo esc_url(get_category_link('3')); ?>">Read More<span class="primary-button__arrow"></span></a>
            </div>
            <!-- ===== ハンドメイド カテゴリ ENd ===== -->
          </div>
        </div>
      </article>
      <!-- ⬆︎ /////////////////// カテゴリー記事一覧 End /////////////////// ⬆︎ -->

      <!-- ================================================================================ -->

      <!-- ⬇︎ ############ アフィリエイト広告エリア Start ############ ⬇︎ -->
      <div class="blog-affiliate">
        <a href="アフィリエイトリンク:URL" class="blog-affiliate__thumb">
          <img class="blog-affiliate__image" src="http://yukuro-createfolio.local/wp-content/uploads/2023/03/img_blog-affiliate.png" alt="アフィリエイト広告">
        </a>
        <a href="アフィリエイトリンク:URL" class="blog-affiliate__thumb">
          <img class="blog-affiliate__image" src="http://yukuro-createfolio.local/wp-content/uploads/2023/03/img_blog-affiliate.png" alt="アフィリエイト広告">
        </a>
        <a href="アフィリエイトリンク:URL" class="blog-affiliate__thumb">
          <img class="blog-affiliate__image" src="http://yukuro-createfolio.local/wp-content/uploads/2023/03/img_blog-affiliate.png" alt="アフィリエイト広告">
        </a>
      </div>
      <!-- ⬆︎ ############ アフィリエイト広告エリア End ############ ⬆︎ -->

      <!-- ================================================================================ -->

      <!-- ⬇︎ ############ ブログボトムナビゲーション Start ############ ⬇︎ -->
      <?php get_template_part('templates/blog_bottom-nav'); ?>
      <!-- ⬆︎ ############ ブログボトムナビゲーション End ############ ⬆︎ -->
    </div>

  </div>

  <!-- =================================================== ページ内コンテンツ End =================================================== -->

  <!-- ⬇︎ /////////////////// Footer フッター_PC Start /////////////////// ⬇︎ -->
  <?php get_footer(); ?>
  <!-- ⬆︎ /////////////////// Footer フッター_PC End /////////////////// ⬆︎ -->