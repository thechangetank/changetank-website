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

