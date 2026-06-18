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

<!-- Skip to main content (accessibility) -->
<a class="skip-to-content" href="#main-content">Skip to main content</a>

<!-- ============================================================
     SITE HEADER
     ============================================================ -->
<header class="ct-header" id="ct-header" role="banner">
	<div class="container ct-header__inner">

		<!-- Logo / Wordmark (left) -->
		<div class="ct-header__logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ct-logo" rel="home" aria-label="<?php bloginfo( 'name' ); ?> — home">
				<?php
				// If a custom logo has been uploaded via Customizer, use it.
				// Otherwise fall back to the styled wordmark text.
				if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) :
					the_custom_logo();
				else :
				?>
				<span class="ct-logo__text">The Change Tank</span>
				<?php endif; ?>
			</a>
		</div><!-- /.ct-header__logo -->

		<!-- Primary Navigation (right) -->
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
		</nav><!-- /.ct-header__nav -->

		<!-- CTA Button: "Get in touch" (far right, always visible) -->
		<div class="ct-header__cta">
			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-primary ct-header__cta-btn">
				Get in touch
			</a>
		</div><!-- /.ct-header__cta -->

		<!-- Mobile hamburger button (visible < 768px) -->
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
		</button><!-- /.ct-hamburger -->

	</div><!-- /.container.ct-header__inner -->
</header><!-- /.ct-header -->

<!-- ============================================================
     MAIN CONTENT WRAPPER
     ============================================================ -->
<main id="main-content" class="ct-main">

<?php
/* ============================================================
   HEADER CSS — included inline to avoid FOUC
   All header-specific styles live here so they load in <head>
   via wp_head() above. The rules are scoped tightly so nothing
   bleeds into page content styles.
   ============================================================ */

/**
 * Fallback for when no primary menu has been assigned in WP admin.
 * Renders a hardcoded list of the 6 navigation items.
 *
 * @return void
 */
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
		$current = ( untrailingslashit( $_SERVER['REQUEST_URI'] ) === untrailingslashit( $path ) )
			? ' aria-current="page"'
			: '';
		echo "<li class=\"ct-nav__item\"><a href=\"{$url}\" class=\"ct-nav__link\"{$current}>{$label_e}</a></li>";
	}
	echo '</ul>';
}
?>

<style id="ct-header-styles">

/* ============================================================
   SKIP TO CONTENT LINK (accessibility)
   ============================================================ */
.skip-to-content {
	position: absolute;
	top: -100%;
	left: 1rem;
	z-index: 9999;
	padding: 0.75rem 1.5rem;
	background: var(--ct-dark);
	color: var(--ct-white);
	font-size: 14px;
	font-weight: 700;
	text-decoration: none;
	border-radius: 0 0 var(--ct-radius) var(--ct-radius);
	transition: top 0.2s ease;
}
.skip-to-content:focus {
	top: 0;
	outline: 3px solid var(--ct-orange);
	outline-offset: 2px;
}

/* ============================================================
   SITE HEADER — STICKY, WHITE, BORDERED BOTTOM
   ============================================================ */
.ct-header {
	position: sticky;
	top: 0;
	z-index: 100;
	background-color: var(--ct-white);
	border-bottom: 1px solid var(--ct-border);
	/* Subtle shadow to lift header off content when scrolled */
	box-shadow: 0 1px 4px rgba(0, 0, 0, 0.06);
}

.ct-header__inner {
	display: flex;
	align-items: center;
	gap: var(--space-xl);
	height: 72px;
}

/* ============================================================
   LOGO / WORDMARK
   ============================================================ */
.ct-header__logo {
	flex-shrink: 0;
	/* Prevent logo from being pushed by nav or CTA */
	margin-right: auto;
}

.ct-logo {
	display: inline-flex;
	align-items: center;
	text-decoration: none;
}

/* Custom logo image */
.ct-logo img {
	height: 36px;
	width: auto;
	display: block;
}

/* Wordmark fallback text */
.ct-logo__text {
	font-family: var(--ct-font);
	font-size: 20px;
	font-weight: 700;
	color: var(--ct-dark);
	letter-spacing: -0.02em;
	white-space: nowrap;
	line-height: 1;
}

.ct-logo:hover .ct-logo__text,
.ct-logo:focus .ct-logo__text {
	color: var(--ct-orange);
	text-decoration: none;
}

/* ============================================================
   PRIMARY NAVIGATION
   ============================================================ */
.ct-header__nav {
	display: flex;
	align-items: center;
}

/* WordPress outputs a <ul> via wp_nav_menu() */
.ct-nav__list {
	display: flex;
	align-items: center;
	gap: var(--space-xl);
	list-style: none;
	margin: 0;
	padding: 0;
}

.ct-nav__item {
	margin: 0;
}

.ct-nav__link {
	display: block;
	font-size: 14px;
	font-weight: 600;
	color: var(--ct-dark);
	text-decoration: none;
	white-space: nowrap;
	padding: 0.25rem 0;
	border-bottom: 2px solid transparent;
	transition: color 0.2s ease, border-color 0.2s ease;
}

