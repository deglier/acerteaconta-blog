<?php

$nova_consulta = new WP_Query(
    array(
        'posts_per_page'      => 5,              // Não conta linhas
        'post_status'         => 'publish',         // Somente posts publicados
        'ignore_sticky_posts' => true,              // Ignora posts fixos
        'orderby'             => 'meta_value_num',  // Ordena pelo valor da post meta
        'meta_key'            => 'cf_post_counter', // A nossa post meta
        'order'               => 'DESC'             // Ordem decrescente
    )
);
 ?>


<?php if($nova_consulta->have_posts()): ?>
  <?php while($nova_consulta->have_posts()): ?>
    <?php $nova_consulta->the_posts() ?>
    <?php $cf_post_counter = get_post_meta($post->ID, 'cf_post_counter', true); ?>
    <div class="mdl-cell mdl-cell--4-col">
      <a href="<?php the_permalink(); ?>" class="link-card">
        <div class="card-post mdl-card mdl-shadow--2dp">

          <?php if(has_post_thumbnail()): ?>
            <?php $thumbURL = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
          <div style="background-image: url('<?php echo $thumbURL; ?>');" class="mdl-card__title">
          <?php else: ?>
          <div style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bg-parallax.jpg');" class="mdl-card__title">
          <?php endif; ?>

            <h2 class="post-title">
              <?php the_date('d/m/Y', '<span class="post-datetime">', '</span>'); ?>
              <?php the_title(); ?><span class="post-author">por <?php the_author_link(); ?></span></h2>
          </div>
        </div>
      </a>
    </div>
  <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
