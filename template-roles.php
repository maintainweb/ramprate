<?php
/*
Template Name: Roles Template
*/
?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
<?php endwhile; ?>
<?php get_template_part('templates/content', 'singlepagelayout'); ?>