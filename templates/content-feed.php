<?php
$heading = get_field('heading');
$lead = get_field('lead');
$feed_items = get_field('feed_items');
$height = get_field('height');
$secondary_menu_name = get_field('secondary_navbar');
//$negitivemargintop = ( $height * 0.25 );

$menu_class = 'list-group';
$before = '<div class="list-group-item">';
$after = '</div>';
$theme_location = 'resource_navigation';

if(get_field('post_type')) {
  $post_type = get_field('post_type');
} else {
  $post_type = get_post_type( get_the_ID() );
}
if(is_tax('type')) {
  $post_type = 'resource';
}
?>
<?php get_template_part('templates/content', 'modal-signup'); ?>
<div class="container feed-wrap">
  <div class="row">
    <div class="col-sm-12 inner-col">
      <div class="row">
        <div class="col-sm-3 col-sidebar">
          <div class="inner-col-sidebar">
            <?php
                wp_nav_menu(array(
                            //'menu'        => $secondary_menu_name,
                            'theme_location' => $theme_location,
                            'menu_class'  => $menu_class,
                            'before'      => $before,
                            'after'       => $after,));
            ?>
          </div>
        </div>
        <div class="col-sm-9 col-feed">
          <div class="row">
            <div class="col-sm-12">
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
                  <article <?php post_class(); ?>>
                    <div class="row">
                      <div class="col-sm-4">
                        <a href="<?php if ( is_user_logged_in() ) { the_permalink(); } else {?>#modal-signup<?php } ?>"<?php if ( is_user_logged_in() ) { } else { ?> data-toggle="modal" data-target="#modal-signup"<?php } ?>><?php get_template_part('templates/content', 'featured-image'); ?></a>
                      </div>
                      <div class="col-sm-8">
                        <header>
                          <h3 class="entry-title"><a href="<?php if ( is_user_logged_in() ) { the_permalink(); } else {?>#modal-signup<?php } ?>"<?php if ( is_user_logged_in() ) { } else { ?> data-toggle="modal" data-target="#modal-signup"<?php } ?>><i class="fa fa-file-pdf-o"></i> <?php the_title(); ?></a></h3>
                        </header>
                        <div class="entry-summary">
                          <?php the_excerpt(); ?>
                        </div>
                        <footer>
                          <?php get_template_part('templates/content', 'file'); ?>
                          <a class="btn btn-primary btn-sm btn-view" href="<?php if ( is_user_logged_in() ) { the_permalink(); } else { ?>#modal-signup<?php } ?>"<?php if ( is_user_logged_in() ) { } else { ?> data-toggle="modal" data-target="#modal-signup"<?php } ?>>View <?php the_title(); ?> <i class="fa fa-arrow-right"></i></a>
                        </footer>
                      </div>
                    </div>
                  </article>

                <?php }
              } else {

              }

              wp_reset_postdata(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>