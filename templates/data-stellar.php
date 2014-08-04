 <?php if( get_sub_field('parallax') ) {
  $data_stellar_background_ratio = get_sub_field('data_stellar_background_ratio');
  $data_stellar_horizontal_offset = get_sub_field('data_stellar_horizontal_offset');
  $data_stellar_vertical_offset = get_sub_field('data_stellar_vertical_offset');
  ?>
   data-stellar-background-ratio="<?php echo $data_stellar_background_ratio; ?>"
   data-stellar-horizontal-offset="<?php echo $data_stellar_horizontal_offset; ?>"
   data-stellar-vertical-offset="<?php echo $data_stellar_vertical_offset; ?>"
<?php } ?>