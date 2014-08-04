<?php
  $image = get_sub_field('image');
        if( !empty($image) ):

          // vars
          $url = $image['url'];
          $title = $image['title'];
          $alt = $image['alt'];
          $caption = $image['caption'];

          // sizes
          $size = 'large';
          $large = $image['sizes'][ $size ];
          $width = $image['sizes'][ $size . '-width' ];
          $height = $image['sizes'][ $size . '-height' ];

?>

<img class="img-responsive" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" src="<?php echo $large; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" >

<?php endif; ?>
<?php if( empty($image) ) { ?>
  <img class="img-responsive" src="http://placehold.it/670x400&text=placeholder">
<?php }