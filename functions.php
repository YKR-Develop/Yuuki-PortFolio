<!-- --------------------------------------------------
  functions.php
  WordPress機能有効化
--------------------------------------------------  -->
<?php

/* --------------------------------------------------
  各CSS / Googleフォント共通読み込み
-------------------------------------------------- */ 
add_action('wp_enqueue_scripts', 'add_styles');
function add_styles() {
	// Googleフォント
	wp_register_style(
		'google-fonts_style',
		'https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;500;600&family=Teko:wght@500&display=swap',
		array(),
		'1.0'
	);

	// main.css
	wp_enqueue_style(
		'main_style',
		get_template_directory_uri() . '/stylesheet/css/main.css',
		array('google-fonts_style'),
		'1.0'
	);
}

/* --------------------------------------------------
  JQuery読み込み
-------------------------------------------------- */ 
function custom_print_scripts() {
	if (!is_admin()) {
		//デフォルトjquery削除
		wp_deregister_script('jquery');
		//GoogleCDNから読み込む
		wp_enqueue_script('jquery-js', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js' );
	}
}
add_action('wp_print_scripts', 'custom_print_scripts');

/* ---------- カスタム投稿の追加 ---------- */ 
/* --------------------------------------------------
  Works 制作実績一覧
-------------------------------------------------- */ 
