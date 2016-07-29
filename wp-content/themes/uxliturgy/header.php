<?php
/**
 * Theme: MostOptimal
 * 
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package mostoptimal
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<?php do_action('before'); ?>
	<header>
		<div class="wpspark-header">
			<div class="logo-holder">
  				<h1 style="font-weight:100;vertical-align:middle;">>><span style="color:black !important;">Faster</span></h1>
  			</div>
  			<div class="button-holder">
  			<a class="btn btn-default" href="#" role="button" style="border-color:white;font-size: 1.3em;">Contact</a>
  			<a class="btn btn-default" href="#" role="button" style="border-color:white;font-size: 1.3em;">Blog</a>
  			<a class="btn btn-default" href="#" role="button" style="border-color:#ff5300;background-color:transparent;font-size:1.3em;">Log In</a>
  			<a class="btn btn-default" href="#" role="button" style="border-color:#ff5300;color:white;text-shadow: none !important;background-color:#ff5300;font-size: 1.3em;">Sign Up</a>
  			</div>
		</div> 

	</header>