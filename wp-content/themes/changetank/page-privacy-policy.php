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
         Simple navigation back to home — po CTA section on legal pages.
         ============================================================ -->
    <div class="privacy-backnav">
        <div class="container container-narrow">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-text">
                &larr; Back to home
            </a>
        </div>
    </div>

</main><!-- /#main-content -->


<?php get_footer(); ?>
