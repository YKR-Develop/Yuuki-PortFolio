<?php
/* ===================================================
  functions.php
  WordPress関数の定義 ※functions.phpのとき「<?php」の前にコメントやスペースは入れない！！
  ================================================== */

/* --------------------------------------------------
   CSS / JavaScript / Googleフォント読み込み指定
  ------------------------------------------------- */
function add_files()
{

  // Googleフォントの読み込み
  wp_enqueue_style('font-style', 'https://fonts.googleapis.com/css2?family=Klee+One&display=swap" rel="stylesheet"');

  // CSSの読み込み
  wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/stylesheet/css/style.css', '1.0');

  // WordPress提供のjqueryを読み込まない
  wp_deregister_script('jquery');

  // jQueryの読み込み
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.1.min.js', "", "3.6.1", true);

  //  JavaScriptの読み込み
  wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/javascript/main.js', array('jquery'), '1.0.1', true);
}
add_action('wp_enqueue_scripts', 'add_files');

/* --------------------------------------------------
  トップページ メインクエリカスタマイズ
  ------------------------------------------------- */
function custom_main_query($query)
{
  if (is_admin() || !$query->is_main_query()) :
    return;
  endif;
  if ($query->is_home()) :
    $query->set('posts_per_page', 4);
  endif;
}
add_action('pre_get_posts', 'custom_main_query');

/* --------------------------------------------------
  アイキャッチ画像の表示 / サイズ定義
  ------------------------------------------------- */
add_theme_support('post-thumbnails');
set_post_thumbnail_size(768, 400);



/* --------------------------------------------------
  メインビジュアルの実装
  ------------------------------------------------- */
$custom_header = array(
  'default-image' => get_template_directory_uri() . '../../assets/images/img/img_hero-visual.jpg',
  'width' => 1367,
  'height' => 1080,
  'flex-height' => true,
  'flex-width' => false,
  'uploads' => true,
  'header-text' => true,
  'video' => true,
  'header-text' => true,
);
add_theme_support('custom-header', $custom_header);
// CSSの指定

/* --------------------------------------------------
  カスタムフィールドの実装
  ------------------------------------------------- */
function my_custom_init()
{
  add_post_type_support('page', 'excerpt');
}
add_action('init', 'my_custom_init');

/* --------------------------------------------------
  「クラシックエディタ」ショートコードボタンの実装
  ------------------------------------------------- */
function example_shortcode($atts, $content = null)
{
  return '<div class="example">' . $content . '</div>';
}
add_shortcode('example', 'example_shortcode');


/* --------------------------------------------------
  画像挿入時の不要アトリビュート削除
  ------------------------------------------------- */
add_filter('image_send_to_editor', 'remove_img_att');
add_filter('post_thumbnail_html', 'remove_img_att');
function remove_img_att($html)
{
  $html = preg_replace('/(width|height)="\d*"\s/', '', $html);
  $html = preg_replace('/class=[\'"]([^\'"]+)[\'"]/i', '', $html);
  return $html;
}

/* --------------------------------------------------
  ロゴ画像のアップロード実装
  ------------------------------------------------- */
// カスタムロゴ
function custom_theme_setup()
{
  $defaults = array(
    'height'      => 60,
    'width'       => 320,
    'flex-height' => true,
    'flex-width'  => true,
  );
  add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'custom_theme_setup');

/* --------------------------------------------------
  投稿のアーカイブページを作成
  ------------------------------------------------- */
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args["label"] = 'Blog'; /*「投稿」のラベル名 */
    $args['has_archive'] = 'blog'; //任意のスラッグ名
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);


/* --------------------------------------------------
  プロフィール情報の追加
  ------------------------------------------------- */
function my_user_meta($o_note)
{
  $o_note['twitter'] = 'twitter';
  $o_note['job'] = '職種';
  $o_note['profile-link'] = 'プロフィール詳細リンク';
  return $o_note;
}
add_filter('user_contactmethods', 'my_user_meta', 10, 1);

// プロフィール内でのタグ使用実装
remove_filter('pre_user_description', 'wp_filter_kses');

