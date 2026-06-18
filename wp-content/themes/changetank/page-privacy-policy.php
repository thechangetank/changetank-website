<?php
/**
 * Template Name: Privacy Policy
 * Template Post Type: page
 *
 * Privacy Policy page template. Matches the WordPress slug "privacy-policy"
 * (used in footer.php link: /privacy-policy/).
 *
 * Simple layout: header, page title, full-width content via the_content().
 * Content is injected via the WordPress REST API in Phase 3A-5 using the
 * accepted P0E privacy policy draft (Claude Playground/Projects/Change-tank-website/
 * P0E-privacy-policy-draft.md).
 *
 * No hero, no CTA section — this is a legal/utility page.
 *
 * @package ChangeTank
 * @version 2.0
 */

get_header();
?>

<main id="main-content" class="ct-main" role="main">

    <!-- ============================================================
         PAGE TITLE
         ============================================================ -->
    <div class="privacy-page-header">
        <div class="container container-narrow">
            <p class="eyebrow">Legal</p>
            <h1><?php the_title(); ?></h1>
            <?php if ( get_the_modified_date() ) : ?>
                <p class="privacy-page-header__updated text-small text-muted">
                    Last updated: <?php echo esc_html( get_the_modified_date( 'j F Y' ) ); ?>
                </p>
            <?php endif; ?>
        </div>
    </div>


    <!-- ============================================================
         CONTENT AREA
         Renders the_content() — injected via REST API in Phase 3A-5
         ============================================================ -->
    <div class="privacy-content">
        <div class="container container-narrow">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                    <?php
                endwhile;
            else :
                // Placeholder shown until REST API injects content in Phase 3A-5
                ?>
                <div class="entry-content">
                    <p class="text-muted">
                        [Privacy Policy content — to be injected via WordPress REST API in Phase 3A-5.
                        Content source: P0E-privacy-policy-draft.md, accepted Session 5.]
                    </p>
                </div>
                <?php
            endif;
            ?>
        </div>
    </div><!-- /.privacy-content -->


    <!-- ============================================================
         BACK LINK
         Simple navigation back to home — capabilities no CTA section on legal pages.
         ============================================================ -->
    <div class="privacy-backnav">
        <div class="container container-narrow">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-text">
                &larr; Back to home
            </a>
        </div>
    </div>

</main><!-- /#main-content -->

<style id="ct-privacy-styles">
/* ---- Privacy page header ---- */
.privacy-page-header {
    background-color: var(--ct-cream);
    padding: var(--space-xxl) 0 var(--space-xl);
    border-bottom: 1px solid var(--ct-border);
}
.privacy-page-header h1 {
    font-size: clamp(1.75rem, 3.5vw, 2.5rem);
    margin: var(--space-sm) 0 var(--space-xs);
    color: var(--ct-dark);
}
.privacy-page-header__updated {
    margin: 0;
}

/* ---- Content area ---- */
.privacy-content {
    padding: var(--space-xxl) 0;
}

.entry-content h2 {
    font-size: 1.375rem;
    font-weight: 700;
    margin: var(--space-xl) 0 var(--space-sm);
    color: var(--ct-dark);
}
.entry-content h3 {
    font-size: 1.125rem;
    font-weight: 600;
    margin: var(--space-lg) 0 var(--space-xs);
    color: var(--ct-dark);
}
.entry-content p {
    font-size: 1rem;
    line-height: 1.8;
    color: #333;
    margin-bottom: var(--space-md);
}
.entry-content ul,
.entry-content ol {
    margin: 0 0 var(--space-md) var(--space-lg);
    padding: 0;
}
.entry-content li {
    font-size: 1rem;
    line-height: 1.7;
    color: #333;
    margin-bottom: var(--space-xs);
}
.entry-content a {
    color: var(--ct-orange);
    text-decoration: underline;
}
.entry-content a:hover,
.entry-content a:focus {
    opacity: 0.75;
    outline: none;
}

/* ---- Back nav ---- */
.privacy-backnav {
    padding: 0 0 var(--space-xxl);
}
</style>

<?php get_footer(); ?>
