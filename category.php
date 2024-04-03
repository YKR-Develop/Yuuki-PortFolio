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
        <div class="pkz__inner" typeof="BreadcrumbList" vocab="https://schema.org/">
          <?php if (function_exists('bcn_display')) {
            bcn_display();
          } ?>
        </div>
      </div>
      <!-- ⬆︎ /////////////////// パンくずリスト End /////////////////// ⬆︎ -->

      <!-- ================================================================================ -->

      <!-- ⬇︎ ############ Web制作・開発の記事一覧 Start ############ ⬇︎ -->
      <article class="contents__article contents__article--bg">

        <?php if (is_category(array('41', '42', '43', '10', '9', '8'))) : ?>

          <!-- ===== コンテンツ見出し Heading ※子カテゴリーページのみ表示 ===== -->
          <h1 class="contents-heading">
            <span class="contents-heading__main">
              Blog
            </span>
            <span class="contents-heading__sub">
              <?php single_cat_title(); ?>
            </span>
          </h1>
        <?php else : ?>

        <?php endif; ?>
        <!-- ===== コンテンツ見出し Heading ※子カテゴリーページのみ表示 ===== -->


        <!-- ⬇︎ /////////////////// カテゴリー ナビゲーション Start /////////////////// ⬇︎ -->
        <!-- <?php if (is_category(array('7', '41', '42', '43'))) : ?>
          <div class="category-nav">
            
            <?php
                wp_nav_menu(array(
                  'menu' => 'web-design_menu',
                  'theme_location' => 'category-nav',
                  'menu_class' => 'category-nav__list',
                  'container' => false,
                  'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                ));
            ?>
          </div>
        <?php else : ?>
          <div class="category-nav">
            
            <?php
                wp_nav_menu(array(
                  'menu' => 'handmade_menu',
                  'theme_location' => 'category-nav',
                  'menu_class' => 'category-nav__list',
                  'container' => false,
                  'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                ));
            ?>
          </div>
        <?php endif; ?> -->
        <!-- ⬆︎ /////////////////// カテゴリー ナビゲーション End /////////////////// ⬆︎ -->


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

        <?php
        set_query_var('paging_query', $wp_query);
        get_template_part('templates/pagination');
        ?>
        <!-- ⬇︎ ############ Web制作・開発の記事一覧 Start ############ ⬇︎ -->
      </article>

      <!-- ⬇︎ ############ ブログボトムナビゲーション Start ############ ⬇︎ -->
      <?php get_template_part('article-parts/blog_bottom-nav'); ?>
      <!-- ⬆︎ ############ ブログボトムナビゲーション End ############ ⬆︎ -->
    </div>

  </div>

  <!-- =================================================== ページ内コンテンツ End =================================================== -->

  <!-- ⬇︎ /////////////////// Footer フッター_PC Start /////////////////// ⬇︎ -->
  <?php get_footer(); ?>
  <!-- ⬆︎ /////////////////// Footer フッター_PC End /////////////////// ⬆︎ -->