/* --------------------------------------------------
  見出しにID属性を自動挿入実装
  ------------------------------------------------- */
/**
 * Summary
 * 見出しに id を自動挿入
 * @param string $the_content 記事の本文.
 */
function add_auto_id($the_content)
{
  // idを付加する見出しレベルを設定
  $start = 1;
  $end = 6;

  // 見出しのパターンを作成
  $pattern = '/^<h([' . $start . '-' . $end . ']).*?>.+?<\/h[' . $start . '-' . $end . ']>$/im';
  /*
		$headingsにページ内の見出し要素を格納
		$headings[0]：マッチした文字列
		$headings[1]：見出しレベル（h3なら"3"）
	*/
  if (!preg_match_all($pattern, $the_content, $headings)) {
    /* 見出しがない場合は終了 */
    return $the_content;
  }

  /* idが設定されているかどうかを判断するためのパターン */
  $id_pattern = '/^<h([' . $start . '-' . $end . ']).+?id\s*=\s*\"(.+?)\".*>(.+?)<\/h[' . $start . '-' . $end . ']>$/im';

  /* 見出しごとにidが設定されていない見出しにidを付加 */
  $num_count = count($headings[0]);
  for ($i = 0; $i < $num_count; $i++) {

    /* 見出しにidが設定されているかどうかの判断. 見出しにidが設定されている場合のみマッチ */
    if (!preg_match($id_pattern, $headings[0][$i], $dummy)) {

      /* idが設定されていない見出しの場合に行う処理. idを付加した文字列（<hX id=autoid-Y）を作成 */
      $id_str = '<h' . $headings[1][$i] . ' id="autoid-' . $i . '"';

      /* id_str（<hX id=autoid-Y）で元々の見出しの"<hX"部分に置換 */
      $replaced_heading =
        str_replace('<h' . $headings[1][$i], $id_str, $headings[0][$i]);

      /* id付加後の見出しで元々のコンテンツ内の見出しを置換 */
      $the_content =
        str_replace($headings[0][$i], $replaced_heading, $the_content);
    }
  }

  return $the_content;
}

/* the_contentフックに関数をフック */
add_filter('the_content', 'add_auto_id', 9);
/* 見出しにid属性を自動挿入 End */




/* ================================================

  ナビゲーションメニュー実装

  ================================================ */
function register_my_menus()
{
  register_nav_menus(
    array(
      'visual-nav' => ('メインビジュアルナビ'),
      'global-nav' => ('グローバルナビ'),
      'footer-nav' => ('フッターナビ'),
      'accordion-menu' => ('アコーディオンメニュー'),
      'social-nav' => ('ソーシャルナビ'),
      'blog-nav' => ('ブログナビ'),
      'sub-nav' => ('サブナビ'),
      'bottom-nav' => ('ボトムナビ'),
      'category-menu' => ('カテゴリーメニュー'),
      'category-nav' => ('カテゴリーナビ'),
      'sp-scroll-menu-about' => ('about用スクロールメニュー'),
      'sp-scroll-menu-works' => ('works用スクロールメニュー'),
      'sp-scroll-menu-blog' => ('blog用スクロールメニュー'),
    )
  );
}
add_action('init', 'register_my_menus');

/* --------------------------------------------------
  メニューのid /classを削除
  ------------------------------------------------- */
add_filter('nav_menu_css_class', 'my_custom_nav', 10, 2);
function my_custom_nav($classes, $item)
{

  //     $classes を空にする前にカスタムクラスを変数へ入れておく        
  if (!empty($classes[0])) {
    $custom_class = esc_attr($classes[0]);
  }

  $classes = array();
  if ($item->current == true) {
    $classes[] = 'current';
  }
  // 先に変数に入れておいたカスタムクラス名を配列へ入れる
  if (!empty($custom_class)) {
    $classes[] = $custom_class;
  }
  return $classes;
}
/* ナビゲーションメニュー実装ここまで ================================================= */


/* --------------------------------------------------
  パンくずリスト Breacrumb navXT のトップページの表記を書き換える
  ------------------------------------------------- */
