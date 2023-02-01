<?php
/* ===================================================
  functions.php
  WordPress関数の定義 ※functions.phpのとき「<?php」の前にコメントやスペースは入れない！！
  ================================================== */

/* --------------------------------------------------
   CSS / JavaScript / Googleフォント読み込み指定
  ------------------------------------------------- */
  function add_files() {

    // Googleフォントの読み込み
    wp_enqueue_style('font-style', 'https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;500;600&family=Teko:wght@500&display=swap');

    // CSSの読み込み
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/stylesheet/css/style.css', '1.0');

    // WordPress提供のjqueryを読み込まない
    wp_deregister_script('jquery');

    // jQueryの読み込み
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.1.min.js', "", "3.6.1", true );

    //  JavaScriptの読み込み
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/javascript/main.js', array('jquery'), '1.0.1', true);
  }  
  add_action('wp_enqueue_scripts', 'add_files');

/* --------------------------------------------------
  トップページ メインクエリカスタマイズ
  ------------------------------------------------- */
  function custom_main_query($query) {
    if(is_admin() || ! $query->is_main_query()):
      return;
    endif;
    if($query->is_home()):
      $query->set('posts_per_page', 4);
    endif;
  }
  add_action('pre_get_posts', 'custom_main_query');

/* --------------------------------------------------
  アイキャッチ画像の表示
  ------------------------------------------------- */
  add_theme_support('post-thumbnails');

  /* --------------------------------------------------
  ウィジェット機能実装
  ------------------------------------------------- */
  add_theme_support('widgets');
