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
  wp_enqueue_style('font-style', 'https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;500;600&family=Teko:wght@500&display=swap');

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
  パンくずリスト
  ------------------------------------------------- */
function breadcrumbs($args = array())
{
  global $post;
  $str = '';
  $defaults = array(
    'id' => "breadcrumbs",
    'home' => "Home",
    'search' => "で検索した結果",
    'tag' => "タグ",
    'author' => "投稿者",
    'notfound' => "404 Not found",
    'separator' => '>'
  );

  $args = wp_parse_args($args, $defaults);
  extract($args, EXTR_SKIP);
  if (is_home()) {
    echo  '<div id="' . $id . '" >' . '<ul><li>' . $home . '</li></ul></div>';
  }

  if (!is_home() && !is_admin()) {
    $str .= '<div id="' . $id . '" >';
    $str .= '<ul>';
    $str .= '<li class="breadcrumb-top" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="' . home_url() . '/" itemprop="url"><span itemprop="title">' . $home . '</span></a></li>';
    $str .= '<li>' . $separator . '</li>';
    $my_taxonomy = get_query_var('taxonomy');
    $cpt = get_query_var('post_type');

    if ($my_taxonomy && is_tax($my_taxonomy)) {
      $my_tax = get_queried_object();
      $post_types = get_taxonomy($my_taxonomy)->object_type;
      $cpt = $post_types[0];
      $str .= '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="' . get_post_type_archive_link($cpt) . '" itemprop="url"><span itemprop="title">' . get_post_type_object($cpt)->label . '</span></a></li>';
      $str .= '<li>' . $separator . '</li>';

      if ($my_tax->parent != 0) {
        $ancestors = array_reverse(get_ancestors($my_tax->term_id, $my_tax->taxonomy));

        foreach ($ancestors as $ancestor) {
          $str .= '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="' . get_term_link($ancestor, $my_tax->taxonomy) . '" itemprop="url"><span itemprop="title">' . get_term($ancestor, $my_tax->taxonomy)->name . '</span></a></li>';
          $str .= '<li>' . $separator . '</li>';
        }
      }
      $str .= '<li>' . $my_tax->name . '</li>';
    } elseif (is_category()) {
      $cat = get_queried_object();
      if ($cat->parent != 0) {
        $ancestors = array_reverse(get_ancestors($cat->cat_ID, 'category'));
        foreach ($ancestors as $ancestor) {
          $str .= '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="' . get_category_link($ancestor) . '" itemprop="url"><span itemprop="title">' . get_cat_name($ancestor) . '</span></a></li>';
          $str .= '<li>' . $separator . '</li>';
        }
      }
      $str .= '<li>' . $cat->name . '</li>';
    } elseif (is_post_type_archive()) {
      $cpt = get_query_var('post_type');
      $str .= '<li>' . get_post_type_object($cpt)->label . '</li>';
    } elseif ($cpt && is_singular($cpt)) {
      $taxes = get_object_taxonomies($cpt);
      $mytax = $taxes[0];
      $str .= '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="' . get_post_type_archive_link($cpt) . '" itemprop="url"><span itemprop="title">' . get_post_type_object($cpt)->label . '</span></a></li>';
      $str .= '<li>' . $separator . '</li>';
      $taxes = get_the_terms($post->ID, $mytax);
      $tax = get_youngest_tax($taxes, $mytax);

      if ($tax->parent != 0) {
        $ancestors = array_reverse(get_ancestors($tax->term_id, $mytax));
        foreach ($ancestors as $ancestor) {
          $str .= '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="' . get_term_link($ancestor, $mytax) . '" itemprop="url"><span itemprop="title">' . get_term($ancestor, $mytax)->name . '</span></a></li>';
          $str .= '<li>' . $separator . '</li>';
        }
      }
      $str .= '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="' . get_term_link($tax, $mytax) . '" itemprop="url"><span itemprop="title">' . $tax->name . '</span></a></li>';
      $str .= '<li>' . $separator . '</li>';
      $str .= '<li>' . $post->post_title . '</li>';
    } elseif (is_single()) {
      $categories = get_the_category($post->ID);
      $cat = get_youngest_cat($categories);
      if ($cat->parent != 0) {
        $ancestors = array_reverse(get_ancestors($cat->cat_ID, 'category'));
        foreach ($ancestors as $ancestor) {
          $str .= '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="' . get_category_link($ancestor) . '" itemprop="url"><span itemprop="title">' . get_cat_name($ancestor) . '</span></a></li>';
          $str .= '<li>' . $separator . '</li>';
        }
      }
      $str .= '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="' . get_category_link($cat->term_id) . '" itemprop="url"><span itemprop="title">' . $cat->cat_name . '</span></a></li>';
      $str .= '<li>' . $separator . '</li>';
      $str .= '<li>' . $post->post_title . '</li>';
    } elseif (is_page()) {
      if ($post->post_parent != 0) {
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        foreach ($ancestors as $ancestor) {
          $str .= '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="' . get_permalink($ancestor) . '" itemprop="url"><span itemprop="title">' . get_the_title($ancestor) . '</span></a></li>';
          $str .= '<li>' . $separator . '</li>';
        }
      }
      $str .= '<li>' . $post->post_title . '</li>';
    } elseif (is_date()) {
      if (get_query_var('day') != 0) {
        $str .= '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="' . get_year_link(get_query_var('year')) . '" itemprop="url"><span itemprop="title">' . get_query_var('year') . '年</span></a></li>';
        $str .= '<li>' . $separator . '</li>';
        $str .= '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="' . get_month_link(get_query_var('year'), get_query_var('monthnum')) . '" itemprop="url"><span itemprop="title">' . get_query_var('monthnum') . '月</span></a></li>';
        $str .= '<li>' . $separator . '</li>';
        $str .= '<li>' . get_query_var('day') . '日</li>';
      } elseif (get_query_var('monthnum') != 0) {
        $str .= '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="' . get_year_link(get_query_var('year')) . '" itemprop="url"><span itemprop="title">' . get_query_var('year') . '年</span></a></li>';
        $str .= '<li>' . $separator . '</li>';
        $str .= '<li>' . get_query_var('monthnum') . '月</li>';
      } else {
        $str .= '<li>' . get_query_var('year') . '年</li>';
      }
    } elseif (is_author()) {
      $str .= '<li>' . $author . ' : ' . get_the_author_meta('display_name', get_query_var('author')) . '</li>';
    } elseif (is_tag()) {
      $str .= '<li>' . $tag . ' : ' . single_tag_title('', false) . '</li>';
    } elseif (is_attachment()) {
      $str .= '<li>' . $post->post_title . '</li>';
    } elseif (is_404()) {
      $str .= '<li>' . $notfound . '</li>';
    } else {
      $str .= '<li>' . wp_title('', true) . '</li>';
    }

    $str .= '</ul>';
    $str .= '</div>';
  }
  echo $str;
}

