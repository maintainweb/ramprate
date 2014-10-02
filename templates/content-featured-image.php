<?php
if (is_home() || is_post_type_archive( 'post' ) || is_search()){
  $size = 'large-banner';
  $placeholder_size = '620x300';
  $class = 'img-responsive img-thumbnail img-large-banner';
} elseif (is_tax('type') || is_post_type_archive( 'resource' )) {
  $size = 'medium';
  $placeholder_size = '231x300';
  $class = 'img-responsive img-thumbnail img-medium';
} else {
  $size = 'medium';
  $placeholder_size = '231x300';
  $class = 'img-responsive img-thumbnail img-medium';
}
if ( has_post_thumbnail() ) {
  the_post_thumbnail($size, array('class' => $class));
} else { ?>
  <img class="<?php echo $class; ?>" src="http://placehold.it/<?php echo $placeholder_size; ?>&text=placeholder <?php echo $placeholder_size; ?>">
<?php }