<?php
$heading = get_field('heading');
$headingstyle = get_field('heading_style');
$alignment = get_field('alignment');
$text_color = get_field('text_color');
$text_background = get_field('text_background');
$text_shadow = get_field('text_shadow');
$lead = get_field('lead');
$calltoaction = get_field('call_to_action');
$button = get_field('button');
$link = get_field('link');
$customlink = get_field('custom');
$height = get_field('height');

$rgb = hex2rgba($text_background);
$rgba_full = hex2rgba($text_background, 1.00);
$rgba_half = hex2rgba($text_background, 0.50);
$rgba_clear = hex2rgba($text_background, 0.01);

if(get_field('call_to_action') == "link" || get_field('call_to_action') == "custom") {
  $headingmargintop = ( $height * 0.7 );
} else {
  $headingmargintop = ( $height * 0.65 );
} ?>
<style>
.page-header-container.ontopimage {
  top: -<?php echo $headingmargintop; ?>px;

}
.page-header-container.ontopimage h1,
.page-header-container.ontopimage .lead {
  color: <?php echo $text_color; ?>;
  <?php if( get_field('text_background')) { ?>
    background-color: <?php echo $rgba_half; ?>;
    padding: 15px;
    clear: both;
  <?php } ?>
}
.page-header.belowimage {

}
</style>
<div class="container page-header-container <?php echo $headingstyle; ?> <?php echo $alignment; ?>">
  <div class="row">
    <div class="col-sm-12">
      <div class="page-header-wrapper">
        <div class="page-header">
          <h1>
            <?php if( $heading ) { echo $heading; } else { ?>
            <?php echo roots_title(); ?>
            <?php } ?>
          </h1>
        </div>
        <?php if( $lead ) { ?><p class="lead"><?php echo $lead; ?></p><?php } ?>
        <?php if(get_field('call_to_action') == "link") { ?>
        <?php if( $link ):
          $post = $link;
          setup_postdata( $post );
        ?>
        <p class="action">
          <a class="btn btn-primary btn-lg" href="<?php the_permalink(); ?>">
          <?php wp_reset_postdata(); ?>
          <?php echo $button; ?>
          </a>
        </p>
        <?php endif; ?>
        <?php } ?>
        <?php if(get_field('call_to_action') == "custom") { ?>
        <p class="action">
          <a class="btn btn-primary btn-lg" href="<?php echo $customlink; ?>">
          <?php echo $button; ?>
          </a>
        </p>
        <?php } ?>
      </div>
    </div>
  </div>
</div>