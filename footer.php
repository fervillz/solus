<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Solus
 */

?>

	</div><!-- #content -->
	
	<div class="section--footer-widgets">
		<?php get_sidebar('footer' ); ?>
	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'solus' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'solus' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'solus' ), 'solus', '<a href="http://devrix.com" rel="designer">Devrix</a>' ); ?>
		</div><!-- .site-info -->

		<!-- #site-navigation -->
        <nav id="footer-site-navigation" class="footer-navigation" role="navigation">
        	<?php wp_nav_menu( array( 'theme_location' => 'footer') ); ?>
        </nav><!-- #footer-site-navigation -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
