<?php
/**
 * Theme: faster
 * 
 * Template Name: Basic Page
 *
 * Full-width basic page with no sidebar or container.
 *
 * This is the template for full width pages with no sidebar and no container. This 
 * page truly stretches the full width of the browser window. You should set a 
 * <div class="container"> before your content to keep it in line with the rest of 
 * the site content.
 *
 * @package faster 
 */

get_header(); ?>
<?php get_template_part( 'content', 'header' ); ?>
	<div class="container">
		<div class="center-block">

	 <?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        
            <?php the_content(); ?> <!-- Page Content -->
        

    <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>
    	</div>
	</div>


<?php get_footer(); ?>
