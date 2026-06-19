<?php
/**
 * The header for the ChangeTank theme.
 *
 * Outputs the DOCTYPE, <head>, opening <body>, and site header
 * including sticky navigation, wordmark/logo, primary nav menu,
 * "Get in touch" CTA, and mobile hamburger toggle.
 *
 * @package ChangeTank
 * @version 2.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-to-content" href="#main-content">Skip to main content</a>

<header class="ct-header" id="ct-header" role="banner">
	<div class="container ct-header__inner">
		<div class="ct-header__logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ct-logo" rel="home" aria-label="<?php bloginfo( 'name' ); ?> — home">
				<?php
				if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) :
					the_custom_logo();
				else :
				?>
				<span class="ct-logo__text">The Change Tank</span>
				<?php endif; ?>
			</a>
		</div>

		<nav class="ct-header__nav" id="ct-primary-nav" role="navigation" aria-label="<?php esc_attr_e( 'Primary navigation', 'changetank' ); ?>">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary-nav',
				'menu_id'        => 'primary-menu',
				'menu_class'     => 'ct-nav__list',
				'container'      => false,
				'depth'          => 1,
				'fallback_cb'    => 'changetank_primary_nav_fallback',
			) );
			?>
		</nav>

		<div class="ct-header__cta">
			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-primary ct-header__cta-btn">
				Get in touch
			</a>
		</div>

		<button
			class="ct-hamburger"
			id="ct-hamburger"
			aria-controls="ct-primary-nav"
			aria-expanded="false"
			aria-label="<?php esc_attr_e( 'Open navigation menu', 'changetank' ); ?>"
			type="button"
		>
			<span class="ct-hamburger__icon" aria-hidden="true">&#9776;</span>
			<span class="ct-hamburger__label-open  sr-only">Menu</span>
			<span class="ct-hamburger__label-close sr-only">Close</span>
		</button>

	</div>
</header>

<main id="main-content" class="ct-main">

<?php
function changetank_primary_nav_fallback() {
	$items = array(
		'Home'         => '/',
		'About'        => '/about/',
		'Capabilities' => '/capabilities/',
		'Case Studies' => '/case-studies/',
		'Insights'     => '/insights/',
		'Contact'      => '/contact/',
	);
	echo '<ul class="ct-nav__list ct-nav__list--fallback">';
	foreach ( $items as $label => $path ) {
		$url     = esc_url( home_url( $path ) );
		$label_e = esc_html( $label );
		echo "<li class=\"ct-nav__item\"><a href=\"{$url}\" class=\"ct-nav__link\">{$label_e}</a></li>";
	}
	echo '</ul>';
}
?>

<script>
(fnunction () {
	use strict';
	document.addEventListener('DOMContentLoaded', function () {
		var header    = document.getElementById('ct-header');
		var hamburger = document.getElementById('ct-hamburger');
		var nav       = document.getElementById('ct-primary-nav');
		if ( ! header || ! hamburger || ! nav ) return;
		hamburger.addEventListener('click', function () {
			var isOpen = header.classList.toggle('nav-open');
			hamburger.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
			hamburger.setAttribute('aria-label', isOpen ? 'Close navigation menu' : 'Open navigation menu');
		});
		document.addEventListener('click', function (e) {
			if ( header.classList.contains('nav-open') && ! header.contains(e.target) ) {
				header.classList.remove('nav-open');
				hamburger.setAttribute('aria-expanded', 'false');
				hamburger.setAttribute('aria-label', 'Open navigation menu');
			}
		});
		document.addEventListener('keydown', function (e) {
			if ( e.key === 'Escape' && header.classList.contains('nav-open') ) {
				header.classList.remove('nav-open');
				hamburger.setAttribute('aria-expanded', 'false');
				hamburger.setAttribute('aria-label', 'Open navigation menu');
				hamburger.focus();
			}
		});
    });
}());
</script>
