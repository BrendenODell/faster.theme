<?php
/**
 * Theme: faster
 * 
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package faster
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>
<div id="page" class="hfeed site">
	<?php do_action('before'); ?>
	<header>
		<div class="header-container">
    			<div class="logo-container">
      				<a href="/"><img src="/wp-content/themes/faster/images/faster.logo.png"></a>
      		</div>
          <div class="menu-container">
                <?php wp_nav_menu( array( 'primary' => 'header-menu') ); ?>
          			<div class="button-container">
          			<a class="btn btn-success" href="https://faster.support/ticket/" role="button">Open a Ticket</a>
          			<a class="btn btn-default" href="/get-started/" role="button">Sign Up</a>
          			</div><!-- .button-container -->
          </div><!-- .menu-container -->
		  </div> <!-- .header-container -->
	</header>
