<?php
/**
 * Template Name: Home
 *
 * The homepage template for The Change Tank.
 * Sections: Hero → Credential Strip → What We Do → Why TCT → Featured Case Study → CTA
 *
 * @package ChangeTank
 * @version 2.0
 */

get_header();
?>

<!-- ============================================================
     SECTION 1: HERO
     Asymmetric layout: 60% left (copy) / 40% right (headshot)
     ============================================================ -->
<section class="hero" aria-label="Introduction">
    <div class="container">
        <div class="grid-hero">
            <div class="hero__copy">
                <p class="eyebrow">Management Consulting · Mining &amp; Resources</p>
                <h1>Senior-led consulting for complex programs.</h1>
                <p class="hero__subline">The management consultant mining Australia's most demanding operations have relied on for 25 years. Matthew Johnston works directly with every client — no junior teams, no handover.</p>
                <div class="hero__cta-group">
                    <a href="/contact/" class="btn-primary">Get in touch</a>
                    <a href="/case-studies/" class="btn-text">See our work</a>
                </div>
            </div>
            <div class="hero__image">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/mj-headshot.jpg" alt="Matthew Johnston, The Change Tank" width="600" height="800" loading="eager" decoding="async">
            </div>
        </div>
    </div>
</section>

<?php get_template_part( 'inc/credential-strip' ); ?>

<section class="section">
    <div class="container">
        <div class="section__intro">
            <p class="eyebrow">What The Change Tank Delivers</p>
            <h2 id="capabilities-heading">Senior consulting across the projects that matter.</h2>
            <p class="section__lead text-muted">Three capability areas. One senior practitioner. Delivered personally.</p>
        </div>
        <div class="grid-3 capability-tiles">
            <div class="capability-tile"><span class="capability-tile__number">01</span><h3 class="capability-tile__title">Business Transformation</h3><p class="capability-tile__desc">Complex organisations don't transform themselves. Matthew Johnston leads end-to-end business transformation — from the brief through to operational implementation.</p></div>
            <div class="capability-tile"><span class="capability-tile__number">02</span><h3 class="capability-tile__title">Program &amp; Project Management</h3><p class="capability-tile__desc">From world-first autonomous haulage programs to multi-mine mobilisations. He runs the program himself.</p></div>
            <div class="capability-tile"><span class="capability-tile__number">03</span><h3 class="capability-tile__title">Operational Readiness</h3><p class="capability-tile__desc">Getting a complex operation genuinely ready for Day One — The Change Tank's signature capability.</p></div>
        </div>
        <div class="section__footer"><a href="/capabilities/" class="btn-text">View all capabilities</a></div>
    </div>
</section>

<section class="section section--cream">
    <div class="container">
        <div class="section__intro"><p class="eyebrow">Why The Change Tank</p><h2 id="why-heading">The senior person you actually work with.</h2></div>
        <div class="grid-2 differentiator-blocks">
            <div class="differentiator-block"><div class="differentiator-block__accent" aria-hidden="true"></div><h3 class="differentiator-block__title">Senior delivery, done personally.</h3><p class="differentiator-block__body">When you engage The Change Tank, you work with Matthew Johnston directly. No pitch team. No junior handover. That is the model.</p></div>
            <div class="differentiator-block"><div class="differentiator-block__accent" aria-hidden="true"></div><h3 class="differentiator-block__title">A track record built in demanding sectors.</h3><p class="differentiator-block__body">25+ years of consulting across mining, resources, rail, ports, and health. Matthew's project outcomes have been referenced in ASX announcements.</p></div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section__intro"><p class="eyebrow">Work That Speaks for Itself</p><h2>Proof, not promises.</h2></div>
        <div class="featured-case-study">
            <div class="featured-case-study__card"><div class="featured-case-study__accent" aria-hidden="true"></div><div class="featured-case-study__content"><p class="eyebrow">Mining Technology &middot; Autonomous Systems</p><h3 class="featured-case-study__headline">World-First Autonomous Haulage Program — Commercial Deployment</h3><p class="featured-case-study__summary">A major Australian coal operation deployed autonomous haulage technology at commercial scale for the first time globally. Matthew Johnston managed the program from integrated trial through to full live operation.</p><a href="/case-studies/" class="btn-text">Read the case study</a></div></div>
        </div>
        <div class="section__footer"><a href="/case-studies/" class="btn-text">View all case studies</a></div>
    </div>
</section>

<?php get_template_part( 'inc/section-cta' ); ?>

<?php get_footer(); ?>
