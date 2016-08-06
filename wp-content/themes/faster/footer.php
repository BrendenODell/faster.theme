<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
</div><!-- .site-content -->
		<footer>
			<div class="site-info" style="width:50%;float:left;">
				<span class="site-title">&copy; <?php echo date('Y'); ?> <a style="color:white;" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
			</div>
			<div class="site-info" style="width:50%;float:right;text-align:right;">
				<span class="site-title"><a style="color:white;margin-right:40px" href="#">Terms</a></span>
				<span class="site-title"><a style="color:white;" href="#">Privacy</a></span>
			</div>
		</footer><!-- .site-footer -->
	</div> <!-- .site-inner -->
 </div> <!-- .site -->
<?php wp_footer(); ?>
</div>
</body>
</html>