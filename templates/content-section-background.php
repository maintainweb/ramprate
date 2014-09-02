<?php
global $r;
$background_image = get_sub_field('section_background_image');
$background_color = get_sub_field('section_background_color');
$background_size = get_sub_field('section_background_size');
$background_repeat = get_sub_field('section_background_repeat');
$background_position = get_sub_field('section_background_position');
$background_position_horizontal = get_sub_field('section_background_position_horizontal');
$background_position_vertical = get_sub_field('section_background_position_vertical');

$fade_background_top_color = get_sub_field('fade_background_top_color');
$fade_background_bottom_color = get_sub_field('fade_background_bottom_color');

$fade_background_top_height = get_sub_field('fade_background_top_height');
$fade_background_bottom_height = get_sub_field('fade_background_bottom_height');

$rgb = hex2rgba($background_color);
$rgba_full = hex2rgba($background_color, 1.00);
$rgba_clear = hex2rgba($background_color, 0.01);

$rgb_fade_top = hex2rgba($fade_background_top_color);
$rgba_full_fade_top = hex2rgba($fade_background_top_color, 1.00);
$rgba_clear_fade_top = hex2rgba($fade_background_top_color, 0.01);

$rgb_fade_bottom = hex2rgba($fade_background_bottom_color);
$rgba_full_fade_bottom = hex2rgba($fade_background_bottom_color, 1.00);
$rgba_clear_fade_bottom = hex2rgba($fade_background_bottom_color, 0.01);

  if( !empty($background_image) ):

    // vars
    $url = $background_image['url'];
    $title = $background_image['title'];
    $alt = $background_image['alt'];
    $caption = $background_image['caption'];

    // sizes
    $size = 'large';
    $large = $background_image['sizes'][ $size ];
    $largewidth = $background_image['sizes'][ $size . '-width' ];
    $largeheight = $background_image['sizes'][ $size . '-height' ];

endif; ?>

<style>
  .single-page-section-<?php echo $r; ?> {
  <?php if( !empty($background_image) ): ?>
      background-image: url(<?php echo $large; ?>);
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
  <?php if( !empty($background_position) && get_sub_field('section_background_position') != "percentage") : ?>
      background-position: <?php echo $background_position; ?>;
  <?php endif; ?>
  <?php if(get_sub_field('section_background_position') == "percentage") : ?>
      background-position: <?php echo $background_position_horizontal; ?>% <?php echo $background_position_vertical; ?>%;
  <?php endif; ?>
  }

<?php if( get_sub_field('fade_background_top') ) { ?>
  .single-page-section-<?php echo $r; ?>:before {
    height: <?php echo $fade_background_top_height; ?>px;
    background-image: -webkit-gradient(linear, left top, left bottom, from(<?php echo $rgba_full_fade_top; ?>), to(<?php echo $rgba_clear_fade_top; ?>));
    background-image: -webkit-linear-gradient(top, <?php echo $rgba_full_fade_top; ?>, <?php echo $rgba_clear_fade_top; ?>);
    background-image: -moz-linear-gradient(top, <?php echo $rgba_full_fade_top; ?>, <?php echo $rgba_clear_fade_top; ?>);
    background-image: -o-linear-gradient(top, <?php echo $rgba_full_fade_top; ?>, <?php echo $rgba_clear_fade_top; ?>);
    background-image: -ms-linear-gradient(top, <?php echo $rgba_full_fade_top; ?>, <?php echo $rgba_clear_fade_top; ?>);
    background-image: linear-gradient(top, <?php echo $rgba_full_fade_top; ?>, <?php echo $rgba_clear_fade_top; ?>);
    filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,StartColorStr='<?php echo $fade_background_top_color;?>', EndColorStr='<?php echo $fade_background_top_color;?>');
  }
<?php } else { ?>
  .single-page-section-<?php echo $r; ?>:before {
    display: none!important;
  }
<?php } ?>
<?php if( get_sub_field('fade_background_bottom') ) { ?>
  .single-page-section-<?php echo $r; ?>:after {
    height: <?php echo $fade_background_bottom_height; ?>px;
    /*background-color: <?php echo $fade_background_bottom_color ;?>;*/
    background-image: -webkit-gradient(linear, left top, left bottom, from(<?php echo $rgba_clear_fade_bottom; ?>), to(<?php echo $rgba_full_fade_bottom; ?>));
    background-image: -webkit-linear-gradient(top, <?php echo $rgba_clear_fade_bottom; ?>, <?php echo $rgba_full_fade_bottom; ?>);
    background-image: -moz-linear-gradient(top, <?php echo $rgba_clear_fade_bottom; ?>, <?php echo $rgba_full_fade_bottom; ?>);
    background-image: -o-linear-gradient(top, <?php echo $rgba_clear_fade_bottom; ?>, <?php echo $rgba_full_fade_bottom; ?>);
    background-image: -ms-linear-gradient(top, <?php echo $rgba_clear_fade_bottom; ?>, <?php echo $rgba_full_fade_bottom; ?>);
    background-image: linear-gradient(top, <?php echo $rgba_clear_fade_bottom; ?>, <?php echo $rgba_full_fade_bottom; ?>);
    filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,StartColorStr='<?php echo $fade_background_bottom_color;?>', EndColorStr='<?php echo $fade_background_bottom_color;?>');
  }
<?php } else { ?>
  .single-page-section-<?php echo $r; ?>:after {
    display: none!important;
  }
<?php } ?>
</style>