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
		<h4>Get help with your Wordpress site today. Never any long-term contracts.</h4>
	</div>
</section>
<section class="container-fluid container-price">
	<div class="section-heading">
		<h4>Unlimited monthly Wordpress support for one low price.</h4>
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
					<li class="list-group-item">Fix a styling (CSS) issue</li>
					<li class="list-group-item">Update a theme or plugin</li>
					<li class="list-group-item">Create a backup of files and database</li>
					<li class="list-group-item">Recommend and install a plugin</li>
					<li class="list-group-item">Upgrade Wordpress</li>
					<li class="list-group-item">Add Google Analytics</li>
					<li class="list-group-item">100's of other fixes...</li>
				</ul>
				<div class="panel-footer">
					<a class="btn btn-default btn-block" href="#">Get Started</a>
				</div><!--.panel-footer-->
		</div><!--.panel-price-->
		</div>
		<div class="col-md-6">
		<div class="panel panel-price">
			<div class="panel-heading">
			<h4>Unlimited Fixes</h4>
			</div><!--.panel-heading-->
				<div class="panel-body">
				<h1>$79<small>/month</small></h1>
				<p>Unlimited small fixes & updates and our full suite of security and backup enhancements.</p>
				</div><!--.panel-body-->
				<ul class="list-group">
					<li class="list-group-item">Unlimited small fixes for 1 site</li>
					<li class="list-group-item">Wordpress Core upgrades</li>
					<li class="list-group-item">Proactive theme & plugin updates</li>
					<li class="list-group-item">Daily secure cloud backups</li>
					<li class="list-group-item">Daily malware and security scans</li>
					<li class="list-group-item">Uptime monitoring</li>
					<li class="list-group-item">Unlimited live chat & email support</li>
				</ul>
				<div class="panel-footer">
					<a class="btn btn-default btn-block" href="#">Get Started</a>
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
