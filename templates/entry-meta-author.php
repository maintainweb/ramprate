<?php
  $email = get_the_author_meta('user_email');
  $title = get_the_author_meta('title');
?>
<div class="row">
  <div class="col-sm-4">
    <?php echo get_avatar( $email, $size = '96' ); ?>
  </div>
  <div class="col-sm-8">
    <p class="byline author vcard"><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php echo get_the_author(); ?></a></p>
    <p class="title"><?php echo $title; ?></p>
  </div>
</div>