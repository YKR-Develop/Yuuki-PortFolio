<!-- --------------------------------------------------
  sidebar.php
  左右サイドバー ページ共通指定
--------------------------------------------------  -->
<!-- ===== SNSアイコン ===== -->
<div class="side-left is-pc">
  <div class="side-left__sns-list">
    <a class="side-left__sns-item" href="Twitter URL">
      <p class="side-left__text-link">Instagram</p>
      <div class="side-left__icon">
        <img class="side-left__icon-image" src="<?php echo get_template_directory_uri(); ?>/images/ico/ico_instagram-sidenav.svg" alt="インスタグラムリンク">
      </div>
    </a>

    <a class="side-left__sns-item" href="Twitter URL">
      <p class="side-left__text-link">Twitter</p>
      <img class="side-left__icon" src="<?php echo get_template_directory_uri(); ?>/images/ico/ico_twitter-sidenav.svg" alt="インスタグラムリンク">
    </a>
  </div>
</div>

<!-- ===== TOPに戻るボタン ===== -->
<div class="side-right">
  <a class="side-right__link" href="#" id="page-top">TOP</a>
</div>
<?php get_sidebar(); ?>