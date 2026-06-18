<?php
/**
 * 404.php — Not found template
 *
 * Displayed when WordPress cannot find a matching page or post.
 * Simple, on-brand, with a clear path back to the homepage.
 * No hero section, no CTA section — just a clean error message.
 *
 * @package ChangeTank
 * @version 2.0
 */

get_header();
?>

<main id="main-content" class="ct-main" role="main">

    <section class="section not-found" aria-labelledby="not-found-heading">
        <div class="container container-narrow not-found__inner">

            <span class="not-found__code" aria-hidden="true">404</span>

            <p class="eyebrow">Page not found</p>
            <h1 id="not-found-heading" class="not-found__title">
                This page doesn't exist.
            </h1>
            <p class="not-found__message text-muted">
                The page you're looking for may have been moved or may no longer exist.
                Try heading back to the homepage, or get in touch directly.
            </p>

            <div class="not-found__actions">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-primary">
                    Back to home
                </a>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-text">
                    Get in touch
                </a>
            </div>

        </div>
    </section>

</main><!-- /#main-content -->


<?php get_footer(); ?>
