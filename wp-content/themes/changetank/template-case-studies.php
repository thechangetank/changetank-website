<?php
/**
 * Template Name: Case Studies
 *
 * The Case Studies index page for The Change Tank.
 * Sections: Hero → Intro → Case Study Card Grid → CTA
 *
 * @package ChangeTank
 * @version 2.0
 */

get_header();
?>

<section class="hero hero--text-only" aria-label="Page introduction">
    <div class="container container-narrow">
        <p class="eyebrow">Case Studies</p>
        <h1>Case Studies</h1>
        <p class="hero__subline">Real engagements. Real outcomes.</p>
    </div>
</section>

<section class="section section--cream" aria-label="Case studies">
    <div class="container">
        <div class="grid-2 case-study-grid">
            <article class="case-study-card"><div class="case-study-card__accent" aria-hidden="true"></div><div class="case-study-card__inner"><p class="eyebrow">Mining &amp; Resources</p><h2 class="case-study-card__title">8 mines mobilised in 8 weeks — Orica / Glencore</h2><p class="case-study-card__summary">[2-line summary placeholder. MJ to provide.]</p><a href="#" class="btn-text">Read more</a></div></article>
            <article class="case-study-card"><div class="case-study-card__accent" aria-hidden="true"></div><div class="case-study-card__inner"><p class="eyebrow">Technology &amp; Autonomy</p><h2 class="case-study-card__title">World's first autonomous truck global rollout — Hitachi / Whitehaven Coal</h2><p class="case-study-card__summary">[2-line summary placeholder. MJ to provide.]</p><a href="#" class="btn-text">Read more</a></div></article>
            <article class="case-study-card"><div class="case-study-card__accent" aria-hidden="true"></div><div class="case-study-card__inner"><p class="eyebrow">Ports &amp; Logistics</p><h2 class="case-study-card__title">16-system IM program — Wiggins Island</h2><p class="case-study-card__summary">[2-line summary placeholder. MJ to provide.]</p><a href="#" class="btn-text">Read more</a></div></article>
            <article class="case-study-card"><div class="case-study-card__accent" aria-hidden="true"></div><div class="case-study-card__inner"><p class="eyebrow">Rail &amp; Transport</p><h2 class="case-study-card__title">100% throughput improvement — Queensland Rail</h2><p class="case-study-card__summary">[2-line summary placeholder. MJ to provide.]</p><a href="#" class="btn-text">Read more</a></div></article>
        </div>
    </div>
</section>

<?php get_template_part( 'inc/section-cta' ); ?>

<style id="ct-case-studies-styles">
.case-study-grid { gap: var(--space-lg); }
.case-study-card { display: flex; background: var(--ct-white); border-radius: var(--ct-radius); box-shadow: 0 2px 12px rgba(0,0,0,0.07); overflow: hidden; }
.case-study-card__accent { width: 5px; background-color: var(--ct-orange); flex-shrink: 0; }
.case-study-card__inner { padding: var(--space-lg) var(--space-xl); display: flex; flex-direction: column; gap: var(--space-xs); }
.case-study-card__title { font-size: 1.125rem; font-weight: 700; color: var(--ct-dark); margin: 0; line-height: 1.3; }
.case-study-card__summary { font-size: 0.9375rem; color: #555; line-height: 1.7; margin: var(--space-xs) 0 var(--space-sm); flex: 1; }
</style>

<?php get_footer(); ?>
