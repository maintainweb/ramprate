<?php
$post_objects = get_sub_field('column');
$row_count = count($post_objects);
if ($row_count == 1) {
  $class = array('col-xs-12', 'col-sm-6', 'col-md-6', 'col-lg-6');
  $offset = array('col-sm-offset-3', 'col-md-offset-3', 'col-lg-offset-3');
}
if ($row_count == 2) {
  $class = array('col-xs-12', 'col-sm-6', 'col-md-6', 'col-lg-6');
}
if ($row_count == 3) {
  $class = array('col-xs-12', 'col-sm-4', 'col-md-4', 'col-lg-4');
}
if ($row_count == 4) {
  $class = array('col-xs-12', 'col-sm-3', 'col-md-3', 'col-lg-3');
}
if ($row_count == 5) {
  $class = array('col-xs-12', 'col-sm-2', 'col-md-2', 'col-lg-2');
  $offset = array('col-sm-offset-1', 'col-md-offset-1', 'col-lg-offset-1');
}
if ($row_count == 6) {
  $class = array('col-xs-12', 'col-sm-2', 'col-md-2', 'col-lg-2');
}

if( !empty($class) ) {
  $classes = implode(" ",$class);
}
if( !empty($offset) ) {
  $offsets = implode(" ",$offset);
}
$count = 1;
if( $post_objects ): ?>
<div class="row">
  <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
    <?php setup_postdata($post); ?>
    <div class="<?php echo $classes; ?><?php if ($count == 1) { echo $offsets;} ?> <?php echo 'column-item-' . $count; ?>">
        <a href="<?php the_permalink(); ?>"><?php get_template_part('templates/content', 'featured-image'); ?></a>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php if(get_sub_field('show_excerpt')) { the_excerpt(); } ?>
    </div>
    <?php $count++; ?>
  <?php endforeach; ?>
  <?php wp_reset_postdata(); ?>
</div>
<?php endif;