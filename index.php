<?php get_header(); ?>

<main class="l-main">
  <?php get_template_part('template-parts/product-card-list'); ?>
  <div class="c-link-button">
    <a href="<?php echo home_url(); ?>/products">View More</a>
  </div>
</main>

<?php get_footer(); ?>
