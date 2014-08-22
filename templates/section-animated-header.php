<?php
global $r;
$heading = get_sub_field('heading');
$lead = get_sub_field('lead');
$button = get_sub_field('button');
$link = get_sub_field('link');
$section_id = get_sub_field('id');
?>
<?php get_template_part('templates/content', 'section-background'); ?>
<?php get_template_part('templates/content', 'section-styles'); ?>
<section id="<?php echo $section_id; ?>" class="single-page-section single-page-section-animated-header single-page-section-<?php echo $r; ?>" <?php get_template_part('templates/data', 'stellar'); ?>">
    <div class="container">
      <div class="header-content">
        <h1><?php get_template_part('templates/content', 'heading'); ?></h1>
        <p class="lead"><?php get_template_part('templates/content', 'lead'); ?></p>
          <?php if( $link ):
            $post = $link;
            setup_postdata( $post );
          ?><p class="action">
            <a class="btn btn-primary btn-lg" href="<?php the_permalink(); ?>">
            <?php wp_reset_postdata(); ?>
            <?php echo $button; ?>
            </a></p>
          <?php endif; ?>
          <?php get_template_part('templates/content', 'section-content'); ?>
        </div>
    </div>
</section>