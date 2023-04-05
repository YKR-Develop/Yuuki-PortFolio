<!-- ===================================================
  search.php
  サイト内検索実行結果の実装
================================================== -->
<?php if ( have_posts() ) : ?>
<p><?php printf( '"' . get_search_query() . '"' . __( 'の検索結果 - ' ) . $wp_query->found_posts . __('件')); ?></p>
<?php while ( have_posts() ) : the_post(); ?>
 
<!-- post -->
ループ処理
<!-- /post -->
 
<?php endwhile; else: ?>
<p>検索キーワードに該当する記事がありませんでした。</p>
<?php endif; ?>