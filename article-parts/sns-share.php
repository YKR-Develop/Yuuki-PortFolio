<!-- ===================================================
  sns-share.php
  snsシェアボタンの実装
================================================== -->
<?php
$url_encode = urlencode(get_permalink());
$title_encode = urlencode(get_the_title()) . '|' . get_bloginfo('name');
?>

<section class="sns-share">
  <h3 class="sns-share__heading">SNSシェア</h3>
  <ul class="sns-share__list">

    <!-- ##### Twitter ##### -->
    <li class="sns-share__item">
      <a class="sns-share__link sns-share__link--twitter" href="http://twitter.com/share?text=<?php echo urlencode(the_title_attribute('echo=0')); ?>&url=<?php the_permalink(); ?>" rel="nofollow" target="_blank">
        <i class="fa-brands fa-twitter sns-share__icon"></i>
        <span class="sns-share__label">Twitter</span>
      </a>
    </li>

    <!-- ##### Facebook ##### -->
    <li class="sns-share__item">
      <a class="sns-share__link sns-share__link--facebook" href="//www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode; ?>&t=<?php echo $title_encode; ?>" target="_blank">
        <i class="fa-brands fa-facebook-f sns-share__icon"></i>
        <span class="sns-share__label">Facebook</span></a>
    </li>

    <!-- ##### LINE ##### -->
    <li class="sns-share__item">
      <a class="sns-share__link sns-share__link--line" href="//social-plugins.line.me/lineit/share?url=<?php echo $url_encode; ?>" target="_blank">
        <i class="fa-brands fa-line  sns-share__icon"></i>
        <span class="sns-share__label">LINE</span></a>
    </li>

    <!-- ##### はてブ ##### -->
    <li class="sns-share__item">
      <a class="sns-share__link sns-share__link--hatebu" href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php the_permalink(); ?>" rel="nofollow" target="_blank">
        <div class="sns-share__icon sns-share__icon--font">B!</div>
        <span class="sns-share__label">はてブ</span></a>
    </li>

    <!-- ##### Pinterest ##### -->
    <li class="sns-share__item">
      <a class="sns-share__link sns-share__link--pinterest" href="//pinterest.com/pin/create/button/?url=<?php echo $url_encode; ?>" target="_blank">
        <i class="fa-brands fa-pinterest-p sns-share__icon"></i>
        <span class="sns-share__label">Pinterest</span></a>
    </li>

    <!-- ##### Pocket ##### -->
    <li class="sns-share__item">
      <a class="sns-share__link sns-share__link--pocket" href="//www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode; ?>&t=<?php echo $title_encode; ?>" onclick="javascript:window.open(this.href, '_blank','noreferrer','menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;">
        <i class="fa-brands fa-get-pocket sns-share__icon"></i>
        <span class="sns-share__label">Pocket</span></a>
    </li>
  </ul>
</section>