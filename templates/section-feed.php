<?php
global $r;
$post_type = get_sub_field('post_type');
$feed_items = get_sub_field('feed_items');
$order = get_sub_field('order');
$orderby = get_sub_field('order_by');
$section_title = get_sub_field('section_title');
$section_id = get_sub_field('id');
?>
<?php get_template_part('templates/content', 'section-background'); ?>
<?php get_template_part('templates/content', 'section-styles'); ?>
<section id="<?php echo $section_id; ?>" class="single-page-section single-page-section-feed single-page-section-<?php echo $r; ?>" <?php get_template_part('templates/data', 'stellar'); ?>>
<div class="container logos-wrap">
  <div class="row">
    <div class="inner-col">
      <div class="col-xs-12">
        <h2 class="text-center"><?php get_template_part('templates/content', 'section-title'); ?></h2>
        <div class="row">
            <?php
              // WP_Query arguments
              $args = array (
                'post_type'              => $post_type,
                'posts_per_page'         => $feed_items,
                'order'                  => $order,
                'orderby'                => $orderby
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