<?php
global $r;
$c = 0;
$height = get_sub_field('height');
$section_id = get_sub_field('id');
$top = ( $height * 0.45 );
?>
<style>
  .carousel-control {
    top: <?php echo $top; ?>px;
  }
</style>
<div id="carousel-<?php echo $r; ?>" class="carousel fade" data-ride="carousel">
    <div class="carousel-inner row">
        <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
<?php
            // check if the nested repeater field has rows of data
            if( have_rows('carousel_frame') ):

                // loop through the rows of data
                while ( have_rows('carousel_frame') ) : the_row();

                    $carousel_image = get_sub_field('carousel_image');

                      if( !empty($carousel_image) ):

                        // vars
                        $carousel_image_url = $carousel_image['url'];
                        $carousel_image_title = $carousel_image['title'];
                        $carousel_image_alt = $carousel_image['alt'];
                        $carousel_image_caption = $background_image['caption'];

                        // sizes
                        $size = 'large';
                        $large = $carousel_image['sizes'][ $size ];
                        $largewidth = $carousel_image['sizes'][ $size . '-width' ];
                        $largeheight = $carousel_image['sizes'][ $size . '-height' ];

                    endif; ?>

                    <?php if ($largeheight >= $height) {
                      $margin = '-40';
                     } else {
                    $margin = '50';

                    }

                    $carousel_title = get_sub_field('carousel_title');
                    $carousel_content = get_sub_field('carousel_content');
                    $carousel_call_to_action = get_sub_field('carousel_call_to_action');
                    $button = get_sub_field('button');
                    $carousel_link = get_sub_field('carousel_link');
                    $carousel_custom = get_sub_field('carousel_custom');

                    $carousel_file = get_sub_field('carousel_file');

                    if( !empty($carousel_file) ):
                      // vars
                      $url = $carousel_file['url'];
                      $title = $carousel_file['title'];
                      $alt = $carousel_file['alt'];
                      $caption = $carousel_file['caption'];
                      $description = $carousel_file['description'];
                      $mime_type = $carousel_file['mime_type'];

                    endif;

                    $carousel_modal = get_sub_field('carousel_modal');
                    $carousel_modal_title = get_sub_field('carousel_modal_title');

                    if ( $c == 0 ) { $active = 'active'; } else { $active = ' '; } ?>
                <div class="item <?php echo $active; ?>">
                    <div class="row">
                        <div class="col-sm-6">
                        <?php if(get_sub_field('carousel_call_to_action') == "link") { ?>
                          <a title="<?php echo $button; ?>" href="<?php echo $carousel_link; ?>">
                        <?php } elseif (get_sub_field('carousel_call_to_action') == "custom") { ?>
                          <a title="<?php echo $button; ?>" href="<?php echo $carousel_custom; ?>" target="_blank">
                        <?php } elseif (get_sub_field('carousel_call_to_action') == "file") { ?>
                          <a title="<?php echo $title; ?>" href="<?php echo $url; ?>" target="_blank">
                        <?php } elseif (get_sub_field('carousel_call_to_action') == "modal") { ?>
                          <a title="<?php echo $button; ?>" href="#" data-toggle="modal" data-target="#modal-call-to-action">
                        <?php } ?>
                            <img class="img-carousel img-responsive" src="<?php echo $carousel_image_url; ?>" alt="<?php echo $carousel_image_alt; ?>" width="<?php echo $largewidth; ?>" height="<?php echo $largeheight; ?>" style="margin-top: <?php echo $margin; ?>px;"/>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h3><?php echo $carousel_title; ?></h3>
                                <?php echo $carousel_content; ?>
                                <?php if(get_sub_field('carousel_call_to_action') == "link") { ?>
                                <a class="btn btn-primary <?php echo $button_size . " " . $button_style . " " . $button_type; ?>" title="<?php echo $button; ?>" href="<?php echo $carousel_link; ?>"><?php echo $button; ?></a>
                              <?php } elseif (get_sub_field('carousel_call_to_action') == "custom") { ?>
                                <a class="btn btn-primary <?php echo $button_size . " " . $button_style . " " . $button_type; ?>" title="<?php echo $button; ?>" href="<?php echo $carousel_custom; ?>" target="_blank"><?php echo $button; ?></a>
                              <?php } elseif (get_sub_field('carousel_call_to_action') == "file") { ?>
                                <a class="btn btn-primary <?php echo $button_size . " " . $button_style . " " . $button_type; ?>" title="<?php echo $title; ?>" href="<?php echo $url; ?>" target="_blank"><?php echo $button; ?></a>
                              <?php } elseif (get_sub_field('carousel_call_to_action') == "modal") { ?>
                                <a class="btn btn-primary <?php echo $button_size . " " . $button_style . " " . $button_type; ?>" title="<?php echo $button; ?>" href="#" data-toggle="modal" data-target="#modal-call-to-action"><?php echo $button; ?></a>
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

            <?php $c++; endwhile; endif;
?>
        </div>
    </div>
    <a class="left carousel-control" href="#carousel-<?php echo $r; ?>" role="button" data-slide="prev"><i class="fa fa-3x fa-chevron-left"></i> <span class="text-hide">Prev</span></a>
    <a class="right carousel-control" href="#carousel-<?php echo $r; ?>" role="button" data-slide="next"><i class="fa fa-3x fa-chevron-right"></i> <span class="text-hide">Next</span></a>
</div>