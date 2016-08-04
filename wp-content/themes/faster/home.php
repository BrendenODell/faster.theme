<?php
/**
 * Theme: faster
 * 
 * Template Name: Home Page
 *
 * Full-width page with no sidebar or container.
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

	<div id="primary" class="content-area-wide">
		<main id="main" class="site-main" role="main">

				<div class="hero">
					<div class="hero-background" style="">
						<div class="hero-content">
							<!-- <h4 style="font-weight:900;font-family: 'Roboto', sans-serif;font-size: 1.6em;">LET US WORRY ABOUT THE NERD STUFF</h4> -->
							<h1 style="font-weight: 100;font-size: 4em;margin: 60px 0px 40px;">Unlimited Wordpress Support</h1>
							<h4 style="font-weight: 100;font-size: 2em;margin: 0px 0px 60px;">All of your Wordpress needs for one flat</br>monthly fee.</h4>
							<a class="btn btn-default btn-lg" href="#" role="button" style="color:white;background-color:#ff5300;border: 2px solid white;margin: 0px 20px;padding: 7px 30px;">Sign Up Today</a>
							<a class="btn btn-default btn-lg" href="#" role="button" style="color:white;border: 2px solid white;background-color: transparent;margin: 0px 20px;padding: 7px 30px;">Learn More</a>
						</div>
					</div>
				</div>

				<div class="home-section-one">
					<div class="section-heading">
						<h4> We take care of your Wordpress site so you can take care of business.</h4>
					</div>
					<div class="section-sub-heading">
						<h4> Faster provides unlimited small fixes and unparelled response time.We take care of all your Wordpress needs for one low monthly price.</h4>
					</div>
					<div class="section-content">
						<div class="section-content-row">
							<div class="col-md-4">
								<h6>Wordpress Core &</br>Plugin Updates</h6>
								<i class="fa fa-wordpress" aria-hidden="true"></i>
							</div>
							<div class="col-md-4">
								<h6>Unlimited</br>Small Fixes</h6>
								<i class="fa fa-wrench" aria-hidden="true"></i>
							</div>
							<div class="col-md-4">
								<h6>Daily Cloud</br>Backups</h6>
								<i class="fa fa-cloud-upload" aria-hidden="true"></i>
							</div>
						</div>
						<div class="section-content-row">
							<div class="col-md-4">
								<h6>Search Engine</br>Optimization</h6>
								<i class="fa fa-cogs" aria-hidden="true"></i>
							</div>
							<div class="col-md-4">
								<h6>24/7 Hack</br>Protection</h6>
								<i class="fa fa-shield" aria-hidden="true"></i>
							</div>
							<div class="col-md-4">
								<h6>Malware Scans &</br>Hack Recovery</h6>
								<i class="fa fa-life-ring" aria-hidden="true"></i>
							</div>
						</div>
					</div>
					<div class="section-content" style="padding-top:0;">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
							<div class="item active">
								<div class="slide-space">
								</div>
								<div class="slide-background">
								</div>
								<div class="slide-content-container">
									<div class="slide-circle">
									</div>
									<div class="slide-square">
										<h5><i class="fa fa-quote-left" aria-hidden="true"></i> 
The team at Faster are absolutely</br>amazing. Within hours of signing up they</br>cleaned up our hacked site, deleted</br>thousands of spam comments, and fixed our</br>contact form! <i class="fa fa-quote-right" aria-hidden="true"></i>
</h5>
									</div>
									<div class="slide-credit">
										<h5>Joe Blow</h5>
										<h8>Important Business Dude - Evil Corp.</h8>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="slide-space">
								</div>
								<div class="slide-background">
								</div>
								<div class="slide-content-container">
									<div class="slide-circle">
									</div>
									<div class="slide-square">
										<h5><i class="fa fa-quote-left" aria-hidden="true"></i> The team at Faster are absolutely</br>amazing. Within hours of signing up they</br>cleaned up our hacked site, deleted</br>thousands of spam comments, and fixed our</br>contact form! <i class="fa fa-quote-right" aria-hidden="true"></i> </h5>
									</div>
									<div class="slide-credit">
										<h5>Joe Blow</h5>
										<h8>Important Business Dude - Evil Corp.</h8>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="slide-space">
								</div>
								<div class="slide-background">
								</div>
								<div class="slide-content-container">
									<div class="slide-circle">
									</div>
									<div class="slide-square">
										<h5><i class="fa fa-quote-left" aria-hidden="true"></i> The team at Faster are absolutely</br>amazing. Within hours of signing up they</br>cleaned up our hacked site, deleted</br>thousands of spam comments, and fixed our</br>contact form! <i class="fa fa-quote-right" aria-hidden="true"></i> </h5>
									</div>
									<div class="slide-credit">
										<h5>Joe Blow</h5>
										<h8>Important Business Dude - Evil Corp.</h8>
									</div>
								</div>
							</div>

						  </div>
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
						  </ol>
						</div>
					</div>
				</div>

				</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
