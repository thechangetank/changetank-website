<?php
/**
 * Template Name: Contact
 *
 * The Contact page template for The Change Tank.
 * Sections: Hero → 2-col contact layout (info left, form right) → CTA strip
 *
 * Contact form right column uses a placeholder div — FormLayer plugin to be
 * configured in Phase 3B. Left column is static HTML with real contact details.
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
        <p class="eyebrow">Contact</p>
        <h1>Get in Touch</h1>
        <p class="hero__subline">
            Independent management consultant, available Australia-wide and internationally.
        </p>
    </div>
</section><!-- /.hero -->


<!-- ============================================================
     SECTION 2: CONTACT LAYOUT
     2-col: contact info left, form placeholder right
     ============================================================ -->
<section class="section" aria-labelledby="contact-content-heading">
    <div class="container">
        <h2 id="contact-content-heading" class="sr-only">Contact information and enquiry form</h2>

        <div class="grid-2 contact-grid">

            <!-- LEFT: Contact info -->
            <div class="contact-info">

                <h3 class="contact-info__heading">Tell me about your project</h3>
                <p class="contact-info__intro text-muted">
                    Matthew responds to every enquiry personally. There is no pitch process, no discovery template, and no junior team filtering inbound contact. If the work sounds like a fit, the first conversation is a direct one.
                </p>

                <!-- Email -->
                <div class="contact-info__item">
                    <span class="contact-info__label eyebrow">Email</span>
                    <a href="mailto:mj@changetank.com.au" class="contact-info__value contact-info__link">
                        mj@changetank.com.au
                    </a>
                </div>

                <!-- LinkedIn -->
                <div class="contact-info__item">
                    <span class="contact-info__label eyebrow">LinkedIn</span>
                    <a
                        href="https://www.linkedin.com/in/matthewj1/"
                        class="contact-info__value contact-info__link"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Matthew Johnston on LinkedIn (opens in new tab)"
                    >
                        linkedin.com/in/matthewj1
                    </a>
                </div>

                <!-- Location / availability -->
                <div class="contact-info__item">
                    <span class="contact-info__label eyebrow">Location &amp; availability</span>
                    <p class="contact-info__value">
                        Available Australia-wide and internationally.<br>
                        Based in Mullumbimby, NSW.
                    </p>
                </div>

                <!-- Response expectation -->
                <div class="contact-info__response">
                    <p class="text-small text-muted">
                        <!-- RESPONSE TIME PLACEHOLDER — MJ TO CONFIRM IN PHASE 3B -->
                        MJ responds personally within 1 business day.
                    </p>
                </div>

            </div><!-- /.contact-info -->

            <!-- RIGHT: Contact form placeholder -->
            <div class="contact-form">

                <h3 class="contact-form__heading">Send an enquiry</h3>

                <div class="form-placeholder" role="region" aria-label="Contact form">
                    <p class="form-placeholder__note">
                        Contact form — to be configured in Phase 3B with FormLayer.
                    </p>
                    <p class="form-placeholder__fields text-muted text-small">
                        Fields: Name · Email · Phone · What are you working on? · Preferred contact method
                    </p>
                    <!-- FormLayer shortcode or block to be inserted here in Phase 3B -->
                    <!-- Example: [formlayer_form id="1"] -->
                </div>

            </div><!-- /.contact-form -->

        </div><!-- /.grid-2 -->

    </div><!-- /.container -->
</section><!-- /.section -->


<!-- ============================================================
     SECTION 3: CTA STRIP (tagline only — no duplicate form CTA)
     Cream background strip with tagline text
     ============================================================ -->
<section class="section section--cream contact-tagline-strip" aria-label="Closing message">
    <div class="container">
        <p class="contact-tagline__text">
            <!-- TAGLINE PLACEHOLDER — MJ TO CONFIRM IN PHASE 3B -->
            The person you contact is the person on site.
        </p>
    </div>
</section>


<?php get_footer(); ?>
