<!-- ===================================================
  archive-works.php
  カスタム投稿 Works 制作実績一覧ページ
================================================== -->
<?php get_header(); ?>

<div class="container">

  <!-- ⬇︎ /////////////////// sidebar.php 読み込み /////////////////// ⬇︎ -->
  <?php get_sidebar(); ?>

  <!-- =================================================== ページ内コンテンツ Start =================================================== -->
  <div class="contents">
    <div class="contents__inner">

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

      <!-- ⬇︎ /////////////////// Works 制作実績 Start /////////////////// ⬇︎ -->
      <article class="contents__article contents__article--works">
        <section class="contents__article-inner">
          <!-- ===== コンテンツ見出し Heading ※子カテゴリーページのみ表示 ===== -->
          <h1 class="contents-heading">
            <span class="contents-heading__main">
              Works
            </span>
            <span class="contents-heading__sub">
              <?php single_cat_title(); ?>
            </span>
          </h1>

          <!-- ===== コンテンツ見出し Heading ※子カテゴリーページのみ表示 ===== -->
          <!-- ⬇︎ /////////////////// Works ナビゲーション Start /////////////////// ⬇︎ -->
          <div class="category-nav is-pc">
            <!-- ===== カテゴリーナビ 出力 ===== -->
            <?php
            wp_nav_menu(array(
              'menu' => 'works_menu',
              'theme_location' => 'category-nav',
              'menu_class' => 'category-nav__list',
              'container' => false,
              'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
            ));
            ?>
          </div>
          <!-- ⬆︎ /////////////////// Works ナビゲーション End /////////////////// ⬆︎ -->

          <!-- ⬇︎ /////////////////// Works Webサイト / UIUXデザイン Start /////////////////// ⬇︎ -->
          <?php if (is_object_in_term($post->ID, 'works-cat', array('web-site', 'ui-ux-design'))) : ?>
            <div class="works-list">
              <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post();
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

              <?php else : ?>
                何も投稿がありません。
              <?php endif; ?>
            </div>
            <!-- ⬆︎ /////////////////// Works Webサイト / UIUXデザイン End /////////////////// ⬆︎ -->


            <!-- ⬇︎ /////////////////// Works ハンドメイド カテゴリー Start /////////////////// ⬇︎ -->
          <?php elseif ((is_object_in_term($post->ID, 'works-cat', array('photoshop', 'illustrator', 'handmade-works')))) : ?>
            <div class="works-list">
              <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post();
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
                    </div>

                    <div class="works-card__detail-link">
                    <a class="works-card__link" href="<?php the_permalink(); ?>">制作詳細はこちら</a>
                  </div>

                  </article>

                <?php endwhile; ?>

              <?php else : ?>
                何も投稿がありません。
              <?php endif; ?>
              <!-- ⬆︎ /////////////////// Works ハンドメイド End /////////////////// ⬆︎ -->
            <?php else : ?>

            <?php endif; ?>

            <!-- ##### ページネーションの指定 ##### -->
            <?php
            set_query_var('paging_query', $wp_query);
            get_template_part('templates/pagination');
            ?>

            </div>
            <!-- ===== 作品制作実績 ここまで ===== -->
        </section>
      </article>

      <!-- ⬆︎ /////////////////// Works ナビゲーション End /////////////////// ⬆︎ -->
    </div>
  </div>
  <?php get_footer(); ?>