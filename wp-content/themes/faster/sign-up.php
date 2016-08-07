<?php
/**
 * Theme: faster
 * 
 * Template Name: Sign Up Page
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
<section class="headline">
	<h2>Fast, reliable Wordpress support when you need it</h2>
	<div class="section-sub-heading">
		<h4>Your business is dynamic and always changing. Is your web site?</h4>
	</div>
</section>
<section class="container-fluid container-price">
	<div class="section-heading">
		<h4>One plan for everyone. Your first fix is on us.</h4>
	</div>
	<div class="center-block">
		<div class="row">
		<div class="col-md-6">
		<div class="panel panel-price">
			<div class="panel-heading">
				<h4>Single Fix</h4>
			</div><!--.panel-heading-->
				<div class="panel-body">
				<h1>$39</h1>
				<p>Just a single small fix to get you back up and running. Here are a few examples of small fixes:</p>
				</div><!--panel-body-->
				<ul class="list-group">
					<li class="list-group-item">something</li>
					<li class="list-group-item">something</li>
					<li class="list-group-item">something</li>
					<li class="list-group-item">something</li>
					<li class="list-group-item">something</li>
					<li class="list-group-item">something</li>
					<li class="list-group-item">something</li>
				</ul>
				<div class="panel-footer">
					Panel footer
				</div><!--.panel-footer-->
		</div><!--.panel-price-->
		</div>
		<div class="col-md-6">
		<div class="panel panel-price">
			<div class="panel-heading">
			<h4>Unlimited Fixes</h4>
			</div><!--.panel-heading-->
				<div class="panel-body">
				<h1>$79</h1>
				<p>Unlimited small fixes & updates and our full suite of security and backup enhancements.</p>
				</div><!--.panel-body-->
				<ul class="list-group">
					<li class="list-group-item">something</li>
					<li class="list-group-item">something</li>
					<li class="list-group-item">something</li>
					<li class="list-group-item">something</li>
					<li class="list-group-item">something</li>
					<li class="list-group-item">something</li>
					<li class="list-group-item">something</li>
				</ul>
				<div class="panel-footer">
					Panel footer
				</div>
		</div><!--.panel-primary-->
		</div><!--.col-md-6-->
		</div><!--row-->
	</div><!--.center-block-->
</section>
		<?php
	    // TO SHOW THE PAGE CONTENTS
	    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <?php the_content(); ?> <!-- Page Content -->
	    <?php
	    endwhile; //resetting the page loop
	    wp_reset_query(); //resetting the page query
	    ?>
<?php get_footer(); ?>
