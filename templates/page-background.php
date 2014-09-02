<?php
if( get_field('background_image') ) { $background_image = get_field('background_image'); }
else { $background_image = get_field('background_image', 'options'); };
if( get_field('background_color') ) { $background_color = get_field('background_color'); }
else { $background_color = get_field('background_color', 'options'); };
if( get_field('background_size') ) { $background_size = get_field('background_size'); }
else { $background_size = get_field('background_size', 'options'); };
if( get_field('background_repeat') ) { $background_repeat = get_field('background_repeat'); }
else { $background_repeat = get_field('background_repeat', 'options'); };
if( get_field('height') ) { $height = get_field('height'); }
else { $height = get_field('height', 'options'); };
if( get_field('background_position') ) { $background_position = get_field('background_position'); }
else { $background_position = get_field('background_position', 'options'); };
if( get_field('background_position_horizontal') ) { $background_position_horizontal = get_field('background_position_horizontal'); }
else { $background_position_horizontal = get_field('background_position_horizontal', 'options'); };
if( get_field('background_position_vertical') ) { $background_position_vertical = get_field('background_position_vertical'); }
else { $background_position_vertical = get_field('background_position_vertical', 'options'); };
if( get_field('fade_background_top_color') ) { $fade_background_top_color = get_field('fade_background_top_color'); }
else { $fade_background_top_color = get_field('fade_background_top_color', 'options'); };
if( get_field('fade_background_bottom_color') ) { $fade_background_bottom_color = get_field('fade_background_bottom_color'); }
else { $fade_background_bottom_color = get_field('fade_background_bottom_color', 'options'); };
if( get_field('fade_background_top_height') ) { $fade_background_top_height = get_field('fade_background_top_height'); }
else { $fade_background_top_height = get_field('fade_background_top_height', 'options'); };
if( get_field('fade_background_bottom_height') ) { $fade_background_bottom_height = get_field('fade_background_bottom_height'); }
else { $fade_background_bottom_height = get_field('fade_background_bottom_height', 'options'); };

$rgb        = hex2rgba($background_color);
$rgba_full  = hex2rgba($background_color, 1.00);
$rgba_clear = hex2rgba($background_color, 0.01);

$rgb_fade_top         = hex2rgba($fade_background_top_color);
$rgba_full_fade_top   = hex2rgba($fade_background_top_color, 1.00);
$rgba_clear_fade_top  = hex2rgba($fade_background_top_color, 0.01);

$rgb_fade_bottom        = hex2rgba($fade_background_bottom_color);
$rgba_full_fade_bottom  = hex2rgba($fade_background_bottom_color, 1.00);
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
  .header {
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
  <?php if( !empty($background_position) && get_field('background_position') != "percentage") : ?>
      background-position: <?php echo $background_position; ?>;
  <?php endif; ?>
  <?php if(get_field('background_position') == "percentage") : ?>
      background-position: <?php echo $background_position_horizontal; ?>% <?php echo $background_position_vertical; ?>%;
  <?php endif; ?>
  }

<?php if( get_field('fade_background_top') || get_field('fade_background_top', 'options') ) { ?>
  .header:before {
    height: <?php echo $fade_background_top_height; ?>px;
    background-image: -webkit-linear-gradient(bottom, <?php echo $rgba_clear_fade_top; ?> 0%, <?php echo $rgba_full_fade_top; ?> 70%, <?php echo $rgba_full_fade_top; ?> 100%);
    background-image: -moz-linear-gradient(bottom, <?php echo $rgba_clear_fade_top; ?> 0%, <?php echo $rgba_full_fade_top; ?> 70%, <?php echo $rgba_full_fade_top; ?> 100%);
    background-image: -o-linear-gradient(bottom, <?php echo $rgba_clear_fade_top; ?> 0%, <?php echo $rgba_full_fade_top; ?> 70%, <?php echo $rgba_full_fade_top; ?> 100%);
    background-image: -ms-linear-gradient(bottom, <?php echo $rgba_clear_fade_top; ?> 0%, <?php echo $rgba_full_fade_top; ?> 70%, <?php echo $rgba_full_fade_top; ?> 100%);
    background-image: linear-gradient(bottom, <?php echo $rgba_clear_fade_top; ?> 0%, <?php echo $rgba_full_fade_top; ?> 70%, <?php echo $rgba_full_fade_top; ?> 100%);
    background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, <?php echo $rgba_clear_fade_top; ?>), color-stop(0.7, <?php echo $rgba_full_fade_top; ?>), color-stop(1, <?php echo $rgba_full_fade_top; ?>));
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="<?php echo $fade_background_top_color;?>", endColorstr="#<?php echo $fade_background_top_color;?>",GradientType=0);
  }
<?php } else { ?>
  .header:before {
    display: none!important;
  }
<?php } ?>
<?php if( get_field('fade_background_bottom') || get_field('fade_background_bottom', 'options') ) { ?>
  .header:after {
    height: <?php echo $fade_background_bottom_height; ?>px;
    background-image: -webkit-gradient(linear, left top, left bottom, from(<?php echo $rgba_clear_fade_bottom; ?>), to(<?php echo $rgba_full_fade_bottom; ?>));
    background-image: -webkit-linear-gradient(top, <?php echo $rgba_clear_fade_bottom; ?>, <?php echo $rgba_full_fade_bottom; ?>);
    background-image: -moz-linear-gradient(top, <?php echo $rgba_clear_fade_bottom; ?>, <?php echo $rgba_full_fade_bottom; ?>);
    background-image: -o-linear-gradient(top, <?php echo $rgba_clear_fade_bottom; ?>, <?php echo $rgba_full_fade_bottom; ?>);
    background-image: -ms-linear-gradient(top, <?php echo $rgba_clear_fade_bottom; ?>, <?php echo $rgba_full_fade_bottom; ?>);
    background-image: linear-gradient(top, <?php echo $rgba_clear_fade_bottom; ?>, <?php echo $rgba_full_fade_bottom; ?>);
    filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,StartColorStr='<?php echo $fade_background_bottom_color;?>', EndColorStr='<?php echo $fade_background_bottom_color;?>');
  }
<?php } else { ?>
  .header:after {
    display: none!important;
  }
<?php } ?>

  .header {
    <?php if( !empty($height) ) { ?>height: <?php echo $height; ?>px;<?php } ?>
  }

</style>
<section class="header" <?php get_template_part('templates/data', 'stellar'); ?>>

</section>