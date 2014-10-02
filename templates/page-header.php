<?php
$heading = get_field('heading');

if(get_field('heading_style')) {
  $headingstyle = get_field('heading_style');
} else {
  $headingstyle = 'default';
}
$alignment = get_field('alignment');
if(get_field('text_color')) {
  $text_color = get_field('text_color'); } else {
  $text_color = get_field('text_color', 'options'); };
if(get_field('text_background')) {
  $text_background = get_field('text_background'); } else {
  $text_background = get_field('text_background', 'options'); };
if(get_field('text_shadow')) {
  $text_shadow = get_field('text_shadow'); } else {
  $text_shadow = get_field('text_shadow', 'options'); };
$lead = get_field('lead');
$calltoaction = get_field('call_to_action');
$button = get_field('button');
$link = get_field('link');
$customlink = get_field('custom');

if(get_field('height')) {
  $height = get_field('height');
} else {
  $height = get_field('height', 'options');
};

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
  background-color: <?php echo $rgba_half; ?>;
  padding: 15px;
  clear: both;
}
.page-header-container.belowimage h1,
.page-header-container.belowimage .lead {

}
</style>
<div class="<?php if(get_field('heading_style') == "ontopimage" ) { echo 'container '; } ?>page-header-container <?php echo $headingstyle; ?> <?php echo $alignment; ?>">
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
        <p class="action">
          <a class="btn btn-primary btn-lg" href="<?php echo $link; ?>">
          <?php echo $button; ?>
          </a>
        </p>
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