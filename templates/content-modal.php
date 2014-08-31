<?php
$colorlogo = get_field('brand_color_logo');
$primarycolor = get_field('brand_primary_color');

if( !empty($colorlogo) ):

  // vars
  $colorlogourl = $colorlogo['url'];
  $colorlogotitle = $colorlogo['title'];
  $colorlogoalt = $colorlogo['alt'];
  $colorlogocaption = $colorlogo['caption'];

  $colorlogosize = 'medium';
  $colorlogothumb = $colorlogo['sizes'][ $colorlogosize ];
  $colorlogowidth = $colorlogo['sizes'][ $colorlogosize . '-width' ];
  $colorlogoheight = $colorlogo['sizes'][ $colorlogosize . '-height' ];

endif;

$download = get_field('download');

if( !empty($download) ):
  // vars
  $url = $download['url'];
  $title = $download['title'];
  $alt = $download['alt'];
  $caption = $download['caption'];
  $description = $download['description'];
  $mime_type = $download['mime_type'];

endif;

?>
<div id="modal-<?php echo the_ID(); ?>" role="dialog" class="modal fade" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><?php echo the_title(); ?></h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-3 overview">
            <?php if(get_field('brand_color_logo')) { ?>
              <img class="img-responsive" src="<?php echo $colorlogothumb; ?>" width="<?php echo $colorlogowidth; ?>" height="<?php echo $colorlogoheight; ?>" >
            <?php } ?>
            <?php if(get_field('organization')) { ?>
              <dl>
                <dt>Organization:</dt>
                <dd><?php the_field('organization'); ?></dd>
              </dl>
            <?php } ?>
            <?php if(get_field('location')) { ?>
              <dl>
                <dt>Location:</dt>
                <dd><?php the_field('location'); ?></dd>
              </dl>
            <?php } ?>
            <?php if(get_field('website')) { ?>
              <dl>
                <dt>Website:</dt>
                <dd><a href="http://<?php the_field('website'); ?>/"><?php the_field('website'); ?></a></dd>
              </dl>
            <?php } ?>
            <?php if(get_field('industry')) { ?>
              <dl>
                <dt>Industry:</dt>
                <dd><?php the_field('industry'); ?></dd>
              </dl>
            <?php } ?>
            <?php if(get_field('description')) { ?>
              <dl>
                <dt>About <?php the_field('organization'); ?>:</dt>
                <dd><?php the_field('description'); ?></dd>
              </dl>
            <?php } ?>
            <?php if(get_field('solutions')) { ?>
              <dl>
                <dt>RampRate Solutions:</dt>
                <dd><?php the_field('industry'); ?></dd>
              </dl>
            <?php } ?>
          </div>
          <div class="col-sm-9">
            <div class="row">
              <div class="<?php if(get_field('quote')) { echo 'col-sm-8'; } else { echo 'col-sm-12'; } ?>">
                <?php if(get_field('situation')) { ?>
                  <h3>Situation</h3>
                  <?php the_field('situation'); ?>
                <?php } ?>
                <?php if(get_field('action')) { ?>
                  <h3>Action</h3>
                  <?php the_field('action'); ?>
                <?php } ?>
              </div>
            <?php if(get_field('quote')) { ?>
              <div class="col-sm-4 quote">
                <blockquote class="blockquote-reverse">
                  <p><?php the_field('quote'); ?></p>
                  <footer><?php the_field('quote_name'); ?><br><?php the_field('quote_title'); ?><br><?php the_field('quote_company'); ?></footer>
                </blockquote>
              </div>
            <?php } ?>
            </div>
          </div>
        </div>
      </div>
      <?php if(get_field('download')) { ?>
        <div class="modal-footer-download">
        <a class="btn btn-lg btn-primary" href="<?php echo $url; ?>" title="<?php echo $title; ?>">Download <?php echo $title; ?></a>
        </div>
      <?php } ?>
      <?php get_template_part('templates/content', 'related'); ?>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->