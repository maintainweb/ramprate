<article <?php post_class(); ?>>
  <div class="row">
    <header class="col-sm-12">
      <?php get_template_part('templates/entry-meta', 'time'); ?>
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </header>
  </div>
  <div class="row">
    <div class="col-sm-4 entry-author">
      <?php get_template_part('templates/entry-meta', 'author'); ?>
      <div class="row categories">
        <div class="col-sm-12">
          <?php the_category(', '); ?>
        </div>
      </div>
    </div>
    <div class="col-sm-8 entry-summary">
      <?php get_template_part('templates/content', 'featured-image'); ?>
      <?php the_excerpt(); ?>
      <a class="btn btn-primary" href="<?php the_permalink(); ?>">Read more</a>
    </div>
  </div>
</article>