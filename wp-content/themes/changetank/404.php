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

<style id="ct-404-styles">
.not-found {
    min-height: 60vh;
    display: flex;
    align-items: center;
}
.not-found__inner {
    text-align: center;
    padding-top: var(--space-xxl);
    padding-bottom: var(--space-xxl);
}
.not-found__code {
    display: block;
    font-size: clamp(5rem, 15vw, 9rem);
    font-weight: 800;
    color: var(--ct-orange);
    line-height: 1;
    opacity: 0.15;
    margin-bottom: var(--space-md);
    letter-spacing: -0.05em;
}
.not-found__title {
    font-size: clamp(1.75rem, 4vw, 2.5rem);
    font-weight: 700;
    margin: var(--space-sm) 0;
    color: var(--ct-dark);
}
.not-found__message {
    font-size: 1.0625rem;
    line-height: 1.7;
    max-width: 480px;
    margin: 0 auto var(--space-xl);
}
.not-found__actions {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: var(--space-lg);
    flex-wrap: wrap;
}
@media (max-width: 480px) {
    .not-found__actions {
        flex-direction: column;
        align-items: center;
    }
    .not-found__actions .btn-primary {
        width: 100%;
        text-align: center;
    }
}
</style>

<?php get_footer(); ?>
