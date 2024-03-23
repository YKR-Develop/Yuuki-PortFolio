<!-- ===================================================
  searchform.php
  サイト内検索パーツ
================================================== -->
<!-- ===== 検索フォーム_PC Start ====== -->
<form role="search" method="get" id="searchform" class="searchform is-sp" action="<?php echo home_url('/'); ?>">
  <input type="text" name="s" placeholder="search">
  <input type="submit" id="searchsubmit" value="" src="../assets/images/ico/ico_search_pc.svg">
</form>
<!-- ===== 検索フォーム End ====== -->

<!-- ===== 検索フォーム_SP Start ====== -->
<div class="search-open-btn is-sp"></div>
<div class="search-wrap">
  <div class="search-close-btn">
    <span class="search-close-btn__border"></span>
    <span class="search-close-btn__border"></span>
  </div>
  <div class="search-area">
    <form class="search-wrap__form" role="search" method="get" action="<?php echo home_url('/'); ?>">
      <div class="search-wrap__inner">
        <input class="search-wrap__input" type="text" value="" name="s" id="search-text" placeholder="search">
        <input class="search-wrap__submit" type="submit" id="searchsubmit" value="">
      </div>
    </form>
  </div>
</div>
<!-- ===== 検索フォーム_SP End ====== -->
