<?php
$menu_class = 'list-group';
$before = '<div class="list-group-item">';
$after = '</div>';
$theme_location = 'resource_navigation';
?>
<?php get_template_part('templates/page', 'header'); ?>
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

            <?php if (!have_posts()) : ?>
              <div class="alert alert-warning">
                <?php _e('Sorry, no results were found.', 'roots'); ?>
              </div>
              <?php get_search_form(); ?>
            <?php endif; ?>

            <?php while (have_posts()) : the_post(); ?>
              <?php get_template_part('templates/content', 'taxonomy-type'); ?>
            <?php endwhile; ?>

            <?php if ($wp_query->max_num_pages > 1) : ?>
              <nav class="post-nav">
                <ul class="pager">
                  <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
                  <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
                </ul>
              </nav>
            <?php endif; ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
