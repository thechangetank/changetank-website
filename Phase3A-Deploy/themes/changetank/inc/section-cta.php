<?php
/**
 * Section CTA — reusable include.
 *
 * A full-width call-to-action section used at the bottom of most
 * pages. Orange background, white text. Heading: "Ready to talk?"
 * Sub-line positions MJ's unique value. Single CTA button to /contact.
 *
 * Usage (in any page template or template part):
 *   get_template_part( 'inc/section-cta' );
 *
 * @package ChangeTank
 * @version 2.0
 */
?>

<!-- ============================================================
     SECTION CTA — "Ready to talk?"
     ============================================================ -->
<section class="section-cta" aria-labelledby="section-cta-heading">
	<div class="container">
		<div class="section-cta__inner">

			<div class="section-cta__copy">
				<h2 class="section-cta__heading" id="section-cta-heading">
					Ready to talk?
				</h2>
				<p class="section-cta__sub">
					No pitch decks. No junior team. Just senior consulting, delivered by MJ.
				</p>
			</div>

			<div class="section-cta__action">
				<a
					href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"
					class="btn-cta-inverse"
				>
					Get in touch
				</a>
			</div>

		</div><!-- /.section-cta__inner -->
	</div><!-- /.container -->
</section><!-- /.section-cta -->

