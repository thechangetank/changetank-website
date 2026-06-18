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

            <!-- Hero left: copy -->
            <div class="hero__copy">
                <p class="eyebrow">Management Consulting · Mining &amp; Resources</p>
                <h1>
                    Senior-led consulting for complex programs.
                </h1>
                <p class="hero__subline">
                    The management consultant mining Australia's most demanding operations have relied on for 25 years. Matthew Johnston works directly with every client — no junior teams, no handover.
                </p>
                <div class="hero__cta-group">
                    <a href="/contact/" class="btn-primary">Get in touch</a>
                    <a href="/case-studies/" class="btn-text">See our work</a>
                </div>
            </div>

            <!-- Hero right: headshot -->
            <div class="hero__image">
                <img
                    src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/mj-headshot.jpg"
                    alt="Matthew Johnston, The Change Tank"
                    width="600"
                    height="800"
                    loading="eager"
                    decoding="async"
                >
                <!-- HEADSHOT PLACEHOLDER — replace path with final image asset in Phase 3B -->
            </div>

        </div><!-- /.grid-hero -->
    </div><!-- /.container -->
</section><!-- /.hero -->


<!-- ============================================================
     SECTION 2: CREDENTIAL STRIP
     Reusable component: inc/credential-strip.php
     ============================================================ -->
<?php get_template_part( 'inc/credential-strip' ); ?>


<!-- ============================================================
     SECTION 3: WHAT WE DO
     3-col numbered capability tiles. Copy confirmed in Phase 3B.
     ============================================================ -->
<section class="section" aria-labelledby="capabilities-heading">
    <div class="container">

        <div class="section__intro">
            <p class="eyebrow">What The Change Tank Delivers</p>
            <h2 id="capabilities-heading">Senior consulting across the projects that matter.</h2>
            <p class="section__lead text-muted">
                Three capability areas. One senior practitioner. Delivered personally.
            </p>
        </div>

        <div class="grid-3 capability-tiles">

            <div class="capability-tile">
                <span class="capability-tile__number">01</span>
                <h3 class="capability-tile__title">Business Transformation</h3>
                <p class="capability-tile__desc">
                    Complex organisations don't transform themselves. Matthew Johnston leads end-to-end business transformation — from the brief through to operational implementation — so the change takes hold in practice, not just on paper.
                </p>
            </div>

            <div class="capability-tile">
                <span class="capability-tile__number">02</span>
                <h3 class="capability-tile__title">Program &amp; Project Management</h3>
                <p class="capability-tile__desc">
                    From world-first autonomous haulage programs to multi-mine mobilisations, Matthew has managed programs at the frontier of what Australian industry has attempted. He runs the program himself — not from a project office.
                </p>
            </div>

            <div class="capability-tile">
                <span class="capability-tile__number">03</span>
                <h3 class="capability-tile__title">Operational Readiness</h3>
                <p class="capability-tile__desc">
                    Getting a complex operation genuinely ready for Day One — people trained, systems operational, processes embedded, interfaces tested — is a discipline, not a checklist. It is The Change Tank's signature capability and the proof behind every major engagement.
                </p>
            </div>

        </div><!-- /.grid-3 -->

        <div class="section__footer">
            <a href="/capabilities/" class="btn-text">View all capabilities</a>
        </div>

    </div><!-- /.container -->
</section><!-- /.section -->


<!-- ============================================================
     SECTION 4: WHY THE CHANGE TANK
     Cream background. 2 differentiator blocks side-by-side.
     ============================================================ -->
<section class="section section--cream" aria-labelledby="why-heading">
    <div class="container">

        <div class="section__intro">
            <p class="eyebrow">Why The Change Tank</p>
            <h2 id="why-heading">The senior person you actually work with.</h2>
        </div>

        <div class="grid-2 differentiator-blocks">

            <div class="differentiator-block">
                <div class="differentiator-block__accent" aria-hidden="true"></div>
                <h3 class="differentiator-block__title">Senior delivery, done personally.</h3>
                <p class="differentiator-block__body">
                    When you engage The Change Tank, you work with Matthew Johnston directly. No pitch team. No junior handover two weeks in. The same practitioner who takes the brief understands the operation, gets on site, and delivers the outcome. That is the model — and it is why clients come back.
                </p>
            </div>

            <div class="differentiator-block">
                <div class="differentiator-block__accent" aria-hidden="true"></div>
                <h3 class="differentiator-block__title">A track record built in demanding sectors.</h3>
                <p class="differentiator-block__body">
                    25+ years of consulting across mining, resources, rail, ports, and health — the sectors where complex operations are built, mobilised, and transformed under real conditions. Matthew's project outcomes have been referenced in ASX announcements. His clients have brought him back more than once.
                </p>
            </div>

        </div><!-- /.grid-2 -->

    </div><!-- /.container -->
</section><!-- /.section--cream -->


<!-- ============================================================
     SECTION 5: FEATURED CASE STUDY
     Single featured card with coloured left-border accent.
     ============================================================ -->
<section class="section" aria-labelledby="case-studies-heading">
    <div class="container">

        <div class="section__intro">
            <p class="eyebrow">Work That Speaks for Itself</p>
            <h2 id="case-studies-heading">Proof, not promises.</h2>
            <p class="section__lead text-muted">The following engagement represents the kind of complex, high-stakes program The Change Tank was built for.</p>
        </div>

        <div class="featured-case-study">
            <div class="featured-case-study__card">
                <div class="featured-case-study__accent" aria-hidden="true"></div>
                <div class="featured-case-study__content">
                    <p class="eyebrow">Mining Technology &middot; Autonomous Systems</p>
                    <h3 class="featured-case-study__headline">
                        World-First Autonomous Haulage Program — Commercial Deployment
                    </h3>
                    <p class="featured-case-study__summary">
                        A major Australian coal operation deployed autonomous haulage technology at commercial scale for the first time globally. Matthew Johnston managed the program from integrated trial through to full live operation — navigating frontier technology, active mine constraints, multi-stakeholder delivery, and a timeline with no slack. The program was delivered. The trucks ran commercially. What was a world-first became a working mine operation.
                    </p>
                    <a href="/case-studies/" class="btn-text">Read the case study</a>
                </div>
            </div>
        </div><!-- /.featured-case-study -->

        <div class="section__footer">
            <a href="/case-studies/" class="btn-text">View all case studies</a>
        </div>

    </div><!-- /.container -->
</section><!-- /.section -->


<!-- ============================================================
     SECTION 6: CTA
     Reusable component: inc/section-cta.php (orange bg)
     ============================================================ -->
<?php get_template_part( 'inc/section-cta' ); ?>


<?php get_footer(); ?>
