<!-- ===================================================
  head.php
  言語・基本meta情報の定義
================================================== -->
<!DOCTYPE html>
<html lang="ja">

<head prefix="og: https://ogp.me/ns#">

  <!-- 文字コード PHP書き換え-->
  <meta charset="<?php bloginfo('charset'); ?>"> 

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- サイトタイトル PHP書き換え -->
  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

  <!-- metaディスクリプション PHP書き換え -->
  <meta name="description" content="<?php bloginfo('description'); ?>">

  <!-- OGPタグ -->
  <meta property="og:url" content="ページURL">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Yukuro CreateFolio | Home">
  <meta property="og:description" content="Yukuro CreateFolioはWebサイトの制作 / プログラミング開発などの作品を紹介しているポートフォリオ兼ブログサイトです。
  開発実績以外にも、オリジナルで制作したコスプレ衣装・小道具作品も掲載しております。">
  <meta property="og:site_name" content="Yukuro CreateFolioのトップ">
  <meta property="og:image" content="/images/img/img_ogp_thumb.jpg">

  <!-- Twitterカード -->
  <meta name="twitter:card" content="Summary Card">
  <meta name="twitter:site" content="@Yukuro_Cos2022">

  <!-- ファビコン / サイトアイコン PHP書き換え -->
  <link rel="shortcut icon" href="<?php echo esc_url(get_theme_file_uri('assets/images/ico/favicon.ico')); ?>">

  <!-- スマホ用アイコン画像 PHP書き換え -->
  <link rel="apple-touch-icon-precomposed" href="<?php echo esc_url(get_theme_file_uri('assets/images/ico/favicon.ico')); ?>">
  
</head>