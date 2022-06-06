<ul class="p-product-card-list">
  <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
      <li  class="p-product-card-list__item">
        <a class="p-product-card" href="<?php the_permalink(); ?>">
          <?php
            $pic = get_field('picture');
            $pic_url = $pic['url'];
          ?>
          <img class="p-product-card__img" src="<?php echo $pic_url; ?>" alt="product-img">
          <p><?php the_title(); ?></p>
          <p><?php the_field('price'); ?></p>
        </a>
      </li>
    <?php endwhile; ?>
  <?php endif; ?>
</ul>
