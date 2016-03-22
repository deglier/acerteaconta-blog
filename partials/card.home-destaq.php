<?php $destaq = new WP_Query( array('posts_per_page' => 2 )); ?>

<?php if($destaq->have_posts()): ?>
  <?php while($destaq->have_posts()): ?>
    <?php $destaq->the_post(); ?>
    <div data-wow-offset="50" class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet">
      <a href="<?php the_permalink(); ?>" class="link-card">
        <div class="card-post mdl-card mdl-shadow--2dp">

          <?php if(has_post_thumbnail()): ?>
            <?php $thumbURL = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
          <div style="background-image: url('<?php echo $thumbURL; ?>');" class="mdl-card__title">
          <?php else: ?>
          <div style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bg-parallax.jpg');" class="mdl-card__title">
          <?php endif; ?>

            <h2 class="post-title">
              <?php the_date('d.m.Y', '<span class="post-datetime">', '</span>'); ?>
              <?php the_title(); ?><span class="post-author">por <?php the_author(); ?></span></h2>
          </div>
        </div>
      </a>
    </div>
  <?php endwhile; ?>
<?php endif; ?>
