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
        <div id="breadcrumbs" class="pkz__inner pkz__inner--blog" typeof="BreadcrumbList" vocab="https://schema.org/">
          <?php if (function_exists('bcn_display')) {
            bcn_display();
          } ?>
        </div>
      </div>
      <!-- ⬆︎ /////////////////// パンくずリスト End /////////////////// ⬆︎ -->

    <!-- ⬇︎ /////////////////// お知らせ一覧表示 Start /////////////////// ⬇︎ -->
    <!-- ===== News お知らせ一覧 News-list ===== -->
    <div class="contents__article">

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

      <div class="news-list">
        <!-- ===== News お知らせ一覧 News-list ===== -->
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>

            <article class="news-list__item">
              <time class="news-list__date">
                <span><?php echo date("Y", strtotime($post->post_date)); ?></span><br>
                <span class="news-list__date news-list__date--lg"><?php echo date("m.d", strtotime($post->post_date)); ?></span>
              </time>
              <p class="news-list__tag">
                <?php echo get_the_excerpt(); ?>
              </p>
              <a class="news-list__text-link" href="<?php the_permalink(); ?>"><span class="title"><?php the_title(); ?></span></a>
            </article>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>


          <?php
          set_query_var('paging_query', $wp_query);
          get_template_part('templates/pagination');
          ?>

        <?php else : ?>
          何も投稿がありません。
        <?php endif; ?>

        <!-- ⬆︎ /////////////////// お知らせ一覧表示 End /////////////////// ⬆︎ -->
      </div>
    </div>
  </div>
  <?php get_footer(); ?>