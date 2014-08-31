<?php
global $r;
$button = get_sub_field('call_to_action_button');
$size = get_sub_field('button_size');
$style = implode(' ', get_sub_field('button_style'));
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
<?php get_template_part('templates/content', 'section-background'); ?>
<?php get_template_part('templates/content', 'section-styles'); ?>
<section id="<?php echo $section_id; ?>" class="single-page-section single-page-section-call-to-action single-page-section-<?php echo $r; ?>" <?php get_template_part('templates/data', 'stellar'); ?>>
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <div class="row">
          <div class="call-to-action">
            <div class="col-sm-12 text-center">
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
        </div>
      </div>
    </div>
  </div>
</section>