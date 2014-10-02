<div class="container page-content-container">
  <div class="row">
    <div class="col-sm-12">
      <?php the_content(); ?>
      <?php if( get_field('add_sections') ) {?>
        <?php get_template_part('templates/content', 'sections'); ?>
      <?php } ?>
      <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
    </div>
  </div>
</div>