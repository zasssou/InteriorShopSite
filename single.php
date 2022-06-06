<?php get_header(); ?>

<main class="l-main">
  <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>

        <div class="c-page-title">
          <h2><?php the_title(); ?></h2>
        </div>
        <div class="p-product-detail">
          <?php
            $pic = get_field('picture');
            $pic_url = $pic['url'];
          ?>
          <img class="p-product-detail__img" src="<?php echo $pic_url; ?>" alt="product-img">
          <p class="u-font--middle"><?php the_field('description'); ?></p>
          <p><?php the_field('price'); ?></p>
          <dl class="c-product-specs">
            <dt class="c-product-specs__key">SIZE:</dt>
            <dd class="c-product-specs__value"><?php the_field('size'); ?></dd>
            <dt class="c-product-specs__key">COLOR:</dt>
            <dd class="c-product-specs__value"><?php the_field('color'); ?></dd>
            <dt class="c-product-specs__key">MATERIAL:</dt>
            <dd class="c-product-specs__value"><?php the_field('material'); ?></dd>
          </dl>
        </div>
        <div class="c-link-button">
          <a href="<?php echo home_url(); ?>/products">Back To Products</a>
        </div>

    <?php endwhile; ?>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
