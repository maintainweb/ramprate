<?php
global $r;
if(get_sub_field('heading_style')) {
  $headingstyle = get_sub_field('heading_style');
} else {
  $headingstyle = 'default';
}
$alignment = get_sub_field('alignment');
if(get_sub_field('text_color')) {
  $text_color = get_sub_field('text_color'); } else {
  $text_color = get_sub_field('text_color', 'options'); };
if(get_sub_field('text_background')) {
  $text_background = get_sub_field('text_background'); } else {
  $text_background = get_sub_field('text_background', 'options'); };
if(get_sub_field('text_shadow')) {
  $text_shadow = get_sub_field('text_shadow'); } else {
  $text_shadow = get_sub_field('text_shadow', 'options'); };
$lead = get_sub_field('lead');
$calltoaction = get_sub_field('call_to_action');
$button = get_sub_field('button');
$link = get_sub_field('link');
$customlink = get_sub_field('custom');

if(get_field('height')) {
  $height = get_sub_field('height');
} else {
  $height = get_sub_field('height', 'options');
};

$rgb = hex2rgba($text_background);
$rgba_full = hex2rgba($text_background, 1.00);
$rgba_half = hex2rgba($text_background, 0.50);
$rgba_clear = hex2rgba($text_background, 0.01);

$button = get_sub_field('call_to_action_button');
$size = get_sub_field('button_size');

if (get_sub_field('button_style')) {
  $style = implode(' ', get_sub_field('button_style'));
}

$type = get_sub_field('button_type');
$link = get_sub_field('call_to_action_link');
$external = get_sub_field('call_to_action_external');

$file = get_sub_field('call_to_action_file');

if( !empty($file) ):
  // vars
  $url = $file['url'];
  $title = $file['title'];
  $alt = $file['alt'];
  $caption = $file['caption'];
  $description = $file['description'];
  $mime_type = $file['mime_type'];

endif;

$modal = get_sub_field('call_to_action_modal');
$modal_title = get_sub_field('modal_title');
$section_id = get_sub_field('id');

?>
<style>
.single-page-section-<?php echo $r; ?> h2,
.single-page-section-<?php echo $r; ?> .lead {
  color: <?php echo $text_color; ?>;
  background-color: <?php echo $rgba_half; ?>;
  padding: 15px;
  clear: both;
}
</style>
<?php get_template_part('templates/content', 'section-background'); ?>
<?php get_template_part('templates/content', 'section-styles'); ?>
<div id="outer-wrap">
  <section id="<?php echo $section_id; ?>" class="single-page-section single-page-section-big-video single-page-section-<?php echo $r; ?>" <?php get_template_part('templates/data', 'stellar'); ?>>

    <div class="container">
      <div class="big-video-content">
        <?php get_template_part('templates/content', 'section-title'); ?>
        <?php if( $lead ) { ?><p class="lead"><?php echo $lead; ?></p><?php } ?>
          <?php if(get_sub_field('call_to_action_type') == "internal") { ?>
                <a class="<?php echo $size . " " . $style . " " . $type; ?>" title="<?php echo $button; ?>" href="<?php echo $link; ?>"><?php echo $button; ?></a>
              <?php } elseif (get_sub_field('call_to_action_type') == "external") { ?>
                <a class="<?php echo $size . " " . $style . " " . $type; ?>" title="<?php echo $button; ?>" href="<?php echo $external; ?>"><?php echo $button; ?></a>
              <?php } elseif (get_sub_field('call_to_action_type') == "file") { ?>
                <a class="<?php echo $size . " " . $style . " " . $type; ?>" title="<?php echo $title; ?>" href="<?php echo $url; ?>"><?php echo $button; ?></a>
              <?php } elseif (get_sub_field('call_to_action_type') == "modal") { ?>
                <a class="<?php echo $size . " " . $style . " " . $type; ?>" title="<?php echo $button; ?>" href="#" data-toggle="modal" data-target="#modal-call-to-action"><?php echo $button; ?></a>
                <div id="modal-call-to-action" role="dialog" class="modal fade" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg text-left">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title"><?php echo $modal_title; ?></h4>
                      </div>
                      <div class="modal-body">
                        <?php echo $modal; ?>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
              <?php } ?>
        </div>
    </div>
    </section>
</div>