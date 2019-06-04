<div class="partners">
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
      <div class="partnerItem">
        <a href="<?php echo get_post_meta($post->ID, 'partner_url', true); ?>">
          <img src="<?php the_post_thumbnail_url('thumb') ?>)">
        </a>
      </div>


    <?php }
    endwhile;
  endif;
  ?>
</div>
