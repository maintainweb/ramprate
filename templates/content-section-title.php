<?php
if(get_sub_field('section_title_alignment') == 'left') {
  $section_title_alignment = 'text-left';
}
if(get_sub_field('section_title_alignment') == 'right') {
  $section_title_alignment = 'text-right';
}
if(get_sub_field('section_title_alignment') == 'center') {
  $section_title_alignment = 'text-center';
}
if(get_sub_field('section_title')) { ?>
  <div class="row">
    <div class="col-xs-12">
      <h2 class="<?php echo $section_title_alignment; ?>"><?php the_sub_field('section_title');?></h2>
    </div>
  </div>
<?php } ?>