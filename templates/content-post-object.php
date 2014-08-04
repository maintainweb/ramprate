<?php
$post_objects = get_sub_field('column');
$row_count = count($post_objects);

if( $post_objects ): ?>
    <ul>
    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
        <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <span>Post Object Custom Field: <?php the_field('field_name'); ?></span>
        </li>
    <?php endforeach; ?>
    </ul>
    <?php echo $row_count; ?>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif;