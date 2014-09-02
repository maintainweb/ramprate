<?php
if(get_sub_field('content_area_style') == 'narrow') {
  $class = 'col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2';
}
if(get_sub_field('content_area_style') == 'full') {
  $class = 'col-xs-12 col-sm-12 col-md-12 col-lg-12';
}
if(get_sub_field('content_area_style') == 'split') {
  $class = 'col-xs-12 col-sm-6 col-md-6 col-lg-6';
} ?>
<div class="row">
  <div class="<?php echo $class; ?>">
    <?php
      if(get_sub_field('content_area_style') != 'split') {
        if(get_sub_field('content')) {
          the_sub_field('content');
        }
      } ?>
    <?php
      if(get_sub_field('content_area_style') == 'split') {
        if(get_sub_field('left_side_content')) {
          the_sub_field('left_side_content');
        }
      } ?>
  </div>
  <?php if(get_sub_field('content_area_style') == 'split') { ?>
  <div class="<?php echo $class; ?>">
    <?php if(get_sub_field('right_side_content')) {
      the_sub_field('right_side_content');
    } ?>
  </div>
  <?php } ?>
</div>