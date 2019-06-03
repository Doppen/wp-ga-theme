<div class="homepageItems">
  <?php
  wp_reset_postdata();

  $args = array(
      'post_type' => 'partners',
      'order'     => 'ASC'
  );
  query_posts( $args );

  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
    if ( has_post_thumbnail() ) {?>
      <img src="<?php the_post_thumbnail_url('medium') ?>)">
    <?php } 
    endwhile;
  endif;
  ?>
</div>
