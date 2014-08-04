<?php 
        $brandimage = get_field('brand_image', 'options');
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

?>

  <style>
    .navbar-brand {
      background-image: url(<?php echo $url; ?>);
    }
  </style>

<?php endif; ?>