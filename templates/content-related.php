<?php
$posts = get_field('related');
$row_count = count($posts);
if ($row_count == 1) { $class = array('col-xs-12', 'col-sm-4', 'col-md-4', 'col-lg-4'); }
if ($row_count == 2) { $class = array('col-xs-12', 'col-sm-4', 'col-md-4', 'col-lg-4'); }
if ($row_count == 3) { $class = array('col-xs-12', 'col-sm-4', 'col-md-4', 'col-lg-4'); }
if ($row_count == 4) { $class = array('col-xs-12', 'col-sm-3', 'col-md-3', 'col-lg-3'); }
if ($row_count == 5) { $class = array('col-xs-12', 'col-sm-3', 'col-md-3', 'col-lg-3'); }
if ($row_count == 6) { $class = array('col-xs-12', 'col-sm-2', 'col-md-2', 'col-lg-2'); }
$classes = implode(" ",$class);
  if( $posts ): ?>
<div class="well well-related">
  <h4>Related</h4>
  <div class="row">
  <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
    <?php setup_postdata($post); ?>
    <div class="<?php echo $classes; ?>">
      <div class="related-item-wrap">
        <a href="<?php the_permalink(); ?>"><?php get_template_part('templates/content', 'featured-image'); ?></a>
        <a class="related-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </div>
    </div>
  <?php endforeach; ?>
  </div>
</div>
<?php wp_reset_postdata();  ?>
<?php endif; ?>