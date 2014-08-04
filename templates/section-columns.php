<?php
global $r;
$section_id = get_sub_field('id');
$section_title = get_sub_field('section_title');
get_template_part('templates/content', 'section-background'); ?>
	<section id="<?php echo $section_id; ?>" class="single-page-section single-page-section-columns single-page-section-<?php echo $r; ?>" <?php get_template_part('templates/data', 'stellar'); ?>>
    <div class="container">
      <div class="row">
        <h2><?php echo $section_title; ?></h2>
        <?php get_template_part('templates/content', 'columns'); ?>
      </div>
    </div>
	</section>