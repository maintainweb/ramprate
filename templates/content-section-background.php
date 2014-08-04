<?php
global $r;
$background_image = get_sub_field('section_background_image');
$background_color = get_sub_field('section_background_color');
$background_size = get_sub_field('section_background_size');
$background_repeat = get_sub_field('section_background_repeat');

$rgb = hex2rgba($background_color);
$rgba_full = hex2rgba($background_color, 1.00);
$rgba_clear = hex2rgba($background_color, 0.01);

  if( !empty($background_image) ):

    // vars
    $url = $background_image['url'];
    $title = $background_image['title'];
    $alt = $background_image['alt'];
    $caption = $background_image['caption'];

    // sizes
    $size = 'large';
    $med = $background_image['sizes'][ $size ];
    $medwidth = $background_image['sizes'][ $size . '-width' ];
    $medheight = $background_image['sizes'][ $size . '-height' ];

endif; ?>

<style>
  .single-page-section-<?php echo $r; ?> {
  <?php if( !empty($background_image) ): ?>
      background-image: url(<?php echo $med; ?>);
  <?php endif; ?>
  <?php if( !empty($background_color) ): ?>
      background-color: <?php echo $background_color; ?>;
  <?php endif; ?>
  <?php if( !empty($background_size) ): ?>
      background-size: <?php echo $background_size; ?>;
  <?php endif; ?>
  <?php if( !empty($background_repeat) ): ?>
      background-repeat: <?php echo $background_repeat; ?>;
  <?php endif; ?>
  }
  <?php if( empty($background_image) ): ?>
  .single-page-section-<?php echo $r; ?>:before, .single-page-section-<?php echo $r; ?>:after {
    display: none!important;
  }
  <?php endif; ?>

  .single-page-section-<?php echo $r; ?>:before {
    /*background-color: <?php echo $background_color;?>*/
    background-image: -webkit-gradient(linear, left top, left bottom, from(<?php echo $rgba_full; ?>), to(<?php echo $rgba_clear; ?>));
    background-image: -webkit-linear-gradient(top, <?php echo $rgba_full; ?>, <?php echo $rgba_clear; ?>);
    background-image: -moz-linear-gradient(top, <?php echo $rgba_full; ?>, <?php echo $rgba_clear; ?>);
    background-image: -o-linear-gradient(top, <?php echo $rgba_full; ?>, <?php echo $rgba_clear; ?>);
    background-image: -ms-linear-gradient(top, <?php echo $rgba_full; ?>, <?php echo $rgba_clear; ?>);
    background-image: linear-gradient(top, <?php echo $rgba_full; ?>, <?php echo $rgba_clear; ?>);
    filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,StartColorStr='<?php echo $background_color;?>', EndColorStr='<?php echo $background_color;?>');
  }

  .single-page-section-<?php echo $r; ?>:after {
    /*background-color: <?php echo $background_color;?>;*/
    background-image: -webkit-gradient(linear, left top, left bottom, from(<?php echo $rgba_clear; ?>), to(<?php echo $rgba_full; ?>));
    background-image: -webkit-linear-gradient(top, <?php echo $rgba_clear; ?>, <?php echo $rgba_full; ?>);
    background-image: -moz-linear-gradient(top, <?php echo $rgba_clear; ?>, <?php echo $rgba_full; ?>);
    background-image: -o-linear-gradient(top, <?php echo $rgba_clear; ?>, <?php echo $rgba_full; ?>);
    background-image: -ms-linear-gradient(top, <?php echo $rgba_clear; ?>, <?php echo $rgba_full; ?>);
    background-image: linear-gradient(top, <?php echo $rgba_clear; ?>, <?php echo $rgba_full; ?>);
    filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,StartColorStr='<?php echo $background_color;?>', EndColorStr='<?php echo $background_color;?>');
  }

</style>