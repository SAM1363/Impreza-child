<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

/**
 * Template header
 */

$us_layout = US_Layout::instance();
?>
<!DOCTYPE HTML>
<html class="<?php echo $us_layout->html_classes() ?>" <?php language_attributes( 'html' ) ?>> 
<head>
	<meta charset="UTF-8">
	<?php wp_head() ?>

	<!-- <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>


<body <?php body_class( 'l-body ' . $us_layout->body_classes() );
if ( us_get_option( 'schema_markup' ) ) {
	echo ' itemscope itemtype="https://schema.org/WebPage"';
} ?>>
<?php
global $us_iframe;
if ( ! ( isset( $us_iframe ) AND $us_iframe ) AND us_get_option( 'preloader' ) != 'disabled' ) {
	add_action( 'us_before_canvas', 'us_display_preloader', 100 );
	function us_display_preloader() {
		$preloader_type = us_get_option( 'preloader' );
		if ( ! in_array( $preloader_type, array_merge( us_get_preloader_numeric_types(), array( 'custom' ) ) ) ) {
			$preloader_type = 1;
		}

		$preloader_image = us_get_option( 'preloader_image' );
		$preloader_image_html = '';
		$img = usof_get_image_src( $preloader_image, 'medium' );
		if ( $preloader_type == 'custom' AND $img[0] != '' ) {
			$preloader_image_html .= '<img src="' . esc_url( $img[0] ) . '"';
			if ( ! empty( $img[1] ) AND ! empty( $img[2] ) ) {
				// Image sizes may be missing when logo is a direct URL
				$preloader_image_html .= ' width="' . $img[1] . '" height="' . $img[2] . '"';
			}
			$preloader_image_html .= ' alt="' . us_get_image_alt( $preloader_image ) . '"/>';
		}

		?>
		<div class="l-preloader">
			<div class="l-preloader-spinner">
				<div class="g-preloader type_<?php echo $preloader_type ?>">
					<div><?php echo $preloader_image_html ?></div>
				</div>
			</div>
		</div>
		<?php
	}
}

do_action( 'us_before_canvas' ) ?>

<header>
	<div class="yellow-back">	</div>
		<div class="header-wraper">
			<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="/wp-content/themes/Impreza-child/logo.png" alt="logo not showing">
				</a>
			</div>
			<div class="main-link">
					<a href="#">Get An Offer</a>
					<a href="#">How It Works</a>
					<a href="#">Available Properties</a>
					<a href="#">Investors Wanted</a>
					<a href="#">About</a>
					<a href="#">Contact</a>
			</div>

			<div id="mobile-container">
				<div id="navToggle">
					<div>
						<span></span> <span></span> <span></span>
					</div>
				</div>
				<div class="mobile-link">
						<a href="#">Get An Offer</a>
						<a href="#">How It Works</a>
						<a href="#">Available Properties</a>
						<a href="#">Investors Wanted</a>
						<a href="#">About</a>
						<a href="#">Contact</a>
				</div>
			</div>
	

		</div>
</header>

<div class="l-canvas <?php echo $us_layout->canvas_classes() ?>">