.ct-nav__link:hover,
.ct-nav__link:focus {
	color: var(--ct-orange);
	border-bottom-color: var(--ct-orange);
	text-decoration: none;
}

/* Active / current page */
.ct-nav__link[aria-current="page"],
.current-menu-item > .ct-nav__link,
.current_page_item > .ct-nav__link {
	color: var(--ct-orange);
	border-bottom-color: var(--ct-orange);
}

/* ============================================================
   CTA BUTTON — GET IN TOUCH (header)
   ============================================================ */
.ct-header__cta {
	flex-shrink: 0;
}

/* Override base .btn-primary with slightly more compact size in nav */
.ct-header__cta-btn {
	padding: 0.625rem 1.375rem;
	font-size: 13px;
}

/* ============================================================
   HAMBURGER BUTTON — mobile only, hidden at desktop
   ============================================================ */
.ct-hamburger {
	display: none;          /* Hidden at desktop — revealed at ≤ 768px */
	flex-shrink: 0;
	background: none;
	border: none;
	padding: var(--space-sm);
	cursor: pointer;
	color: var(--ct-dark);
	font-size: 22px;
	line-height: 1;
	border-radius: var(--ct-radius);
	transition: color 0.2s ease, background-color 0.2s ease;
}

.ct-hamburger:hover,
.ct-hamburger:focus {
	color: var(--ct-orange);
	background-color: var(--ct-cream);
	outline: none;
}

.ct-hamburger:focus-visible {
	outline: 3px solid var(--ct-orange);
	outline-offset: 2px;
}

/* Icon flips to × when nav is open */
.ct-hamburger__icon {
	display: block;
}

/* ============================================================
   MAIN CONTENT WRAPPER
   ============================================================ */
.ct-main {
	/* Ensure content clears the sticky header and starts cleanly */
	display: block;
}

/* ============================================================
   RESPONSIVE — 768px (mobile nav breakpoint)
   ============================================================ */
@media (max-width: 768px) {

	.ct-header__inner {
		height: 60px;
		gap: var(--space-md);
	}

	/* Hide desktop nav and CTA — revealed via .nav-open */
	.ct-header__nav {
		position: absolute;
		top: 60px;  /* Below 60px mobile header */
		left: 0;
		right: 0;
		z-index: 99;
		background-color: var(--ct-white);
		border-bottom: 1px solid var(--ct-border);
		box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
		padding: var(--space-lg) var(--space-lg);

		/* Hidden by default */
		display: none;
		flex-direction: column;
		align-items: stretch;
	}

	/* Nav opens when .nav-open class applied to <header> */
	.ct-header.nav-open .ct-header__nav {
		display: flex;
	}

	/* Stack nav items vertically on mobile */
	.ct-nav__list {
		flex-direction: column;
		align-items: stretch;
		gap: 0;
	}

	.ct-nav__link {
		padding: 0.875rem 0;
		border-bottom: 1px solid var(--ct-border);
		font-size: 15px;
	}

	.ct-nav__item:last-child .ct-nav__link {
		border-bottom: none;
	}

	/* Hide desktop CTA — mobile menu has its own CTA link */
	.ct-header__cta {
		display: none;
	}

	/* Show hamburger on mobile */
	.ct-hamburger {
		display: flex;
		align-items: center;
		justify-content: center;
	}

	/* Wordmark stays the same size */
	.ct-logo__text {
		font-size: 18px;
	}
}

@media (max-width: 480px) {
	.ct-header__inner {
		height: 56px;
	}

	.ct-header__nav {
		top: 56px;
	}

	.ct-logo__text {
		font-size: 16px;
	}
}

</style>

<!-- ============================================================
   HAMBURGER TOGGLE — inline JS (no dependency)
   Toggles .nav-open class on .ct-header when hamburger clicked.
   Updates aria-expanded for screen readers.
   ============================================================ -->
<script>
(function () {
	'use strict';

	document.addEventListener('DOMContentLoaded', function () {
		var header    = document.getElementById('ct-header');
		var hamburger = document.getElementById('ct-hamburger');
		var nav       = document.getElementById('ct-primary-nav');

		if ( ! header || ! hamburger || ! nav ) return;

		hamburger.addEventListener('click', function () {
			var isOpen = header.classList.toggle('nav-open');

			// Update accessibility attribute
			hamburger.setAttribute('aria-expanded', isOpen ? 'true' : 'false');

			// Update aria-label to indicate current state
			hamburger.setAttribute(
				'aria-label',
				isOpen ? 'Close navigation menu' : 'Open navigation menu'
			);
		});

		// Close nav when clicking outside the header
		document.addEventListener('click', function (e) {
			if ( header.classList.contains('nav-open') && ! header.contains(e.target) ) {
				header.classList.remove('nav-open');
				hamburger.setAttribute('aria-expanded', 'false');
				hamburger.setAttribute('aria-label', 'Open navigation menu');
			}
		});

		// Close nav on Escape key
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
