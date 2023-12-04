<div class="maincontent">
<?php get_header()?>
   
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
    <?php the_content(); ?>
    <?php wp_link_pages(); ?>

    </div>
    <?php endwhile; ?>
 
    <?php endif; ?>
    <?php get_footer();?>