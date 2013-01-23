<?php $front_page_query = new WP_Query( 'post_type=post' ); ?>
<?php if ($front_page_query->have_posts()): ?>
<h2 id="news">News</h2>
<?php endif; ?>
<?php while ($front_page_query->have_posts()) : $front_page_query->the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    </header>
    <div class="entry-summary">
      <?php the_excerpt(); ?>
    </div>
    <footer>
      <?php get_template_part('templates/entry-meta'); ?>
      <?php the_tags('<ul class="entry-tags"><li>','</li><li>','</li></ul>'); ?>
    </footer>
  </article>
<?php endwhile; ?>

