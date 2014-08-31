<div class="container page-content-container">
  <div class="row">
    <div class="col-sm-12">
      <?php the_content(); ?>
      <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
    </div>
  </div>
</div>