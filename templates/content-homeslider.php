<?php
  echo 'sli';
  $args = array( 'post_type' => 'homeslider' );
  $loop = new WP_Query( $args );
 ?>

<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php
        the_content();
        $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        echo '<img src="' . $feat_image . '">' ;
      ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
