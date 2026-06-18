<?php
/**
 * index.php — Standard WordPress fallback template
 *
 * WordPress requires this file. It is the catch-all template used when no more
 * specific template exists in the hierarchy. For The Change Tank, this handles:
 * - Category / tag / date / author archives
 * - Any page type without a dedicated template
 *
 * In practice, pages with custom templates (Home, About, Capabilities, etc.)
 * and posts (single.php) take precedence. This file is the safety net.
 *
 * @package ChangeTank
 * @version 2.0
 */

get_header();
?>

<section class="section index-content" aria-label="Content">
    <div class="container">

        <?php if ( is_archive() ) : ?>
            <header class="archive-header">
                <?php the_archive_title( '<h1 class="archive-header__title">', '</h1>' ); ?>
                <?php the_archive_description( '<p class="archive-header__desc text-muted">', '</p>' ); ?>
            </header>
        <?php elseif ( is_search() ) : ?>
            <header class="archive-header">
                <h1 class="archive-header__title">
                    Search results for: <span>"<?php echo esc_html( get_search_query() ); ?>"</span>
                </h1>
            </header>
        <?php endif; ?>

        <?php if ( have_posts() ) : ?>

            <div class="grid-2 index-grid">
                <?php while ( have_posts() ) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'index-card' ); ?> aria-labelledby="index-title-<?php the_ID(); ?>">
                        <div class="index-card__inner">

                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>" class="index-card__thumb" aria-hidden="true" tabindex="-1">
                                    <?php the_post_thumbnail( 'case-study-thumb', array(
                                        'class'   => 'index-card__img',
                                        'loading' => 'lazy',
                                        'decoding' => 'async',
                                    ) ); ?>
                                </a>
                            <?php endif; ?>

                            <div class="index-card__body">
                                <h2 id="index-title-<?php the_ID(); ?>" class="index-card__title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <p class="index-card__excerpt text-muted">
                                    <?php echo wp_trim_words( get_the_excerpt(), 24, '&hellip;' ); ?>
                                </p>
                                <div class="index-card__meta text-small text-muted">
                                    <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
                                        <?php echo esc_html( get_the_date( 'j F Y' ) ); ?>
                                    </time>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="btn-text">Read more</a>
                            </div>

                        </div>
                    </article>

                <?php endwhile; ?>
            </div><!-- /.grid-2 -->

            <nav class="index-pagination" aria-label="Page navigation">
                <?php the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => '&larr; Older',
                    'next_text' => 'Newer &rarr;',
                ) ); ?>
            </nav>

        <?php else : ?>

            <div class="index-empty">
                <h1>Nothing found.</h1>
                <p class="text-muted">
                    It looks like nothing was found at this location.
                    Try <a href="<?php echo esc_url( home_url( '/' ) ); ?>">returning to the homepage</a>.
                </p>
            </div>

        <?php endif; ?>

    </div><!-- /.container -->
</section>

<style id="ct-index-styles">
.archive-header {
    margin-bottom: var(--space-xl);
    padding-bottom: var(--space-lg);
    border-bottom: 1px solid var(--ct-border);
}
.archive-header__title {
    font-size: clamp(1.75rem, 3.5vw, 2.5rem);
    margin: 0 0 var(--space-xs);
}
.archive-header__desc {
    margin: 0;
    font-size: 1rem;
}
.index-grid {
    gap: var(--space-lg);
}
.index-card__inner {
    background: var(--ct-white);
    border-radius: var(--ct-radius);
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0,0,0,0.07);
    height: 100%;
}
.index-card__thumb {
    display: block;
    overflow: hidden;
    aspect-ratio: 16/9;
}
.index-card__img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}
.index-card__body {
    padding: var(--space-lg) var(--space-xl);
    display: flex;
    flex-direction: column;
    gap: var(--space-xs);
}
.index-card__title {
    font-size: 1.0625rem;
    font-weight: 700;
    margin: 0;
    color: var(--ct-dark);
}
.index-card__title a {
    color: inherit;
    text-decoration: none;
}
.index-card__title a:hover {
    color: var(--ct-orange);
}
.index-card__excerpt {
    font-size: 0.9375rem;
    margin: 0;
    line-height: 1.6;
}
.index-card__meta {
    margin-top: var(--space-xs);
}
.index-pagination {
    margin-top: var(--space-xxl);
    display: flex;
    justify-content: center;
}
.index-empty {
    text-align: center;
    padding: var(--space-xxl) 0;
}
@media (max-width: 768px) {
    .index-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<?php get_footer(); ?>