function get_youngest_cat($categories)
{
  global $post;
  if (count($categories) == 1) {
    $youngest = $categories[0];
  } else {
    $count = 0;
    foreach ($categories as $category) {
      $children = get_term_children($category->term_id, 'category');
      if ($children) {
        if ($count < count($children)) {
          $count = count($children);
          $lot_children = $children;
          foreach ($lot_children as $child) {
            if (in_category($child, $post->ID)) {
              $youngest = get_category($child);
            }
          }
        }
      } else {
        $youngest = $category;
      }
    }
  }
  return $youngest;
}

function get_youngest_tax($taxes, $mytaxonomy)
{
  global $post;
  if (count($taxes) == 1) {
    $youngest = $taxes[key($taxes)];
  } else {
    $count = 0;
    foreach ($taxes as $tax) {
      $children = get_term_children($tax->term_id, $mytaxonomy);
      if ($children) {
        if ($count < count($children)) {
          $count = count($children);
          $lot_children = $children;
          foreach ($lot_children as $child) {
            if (is_object_in_term($post->ID, $mytaxonomy)) {
              $youngest = get_term($child, $mytaxonomy);
            }
          }
        }
      } else {
        $youngest = $tax;
      }
    }
  }
  return $youngest;
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
      'label' => '担当箇所',
      'hierarchical' => false,
      'public' => true,
      'show_in_rest' => true,
      'update_count_callback' => '_update_post_term_count',
    )
  );


  /* --------------------------------------------------
  お知らせ欄
  ------------------------------------------------- */

  register_post_type(
    'news',
    array(
      'label' => 'お知らせ',
      'labels' => array(
        'menu_name' => 'お知らせ'
      ),
      'public' => true,
      'query_var' => true,
      'hierarchical' => false,
      'rewrite' => array('slug' => 'news'),
      'has_archive' => true,
      'show_in_rest' => true,
      'menu-position' => 6,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'excerpt',
        'author'
      )
    )
  );
  register_taxonomy('news', array('news'), array(
    'hierarchical' => true,
    'label' => 'ページカテゴリー',
    'show_ui' => true,
    'public' => true
  ));
  register_taxonomy_for_object_type('news', array('news'));
  register_taxonomy_for_object_type('post_tag', 'news');
}


/* --------------------------------------------------
  お知らせ記事一覧ページネーション
  ------------------------------------------------- */
$news_args = array(
  'post_type' => array('news'),
  'post_status' => 'publish',
  'posts_per_page' => 6,
  'paged' => $paged,
);
$news_query = new WP_Query($news_args);

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

