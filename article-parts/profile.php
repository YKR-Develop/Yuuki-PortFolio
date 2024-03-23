<!-- ===================================================
  profile.php
  ブログ記事内プロフィールを実装
================================================== -->
<div class="blog-profile">
  <div class="blog-profile__icon-profile">
    <div class=blog-profile__profile-left>
      <?php echo get_avatar(get_the_author_id(), 100); ?>
    </div>
    <div class=blog-profile__profile-right>
      <p class="blog-profile__text"><?php the_author_nickname(); ?></p>
      <p class="blog-profile__text">新潟県出身 現在は千葉在住</p>
      <p class="blog-profile__text"><?php the_author_meta('job'); ?></p>
    </div>
  </div>
  <div class="blog-profile__desc">
    <?php echo wpautop(the_author_meta('description')); ?>
  </div>
  <div class="blog-profile__link-about">
      <a class="blog-profile__link" href="/about/#about-me">
        <?php the_author_meta('profile-link'); ?>
      </a>
    </div>
</div>