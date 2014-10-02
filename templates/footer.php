<footer class="content-info" role="contentinfo">
  <div class="container footer-widget-wrap">
    <div class="row">
      <?php dynamic_sidebar('sidebar-footer'); ?>
    </div>
  </div>
  <div class="navbar-footer">
    <div class="container">
      <div class="row">
        <?php get_template_part('templates/content', 'social-icons'); ?>
      </div>
      <div class="row">
        <?php get_template_part('templates/content', 'contact'); ?>
      </div>
      <div class="row">
        <p class="navbar-text">Copyright &copy; 2000 &mdash; <?php echo date('Y'); ?>
          <a class="navbar-link" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a> All rights reserved.
        </p>
      </div>
      <?php // if (has_nav_menu('footer_navigation')) {
        // wp_nav_menu(array('theme_location' => 'footer_navigation', 'menu_class' => 'nav navbar-nav'));
     // } ?>
    </div>
  </div>
</footer>
<?php get_template_part('templates/hubspot'); ?>
<?php wp_footer(); ?>