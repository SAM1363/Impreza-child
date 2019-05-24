<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

/**
 * Outputs page's Footer
 */

$us_layout = US_Layout::instance();
?>

</div>
<?php
global $us_iframe, $us_hide_footer;
if ( ( ! isset( $us_iframe ) OR ! $us_iframe ) AND ( ! isset( $us_hide_footer ) OR ! $us_hide_footer ) ) {
	do_action( 'us_before_footer' );
	?>


	<footer id='footer'>
		<hr>
		<div class="footer-wrapper">

			<div class="site-branding">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="/wp-content/themes/Impreza-child/logo.png" alt="logo not showing" width='100px' height='100px'>
					</a>
			</div>

			<nav class="link-container">
					
					<div class="box">
						<a href="#">How It Works</a>
						<a href="#">Available Properties</a>
						<a href="#">Investors Wanted</a>
					</div>

					<div class="box">
						<a href="#">About</a>
						<a href="#">Contact</a>
					</div>
					
					<div class="box">
						<a href="#">FAQs</a>
						<a href="#">Privacy Policy</a>
					</div>
					
			</nav>
		</div>
		<div class="foot-text">
			We are a real estate solutions and investment firm that specializes in helping homeowners get rid of burdensome houses fast. We are not Realtors,
			we are investors and problem solvers who can buy your house fast with a fair all cash offer.
			<div class="copyrgiht">
				<p>© 2017 Renovative Properties</p>
				<p>Designed & Developed By <span>LaPraim Media</span></p>
			</div>
		</div>
	</footer>


	<?php
	do_action( 'us_after_footer' );
}
?>
<script>
	// Store some global theme options used in JS
	if (window.$us === undefined) window.$us = {};
	$us.canvasOptions = ($us.canvasOptions || {});
	$us.canvasOptions.disableEffectsWidth = <?php echo intval( us_get_option( 'disable_effects_width', 900 ) ) ?>;
	$us.canvasOptions.responsive = <?php echo us_get_option( 'responsive_layout', TRUE ) ? 'true' : 'false' ?>;
	$us.canvasOptions.backToTopDisplay = <?php echo intval( us_get_option( 'back_to_top_display', 100 ) ) ?>;
	$us.canvasOptions.scrollDuration = <?php echo intval( us_get_option( 'smooth_scroll_duration', 1000 ) ) ?>;

	$us.langOptions = ($us.langOptions || {});
	$us.langOptions.magnificPopup = ($us.langOptions.magnificPopup || {});
	$us.langOptions.magnificPopup.tPrev = '<?php _e( 'Previous (Left arrow key)', 'us' ); ?>';
	$us.langOptions.magnificPopup.tNext = '<?php _e( 'Next (Right arrow key)', 'us' ); ?>';
	$us.langOptions.magnificPopup.tCounter = '<?php _ex( '%curr% of %total%', 'Example: 3 of 12', 'us' ); ?>';

	$us.navOptions = ($us.navOptions || {});
	$us.navOptions.mobileWidth = <?php echo intval( us_get_option( 'menu_mobile_width', 900 ) ) ?>;
	$us.navOptions.togglable = <?php echo us_get_option( 'menu_togglable_type', TRUE ) ? 'true' : 'false' ?>;
	$us.ajaxLoadJs = <?php echo us_get_option( 'ajax_load_js', 0 ) ? 'true' : 'false' ?>;
	$us.templateDirectoryUri = '<?php global $us_template_directory_uri; echo $us_template_directory_uri; ?>';
</script>
<?php wp_footer(); ?>
</body>
</html>
