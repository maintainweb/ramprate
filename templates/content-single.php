<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php if (is_singular('post')) { get_template_part('templates/entry-meta'); } ?>
    </header>
    <div class="entry-content">
      <?php if (is_singular('client')) { ?><?php get_template_part('templates/single', 'client'); ?>
      <?php } else { ?>
      <?php the_content(); ?>
      <?php } ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>