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


  <!-- OGPタグ -->
  <meta property="og:url" content="ページURL">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Yuuki PortFolio | Home">
  <meta property="og:description" content="Yuuki PortFolioはWebサイトの制作 / プログラミング開発などの作品を紹介しているポートフォリオ兼ブログサイトです。その他趣味で制作したハンドメイド作品も掲載しております。">
  <meta property="og:site_name" content="Yuuki PortFolioのトップ">
  <meta property="og:image" content="/images/img/img_ogp_thumb.jpg">

  <!-- Twitterカード -->
  <meta name="twitter:card" content="Summary Card">
  <meta name="twitter:site" content="@Yukuro_Cos2022">

  <!-- ファビコン / サイトアイコン PHP書き換え -->
  <link rel="shortcut icon" href="https://ykr2024-portfolio.com/wp-content/uploads/2023/01/ico_site-favicon-6464.ico">

  <!-- スマホ用アイコン画像 PHP書き換え -->
  <link rel="apple-touch-icon-precomposed" href="https://ykr2024-portfolio.com/wp-content/uploads/2023/01/ico_site-favicon-6464.ico">
  <?php WP_head();?>
</head>