add_filter( 'bcn_breadcrumb_title', 'nskw_bcn_breadcrumb_title_filter', 10, 2 );
function nskw_bcn_breadcrumb_title_filter( $title, $type=null ) {
 
    if ( 'home' === $type[0] ) {
        $title = 'HOME';
    }
 
    return $title;
}

/* --------------------------------------------------
  パーマリンクの設定
  ------------------------------------------------- */
function my_rewrite_flush()
{
  flush_rewrite_rules();
}
add_action('after_switch_theme', 'my_rewrite_flush');

/* --------------------------------------------------
  Gutenberg用CSS削除
  ------------------------------------------------- */
function remove_gutenberg_style()
{
  wp_dequeue_style('wp-block-library'); //style.min.cssの削除
  wp_dequeue_style('wp-block-library-theme'); //theme.min.cssの削除
}
add_action('wp_enqueue_scripts', 'remove_gutenberg_style');


/* ================================================

  カスタムブロック実装

  ================================================ */
/* --------------------------------------------------
  h2見出しのパターン定義
  ------------------------------------------------- */
add_action('admin_init', function () {
  //1 パラメータの設定
  $pattern = [
    "title" => "contents-heading",
    "categories" => ["heading", "h2-heading"],
    "description" => "h2見出しのテンプレートです",
    "content" => '<!-- wp:html -->
      <h2 class="contents-heading">
                  <span class="contents-heading__main">
                    Production Overview
                  </span>
                  <span class="contents-heading__sub">
                    制作概要
                  </span>
                </h2>
      <!-- /wp:html -->',
  ];

  //2 ブロックパターンの登録
  register_block_pattern($pattern["title"], $pattern);

  //3 カテゴリーの登録
  register_block_pattern_category('heading', ['label' => '各種見出し']);
});

/* --------------------------------------------------
  h3見出しのパターン定義
  ------------------------------------------------- */
add_action('admin_init', function () {
  //1 パラメータの設定
  $pattern = [
    "title" => "contents-title",
    "categories" => ["heading", "h3-title"],
    "description" => "h3見出しのテンプレートです",
    "content" => '<!-- wp:heading {"textAlign":"center","level":3,"className":"contents-title__title"} -->
      <h3 class="has-text-align-center contents-title__title">ご挨拶</h3>
      <!-- /wp:heading -->',
  ];

  //2 ブロックパターンの登録
  register_block_pattern($pattern["title"], $pattern);

  //3 カテゴリーの登録
  register_block_pattern_category('heading', ['label' => '各種見出し']);
});

/* ================================================

  カスタム投稿 

  ================================================ */
/* --------------------------------------------------
  ポートフォリオ投稿の追加
  ------------------------------------------------- */
/* --------------------------------------------------
  ポートフォリオ投稿の追加
  ------------------------------------------------- */
add_action('init', 'create_post_type');
function create_post_type()
{
  register_post_type(
    'works',
    array(
      'label' => 'Works 制作実績',
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_position' => 6,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions',
        'excerpt',
      ),
    )
  );

  register_taxonomy(
    'works-cat',
    'works',
    array(
      'label' => '制作カテゴリー',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );

  register_taxonomy(
    'works-tag',
    'works',
    array(
      'label' => 'タグ',
      'hierarchical' => false,
      'public' => true,
      'show_in_rest' => true,
      'update_count_callback' => '_update_post_term_count',
    )
  );

  register_taxonomy(
    'works-responsible-person',
    'works',
    array(
      'label' => '制作範囲',
      'hierarchical' => false,
      'public' => true,
      'show_in_rest' => true,
      'update_count_callback' => '_update_post_term_count',
    )
  );

  register_taxonomy(
    'works-language',
    'works',
    array(
      'label' => '使用言語',
      'hierarchical' => false,
      'public' => true,
      'show_in_rest' => true,
      'update_count_callback' => '_update_post_term_count',
    )
  );

  register_taxonomy(
    'works-tool',
    'works',
    array(
      'label' => '制作ツール',
      'hierarchical' => false,
      'public' => true,
      'show_in_rest' => true,
      'update_count_callback' => '_update_post_term_count',
    )
  );

  register_taxonomy(
    'works-production-period',
    'works',
    array(
      'label' => '制作期間',
      'hierarchical' => false,
      'public' => true,
      'show_in_rest' => true,
      'update_count_callback' => '_update_post_term_count',
    )
  );

  /* --------------------------------------------------
  お知らせ欄
  ------------------------------------------------- */
  // register_post_type(
  //   'news',
  //   array(
  //     'label' => 'お知らせ',
  //     'labels' => array(
  //       'menu_name' => 'お知らせ'
  //     ),
  //     'public' => true,
  //     'query_var' => true,
  //     'hierarchical' => false,
  //     'rewrite' => array('slug' => 'news'),
  //     'has_archive' => true,
  //     'show_in_rest' => true,
  //     'menu-position' => 6,
  //     'supports' => array(
  //       'title',
  //       'editor',
  //       'thumbnail',
  //       'excerpt',
  //       'author'
  //     )
  //   )
  // );
  // register_taxonomy_for_object_type('news', array('news'));
}


