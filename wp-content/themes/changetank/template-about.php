<?php
/**
 * Template Name: About
 *
 * The About page template for The Change Tank.
 * Sections: Hero → Bio → Credentials Bar → Career Highlights → CTA
 *
 * @package ChangeTank
 * @version 2.0
 */

get_header();
?>

<!-- ============================================================
     SECTION 1: HERO
     Text-only, full-width (no headshot — headshot moves to bio section)
     ============================================================ -->
<section class="hero hero--text-only" aria-label="Page introduction">
    <div class="container container-narrow">
        <p class="eyebrow">About</p>
        <h1>Matthew Johnston — Senior Management Consultant</h1>
        <p class="hero__subline">
            25+ years of senior consulting across mining, resources, rail, and infrastructure — delivered personally.
        </p>
    </div>
</section><!-- /.hero -->


<!-- ============================================================
     SECTION 2: BIO
     2-col: text left (full bio paragraphs), headshot right
     ============================================================ -->
<section class="section" aria-labelledby="bio-heading">
    <div class="container">
        <div class="grid-2 about-bio-grid">

            <!-- Bio text -->
            <div class="about-bio__text">
                <h2 id="bio-heading" class="sr-only">Biography</h2>
                <p>
                    Matthew Johnston has spent more than 25 years getting complex operations ready for the moment they have to work. Not theoretically ready. Not administratively documented. Operationally ready — with the people trained, the systems live, the processes embedded, and the organisation capable of sustaining what has been built. That is the standard he has applied across mining, resources, rail, ports, and health. It is the standard that has made clients call him back.
                </p>
                <p>
                    His work sits at the intersection of program management, business transformation, and operational delivery. He has taken on the full spectrum of what that means in practice: standing up new operations from the ground up, transforming the way existing organisations work, managing large-scale technology deployments at the frontier of what industry has attempted, and guiding senior leaders through the decisions that matter most. He gets into the detail himself. He does not manage the work from a distance and delegate the difficult parts to junior analysts.
                </p>
                <p>
                    His career has moved across industries by design. Mining and resources form a consistent thread — and have produced his most significant program outcomes — but the breadth is genuine. Consulting firms and direct clients have brought Matthew into health, government, utilities, rail, and the arts because the operational complexity of standing up or transforming a function translates across sectors. The pattern-matching that comes from having worked across 15+ distinct industries is not something a single-sector specialist can offer.
                </p>
                <p>
                    Today Matthew operates through The Change Tank while simultaneously serving as a program manager within the innovation function of one of the world's largest resource companies — managing the rollout of frontier technology at enterprise scale. He typically carries three to six active programs at once. The dual-role model is not accidental. It reflects the way his career has always worked: high-demand organisations at the leading edge of their industries continue to choose him as the person who runs the program. He remains available for direct engagements.
                </p>
            </div>

            <!-- Headshot -->
            <div class="about-bio__image">
                <img
                    src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/mj-headshot.jpg"
                    alt="Matthew Johnston — Principal, The Change Tank"
                    width="600"
                    height="800"
                    loading="lazy"
                    decoding="async"
                >
                <!-- HEADSHOT PLACEHOLDER — replace path with final image asset in Phase 3B -->
            </div>

        </div><!-- /.grid-2 -->
    </div><!-- /.container -->
</section><!-- /.section -->


<!-- ============================================================
     SECTION 3: CREDENTIALS BAR
     Cream background. Inline list of key credentials.
     ============================================================ -->
<section class="section section--cream credentials-bar" aria-labelledby="credentials-heading">
    <div class="container">
        <p class="eyebrow" id="credentials-heading">Credentials</p>
        <ul class="credentials-bar__list" aria-label="Qualifications and credentials">
            <li class="credentials-bar__item">Six Sigma Black Belt</li>
            <li class="credentials-bar__item credentials-bar__divider" aria-hidden="true">·</li>
            <li class="credentials-bar__item">Bachelor of Commerce</li>
            <li class="credentials-bar__item credentials-bar__divider" aria-hidden="true">·</li>
            <li class="credentials-bar__item">Grad Dip Arts Management</li>
            <li class="credentials-bar__item credentials-bar__divider" aria-hidden="true">·</li>
            <li class="credentials-bar__item">NSW Retained Firefighter</li>
            <li class="credentials-bar__item credentials-bar__divider" aria-hidden="true">·</li>
            <li class="credentials-bar__item">Explosives Clearance</li>
        </ul>
    </div>
</section><!-- /.credentials-bar -->


<!-- ============================================================
     SECTION 4: CAREER HIGHLIGHTS
     3 milestone cards — narrative format, not a CV list.
     ============================================================ -->
