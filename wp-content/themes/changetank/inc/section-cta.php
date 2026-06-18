<?php
/**
 * Section CTA — reusable include.
 *
 * @package ChangeTank
 * @version 2.0
 */
?>

<section class="section-cta" aria-labelledby="section-cta-heading">
	<div class="container">
		<div class="section-cta__inner">
			<div class="section-cta__copy">
				<h2 class="section-cta__heading" id="section-cta-heading">Ready to talk?</h2>
				<p class="section-cta__sub">No pitch decks. No junior team. Just senior consulting, delivered by MJ.</p>
			</div>
			<div class="section-cta__action">
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-cta-inverse">Get in touch</a>
			</div>
		</div>
	</div>
</section>

<style id="ct-section-cta-styles">
.section-cta { background-color: var(--ct-orange); padding-top: var(--space-3xl); padding-bottom: var(--space-3xl); }
.section-cta__inner { display: flex; align-items: center; justify-content: space-between; overflow: var(--space-2xl); }
.section-cta__copy { flex: 1; max-width: 620px; }
.section-cta__heading { font-size: 36px; font-weight: 700; color: var(--ct-white); line-height: 1.1; margin-bottom: var(--space-sm); }
.section-cta__sub { font-size: 16px; color: rgba(255,255,255,0.85); line-height: 1.6; margin-bottom: 0; }
.section-cta__action { flex-shrink: 0; }
.btn-cta-inverse { display: inline-flex; align-items: center; background-color: var(--ct-white); color: var(--ct-orange); border: 2px solid var(--ct-white); padding: 0.875rem 2rem; border-radius: var(--ct-radius); font-size: 14px; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; text-decoration: none; white-space: nowrap; }
.btn-cta-inverse:hover { background-color: var(--ct-dark); border-color: var(--ct-dark); color: var(--ct-white); }
@media (max-width: 768px) { .section-cta__inner { flex-direction: column; align-items: flex-start; gap: var(--space-xl); } .section-cta__heading { font-size: 28px; } }
</style>
