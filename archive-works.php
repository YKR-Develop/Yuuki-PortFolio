<!-- ===================================================
  archive-works.php
  カスタム投稿 Works 制作実績一覧ページ
================================================== -->
<?php get_header(); ?>

<div class="container">

  <!-- ⬇︎ /////////////////// visual.php 読み込み /////////////////// ⬇︎ -->
  <?php get_template_part('parts/visual'); ?>

  <!-- ================================================================================ -->

  <!-- ⬇︎ /////////////////// sidebar.php 読み込み /////////////////// ⬇︎ -->
  <?php get_sidebar(); ?>

  <!-- =================================================== ページ内コンテンツ Start =================================================== -->
  <div class="contents">

    <!-- ⬇︎ /////////////////// パンくずリスト Start /////////////////// ⬇︎ -->
    <div class="pkz">
      <div id="breadcrumbs" class="pkz__inner pkz__inner--blog" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
          bcn_display();
        } ?>
      </div>
    </div>
    <!-- ⬆︎ /////////////////// パンくずリスト End /////////////////// ⬆︎ -->

    <!-- ================================================================================ -->

    <!-- ⬇︎ /////////////////// Works 概要 Start /////////////////// ⬇︎ -->
    <article class="contents__article">
      <section class="works-greeting">
        <!-- ===== 各要素タイトル Title / link ===== -->
        <div class="contents-title">
          <h3 class="contents-title__title contents-title__title">Works 概要</h3>
        </div>
        <!-- ===== 各要素タイトル Title / link ===== -->
        <!-- ===== 挨拶本文 ===== -->
        <div class="works-greeting__box">
          <p class="works-greeting__text">
            今までに制作したWebサイト / UIUXデザイン / ハンドメイド作品 など幅広い作品を掲載しております。
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
    <article class="contents__article contents__article--white-bg" id="production-overview">
      <div class="contents__article-inner">
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
          <a class="works-category__item" href="<?php echo get_term_link('web-site', 'works-cat'); ?>">
            <div class="works-category__thumb">
              <img class="works-category__image" src="/wp-content/uploads/2023/03/img_category-thumb_website.jpg" alt="Webサイト制作">
            </div>
            <div class="works-category__label-inner">
              <h3 class="works-category__label">
                <span class="works-category__label works-category__label--lg">WebSite</span>
                <span class="works-category__label works-category__label--sm">Webサイト制作</span>
              </h3>
            </div>
          </a>

          <!-- ##### UI UXデザイン ##### -->
          <a class="works-category__item" href="<?php echo get_term_link('ui-ux-design', 'works-cat'); ?>">
            <div class="works-category__thumb">
              <img class="works-category__image" src="/wp-content/uploads/2023/03/img_category-thumb_uiuxdesign.jpg" alt="UI UXデザイン">
            </div>
            <div class="works-category__label-inner">
              <h3 class="works-category__label">
                <span class="works-category__label works-category__label--lg">UI UX Design</span>
                <span class="works-category__label works-category__label--sm">UI UX デザイン</span>
              </h3>
            </div>
          </a>

          <!-- ##### PhotoShop  ##### -->
          <!-- <a class="works-category__item" href="<?php echo get_term_link('photoshop', 'works-cat'); ?>">
            <div class="works-category__thumb">
              <img class="works-category__image" src="/wp-content/uploads/2023/03/img_category-thumb_photoshop.jpg" alt="PhotoShop">
            </div>
            <div class="works-category__label-inner">
              <h3 class="works-category__label">
                <span class="works-category__label works-category__label--lg">PhotoShop</span>
                <span class="works-category__label works-category__label--sm">フォトショップ</span>
              </h3>
            </div>
          </a> -->

          <!-- ##### Illustrator  ##### -->
          <!-- <a class="works-category__item" href="<?php echo get_term_link('illustrator', 'works-cat'); ?>">
            <div class="works-category__thumb">
              <img class="works-category__image" src="/wp-content/uploads/2023/03/img_category-thumb_illustrator.jpg" alt="Illustrator">
            </div>
            <div class="works-category__label-inner">
              <h3 class="works-category__label">
                <span class="works-category__label works-category__label--lg">Illustrator</span>
                <span class="works-category__label works-category__label--sm">イラストレーター</span>
              </h3>
            </div>
          </a> -->

          <!-- ##### ハンドメイド  ##### -->
          <a class="works-category__item" href="<?php echo get_term_link('handmade-works', 'works-cat'); ?>">
            <div class="works-category__thumb">
              <img class="works-category__image" src="/wp-content/uploads/2023/03/img_category-thumb_moldingdress.jpg" alt="ハンドメイド">
            </div>
            <div class="works-category__label-inner">
              <h3 class="works-category__label">
                <span class="works-category__label works-category__label--lg">HandMade</span>
                <span class="works-category__label works-category__label--sm">ハンドメイド</span>
              </h3>
            </div>
          </a>
        </section>
      </div>
    </article>
    <!-- ⬆︎ /////////////////// 制作カテゴリー End /////////////////// ⬆︎ -->

    <!-- ============================================================================== -->

    <!-- ⬇︎ /////////////////// 最新の制作実績 Start /////////////////// ⬇︎ -->
    <article class="contents__article">
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
      <div class="contents__wrapper">

        <!-- タブナビゲーション ここから ***************** -->
        <div class="works-tab-contents">
          <nav class="tab">
            <ul class="tab__list" id="tab">
              <li class="tab__item tab__item--about">
                <a class="tab__link" href="#website-works">
                  <img class="tab__icon" src="/wp-content/uploads/2023/04/ico_works-website.svg" alt="Webサイト">
                  Webサイト
                </a>
              </li>
              <li class="tab__item tab__item--about">
                <a class="tab__link" href="#uiux-works">
                  <img class="tab__icon" src="/wp-content/uploads/2023/04/ico_works-uiuxdesign.svg" alt="UI UXデザイン">
                  UI UXデザイン
                </a>
              </li>
              <!-- <li class="tab__item tab__item--about">
                <a class="tab__link" href="#photoshop-works">
                  <img class="tab__icon" src="/wp-content/uploads/2023/04/ico_works-photoshop.svg" alt="PhotoShop">
                  PhotoShop
                </a>
              </li>
              <li class="tab__item tab__item--about">
                <a class="tab__link" href="#illustrator-works">
                  <img class="tab__icon" src="/wp-content/uploads/2023/04/ico_works-illustrator.svg" alt="Illustrator">
                  Illustrator
                </a>
              </li> -->
              <li class="tab__item tab__item--about">
                <a class="tab__link" href="#molding-works">
                  <img class="tab__icon" src="/wp-content/uploads/2023/04/ico_works-molding.svg" alt="ハンドメイド">
                  ハンドメイド
                </a>
              </li>
            </ul>
          </nav>
          <!-- タブナビゲーション ここまで ***************** -->

          <!-- ⬇︎ /////////////////// Webサイト制作 Start /////////////////// ⬇︎ -->
          <div id="website-works" class="tab__area">
            <div class="works-list">
              <?php
              $args = array(
                'post_type' => 'works',
                'posts_per_page' => 2,
                'tax_query' => array(
                  array(
                    'taxonomy' => 'works-cat',
                    'field'    => 'slug', //term_id、name、slug、term_taxonomy_idで指定可
                    'terms'    => 'web-site'
                  ),
                ),
              );
              $the_query = new WP_Query($args);
              ?>
              <!-- ===== 作品制作実績 ここから ===== -->
              <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post();
                  $thumbnail = (has_post_thumbnail()) ? get_the_post_thumbnail_url(get_the_ID(), 'large') : 'https://placehold.jp/500x250.png'; ?>
                  <article class="works-card">
                    <a href="<?php the_permalink(); ?>" class="works-card__works-image">
                      <img class="works-card__image" src="<?php print $thumbnail; ?>" alt="">
                    </a>
                    <h2 class="works-card__title"><?php the_title(); ?></h2>

                    <div class="works-card__excerpt">
                      <?php the_excerpt(); ?>
                    </div>

                    <ul class="works-card__management-list">
                      <?php
                      if ($terms = get_the_terms($post->ID, 'works-responsible-person')) {
                        foreach ($terms as $term) {
                          echo '<li class="works-card__management-item">' . $term->name . '</li>';
                        }
                      }
                      ?>
                    </ul>

                    <div class="works-card__genre">
                      <div class="works-card__category">
                        <?php
                        $terms = get_the_terms($post->ID, 'works-cat');
                        foreach ($terms as $term) {
                          if ($term->parent) {
                            echo $term->name;
                          }
                        }
                        ?>
                      </div>

                      <div class="works-card__industry">
                        <?php
                        if ($terms = get_the_terms($post->ID, 'works-tag')) {
                          foreach ($terms as $term) {
                            echo esc_html($term->name);
                          }
                        }
                        ?>
                      </div>
                    </div>
                    <div class="works-card__detail-link">
                      <a class="works-card__link" href="<?php the_permalink(); ?>">制作詳細はこちら</a>
                    </div>
                  </article>
                <?php endwhile; ?>
              <?php endif;
              wp_reset_postdata(); ?>
              <!-- ===== 作品制作実績 ここまで ===== -->
            </div>
          </div>
          <!-- ⬆︎ /////////////////// Webサイト制作 End /////////////////// ⬆︎ -->

          <!-- ⬇︎ /////////////////// UI UXデザイン Start /////////////////// ⬇︎ -->
          <div id="uiux-works" class="tab__area">
            <div class="works-list">
              <?php
              $args = array(
                'post_type' => 'works',
                'posts_per_page' => 2,
                'tax_query' => array(
                  array(
                    'taxonomy' => 'works-cat',
                    'field'    => 'slug', //term_id、name、slug、term_taxonomy_idで指定可
                    'terms'    => 'ui-ux-design'
                  ),
                ),
              );
              $the_query = new WP_Query($args);
              ?>
              <!-- ===== 作品制作実績 ここから ===== -->
              <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post();
                  $thumbnail = (has_post_thumbnail()) ? get_the_post_thumbnail_url(get_the_ID(), 'large') : 'https://placehold.jp/500x250.png'; ?>
                  <article class="works-card">
                    <a href="<?php the_permalink(); ?>" class="works-card__works-image">
                      <img class="works-card__image" src="<?php print $thumbnail; ?>" alt="">
                    </a>
                    <h2 class="works-card__title"><?php the_title(); ?></h2>

                    <div class="works-card__excerpt">
                      <?php the_excerpt(); ?>
                    </div>

                    <ul class="works-card__management-list">
                      <?php
                      if ($terms = get_the_terms($post->ID, 'works-responsible-person')) {
                        foreach ($terms as $term) {
                          echo '<li class="works-card__management-item">' . $term->name . '</li>';
                        }
                      }
                      ?>
                    </ul>

                    <div class="works-card__genre">
                      <div class="works-card__category">
                        <?php
                        $terms = get_the_terms($post->ID, 'works-cat');
                        foreach ($terms as $term) {
                          if ($term->parent) {
                            echo $term->name;
                          }
                        }
                        ?>
                      </div>

                      <div class="works-card__industry">
                        <?php
                        if ($terms = get_the_terms($post->ID, 'works-tag')) {
                          foreach ($terms as $term) {
                            echo esc_html($term->name);
                          }
                        }
                        ?>
                      </div>
                    </div>
                    <div class="works-card__detail-link">
                      <a class="works-card__link" href="<?php the_permalink(); ?>">制作詳細はこちら</a>
                    </div>
                  </article>
                <?php endwhile; ?>
              <?php endif;
              wp_reset_postdata(); ?>
              <!-- ===== 作品制作実績 ここまで ===== -->
            </div>
          </div>
          <!-- ⬆︎ /////////////////// UI UXデザイン End /////////////////// ⬆︎ -->

          <!-- ⬇︎ /////////////////// PhotoShop Start /////////////////// ⬇︎ -->
          <!-- <div id="photoshop-works" class="tab__area">

            <?php
            $args = array(
              'post_type' => 'works',
              'posts_per_page' => 2,
              'tax_query' => array(
                array(
                  'taxonomy' => 'works-cat',
                  'field'    => 'slug',
                  'terms'    => 'photoshop'
                ),
              ),
            );
            $the_query = new WP_Query($args);
            ?>
     
            <?php if ($the_query->have_posts()) : ?>
              <?php while ($the_query->have_posts()) : $the_query->the_post();
                $thumbnail = (has_post_thumbnail()) ? get_the_post_thumbnail_url(get_the_ID(), 'large') : 'https://placehold.jp/500x250.png'; ?>
                <article class="works-card">
                  <div class="works-card__works-image">
                    <img class="works-card__image" src="<?php print $thumbnail; ?>" alt="">
                  </div>
                  <h2 class="works-card__title"><?php the_title(); ?></h2>

                  <div class="works-card__excerpt">
                    <?php the_excerpt(); ?>
                  </div>

                  <div class="works-card__genre">
                    <div class="works-card__category">
                      <?php
                      $terms = get_the_terms($post->ID, 'works-cat');
                      foreach ($terms as $term) {
                        if ($term->parent) {
                          echo $term->name;
                        }
                      }
                      ?>
                    </div>
                  </div>
                </article>
              <?php endwhile; ?>
            <?php endif;
            wp_reset_postdata(); ?>
            
            <div class="primary-button">
              <a class="primary-button__link" href="/works-cat/photoshop/">PhotoShop 一覧
                <span class="primary-button__arrow"></span></a>
            </div>
          </div> -->
          <!-- ⬆︎ /////////////////// PhotoShop End /////////////////// ⬆︎ -->

          <!-- ⬇︎ /////////////////// Illustrator Start /////////////////// ⬇︎ -->
          <!-- <div id="illustrator-works" class="tab__area">
            <?php
            $args = array(
              'post_type' => 'works',
              'posts_per_page' => 2,
              'tax_query' => array(
                array(
                  'taxonomy' => 'works-cat',
                  'field'    => 'slug',
                  'terms'    => 'illustrator'
                ),
              ),
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) : ?>
              <?php while ($the_query->have_posts()) : $the_query->the_post();
                $thumbnail = (has_post_thumbnail()) ? get_the_post_thumbnail_url(get_the_ID(), 'large') : 'https://placehold.jp/500x250.png'; ?>
                <article class="works-card">
                  <div class="works-card__works-image">
                    <img class="works-card__image" src="<?php print $thumbnail; ?>" alt="">
                  </div>
                  <h2 class="works-card__title"><?php the_title(); ?></h2>

                  <div class="works-card__excerpt">
                    <?php the_excerpt(); ?>
                  </div>

                  <div class="works-card__genre">
                    <div class="works-card__category">
                      <?php
                      $terms = get_the_terms($post->ID, 'works-cat');
                      foreach ($terms as $term) {
                        if ($term->parent) {
                          echo $term->name;
                        }
                      }
                      ?>
                    </div>
                  </div>
                </article>
              <?php endwhile; ?>
            <?php endif;
            wp_reset_postdata(); ?>

            <div class="primary-button">
              <a class="primary-button__link" href="/works-cat/illustrator/">Illustrator 制作実績
                <span class="primary-button__arrow"></span></a>
            </div>
          </div> -->
          <!-- ⬆︎ /////////////////// Illustrator End /////////////////// ⬆︎ -->

          <!-- ⬇︎ /////////////////// ハンドメイド Start /////////////////// ⬇︎ -->
          <div id="molding-works" class="tab__area">
            <!-- ===== 作品制作実績 ここから ===== -->
            <div class="works-list">
              <?php
              $args = array(
                'post_type' => 'works',
                'posts_per_page' => 2,
                'tax_query' => array(
                  array(
                    'taxonomy' => 'works-cat',
                    'field'    => 'slug', //term_id、name、slug、term_taxonomy_idで指定可
                    'terms'    => 'handmade-works'
                  ),
                ),
              );
              $the_query = new WP_Query($args);
              ?>
              <!-- ===== 作品制作実績 ここから ===== -->
              <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post();
                  $thumbnail = (has_post_thumbnail()) ? get_the_post_thumbnail_url(get_the_ID(), 'large') : 'https://placehold.jp/500x250.png'; ?>
                  <article class="works-card">
                    <a href="<?php the_permalink(); ?>" class="works-card__works-image">
                      <img class="works-card__image" src="<?php print $thumbnail; ?>" alt="">
                    </a>
                    <h2 class="works-card__title"><?php the_title(); ?></h2>

                    <div class="works-card__excerpt">
                      <?php the_excerpt(); ?>
                    </div>

                    <div class="works-card__genre">
                      <div class="works-card__category">
                        <?php
                        $terms = get_the_terms($post->ID, 'works-cat');
                        foreach ($terms as $term) {
                          if ($term->parent) {
                            echo $term->name;
                          }
                        }
                        ?>
                      </div>
                    </div>

                    <div class="works-card__detail-link">
                      <a class="works-card__link" href="<?php the_permalink(); ?>">制作詳細はこちら</a>
                    </div>
                  </article>
                <?php endwhile; ?>
              <?php endif;
              wp_reset_postdata(); ?>
              <!-- ===== 作品制作実績 ここまで ===== -->

              <!-- ===== ページ遷移ボタン ===== -->
              <!-- <div class="primary-button">
              <a class="primary-button__link" href="/works-cat/handmade-works/">ハンドメイド 一覧
                <span class="primary-button__arrow"></span></a>
            </div> -->
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