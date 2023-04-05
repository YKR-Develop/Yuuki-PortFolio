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
    <div class="contents__inner">
      <?php while (have_posts()) : the_post(); ?>
        <!-- ⬇︎ /////////////////// お知らせ記事コンテンツ Start /////////////////// ⬇︎ -->
        <article class="contents__article" id="production-overview">
          <!-- ===== コンテンツ見出し Heading ===== -->
          <h2 class="contents-heading">
            <span class="contents-heading__main">
              News
            </span>
            <span class="contents-heading__sub">
              <?php the_title(); ?>
            </span>

            <div class="contents-heading__side-time is-tab">
              <time class="contents-heading__time" datetime="the_time( 'Y-m-d' )"><?php the_time('Y.m.d'); ?></time>
            </div>

            <!-- ********  ※ スマホ〜タブレット限定 投稿時間 ******** -->
            <div class="page-time-sp is-sp">
              <time class="contents-heading__time" datetime="the_time( 'Y-m-d' )"><?php the_time('Y.m.d'); ?></time>
            </div>
          </h2>

          <section class="news-desc">
            <?php the_content(); ?>
            <!-- ===== 制作ジャンルリスト ===== -->
          </section>

        </article>
        <!-- ⬆︎ /////////////////// お知らせ記事コンテンツ End /////////////////// ⬆︎ -->
      <?php endwhile; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>