<header class="banner navbar navbar-default navbar-custom navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php get_template_part('templates/content', 'branding'); ?>
      <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav navbar-left'));
        endif;
      ?>
      <div class="hidden-xs nav navbar-nav navbar-right">
        <?php if ( is_user_logged_in() ) { ?>
          <div><a class="btn btn-primary" href="#">Admin</a></div>
        <?php } else { ?>
          <div><a class="btn btn-primary" href="#">Login</a></div>
        <?php } ?>
      </div>
    </nav>
  </div>
</header>
