<?php
/**
 * The footer for the ChangeTank theme.
 *
 * Closes the #main-content element opened in header.php.
 * Outputs a two-row footer: wordmark + tagline (row 1),
 * nav links + copyright (row 2). Cream background, minimal design.
 *
 * @package ChangeTank
 * @version 2.0
 */
?>

</main><!-- /#main-content.ct-main -->

<!-- ============================================================
     SITE FOOTER
     ============================================================ -->
<footer class="ct-footer" role="contentinfo">
	<div class="container">

		<!-- Row 1: Logo / Wordmark + Tagline -->
		<div class="ct-footer__top">

			<div class="ct-footer__brand">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ct-footer__logo" rel="home" aria-label="<?php bloginfo( 'name' ); ?> — home">
					<?php
					if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) :
						the_custom_logo();
					else :
					?>
					<span class="ct-footer__logo-text">The Change Tank</span>
					<?php endif; ?>
				</a>
				<p class="ct-footer__tagline">Senior management consulting, delivered personally.</p>
			</div><!-- /.ct-footer__brand -->

		</div><!-- /.ct-footer__top -->

		<!-- Divider -->
		<hr class="ct-footer__divider">

		<!-- Row 2: Nav links (left) + Copyright (right) -->
		<div class="ct-footer__bottom">

			<nav class="ct-footer__nav" aria-label="<?php esc_attr_e( 'Footer navigation', 'changetank' ); ?>">
				<ul class="ct-footer__nav-list">
					<li><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>" class="ct-footer__nav-link">Privacy Policy</a></li>
					<li>
						<a
							href="https://www.linkedin.com/in/matthewj1/"
							class="ct-footer__nav-link"
							target="_blank"
							rel="noopener noreferrer"
							aria-label="MJ Johnston on LinkedIn (opens in new tab)"
						>LinkedIn</a>
					</li>
					<li>
						<a
							href="mailto:mj@changetank.com.au"
							class="ct-footer__nav-link"
						>mj@changetank.com.au</a>
					</li>
				</ul>
			</nav><!-- /.ct-footer__nav -->

			<p class="ct-footer__copyright">
				&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> The Change Tank Pty Ltd. All rights reserved.
			</p>

		</div><!-- /.ct-footer__bottom -->

	</div><!-- /.container -->
</footer><!-- /.ct-footer -->

<?php wp_footer(); ?>

</body>
</html>

<style id="ct-footer-styles">

/* ============================================================
   SITE FOOTER
   ============================================================ */
.ct-footer {
	background-color: var(--ct-cream);
	padding-top: var(--space-3xl);
	padding-bottom: var(--space-xl);
	margin-top: 0;
}

/* ============================================================
   ROW 1 — BRAND (wordmark + tagline)
   ============================================================ */
.ct-footer__top {
	padding-bottom: var(--space-xl);
}

.ct-footer__brand {
	display: flex;
	flex-direction: column;
	gap: var(--space-sm);
}

/* Footer logo / wordmark */
.ct-footer__logo {
	display: inline-flex;
	align-items: center;
	text-decoration: none;
}

.ct-footer__logo img {
	height: 30px;
	width: auto;
	display: block;
}

.ct-footer__logo-text {
	font-family: var(--ct-font);
	font-size: 18px;
	font-weight: 700;
	color: var(--ct-dark);
	letter-spacing: -0.02em;
	line-height: 1;
}

.ct-footer__logo:hover .ct-footer__logo-text,
.ct-footer__logo:focus .ct-footer__logo-text {
	color: var(--ct-orange);
}

/* Tagline */
.ct-footer__tagline {
	font-size: 15px;
	color: var(--ct-grey);
	font-weight: 400;
	line-height: 1.5;
	margin-bottom: 0;
}

/* ============================================================
   DIVIDER
   ============================================================ */
.ct-footer__divider {
	border: none;
	border-top: 1px solid var(--ct-border);
	margin: 0;
}

/* ============================================================
   ROW 2 — NAV + COPYRIGHT
   ============================================================ */
.ct-footer__bottom {
	display: flex;
	align-items: center;
	justify-content: space-between;
	gap: var(--space-xl);
	padding-top: var(--space-lg);
}

/* Footer nav links */
.ct-footer__nav-list {
	display: flex;
	align-items: center;
	gap: var(--space-xl);
	list-style: none;
	margin: 0;
	padding: 0;
	flex-wrap: wrap;
}

.ct-footer__nav-link {
	font-size: 13px;
	font-weight: 500;
	color: var(--ct-grey);
	text-decoration: none;
	transition: color 0.2s ease;
}

.ct-footer__nav-link:hover,
.ct-footer__nav-link:focus {
	color: var(--ct-orange);
	text-decoration: none;
}

/* Copyright */
.ct-footer__copyright {
	font-size: 12px;
	color: var(--ct-grey);
	white-space: nowrap;
	margin-bottom: 0;
}

/* ============================================================
   RESPONSIVE — 768px
   ============================================================ */
@media (max-width: 768px) {

	.ct-footer {
		padding-top: var(--space-2xl);
		padding-bottom: var(--space-lg);
	}

	.ct-footer__bottom {
		flex-direction: column;
		align-items: flex-start;
		gap: var(--space-md);
	}

	.ct-footer__nav-list {
		gap: var(--space-lg);
	}

	.ct-footer__copyright {
		white-space: normal;
	}
}

@media (max-width: 480px) {

	.ct-footer__nav-list {
		flex-direction: column;
		align-items: flex-start;
		gap: var(--space-sm);
	}
}

</style>
