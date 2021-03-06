<?php
// http://www.advancedcustomfields.com/resources/file/

$file = get_field('resource_download');

if( !empty($file) ):
  // vars
  $url = $file['url'];
  $title = $file['title'];
  $alt = $file['alt'];
  $caption = $file['caption'];
  $description = $file['description'];
  $mime_type = $file['mime_type'];

endif;

if (is_singular('resource')) {
  $class = 'btn-lg btn-primary';
} else {
  $class = 'btn-sm btn-default';
}

if( get_field('resource_download') ):
    ?><a class="btn <?php echo $class; ?>" href="<?php if ( is_user_logged_in() ) { echo $url; } else {?>#modal-signup<?php } ?>" title="Download <?php echo $title; ?>"<?php if ( is_user_logged_in() ) { } else {?> data-toggle="modal" data-target="#modal-signup"<?php } ?>><?php if(get_field('button_text')) { the_field('button_text'); } else { ?>Download<?php } ?> <i class="fa fa-download"></i></a><?php
endif;