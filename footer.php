<!-- ===================================================
  footer.php
  共通フッターパーツの定義
================================================== -->

<!-- ⬇︎-------------------------------------------------
  フッター PC画面
-------------------------------------------------⬇︎ -->
<footer class="footer-pc is-tab">

  <div class="footer-pc__inner">
    <!-- ===== フッターロゴ 出力 ===== -->
    <?php the_custom_logo(); ?>

    <!-- ===== フッターナビ 出力 ===== -->
    <?php
    wp_nav_menu(array(
      'theme_location' => 'footer-nav',
      'menu_class' => 'menu',
      'container' => false,
      'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
    ));
    ?>

    <!-- ===== ソーシャルナビ 出力 ===== -->
    <?php
    wp_nav_menu(array(
      'theme_location' => 'social-nav',
      'menu_class' => 'sns-menu',
      'container' => false,
      'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
    ));
    ?>


    <!-- ===== フッターサブナビゲーション Footer-SubNav ===== -->
    <?php
    wp_nav_menu(array(
      'theme_location' => 'sub-nav',
      'menu_class' => 'footer-subnav',
      'container' => false,
      'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
    ));
    ?>
    <!-- ===== フッターサブナビゲーション Footer-SubNav ===== -->

    <!-- ===== フッターコピーライト Footer-CopyRight ===== -->
    <small class="footer-pc__copyright">&copy;<?php echo date('Y'); ?> <a class="footer-pc__copyright-text" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name') ?></a>.ALL Rights Reserved.</small>
    <!-- ===== フッターコピーライト Footer-CopyRight ===== -->
  </div>
</footer>

<!-- ======================================================================= -->

<!-- ⬇︎-------------------------------------------------
  フッター SP画面
-------------------------------------------------⬇︎ -->
<footer class="footer-sp is-sp">
  <!-- ===== フッターロゴ 出力 ===== -->
  <div class="footer-sp__inner">
    <?php the_custom_logo(); ?>

    <!-- アコーディオンナビゲーション ここから ***************** -->
    <div class="accordion">
      <!-- ===== アコーディオンメニュー 出力 ===== -->
      <?php
      wp_nav_menu(array(
        'theme_location' => 'accordion-menu',
        'menu_class' => 'accordion-footer',
        'container' => false,
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
      ));
      ?>
    </div>
    <!-- アコーディオンナビゲーション ここまで ***************** -->

    <!-- ===== SNSナビ SNS-Nav ===== -->
    <!-- ===== ソーシャルナビ 出力 ===== -->
    <?php
    wp_nav_menu(array(
      'theme_location' => 'social-nav',
      'menu_class' => 'sns-menu',
      'container' => false,
      'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
    ));
    ?>
    <!-- ===== SNSナビ SNS-Nav ===== -->
    <div class="accordion-overlay"></div>

    <!-- ===== フッターサブナビゲーション Footer-SubNav ===== -->
    <?php
    wp_nav_menu(array(
      'theme_location' => 'sub-nav',
      'menu_class' => 'footer-subnav',
      'container' => false,
      'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
    ));
    ?>
    <!-- ===== フッターサブナビゲーション Footer-SubNav ===== -->

    <!-- ===== フッターコピーライト Footer-CopyRight ===== -->
    <small class="footer-sp__copyright">&copy;2024 Yuuki-PortFolio. ALL Rights Reserved.</small>
    <!-- ===== フッターコピーライト Footer-CopyRight ===== -->
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<!-- ======================================================================= -->
<?php wp_footer(); ?>
</body>

</html>