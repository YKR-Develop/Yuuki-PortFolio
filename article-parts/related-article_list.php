<!-- ===================================================
  related-article_list.php
  ブログ記事 関連記事一覧の実装
================================================== -->
<!-- ##### works 作品詳細関連記事表示 Start ##### -->
<?php if (is_singular('works')) : ?>
  <?php
  $args = array(
    'post_type' => 'post', // 投稿タイプ
    'category_name' => 'web-design', // カテゴリ名（スラッグ）
    'posts_per_page' => 5, // 表示件数
    'orderby' => 'rand',
  );
  $new_query = new WP_Query($args);
  ?>
  <?php if ($new_query->have_posts()) : ?>
    <aside class="related-article">
      <h3 class="related-article__heading">関連記事</h3>
      <ul class="related-article__list">
        <?php while ($new_query->have_posts()) : $new_query->the_post(); ?>
          <li class="related-article__item">
            <a class="related-article__link" href="<?php the_permalink(); ?>">
              <!-- アイキャッチ表示 -->
              <div class="related-article__thumb">
                <?php the_post_thumbnail('medium'); ?>
              </div>
              <!-- タイトル表示 -->
              <p class="related-article__title">
                <?php the_title(); ?>
              </p>
            </a>
          </li>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </ul>
    <?php else : ?>
      <p>記事がありません。</p>
    <?php endif; ?>
    </aside>

    <!-- ##### works 作品詳細関連記事表示 End ##### -->

    <!-- ##### ブログ関連記事表示 Start ##### -->
  <?php else : ?>
    <?php if (has_category()) {
      $catlist = get_the_category();
      $category = array();
      foreach ($catlist as $cat) {
        $category[] = $cat->term_id;
      }
    }
    ?>

    <?php $args = array(
      'post_type' => 'post',
      'posts_per_page' => '6',
      'post__not_in' => array($post->ID),
      'category__in' => $category,
      'orderby' => 'rand',
    );

    $related_query = new WP_Query($args); ?>

    <aside class="related-article">
      <h3 class="related-article__heading">関連記事</h3>
      <ul class="related-article__list">
        <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
          <li class="related-article__item">
            <a class="related-article__link" href="<?php the_permalink(); ?>">
              <!-- アイキャッチ表示 -->
              <div class="related-article__thumb">
                <?php the_post_thumbnail('medium'); ?>
              </div>
              <!-- タイトル表示 -->
              <p class="related-article__title">
                <?php the_title(); ?>
              </p>

              <div class="related-article__date-box">
                <time class="related-article__date">
                  <?php the_time('Y.m.d'); ?>
                </time>
              </div>
            </a>
          </li>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </ul>
    </aside>
    <!-- ##### ブログ関連記事表示 End ##### -->

  <?php endif; ?>