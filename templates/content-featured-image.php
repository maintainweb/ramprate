<?php
$size = 'medium';
$class = 'img-responsive img-thumbnail';
if ( has_post_thumbnail() ) {
  the_post_thumbnail($size, array('class' => $class));
} else { ?>
  <img class="<?php echo $class; ?>" src="http://placehold.it/350x150&text=placeholder">
<?php }