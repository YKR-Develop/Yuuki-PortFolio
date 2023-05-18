<!-- ===================================================
  search.php
  サイト内検索実行結果の実装
================================================== -->
<?php get_header(); ?>

<div class="container">

  <!-- ================================================================================ -->

  <!-- ⬇︎ /////////////////// SideNav SNS / Top Start /////////////////// ⬇︎ -->
  <?php get_sidebar(); ?>
  <!-- ⬆︎ /////////////////// SideNav SNS / Top End /////////////////// ⬆︎ -->


  <!-- =================================================== ページ内コンテンツ Start =================================================== -->
  <div class="contents">
    
    <div class="contents__inner">

      <!-- ================================================================================ -->

      <!-- ⬇︎ /////////////////// 検索結果一覧 Start /////////////////// ⬇︎ -->
      <article class="contents__article">
        <section class="contents__wrapper contents__wrapper--mb-none">
          <?php if (have_posts()) : ?>
            <?php if (!$_GET['s']) { ?>
              <p>検索キーワードが未入力です
              <p>

              <?php } else { ?>
                <h1 class="contents-heading">
                  <span class="contents-heading__sub">
                    「<?php echo esc_html($_GET['s']); ?>」の検索結果：<?php echo $wp_query->found_posts; ?>件
                   </span>
                  </h1>

              <div class="blog-list">
                <?php while (have_posts()) : the_post(); ?>
                  <?php
                  $cat = get_the_category();
                  $catname = $cat[0]->cat_name;
                  ?>
                  <div class="blog-card">
                    <!-- ブログサムネイル -->
                    <a href="<?php the_permalink(); ?>" class="blog-card__thumb">
                      <?php
                      if (has_post_thumbnail()) :
                        the_post_thumbnail();
                      else :
                      ?>
                        <img class="blog-card__image" src="http://yukuro-createfolio.local/wp-content/uploads/2023/03/img_sample-img.jpg" alt="">
                      <?php endif; ?>
                    </a>


                    <div class="blog-card__label">
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
                      <time class="blog-card__date">
                        <?php the_time('Y.m.d'); ?>
                      </time>
                    </div>
                  </div>
                <?php endwhile; ?>
              </div>

            <?php } ?>
          <?php else : ?>
            <p>検索されたキーワードに一致する記事はありませんでした</p>

          <?php endif; ?>
        </section>
      </article>
      <!-- ================================================================================ -->

      <!-- ⬇︎ /////////////////// Footer フッター_PC Start /////////////////// ⬇︎ -->
      <?php get_footer(); ?>
      <!-- ⬆︎ /////////////////// Footer フッター_PC End /////////////////// ⬆︎ -->