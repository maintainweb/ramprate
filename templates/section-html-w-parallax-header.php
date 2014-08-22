<?php
global $r;
$section_id = get_sub_field('id');
?>
<?php get_template_part('templates/content', 'section-background'); ?>
<?php get_template_part('templates/content', 'section-styles'); ?>
  <section id="<?php echo $section_id; ?>" class="single-page-section single-page-section-html single-page-section-<?php echo $r; ?>" <?php get_template_part('templates/data', 'stellar'); ?>>
    <div class="container<?php if( get_sub_field('fluid_container') ) {?>-fluid<?php } ?>">
      <div class="row">
        <div><h2 class="section-title"><?php get_template_part('templates/content', 'section-title'); ?></h2></div>
      </div>
    </div>
  </section>
    <div class="container<?php if( get_sub_field('fluid_container') ) {?>-fluid<?php } ?>">
      <div class="row">
        <?php get_template_part('templates/content', 'section-content'); ?>
      </div>
    </div>