<section class="section" aria-labelledby="highlights-heading">
    <div class="container">

        <div class="section__intro">
            <p class="eyebrow">Career highlights</p>
            <h2 id="highlights-heading">Selected engagements</h2>
            <p class="section__lead text-muted">
                <!-- PLACEHOLDER — MJ TO CONFIRM IN PHASE 3B -->
                25+ years of engagements across industries that don't tolerate failure. A selection
                of the projects that define what The Change Tank does.
            </p>
        </div>

        <div class="grid-3 milestone-cards">

            <div class="milestone-card">
                <div class="milestone-card__accent" aria-hidden="true"></div>
                <p class="eyebrow">Mining Technology · Autonomous Systems</p>
                <p class="text-small text-muted" style="margin:0 0 var(--space-xs);">2022 – 2024</p>
                <h3 class="milestone-card__title">World-First Autonomous Haulage Program</h3>
                <p class="milestone-card__body">
                    Australia's largest coking coal operation became the first mine globally to commercially deploy an autonomous haulage system at scale — and Matthew Johnston was the program manager who took it from integrated trial to full live operation.
                </p>
            </div>

            <div class="milestone-card">
                <div class="milestone-card__accent" aria-hidden="true"></div>
                <p class="eyebrow">Mining &amp; Resources · Operational Readiness</p>
                <p class="text-small text-muted" style="margin:0 0 var(--space-xs);">Multi-year engagement</p>
                <h3 class="milestone-card__title">Multi-Mine Mobilisation — 8 Mines in 8 Weeks</h3>
                <p class="milestone-card__body">
                    A major Asia-Pacific mining operation engaged Matthew to mobilise multiple mine sites simultaneously across a remote overseas operation — 76 contractors, 12,000 tasks, 2 million manhours. All 8 mines were operational in 8 weeks. The outcome was referenced in an ASX announcement.
                </p>
            </div>

            <div class="milestone-card">
                <div class="milestone-card__accent" aria-hidden="true"></div>
                <p class="eyebrow">Innovation Leadership · Technology Programs</p>
                <p class="text-small text-muted" style="margin:0 0 var(--space-xs);">Current</p>
                <h3 class="milestone-card__title">Innovation Portfolio — Global Resources Company</h3>
                <p class="milestone-card__body">
                    Matthew is currently program managing a portfolio of frontier technology deployments for one of the world's largest resource companies — taking proven innovations from pilot to enterprise-scale rollout across underground mining and surface processing globally.
                </p>
            </div>

        </div><!-- /.grid-3 -->

    </div><!-- /.container -->
</section><!-- /.section -->


<!-- ============================================================
     SECTION 5: CTA
     Reusable component: inc/section-cta.php (orange bg)
     ============================================================ -->
<?php get_template_part( 'inc/section-cta' ); ?>

<style id="ct-about-styles">
/* ---- Hero text-only ---- */
.hero--text-only {
    padding: var(--space-xxl) 0 var(--space-xl);
    background-color: var(--ct-white);
}
.hero--text-only h1 {
    font-size: clamp(2.25rem, 4.5vw, 3rem);
    margin: var(--space-sm) 0;
    color: var(--ct-dark);
}
.hero--text-only .hero__subline {
    font-size: 1.125rem;
    color: #444;
    line-height: 1.6;
    margin: 0;
}

/* ---- About bio grid ---- */
.about-bio-grid {
    align-items: start;
    gap: var(--space-xxl);
}
.about-bio__text p {
    font-size: 1.0625rem;
    line-height: 1.8;
    color: #333;
    margin-bottom: var(--space-md);
}
.about-bio__text p:last-child {
    margin-bottom: 0;
}
.about-bio__image {
    display: flex;
    justify-content: center;
}
.about-bio__image img {
    width: 100%;
    max-width: 400px;
    height: auto;
    border-radius: var(--ct-radius);
    object-fit: cover;
    object-position: top;
}

/* ---- Credentials bar ---- */
.credentials-bar__list {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 0.5rem 1rem;
    list-style: none;
    margin: var(--space-md) 0 0;
    padding: 0;
}
.credentials-bar__item {
    font-size: 0.9375rem;
    color: var(--ct-dark);
    font-weight: 500;
}
.credentials-bar__divider {
    color: var(--ct-orange);
    font-weight: 700;
}

/* ---- Milestone cards ---- */.milestone-card {
    padding: var(--space-lg);
    background: var(--ct-white);
    border-radius: var(--ct-radius);
    box-shadow: 0 2px 12px rgba(0,0,0,0.06);
}
.milestone-card__accent {
    width: 36px;
    height: 3px;
    background-color: var(--ct-orange);
    margin-bottom: var(--space-sm);
    border-radius: 2px;
}
.milestone-card .eyebrow {
    margin-bottom: var(--space-xs);
}

.uilestone-card__title {
    font-size: 1.125rem;
    font-weight: 700;
    margin: 0 0 var(--space-sm);
    color: var(--ct-dark);
    line-height: 1.3;
}
.milestone-card__title {
    font-size: 1.125rem;
    font-weight: 700;
    margin: 0 0 var(--space-sm);
    color: var(--ct-dark);
    line-height: 1.3;
}
.milestone-card__body {
    font-size: 0.9375rem;
    color: #555;
    margin: 0;
    line-height: 1.7;
}

/* ---- Responsive ---- */
@media (max-width: 768px) {
    .about-bio-grid {
        gap: var(--space-xl);
    }
    .about-bio__image {
        order: -1;
    }
    .about-bio__image img {
        max-width: 260px;
        max-height: 320px;
    }
    .credentials-bar__list {
        gap: 0.75rem 0.5rem;
    }
    .credentials-bar__divider {
        display: none;
    }
}
</style>

<?php get_footer(); ?>
