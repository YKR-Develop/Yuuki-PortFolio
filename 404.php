<!-- ===================================================
  404.php
  404ページ
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
      
    <div class="contents__inner">

      <!-- ⬇︎ /////////////////// 404ページ 内容 Start /////////////////// ⬇︎ -->
      <article class="contents__article" id="production-overview">
        <!-- ===== コンテンツ見出し Heading ===== -->
        <h1 class="contents-heading">
          <span class="contents-heading__main">
            404 Page Not Found
          </span>
          <span class="contents-heading__sub">
            お探しのページが見つかりませんでした。
          </span>
        </h1>

        <section class="contents__desc">
          <p class="contents__text">当サイトをご覧いただきありがとうございます。</p>
          <p class="contents__text">申し訳ありませんが、あなたがアクセスしようとした記事は削除されたかURLが変更されています。</p>
          <p class="contents__text">お手数おかけ致しますが、下記の【 Home トップへ戻る 】ボタンまたは検索フォームより目的のページをお探し下さい。</p>
        </section>

        <!-- ===== ページ遷移ボタン ===== -->
        <div class="primary-button">
          <a class="primary-button__link" href="<?php echo esc_url(home_url('/')); ?>">Home トップへ戻る<span class="primary-button__arrow"></span></a>
        </div>

        <section class="contents__desc contents__desc--search-form">
          <!-- ===== 各要素タイトル Title / link ===== -->
          <div class="contents-title">
            <h3 class="contents-title__title">検索して探す</h3>
          </div>
          <!-- ===== 各要素タイトル Title / link ===== -->

          <!-- ##### 検索フォーム 出力 #####-->
          <?php get_search_form(); ?>

        </section>

      </article>
      <!-- ⬆︎ /////////////////// 404ページ 内容 End /////////////////// ⬆︎ -->



    </div>
  </div>
</div>

<?php get_footer(); ?>