/* --------------------------------------------------
  お知らせ記事一覧ページネーション
  ------------------------------------------------- */
  add_action('pre_get_posts', 'my_pre_get_posts');
 
  function my_pre_get_posts($query) {
  if (!is_admin() && $query->is_main_query() && is_post_type_archive('news')) {
    $query->set('posts_per_page', 4);
    }
  }

  add_action('pre_get_posts', 'my_pre_get_posts_works');
  function my_pre_get_posts_works($query) {
  if (!is_admin() && $query->is_main_query() && is_post_type_archive('works')) {
    $query->set('posts_per_page',3);
    }
  }

/* --------------------------------------------------
  ランキング記事一覧の作成
  ------------------------------------------------- */
function update_custom_meta_views()
{
  global $post;
  if ('publish' === get_post_status($post) && is_single()) {
    $views = intval(get_post_meta($post->ID, '_custom_meta_views', true));
    update_post_meta($post->ID, '_custom_meta_views', ($views + 1));
  }
}
add_action('wp_head', 'update_custom_meta_views');

function add_column_custom_meta_views($columns)
{
  $columns['views'] = 'Views';
  return $columns;
}
add_filter('manage_posts_columns', 'add_column_custom_meta_views');

function add_column_custom_meta_views_content($column_name, $post_id)
{
  $views = intval(get_post_meta($post_id, '_custom_meta_views', true));
  echo $views;
}
add_action('manage_posts_custom_column', 'add_column_custom_meta_views_content', 10, 2);

function sortable_column_custom_meta_views($columns)
{
  $columns['views'] = 'Views';
  return $columns;
}
add_filter('manage_edit-post_sortable_columns', 'sortable_column_custom_meta_views');

/* ================================================

  検索フォームの実装

  ================================================ */
  function custom_search($search, $wp_query  ) {
    //query['s']があったら検索ページ表示
    if ( isset($wp_query->query['s']) ) 
  $wp_query->is_search = true;
    return $search;
  }
  add_filter('posts_search','custom_search', 10, 2);
/* --------------------------------------------------
  タイトルを変更
  ------------------------------------------------- */
  function wp_search_title($search_title) {
    if(is_search()) {
      $search_title = '「'.get_search_query().'」の検索結果';
    }
    return $search_title;
  }
  add_filter('wp_title', 'wp_search_title');

  // 固定ページ・カスタム投稿の検索は非表示
  function search_pre_get_posts( $query ) {
    //管理画面、メインクエリー以外では何もしない
    if ( is_admin() || ! $query->is_main_query() ) {
    return;
    }
    //サイト内検索でのみ動作
    else if ( $query->is_search ){
    $query->set('post_type', 'post');
    }
    return $query;
    }
    add_action( 'pre_get_posts', 'search_pre_get_posts' );
  
    function adjust_category_paged( $query = []) {
      if (isset($query['name'])
       && $query['name'] === 'page'
       && isset($query['page'])
       && isset($query['category_name'])) {
        $query['paged'] = intval($query['page']); // 念のため整数化しておく
        unset($query['name']);
        unset($query['page']);
      }
      return $query;
    }
    add_filter('request', 'adjust_category_paged');
    
