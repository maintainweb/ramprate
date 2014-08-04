<div id="sequence">
    <ul class="sequence-canvas">
<?php
            // check if the nested repeater field has rows of data
            if( have_rows('sequence_frame') ):

                // loop through the rows of data
                while ( have_rows('sequence_frame') ) : the_row();

                    $image = get_sub_field('sequence_image');
                    $c = 0;
                    $class = '';
                    if ( $c == 0 ) { $class = 'animate-in'; }
                    echo '<li><img class="' . $class . '" src="' . $image['url'] . '" alt="' . $image['alt'] . '" /></li>'

            $c++; endwhile; endif;
?>
    </ul>
</div>