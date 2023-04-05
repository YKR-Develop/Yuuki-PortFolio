<!-- ===================================================
  sns.php
  snsのリンク・アイコンを実装
================================================== -->
<?php
$url_encode = urlencode(get_permalink());
$title_encode = urldecode(get_the_title()) . '|' . get_bloginfo('name');
?>


<!-- ===== SNSメニュー内表示 ===== -->
<div class="sns-menu">
  <ul class="sns-menu__list">
    <!--ツイッターボタン-->
    <li class="sns-menu__item">
      <a class="sns-menu__link" href="Twitter:URL">
        <img class="sns-menu__icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ico/ico_twitter-footer.svg" alt="Twitter">
      </a>
    </li>

    <!--Instagramボタン-->
    <li class="sns-menu__item">
      <a class="sns-menu__link" href="Instagram:URL">
        <img class="sns-menu__icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ico/ico_instagram-footer.svg" alt="Instagram">
      </a>
    </li>

    <!--Pinterestボタン-->
    <li class="sns-menu__item">
      <a class="sns-menu__link" href="Pinterest:URL">
        <img class="sns-menu__icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ico/ico_pinterest-footer.svg" alt="Pinterest">
      </a>
    </li>
    
  </ul>
</div>
<!-- ===== SNSメニュー内表示  ===== -->


<!-- ===== SNSシェアボタン ===== -->
<div class="sns-share">
  <ul class="footer-pc__sns-item">
    <a class="footer-pc__sns-link" href="Twitter:URL">
      <img class="footer-pc__sns-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ico/ico_twitter-footer.svg" alt="Twitter">
    </a>
  </ul>
  <ul class="footer-pc__sns-item">
    <a class="footer-pc__sns-link" href="Instagram:URL">
      <img class="footer-pc__sns-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ico/ico_instagram-footer.svg" alt="Instagram">
    </a>
  </ul>
  <ul class="footer-pc__sns-item">
    <a class="footer-pc__sns-link" href="Pinterest:URL">
      <img class="footer-pc__sns-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ico/ico_pinterest-footer.svg" alt="Pinterest">
    </a>
  </ul>
</div>
<!-- ===== SNSシェアボタン ===== -->