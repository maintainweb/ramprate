<?php

if( have_rows('sections') ):
 	global $r;
 	$r = 0;
    while ( have_rows('sections') ) : the_row();
    $r++;
        if( get_row_layout() == 'big-video' ):
        	get_template_part('templates/section', 'big-video');
       	endif;
        if( get_row_layout() == 'animated-header' ):
            get_template_part('templates/section', 'animated-header');
        endif;
        if( get_row_layout() == 'html' ):
            get_template_part('templates/section', 'html');
        endif;
        if( get_row_layout() == 'html_w_parallax_header' ):
            get_template_part('templates/section', 'html-w-parallax-header');
        endif;
        if( get_row_layout() == 'columns' ):
            get_template_part('templates/section', 'columns');
        endif;
        if( get_row_layout() == 'feed' ):
            get_template_part('templates/section', 'feed');
        endif;
        if( get_row_layout() == 'call_to_action' ):
            get_template_part('templates/section', 'call-to-action');
        endif;
        if( get_row_layout() == 'carousel' ):
            get_template_part('templates/section', 'carousel');
        endif;

    endwhile;

else :

    // no layouts found

endif;

?>