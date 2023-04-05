<!-- ===================================================
  archive-news.php
  カスタム投稿 ニュース一覧ページ
================================================== -->
<?php get_header(); ?>

<div class="container container--top">

  <!-- ================================================================================ -->

  <!-- ⬇︎ /////////////////// sidebar.php 読み込み /////////////////// ⬇︎ -->
  <?php get_sidebar(); ?>

  <!-- =================================================== ページ内コンテンツ Start =================================================== -->
  <div class="contents">

    <!-- ⬇︎ /////////////////// パンくずリスト Start /////////////////// ⬇︎ -->
    <div class="pkz">
      <div class="pkz__inner pkz__inner--blog">
        <?php breadcrumbs(); ?>
      </div>
    </div>

    <!-- ⬆︎ /////////////////// パンくずリスト End /////////////////// ⬆︎ -->


    <!-- ⬇︎ /////////////////// お知らせ一覧表示 Start /////////////////// ⬇︎ -->
    <!-- ===== News お知らせ一覧 News-list ===== -->
    <div class="contents__article contents__article--bg">

      <!-- ===== コンテンツ見出し Heading ===== -->
      <h1 class="contents-heading">
        <span class="contents-heading__main">
          News
        </span>
        <span class="contents-heading__sub">
          お知らせ一覧
        </span>
      </h1>
      <!-- ===== コンテンツ見出し Heading ===== -->

      <ul class="news-list">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post();
            $thumbnail = (has_post_thumbnail()) ? get_the_post_thumbnail_url(get_the_ID(), 'medium') : 'https://placehold.jp/150x150.png';
          ?>

            <?php
            $news_args = array(
              'post_type' => array('news'),
              'post-status' => 'publish',
              'posts_per_page' => 8,
              'paged' => $paged
            );
            $news_query = new WP_Query($news_args);
            ?>


            <!-- ループ処理 -->
            <li class="news-list__item">
              <time class="news-list__date">
                <span><?php echo date("Y", strtotime($post->post_date)); ?></span><br>
                <span class="news-list__date news-list__date--lg"><?php echo date("m.d", strtotime($post->post_date)); ?></span>
              </time>
              <p class="news-list__tag">
                <?php $posttags = get_the_tags();
                if ($posttags) {
                  foreach ($posttags as $tag) {
                    echo $tag->name . ' ';
                  }
                }
                ?>
              </p>
              <a class="news-list__text-link" href="<?php the_permalink(); ?>">
                <span class="title"><?php the_title(); ?></span>
              </a>
            <li>
            <?php endwhile; ?>
          <?php else : ?>
            投稿がありません
          <?php endif; ?>
      </ul>
    </div>

    <?php
    set_query_var('paging_query', $wp_query);
    get_template_part('templates/pagination');
    ?>
    <!-- ⬆︎ /////////////////// お知らせ一覧表示 End /////////////////// ⬆︎ -->
  </div>
</div>
<?php get_footer(); ?>