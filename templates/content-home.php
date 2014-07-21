<?php
  wp_enqueue_script('lightbox');
  wp_enqueue_script('lightboxInit');
 while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
            
    </header>
    <div class="entry-content">
    <h2 class="entry-title"><?php the_title(); ?></h2>
      <?php the_content(); ?>
    </div>

    <div class="gallery-strip">
       <?php get_template_part('templates/gallery-strip'); ?>
    </div>

    <div class="info-boxes">
          <?php /*get_template_part('templates/info-boxes');*/ echo "info boxes here"; ?>
    </div>
   
    <footer>
      <?php /*wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>'));*/ ?>
    </footer>
    
  </article>
<?php endwhile; ?>
