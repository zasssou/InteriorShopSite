<?php get_header(); ?>

<main class="l-main">
  <div class="c-page-title">
    <h2>Products</h2>
  </div>

  <?php get_template_part('template-parts/product-card-list'); ?>
  
  <div class="c-pagination">
    <?php the_posts_pagination(
      array(
        'mid_size'      => 2,
        'prev_next'     => false,
        'type'          => 'list',
      )
    ); ?>
  </div>
</main>

<?php get_footer(); ?>
