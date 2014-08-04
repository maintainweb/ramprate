<?php
global $r;
$text = get_sub_field('call_to_action_text');
$button = get_sub_field('call_to_action_button');
$link = get_sub_field('call_to_action_link');
$section_id = get_sub_field('id');

get_template_part('templates/content', 'section-background'); ?>
<section id="<?php echo $section_id; ?>" class="single-page-section single-page-section-call-to-action single-page-section-<?php echo $r; ?>" <?php get_template_part('templates/data', 'stellar'); ?>>
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-sm-push-1">
        <div class="row">
          <div class="call-to-action">
            <div class="col-sm-9 text-center">
              <p class="lead"><?php echo $text; ?></p>
            </div>
            <div class="col-sm-3 text-center">
                <?php if( $link ):
                  $post = $link;
                  setup_postdata( $post ); ?>
                  <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
                  <?php wp_reset_postdata(); ?>
                <?php endif; ?>

                <p class="lead"><?php echo $button; ?></p>

                <?php if( $link ): ?>
                  </a>
                <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>