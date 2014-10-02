<?php
global $r;
$text_color = get_sub_field('text_color');
$height = get_sub_field('height');
$padding_top = get_sub_field('padding_top');
$padding_bottom = get_sub_field('padding_bottom');
$section_id = get_sub_field('id');
if(get_sub_field('text_background_color')) {
  $text_background = get_sub_field('text_background_color');
  $rgb = hex2rgba($text_background);
  $rgba_full = hex2rgba($text_background, 1.00);
  $rgba_half = hex2rgba($text_background, 0.60);
  $rgba_clear = hex2rgba($text_background, 0.01);
  $text_padding = '15px';
}
?>
<style>
<?php if( !empty($text_color) ) { ?>
  .single-page-section-<?php echo $r; ?> h1,
  .single-page-section-<?php echo $r; ?> h2,
  .single-page-section-<?php echo $r; ?> h3,
  .single-page-section-<?php echo $r; ?> h4,
  .single-page-section-<?php echo $r; ?> h5,
  .single-page-section-<?php echo $r; ?> h6,
  .single-page-section-<?php echo $r; ?> p,
  .single-page-section-<?php echo $r; ?> ul,
  .single-page-section-<?php echo $r; ?> ol,
  .single-page-section-<?php echo $r; ?> li,
  .single-page-section-<?php echo $r; ?> .lead {
    color: <?php echo $text_color; ?>;
  }
  <?php if(get_sub_field('text_background_color')) { ?>
  .single-page-section-<?php echo $r; ?> h1,
  .single-page-section-<?php echo $r; ?> h2,
  .single-page-section-<?php echo $r; ?> h3,
  .single-page-section-<?php echo $r; ?> h4,
  .single-page-section-<?php echo $r; ?> h5,
  .single-page-section-<?php echo $r; ?> h6,
  .single-page-section-<?php echo $r; ?> p,
  .single-page-section-<?php echo $r; ?> ul,
  .single-page-section-<?php echo $r; ?> ol,
  .single-page-section-<?php echo $r; ?> .lead {
    padding: <?php echo $text_padding; ?>;
    <?php if(get_sub_field('text_background_color')) { ?>
      background-color: <?php echo $rgba_half; ?>;
    <?php } ?>
  }
  .single-page-section-<?php echo $r; ?> ul,
  .single-page-section-<?php echo $r; ?> ol {
    padding-left: 40px;
  }
  .single-page-section-<?php echo $r; ?> li {
    padding-right: 30px;
  }

  <?php } ?>
<?php } ?>
  .single-page-section-<?php echo $r; ?> {
    <?php if( !empty($height) ) { ?>height: <?php echo $height; ?>px;<?php } ?>
    <?php if( !empty($padding_top) ) { ?>padding-top: <?php echo $padding_top; ?>px;<?php } ?>
    <?php if( !empty($padding_bottom) ) { ?>padding-bottom: <?php echo $padding_bottom; ?>px;<?php } ?>
  }
</style>