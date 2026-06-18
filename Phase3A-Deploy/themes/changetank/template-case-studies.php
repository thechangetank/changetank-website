<?php
/**
 * Template Name: Case Studies
 *
 * The Case Studies index page for The Change Tank.
 * Sections: Hero → Intro → Case Study Card Grid → CTA
 *
 * Card content is PLACEHOLDER — MJ to brief all case study content in Phase 3B.
 * Recommended case studies (from sitemap.md):
 *   1. Orica / Glencore —  8 mines in 8 weeks
 *   2. Hitachi / Whitehaven Coal — world-first autonomous truck
 *   3. Wiggins Island — 1-system IM program
 *   4. Queensland Rail — 100% throughput improvement
 *
 * @package ChangeTank
 * @version 2.0
 */

get_header();
?>

<!-- ============================================================
     SECTION 1: HERO
     Text-only, full-width
     ============================================================ -->
<section class="hero hero--text-only" aria-label="Page introduction">
    <div class="container container-narrow">
        <p class="eyebrow">Case Studies</p>
        <h1>Case Studies</h1>
        <p class="hero__subline">
            Real engagements. Real outcomes.
        </p>
    </div>
</section><!-- /.hero -->


<!-- ============================================================
     SECTION 2: INTRO
     2 sentences, narrow column
     ============================================================ -->
<section class="section case-studies-intro" aria-label="Introduction">
    <div class="container container-narrow">
        <!-- INTRO PLACEHOLDER — MJ TO CONFIRM IN PHASE 3B -->
        <p class="case-studies-intro__text">
            [CASE STUDIES INTRO PLACEHOLDER — MJ to provide 2 sentences. Suggested focus:
            why case studies matter, MJ's approach to documenting outcomes, and that every
            engagement listed was delivered personally.]
        </p>
    </div>
</section>


<!-- ============================================================
     SECTION 3: CASE STUDY CARD GRID
     Cream background. 3–4 cards, 2-col grid on desktop.
     Each card: eyebrow (industry) + h3 (engagement title) + 2-line summary + "Read more"
     ALL CONTENT PLACEHOLDER — MJ TO BRIEF IN PHASE 3B
     ============================================================ -->
<section class="section section--cream" aria-label="Case studies">
    <div class="container">

        <div class="grid-2 case-study-grid">

            <!-- Card 1 — PLACEHOLDER -->
            <article class="case-study-card">
                <div class="case-study-card__accent" aria-hidden="true"></div>
                <div class="case-study-card__inner">
                    <p class="eyebrow">
                        <!-- INDUSTRY PLACEHOLDER — MJ TO CONFIRM -->
                        Mining &amp; Resources
                    </p>
                    <h2 class="case-study-card__title">
                        <!-- ENGAGEMENT TITLE PLACEHOLDER — MJ TO CONFIRM IN PHASE 3B -->
                        8 mines mobilised in 8 weeks — Orica / Glencore
                    </h2>
                    <p class="case-study-card__summary">
                        <!-- SUMMARY PLACEHOLDER — 2 lines max — MJ TO BRIEF IN PHASE 3B -->
                        [2-line summary placeholder. MJ to provide: what the challenge was, what
                        was delivered, and the key outcome metric or client reference.]
                    </p>
                    <a href="#" class="btn-text" aria-label="Read the Orica / Glencore case study">
                        Read more
                    </a>
                    <!-- NOTE: href to be updated to actual case study page slug in Phase 3B -->
                </div>
            </article>

            <!-- Card 2 — PLACEHOLDER -->
            <article class="case-study-card">
                <div class="case-study-card__accent" aria-hidden="true"></div>
                <div class="case-study-card__inner">
                    <p class="eyebrow">
                        <!-- INDUSTRY PLACEHOLDER -->
                        Technology &amp; Autonomy
                    </p>
                    <h2 class="case-study-card__title">
                        <!-- ENGAGEMENT TITLE PLACEHOLDER -->
                        World's first autonomous truck global rollout — Hitachi / Whitehaven Coal
                    </h2>
                    <p class="case-study-card__summary">
                        <!-- SUMMARY PLACEHOLDER -->
                        [2-line summary placeholder. MJ to provide.]
                    </p>
                    <a href="#" class="btn-text" aria-label="Read the Hitachi / Whitehaven Coal case study">
                        Read more
                    </a>
                </div>
            </article>

            <!-- Card 3 — PLACEHOLDER -->
            <article class="case-study-card">
                <div class="case-study-card__accent" aria-hidden="true"></div>
                <div class="case-study-card__inner">
                    <p class="eyebrow">
                        <!-- INDUSTRY PLACEHOLDER -->
                        Ports &amp; Logistics
                    </p>
                    <h2 class="case-study-card__title">
                        <!-- ENGAGEMENT TITLE PLACEHOLDER -->
                        16-system IM program — on budget, on time — Wiggins Island
                    </h2>
                    <p class="case-study-card__summary">
                        <!-- SUMMARY PLACEHOLDER -->
                        [2-line summary placeholder. MJ to provide.]
                    </p>
                    <a href="#" class="btn-text" aria-label="Read the Wiggins Island case study">
                        Read more
                    </a>
                </div>
            </article>

            <!-- Card 4 — PLACEHOLDER -->
            <article class="case-study-card">
                <div class="case-study-card__accent" aria-hidden="true"></div>
                <div class="case-study-card__inner">
                    <p class="eyebrow">
                        <!-- INDUSTRY PLACEHOLDER -->
                        Rail &amp; Transport
                    </p>
                    <h2 class="case-study-card__title">
                        <!-- ENGAGEMENT TITLE PLACEHOLDER -->
                        100% throughput improvement — Queensland Rail
                    </h2>
                    <p class="case-study-card__summary">
                        <!-- SUMMARY PLACEHOLDER -->
                        [2-line summary placeholder. MJ to provide.]
                    </p>
                    <a href="#" class="btn-text" aria-label="Read the Queensland Rail case study">
                        Read more
                    </a>
                </div>
            </article>

        </div><!-- /.grid-2 -->

    </div><!-- /.container -->
</section><!-- /.section -->


<!-- ============================================================
     SECTION 4: CTA
     Reusable component: inc/section-cta.php (orange bg)
     ============================================================ -->
<?php get_template_part( 'inc/section-cta' ); ?>


<?php get_footer(); ?>
