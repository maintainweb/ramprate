<address>
  <strong>RampRate Headquarters</strong><br>
  <?php if (get_field('street_address', 'options')){ ?>
    <?php the_field('street_address', 'options');?><br>
  <?php } ?>
  <?php if (get_field('city', 'options')){ ?>
    <?php the_field('city', 'options');?>,
  <?php } ?>
  <?php if (get_field('state', 'options')){ ?>
    <?php the_field('state', 'options');?>
  <?php } ?>
  <?php if (get_field('zip_code', 'options')){ ?>
    <?php the_field('zip_code', 'options');?><br>
  <?php } ?>
  <?php if (get_field('phone', 'options')){ ?>
    <abbr title="Phone">P:</abbr> <?php the_field('phone', 'options');?>
  <?php } ?>
</address>