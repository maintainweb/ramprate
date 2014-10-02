<article <?php post_class(); ?>>
  <div class="row">
    <div class="col-sm-4">
      <a href="<?php if ( is_user_logged_in() ) { the_permalink(); } else {?>#modal-signup<?php } ?>"<?php if ( is_user_logged_in() ) { } else { ?> data-toggle="modal" data-target="#modal-signup"<?php } ?>><?php get_template_part('templates/content', 'featured-image'); ?></a>
    </div>
    <div class="col-sm-8">
      <header>
        <h3 class="entry-title"><a href="<?php if ( is_user_logged_in() ) { the_permalink(); } else {?>#modal-signup<?php } ?>"<?php if ( is_user_logged_in() ) { } else { ?> data-toggle="modal" data-target="#modal-signup"<?php } ?>><i class="fa fa-file-pdf-o"></i> <?php the_title(); ?></a></h3>
      </header>
      <div class="entry-summary">
        <?php the_excerpt(); ?>
      </div>
      <footer>
        <?php get_template_part('templates/content', 'file'); ?>
        <a class="btn btn-primary btn-sm btn-view" href="<?php if ( is_user_logged_in() ) { the_permalink(); } else { ?>#modal-signup<?php } ?>"<?php if ( is_user_logged_in() ) { } else { ?> data-toggle="modal" data-target="#modal-signup"<?php } ?>>View <?php the_title(); ?> <i class="fa fa-arrow-right"></i></a>
      </footer>
    </div>
  </div>
</article>