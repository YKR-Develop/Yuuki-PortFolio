<!-- ===================================================
  page.php
  固定ページの定義
================================================== -->
<?php get_header(); ?>


<div class="container">

  <!-- ⬇︎ /////////////////// visual.php 読み込み /////////////////// ⬇︎ -->
  <?php get_template_part('parts/visual'); ?>

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

    <div class="contents__inner">
      <?php if (have_posts()) :
        while (have_posts()) :
          the_post();
          the_content();
        endwhile;
      endif; ?>

    </div>
  </div>
</div>
<?php get_footer(); ?>