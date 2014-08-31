<?php
$whitelogo = get_field('brand_white_logo');
$colorlogo = get_field('brand_color_logo');
$blacklogo = get_field('brand_black_logo');
$primarycolor = get_field('brand_primary_color');

$situation = get_field('situation');

if( !empty($whitelogo) ):

  // vars
  $whitelogourl = $whitelogo['url'];
  $whitelogotitle = $whitelogo['title'];
  $whitelogoalt = $whitelogo['alt'];
  $whitelogocaption = $whitelogo['caption'];

  $whitelogosize = 'medium';
  $whitelogothumb = $whitelogo['sizes'][ $whitelogosize ];
  $whitelogowidth = $whitelogo['sizes'][ $whitelogosize . '-width' ];
  $whitelogoheight = $whitelogo['sizes'][ $whitelogosize . '-height' ];

endif;

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

if( !empty($blacklogo) ):

  // vars
  $blacklogourl = $blacklogo['url'];
  $blacklogotitle = $blacklogo['title'];
  $blacklogoalt = $blacklogo['alt'];
  $blacklogocaption = $blacklogo['caption'];

  $blacklogosize = 'medium';
  $blacklogothumb = $blacklogo['sizes'][ $colorlogosize ];
  $blacklogowidth = $blacklogo['sizes'][ $colorlogosize . '-width' ];
  $blacklogoheight = $blacklogo['sizes'][ $colorlogosize . '-height' ];

endif; ?>
<?php if ($whitelogoheight >= 300) {
  $logosizing = 'extra-tall';
} ?>
<?php if ($whitelogoheight >= 200 && $whitelogoheight <= 299) {
  $logosizing = 'tall';
} ?>
<?php if ($whitelogoheight >= 100 && $whitelogoheight <= 199) {
  $logosizing = 'medium';
} ?>
<?php if ($whitelogoheight >= 50 && $whitelogoheight <= 99) {
  $logosizing = 'short';
} ?>
<?php if ($whitelogoheight <= 49) {
  $logosizing = 'extra-short';
} ?>

<?php $classes = 'col-xs-6 col-sm-4 col-md-3 col-lg-3 ' . $logosizing; ?>

<style>
  #logo-link-<?php echo the_ID(); ?>.logo-link article .img-client {
    background-image: url(<?php echo $whitelogothumb; ?>);
  }
  #logo-link-<?php echo the_ID(); ?>.logo-link:hover article {
    background-color: #fff!important;
  }
  #logo-link-<?php echo the_ID(); ?>.logo-link:hover article .img-client {
    background-image: url(<?php echo $colorlogothumb; ?>);
  }
</style>
<a id="logo-link-<?php echo the_ID(); ?>" class="logo-link <?php if(get_field('situation') == '') { ?>no-modal<?php } ?>" <?php if(get_field('situation')) { ?>href="#" data-toggle="modal" data-target="#modal-<?php echo the_ID(); ?>"<?php } ?> title="<?php echo $whitelogotitle; ?>">
  <article <?php post_class($classes);?> style="background-color: <?php echo $primarycolor; ?>;">
    <div class="img-wrap">
      <div class="img-client"><?php if(get_field('situation')) { ?><i class="fa fa-2x fa-plus-circle"></i><?php } ?></div>
    </div>
  </article>
</a>
<?php if(get_field('situation')) { ?>
  <?php get_template_part('templates/content', 'modal'); ?>
<?php } ?>