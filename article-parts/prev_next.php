<!-- ===================================================
  prev_next.php
  ブログ記事 前後記事のボタン実装
================================================== -->
<div class="blog-prev_next">
          <!-- ⬇︎ ############ 前後の記事ナビ Start ############ ⬇︎ -->
          <?php // 現在の投稿に隣接している前後の投稿を取得する
          $prev_post = get_previous_post(true); // 前の投稿を取得
          $next_post = get_next_post(true); // 次の投稿を取得
          if ($prev_post || $next_post) : // どちらか一方があれば表示
          ?>
            <ul class="blog-prev_next__list blog-prev_next__list--next">
              <?php if ($prev_post) : // 前の投稿があれば表示 
              ?>
                <a href="<?php echo get_permalink($prev_post->ID); ?>" class="blog-prev_next__item">
                  <div class="blog-prev_next__btn">
                    <span>&lt;&lt; Prev</span>
                  </div>
                  <div class="blog-prev_next__label">

                    <!-- サムネイル ここから -->
                    <div class="blog-prev_next__thumb">
                      <?php if (get_the_post_thumbnail($prev_post->ID)) : // 前の投稿に画像があれば表示 
                      ?>
                        <?php echo get_the_post_thumbnail($prev_post->ID, 'full'); ?>
                      <?php else : // 画像がなければ代替画像を表示 
                      ?>
                        <img src="http://yukuro-createfolio.local/wp-content/uploads/2023/03/img_sample-img.jpg" alt="代替画像">
                      <?php endif; ?>
                    </div>
                    <!-- サムネイル ここまで -->

                    <div class="blog-prev_next__title-inner">
                      <p class="blog-prev_next__title-text">
                        <?php echo get_the_title($prev_post->ID); ?>
                      </p>
                    </div>
                    

                  </div>
                </a>
              <?php endif; ?>

              <?php if ($next_post) : // 次の投稿があれば表示 
              ?>
                <a href="<?php echo get_permalink($next_post->ID); ?>" class="blog-prev_next__item blog-prev_next__item--next">
                  <div class="blog-prev_next__btn blog-prev_next__btn--next">
                    <span>Next &gt;&gt;</span>
                  </div>

                  <div class="blog-prev_next__label">

                    <div class="blog-prev_next__title-inner">
                      <p class="blog-prev_next__title-text">
                        <?php echo get_the_title($next_post->ID); ?>
                      </p>
                      <time class="new-article__date">
                      <?php the_time('Y.m.d'); ?>
                    </time>
                    </div>
                    <!-- サムネイル ここから -->
                    <div class="blog-prev_next__thumb">
                      <?php if (get_the_post_thumbnail($next_post->ID)) : // 前の投稿に画像があれば表示 
                      ?>
                        <?php echo get_the_post_thumbnail($next_post->ID, 'full'); ?>
                      <?php else : // 画像がなければ代替画像を表示 
                      ?>
                        <img src="http://yukuro-createfolio.local/wp-content/uploads/2023/03/img_sample-img.jpg" alt="代替画像">
                      <?php endif; ?>
                    </div>
                    <!-- サムネイル ここまで -->

                  </div>
                </a>
              <?php endif; ?>
            </ul>
          <?php endif; ?>
          <!-- ⬆︎ ############ 前後の記事ナビ End ############ ⬆︎ -->
        </div>