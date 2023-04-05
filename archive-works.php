<!-- ===================================================
  archive-works.php
  カスタム投稿 Works 制作実績一覧ページ
================================================== -->
<?php get_header(); ?>

<div class="container container--top">

  <!-- ⬇︎ /////////////////// visual.php 読み込み /////////////////// ⬇︎ -->
  <?php get_template_part('parts/visual'); ?>

  <!-- ================================================================================ -->

  <!-- ⬇︎ /////////////////// sidebar.php 読み込み /////////////////// ⬇︎ -->
  <?php get_sidebar(); ?>

  <!-- =================================================== ページ内コンテンツ Start =================================================== -->
  <div class="contents">

    <!-- ⬇︎ /////////////////// パンくずリスト Start /////////////////// ⬇︎ -->
    <div class="pkz">
      <div class="pkz__inner pkz__inner--blog">
        <?php breadcrumbs(); ?>
      </div>
    </div>

    <!-- ⬆︎ /////////////////// パンくずリスト End /////////////////// ⬆︎ -->
       <!-- ================================================================================ -->

        <!-- ⬇︎ /////////////////// Works 概要 Start /////////////////// ⬇︎ -->
        <article class="contents__article contents__article--bg contents__article--about">
          <section class="works-greeting">
            <!-- ===== 各要素タイトル Title / link ===== -->
            <div class="contents-title">
              <h3 class="contents-title__title contents-title__title">Works 概要</h3>
            </div>
            <!-- ===== 各要素タイトル Title / link ===== -->
            <!-- ===== 挨拶本文 ===== -->
            <div class="works-greeting__box">
              <p class="works-greeting__text">
                運営者ゆくろが制作したWebサイト / UI UXデザイン / ハンドメイド作品 など幅広く作品を掲載しております。
              </p>
              <p class="works-greeting__text">
                制作詳細ページでは当該サイトのURLを始め、制作過程で作成した資料やデザインの一部など制作にあたって実施した内容を掲載しております。
              </p>
            </div>
            <!-- ===== 挨拶本文 ===== -->
          </section>
        </article>
        <!-- ⬆︎ /////////////////// Works 概要 End /////////////////// ⬆︎ -->

        <!-- ================================================================================ -->

        <!-- ⬇︎ /////////////////// 制作カテゴリー Start /////////////////// ⬇︎ -->
        <article class="contents__article" id="production-overview">
          <!-- ===== コンテンツ見出し Heading ===== -->
          <h2 class="contents-heading">
            <span class="contents-heading__main">
              Works Category
            </span>
            <span class="contents-heading__sub">
              制作カテゴリー
            </span>
          </h2>

          <!-- ===== Works Category 各カテゴリー ===== -->
          <section class="works-category">

            <!-- ##### Webサイト制作 ##### -->
            <a class="works-category__item" href="<?php echo get_category_link( '50' ); ?>">
              <div class="works-category__thumb">
                <img class="works-category__image" src="http://yukuro-createfolio.local/wp-content/uploads/2023/03/img_category-thumb_website.jpg" alt="Webサイト制作">
              </div>
              <div class="works-category__label-inner">
                <h3 class="works-category__label">
                  <span class="works-category__label works-category__label--lg">WebSite</span>
                  <span class="works-category__label works-category__label--sm">Webサイト制作</span>
                </h3>
              </div>
            </a>

            <!-- ##### UI UXデザイン ##### -->
            <a class="works-category__item" href="<?php echo get_category_link( '51' ); ?>">
              <div class="works-category__thumb">
                <img class="works-category__image" src="http://yukuro-createfolio.local/wp-content/uploads/2023/03/img_category-thumb_uiuxdesign.jpg" alt="UI UXデザイン">
              </div>
              <div class="works-category__label-inner">
                <h3 class="works-category__label">
                  <span class="works-category__label works-category__label--lg">UI UX Design</span>
                  <span class="works-category__label works-category__label--sm">UI UX デザイン</span>
                </h3>
              </div>
            </a>

            <!-- ##### PhotoShop  ##### -->
            <a class="works-category__item" href="<?php echo get_category_link( '52' ); ?>">
              <div class="works-category__thumb">
                <img class="works-category__image" src="http://yukuro-createfolio.local/wp-content/uploads/2023/03/img_category-thumb_photoshop.jpg" alt="PhotoShop">
              </div>
              <div class="works-category__label-inner">
                <h3 class="works-category__label">
                  <span class="works-category__label works-category__label--lg">PhotoShop</span>
                  <span class="works-category__label works-category__label--sm">フォトショップ</span>
                </h3>
              </div>
            </a>

            <!-- ##### Illustrator  ##### -->
            <a class="works-category__item" href="<?php echo get_category_link( '53' ); ?>">
              <div class="works-category__thumb">
                <img class="works-category__image" src="http://yukuro-createfolio.local/wp-content/uploads/2023/03/img_category-thumb_illustrator.jpg"
                  alt="Illustrator">
              </div>
              <div class="works-category__label-inner">
                <h3 class="works-category__label">
                  <span class="works-category__label works-category__label--lg">Illustrator</span>
                  <span class="works-category__label works-category__label--sm">イラストレーター</span>
                </h3>
              </div>
            </a>

            <!-- ##### Molding & Dress  ##### -->
            <a class="works-category__item" href="<?php echo get_category_link( '54' ); ?>">
              <div class="works-category__thumb">
                <img class="works-category__image" src="http://yukuro-createfolio.local/wp-content/uploads/2023/03/img_category-thumb_moldingdress.jpg"
                  alt="ハンドメイド">
              </div>
              <div class="works-category__label-inner">
                <h3 class="works-category__label">
                  <span class="works-category__label works-category__label--lg">HandMade</span>
                  <span class="works-category__label works-category__label--sm">ハンドメイド</span>
                </h3>
              </div>
            </a>
          </section>
        </article>
        <!-- ⬆︎ /////////////////// 制作カテゴリー End /////////////////// ⬆︎ -->

        <!-- ============================================================================== -->

        <!-- ⬇︎ /////////////////// 最新の制作実績 Start /////////////////// ⬇︎ -->
        <article class="contents__article contents__article--bg">
          <!-- ===== コンテンツ見出し Heading ===== -->
          <h2 class="contents-heading">
            <span class="contents-heading__main">
              New Works
            </span>
            <span class="contents-heading__sub">
              最新の制作実績
            </span>
          </h2>
          <!-- ===== コンテンツ見出し Heading ===== -->

          <!-- ⬇︎ ############ 各カテゴリー最新の制作実績 Start ############ ⬇︎ -->
          <section class="contents__wrapper">

            <!-- タブナビゲーション ここから ***************** -->
            <div class="works-tab-contents">
              <nav class="tab">
                <ul class="tab__list" id="tab">
                  <li class="tab__item tab__item--about">
                    <a class="tab__link" href="#website-works">
                      <img class="tab__icon" src="/works/images/ico/ico_works-website.svg" alt="Webサイト制作">
                      Webサイト制作
                    </a>
                  </li>
                  <li class="tab__item tab__item--about">
                    <a class="tab__link" href="#uiux-works">
                      <img class="tab__icon" src="/works/images/ico/ico_works-uiuxdesign.svg" alt="UI UXデザイン">
                      UI UXデザイン
                    </a>
                  </li>
                  <li class="tab__item tab__item--about">
                    <a class="tab__link" href="#photoshop-works">
                      <img class="tab__icon" src="/works/images/ico/ico_works-photoshop.svg" alt="PhotoShop">
                      PhotoShop
                    </a>
                  </li>
                  <li class="tab__item tab__item--about">
                    <a class="tab__link" href="#illustrator-works">
                      <img class="tab__icon" src="/works/images/ico/ico_works-illustrator.svg" alt="Illustrator">
                      Illustrator
                    </a>
                  </li>
                  <li class="tab__item tab__item--about">
                    <a class="tab__link" href="#molding-works">
                      <img class="tab__icon" src="/works/images/ico/ico_works-molding.svg" alt="ハンドメイド">
                      ハンドメイド
                    </a>
                  </li>
                </ul>
              </nav>
              <!-- タブナビゲーション ここまで ***************** -->

              <!-- ⬇︎ /////////////////// Webサイト制作 Start /////////////////// ⬇︎ -->
              <div id="website-works" class="tab__area">
                <!-- ===== 作品制作実績 ここから ===== -->
                <div class="works-list">

                  <!------ ##### Yukuro CreateFolio ##### ------>
                  <section class="works-card">
                    <!-- イメージ画像 -->
                    <div class="works-card__works-image">
                      <img src="/works/images/img/img_works-mockup-website.png" alt="Yukuro CreateFolio"
                        class="works-card__image">
                    </div>

                    <!-- サイト名 -->
                    <h3 class="works-card__title">
                      Yukuro CreateFolio
                    </h3>

                    <!-- ページ概要 文字数制限 : -->
                    <p class="works-card__desc">
                      こちらのポートフォリオサイトです。
                      デザインからコーディング、WordPressまで実装しております。
                    </p>

                    <!-- 担当箇所 -->
                    <ul class="works-card__management-list">
                      <li class="works-card__management-item">
                        企画
                      </li>
                      <li class="works-card__management-item">
                        資料作成
                      </li>
                      <li class="works-card__management-item">
                        Webデザイン
                      </li>
                      <li class="works-card__management-item">
                        HTMLコーディング
                      </li>
                      <li class="works-card__management-item">
                        WordPress
                      </li>
                    </ul>

                    <!-- カテゴリー / 業種 -->
                    <div class="works-card__genre">
                      <p class="works-card__category">コーディング</p>
                      <p class="works-card__industry">その他</p>
                    </div>

                    <!-- 制作詳細リンク -->
                    <div class="works-card__detail-link">
                      <a class="works-card__link" href="works-sample.html">制作詳細はこちら</a>
                    </div>
                  </section>

                  <!------ ##### YuCoRea ##### ------>
                  <section class="works-card works-card--mb">
                    <!-- イメージ画像 -->
                    <div class="works-card__works-image">
                      <img src="/works/images/img/img_works-mockup-website.png" alt="Yukuro CreateFolio"
                        class="works-card__image">
                    </div>
                    <!-- サイト名 -->
                    <h3 class="works-card__title">
                      YuCoRea
                    </h3>

                    <!-- ページ概要 文字数制限 : -->
                    <p class="works-card__desc">
                      私のハンドメイド作品を販売している個人サイトです。
                      SEOやセキュリティの観点からShopifyを使い制作しました。
                    </p>

                    <!-- 担当箇所 -->
                    <ul class="works-card__management-list">
                      <li class="works-card__management-item">
                        企画
                      </li>
                      <li class="works-card__management-item">
                        競合調査
                      </li>
                      <li class="works-card__management-item">
                        資料作成
                      </li>
                      <li class="works-card__management-item">
                        Webデザイン
                      </li>
                      <li class="works-card__management-item">
                        Shopify
                      </li>
                    </ul>

                    <!-- カテゴリー / 業種 -->
                    <div class="works-card__genre">
                      <p class="works-card__category">ECサイト</p>
                      <p class="works-card__industry">小売</p>
                    </div>

                    <!-- 制作詳細リンク -->
                    <div class="works-card__detail-link">
                      <a class="works-card__link" href="works-sample.html">制作詳細はこちら</a>
                    </div>
                  </section>

                </div>
                <!-- ===== 作品制作実績 ここまで ===== -->

                <!-- ===== ページ遷移ボタン ===== -->
                <div class="primary-button">
                  <a class="primary-button__link" href="/works/works_website.html">Webサイト制作 一覧
                    <span class="primary-button__arrow"></span></a>
                </div>
              </div>
              <!-- ⬆︎ /////////////////// Webサイト制作 End /////////////////// ⬆︎ -->

              <!-- ⬇︎ /////////////////// UI UXデザイン Start /////////////////// ⬇︎ -->
              <div id="uiux-works" class="tab__area">
                <!-- ===== 作品制作実績 ここから ===== -->
                <div class="works-list">

                  <!------ ##### デリバリーショップUI ##### ------>
                  <section class="works-card">
                    <!-- イメージ画像 -->
                    <div class="works-card__works-image">
                      <img src="/works/images/img/img_works-uiux-sample01.jpg" alt="デリバリーショップUI"
                        class="works-card__image">
                    </div>

                    <!-- サイト名 -->
                    <h3 class="works-card__title">
                      デリバリーショップUI
                    </h3>

                    <!-- サイト説明 -->
                    <div class="works-card__desc">
                      <p class="works-card__text">
                        ハンバーガーショップのデリバリーアプリのデザインです。
                      </p>
                      <p class="works-card__text">
                        購入履歴を残しておくことで、スマホで注文する時間がない場面で4STEPで商品を注文する事ができるようなUXを意識しました。
                      </p>
                    </div>

                    <!-- カテゴリー / 業種 -->
                    <div class="works-card__genre">
                      <p class="works-card__category">アプリデザイン</p>
                      <p class="works-card__industry">デリバリー</p>
                    </div>

                    <!-- 制作詳細リンク -->
                    <div class="works-card__detail-link">
                      <a class="works-card__link" href="works-sample.html">制作詳細はこちら</a>
                    </div>
                  </section>

                  <!------ ##### 映姫様説教逃走ゲーム ##### ------>
                  <section class="works-card works-card--mb">
                    <!-- イメージ画像 -->
                    <div class="works-card__works-image">
                      <img src="/works/images/img/img_works-uiux-sample02.jpg" alt="運動管理アプリUI"
                        class="works-card__image">
                    </div>

                    <!-- サイト名 -->
                    <h3 class="works-card__title">
                      運動管理アプリUI
                    </h3>

                    <!-- サイト説明 -->
                    <div class="works-card__desc">
                      <p class="works-card__text">
                        日々の運動の習慣やその成果や食事の記録など結果として記録したいものが多いからこそ、わかりやすく効率的でユーザビリティを考えたデザインや考え方が必要なデザインでした。
                      </p>
                    </div>

                    <!-- カテゴリー / 業種 -->
                    <div class="works-card__genre">
                      <p class="works-card__category">アプリデザイン</p>
                      <p class="works-card__industry">健康・美容</p>
                    </div>

                    <!-- 制作詳細リンク -->
                    <div class="works-card__detail-link">
                      <a class="works-card__link" href="works-sample.html">制作詳細はこちら</a>
                    </div>
                  </section>
                </div>
                <!-- ===== 作品制作実績 ここまで ===== -->

                <!-- ===== ページ遷移ボタン ===== -->
                <div class="primary-button">
                  <a class="primary-button__link" href="/works/works_uiuxdesign.html">UI UXデザイン 一覧
                    <span class="primary-button__arrow"></span></a>
                </div>
              </div>
              <!-- ⬆︎ /////////////////// UI UXデザイン End /////////////////// ⬆︎ -->

              <!-- ⬇︎ /////////////////// PhotoShop Start /////////////////// ⬇︎ -->
              <div id="photoshop-works" class="tab__area">
                <!-- ===== 作品制作実績 ここから ===== -->
                <div class="works-list">

                  <!------ ##### メイクブラシの商品バナー ##### ------>
                  <section class="works-card">
                    <!-- イメージ画像 -->
                    <div class="works-card__works-image">
                      <img src="/works/images/img/img_works-photoshop-sample01.jpg" alt="メイクブラシの商品バナー"
                        class="works-card__image">
                    </div>

                    <!-- サイト名 -->
                    <h3 class="works-card__title">
                      メイクブラシの商品バナー
                    </h3>

                    <!-- サイト説明 -->
                    <div class="works-card__desc">
                      <p class="works-card__text">
                        テキストが入ります。テキストが入ります。テキストが入ります。
                      </p>
                      <p class="works-card__text">
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                      </p>
                    </div>

                    <!-- カテゴリー / 業種 -->
                    <div class="works-card__genre">
                      <p class="works-card__category">商品バナー</p>
                    </div>
                  </section>

                  <!------ ##### Webデザインスクール広告 ##### ------>
                  <section class="works-card works-card--mb">
                    <!-- イメージ画像 -->
                    <div class="works-card__works-image">
                      <img src="/works/images/img/img_works-photoshop-sample02.jpg" alt="Webデザインスクール広告"
                        class="works-card__image">
                    </div>

                    <!-- サイト名 -->
                    <h3 class="works-card__title">
                      運動管理アプリUI
                    </h3>

                    <!-- サイト説明 -->
                    <div class="works-card__desc">
                      <p class="works-card__text">
                        テキストが入ります。テキストが入ります。テキストが入ります。
                      </p>
                      <p class="works-card__text">
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                      </p>
                    </div>

                    <!-- カテゴリー / 業種 -->
                    <div class="works-card__genre">
                      <p class="works-card__category">広告バナー</p>
                    </div>
                  </section>
                </div>
                <!-- ===== 作品制作実績 ここまで ===== -->

                <!-- ===== ページ遷移ボタン ===== -->
                <div class="primary-button">
                  <a class="primary-button__link" href="/works/works_photoshop.html">PhotoShop 一覧
                    <span class="primary-button__arrow"></span></a>
                </div>
              </div>
              <!-- ⬆︎ /////////////////// PhotoShop End /////////////////// ⬆︎ -->

              <!-- ⬇︎ /////////////////// Illustrator Start /////////////////// ⬇︎ -->
              <div id="illustrator-works" class="tab__area">
                <!-- ===== 作品制作実績 ここから ===== -->
                <div class="works-list">

                  <!------ ##### Yukuro CreateFolio ロゴマーク ##### ------>
                  <section class="works-card">
                    <!-- イメージ画像 -->
                    <div class="works-card__works-image">
                      <img src="/works/images/img/img_works-illustrator-sample01.jpg" alt="Yukuro CreateFolio ロゴマーク"
                        class="works-card__image">
                    </div>

                    <!-- サイト名 -->
                    <h3 class="works-card__title">
                      Yukuro CreateFolio ロゴマーク
                    </h3>

                    <!-- サイト説明 -->
                    <div class="works-card__desc">
                      <p class="works-card__text">
                        テキストが入ります。テキストが入ります。テキストが入ります。
                      </p>
                      <p class="works-card__text">
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                      </p>
                    </div>

                    <!-- カテゴリー / 業種 -->
                    <div class="works-card__genre">
                      <p class="works-card__category">ロゴマーク</p>
                    </div>
                  </section>

                  <!------ ##### Yukuro CreateFolio 名刺 ##### ------>
                  <section class="works-card works-card--mb">
                    <!-- イメージ画像 -->
                    <div class="works-card__works-image">
                      <img src="/works/images/img/img_works-illustrator-sample02.jpg" alt="Yukuro CreateFolio 名刺"
                        class="works-card__image">
                    </div>

                    <!-- サイト名 -->
                    <h3 class="works-card__title">
                      Yukuro CreateFolio 名刺
                    </h3>

                    <!-- サイト説明 -->
                    <div class="works-card__desc">
                      <p class="works-card__text">
                        テキストが入ります。テキストが入ります。テキストが入ります。
                      </p>
                      <p class="works-card__text">
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                      </p>
                    </div>

                    <!-- カテゴリー / 業種 -->
                    <div class="works-card__genre">
                      <p class="works-card__category">広告バナー</p>
                    </div>
                  </section>
                </div>
                <!-- ===== 作品制作実績 ここまで ===== -->

                <!-- ===== ページ遷移ボタン ===== -->
                <div class="primary-button">
                  <a class="primary-button__link" href="/works/works_programing.html">Illustrator 制作実績
                    <span class="primary-button__arrow"></span></a>
                </div>
              </div>
              <!-- ⬆︎ /////////////////// Illustrator End /////////////////// ⬆︎ -->

              <!-- ⬇︎ /////////////////// ハンドメイド Start /////////////////// ⬇︎ -->
              <div id="molding-works" class="tab__area">
                <!-- ===== 作品制作実績 ここから ===== -->
                <div class="works-list">

                  <!------ ##### 鬼滅の刃風 虚哭神去風 ##### ------>
                  <section class="works-card">
                    <!-- イメージ画像 -->
                    <div class="works-card__works-image">
                      <img src="/works/images/img/img_works-molding-sample01.jpg" alt="鬼滅の刃風 虚哭神去風"
                        class="works-card__image">
                    </div>

                    <!-- サイト名 -->
                    <h3 class="works-card__title">
                      鬼滅の刃風 虚哭神去風
                    </h3>

                    <!-- サイト説明 -->
                    <div class="works-card__desc">
                      <p class="works-card__text">
                        テキストが入ります。テキストが入ります。テキストが入ります。
                      </p>
                      <p class="works-card__text">
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                      </p>
                    </div>

                    <!-- カテゴリー / 業種 -->
                    <div class="works-card__genre">
                      <p class="works-card__category">武器・小道具</p>
                    </div>
                  </section>

                  <!------ ##### まどマギ風 マスケット銃風 ##### ------>
                  <section class="works-card works-card--mb">
                    <!-- イメージ画像 -->
                    <div class="works-card__works-image">
                      <img src="/works/images/img/img_works-molding-sample02.jpg" alt="まどマギ風 マスケット銃風"
                        class="works-card__image">
                    </div>

                    <!-- サイト名 -->
                    <h3 class="works-card__title">
                      まどマギ風 マスケット銃風
                    </h3>

                    <!-- サイト説明 -->
                    <div class="works-card__desc">
                      <p class="works-card__text">
                        テキストが入ります。テキストが入ります。テキストが入ります。
                      </p>
                      <p class="works-card__text">
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                      </p>
                    </div>

                    <!-- カテゴリー / 業種 -->
                    <div class="works-card__genre">
                      <p class="works-card__category">武器・小道具</p>
                    </div>
                  </section>
                </div>
                <!-- ===== 作品制作実績 ここまで ===== -->

                <!-- ===== ページ遷移ボタン ===== -->
                <div class="primary-button">
                  <a class="primary-button__link" href="/works/works_molding&dress.html">ハンドメイド 一覧
                    <span class="primary-button__arrow"></span></a>
                </div>
              </div>
              <!-- ⬆︎ /////////////////// ハンドメイド End /////////////////// ⬆︎ -->

          </section>
        </article>
        <!-- ⬆︎ /////////////////// 最新の制作実績 End /////////////////// ⬆︎ -->

        <!-- ============================================================================== -->

  </div>
</div>
<?php get_footer(); ?>