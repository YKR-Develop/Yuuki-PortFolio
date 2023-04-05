<?php get_header(); ?>
 
  <?php while ( have_posts() ) : the_post(); ?>
 
  <?php $terms = get_the_terms($post->ID, 'tax_works'); ?>
 
  <article>
    <header>
      <h1 class="ttl"><?php the_title(); ?></h1>
      <time datetime="the_time( 'Y-m-d' )"><?php the_time( 'Y.m.d' ); ?></time>
 
      <?php if (!empty($terms)) : ?>
      <?php foreach ( $terms as $term ) : ?>
      <span class="category"><?php echo $term->name; ?></span>
      <?php endforeach; ?>
      <?php endif; ?>
 
      </header>
      <div class="edit-area">
        <?php the_content(); ?>
      </div>
    </article>
  <?php endwhile; ?>
 
  <?php get_footer(); ?>
 
  