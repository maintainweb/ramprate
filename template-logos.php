<?php
/*
Template Name: Logos Template
*/
?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'logos'); ?>
<?php endwhile; ?>
