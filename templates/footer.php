<footer class="content-info" role="contentinfo">
  <div class="container footer-widget-wrap">
    <div class="row">
      <?php dynamic_sidebar('sidebar-footer'); ?>
    </div>
  </div>
  <div class="navbar-footer">
    <div class="container">
      <p class="navbar-text">&copy; <?php echo date('Y'); ?>
        <a class="navbar-link" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
        <?php get_template_part('templates/content', 'social-icons'); ?>
      </p>
      <?php if (has_nav_menu('footer_navigation')) {
        wp_nav_menu(array('theme_location' => 'footer_navigation', 'menu_class' => 'nav navbar-nav'));
      } ?>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>