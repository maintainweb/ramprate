<?php
        $brandimage = get_field('brand_image', 'options');
        $brandimagewhite = get_field('brand_image_white', 'options');
        $brandimagevertical = get_field('brand_image_vertical', 'options');
        $brandimagehorizontal = get_field('brand_image_horizontal', 'options');
        $primarycolor = get_field('primary_color', 'options');
        $secondarycolor = get_field('secondary_color', 'options');
        $tertiarycolor = get_field('tertiary_color', 'options');

        if( !empty($brandimage) ):

          // vars
          $url = $brandimage['url'];
          $title = $brandimage['title'];
          $alt = $brandimage['alt'];
          $caption = $brandimage['caption'];

          // sizes
          $size = 'full';
          $med = $brandimage['sizes'][ $size ];
          $medwidth = $brandimage['sizes'][ $size . '-width' ];
          $medheight = $brandimage['sizes'][ $size . '-height' ];

          // vars
          $urlwhite = $brandimagewhite['url'];
          $titlewhite = $brandimagewhite['title'];
          $altwhite = $brandimagewhite['alt'];
          $captionwhite = $brandimagewhite['caption'];

          // sizes
          $sizewhite = 'full';
          $medwhite = $brandimagewhite['sizes'][ $size ];
          $medwidthwhite = $brandimagewhite['sizes'][ $size . '-width' ];
          $medheightwhite = $brandimagewhite['sizes'][ $size . '-height' ];

?>

  <style>
    .banner.affix-top .navbar-brand {
      background-image: url(<?php echo $urlwhite; ?>);
    }
    .banner.affix .navbar-brand {
      background-image: url(<?php echo $url; ?>);
    }
  </style>

<?php endif; ?>