<div class="maincontent">
<?php get_header()?>
   

   <h1><?php bloginfo( 'name' ); ?></h1>
    <h2>C'est un article</h2>
 
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
    <h3><?php the_title(); ?></h3>
    <?php the_content(); ?>
    <?php wp_link_pages(); ?>
    <?php edit_post_link(); ?>
    </div>
    <?php endwhile; ?>
 
    <?php endif; ?>
    <?php get_footer();?>