<?php
$post_type = get_field('post_type');
$feed_items = get_field('feed_items');
?>
<div class="container logos-wrap">
  <div class="row">
    <div class="inner-col">
      <div class="col-xs-12">
        <div class="row">
            <?php
              // WP_Query arguments
              $args = array (
                'post_type'              => $post_type,
                'posts_per_page'         => $feed_items,
                'order'                  => 'ASC',
                'orderby'                => 'menu_order',
              );

              // The Query
              $query = new WP_Query( $args );

              // The Loop
              if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                  $query->the_post(); ?>
                    <?php get_template_part('templates/content', 'client'); ?>
                <?php }
              } else {

              } wp_reset_postdata(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>