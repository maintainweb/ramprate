<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php if (is_singular('post')) { get_template_part('templates/entry-meta'); } ?>
      <?php if (is_singular('resource')) { ?><div class="btn-wrapper"><?php get_template_part('templates/content', 'file'); ?></div><?php } ?>
    </header>
    <div class="entry-content">
      <?php if (is_singular('client')) { ?><?php get_template_part('templates/single', 'client'); ?><?php } ?>
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
