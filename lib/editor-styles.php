<?php
/*
* Callback function to filter the MCE settings
* http://www.wpbeginner.com/wp-tutorials/how-to-add-custom-styles-to-wordpress-visual-editor/
* http://wpengineer.com/1963/customize-wordpress-wysiwyg-editor/
*/

function wpb_mce_buttons_2($buttons) {
  array_unshift($buttons, 'styleselect');
  return $buttons;
}
add_filter('mce_buttons_2', 'wpb_mce_buttons_2');

function my_mce_before_init_insert_formats( $init_array ) {

// Define the style_formats array

  $style_formats = array(
    // Each array child is a format with it's own settings
    array(
      'title' => 'Lead Paragraph',
      'block' => 'span',
      'classes' => 'lead',
      'wrapper' => true,
    ),
    array(
      'title' => 'Row',
      'block' => 'div',
      'classes' => 'row',
      'wrapper' => true,
    ),
    array(
      'title' => 'Full Width Column',
      'block' => 'div',
      'classes' => 'col-sm-12 col-md-12 col-lg-12',
      'wrapper' => true,
    ),
    array(
      'title' => 'Narrow Column',
      'block' => 'div',
      'classes' => 'col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2',
      'wrapper' => true,
    ),
  );
  // Insert the array, JSON ENCODED, into 'style_formats'
  $init_array['style_formats'] = json_encode( $style_formats );

  return $init_array;

}
// Attach callback to 'tiny_mce_before_init'
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );

/*
function my_theme_add_editor_styles() {
    add_editor_style( get_template_directory() . '/assets/css/editor-style-more.css' );
}
add_action( 'init', 'my_theme_add_editor_styles' );
*/