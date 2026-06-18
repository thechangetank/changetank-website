<?php
/**
 * Template Name: Insights
 *
 * The Insights / Blog index page for The Change Tank.
 * Sections: Hero → WordPress post loop (2-col grid) → Pagination
 *
 * Posts populate automatically as they are added via WordPress admin.
 * No static placeholder content in the loop — the loop renders real posts.
 * If no posts exist, a placeholder message is shown.
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
        <p class="eyebrow">Insights</p>
        <h1>Insights</h1>
        <p class="hero__subline">
            Perspectives from 25+ years of senior consulting.
        </p>
    </div>
</section><!-- /.hero -->


<!-- ============================================================
     SECTION 2: POST LOOP
     Cream background. 2-col grid. Standard WordPress query.
     Renders: thumbnail, category eyebrow, title, excerpt, date, read more.
     ============================================================ -->
<section class="section section--cream" aria-label="Articles and insights">
    <div class="container">

        <?php if ( have_posts() ) : ?>

            <div class="grid-2 insights-grid">

                <?php while ( have_posts() ) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'insights-card' ); ?> aria-labelledby="post-title-<?php the_ID(); ?>">

                        <!-- Thumbnail -->
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>" class="insights-card__thumb" aria-hidden="true" tabindex="-1">
                                <?php
                                the_post_thumbnail( 'case-study-thumb', array(
                                    'class'   => 'insights-card__img',
                                    'loading' => 'lazy',
                                    'decoding' => 'async',
                                ) );
                                ?>
                            </a>
                        <?php endif; ?>

                        <!-- Card body -->
                        <div class="insights-card__body">

                            <!-- Category eyebrow -->
                            <?php
                            $categories = get_the_category();
                            if ( $categories ) :
                            ?>
                                <p class="eyebrow insights-card__category">
                                    <?php echo esc_html( $categories[0]->name ); ?>
                                </p>
                            <?php endif; ?>

                            <!-- Title -->
                            <h2 id="post-title-<?php the_ID(); ?>" class="insights-card__title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>

                            <!-- Excerpt -->
                            <p class="insights-card__excerpt">
                                <?php echo wp_trim_words( get_the_excerpt(), 28, '&hellip;' ); ?>
                            </p>

                            <!-- Date and read more -->
                            <div class="insights-card__footer">
                                <time class="insights-card__date text-small text-muted" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
                                    <?php echo esc_html( get_the_date( 'j F Y' ) ); ?>
                                </time>
                                <a href="<?php the_permalink(); ?>" class="btn-text insights-card__readmore" aria-label="Read: <?php echo esc_attr( get_the_title() ); ?>">
                                    Read more
                                </a>
                            </div>

                        </div><!-- /.insights-card__body -->

                    </article><!-- /.insights-card -->

                <?php endwhile; ?>

            </div><!-- /.grid-2 .insights-grid -->

            <!-- ---- Pagination ---- -->
            <nav class="insights-pagination" aria-label="Posts navigation">
                <?php
                the_posts_pagination( array(
                    'mid_size'           => 2,
                    'prev_text'          => '&larr; Older',
                    'next_text'          => 'Newer &rarr;',
                    'before_page_number' => '<span class="sr-only">Page </span>',
                ) );
                ?>
            </nav>

        <?php else : ?>

            <!-- No posts yet — shown until first article is published -->
            <div class="insights-empty">
                <p class="eyebrow">Coming soon</p>
                <h2>Insights coming shortly.</h2>
                <p class="text-muted">
                    Articles and perspectives from MJ Johnston will appear here.
                    In the meantime, <a href="/contact/">get in touch</a> directly.
                </p>
            </div>

        <?php endif; ?>

    </div><!-- /.container -->
</section><!-- /.section -->

<style id="ct-blog-styles">
/* ---- Insights card ---- */
.insights-grid {
    gap: var(--space-lg);
    align-items: start;
}
.insights-card {
    background: var(--ct-white);
    border-radius: var(--ct-radius);
    overflow: hidden;
    box-shadow: 0 2px 12px rgba(0,0,0,0.07);
    display: flex;
    flex-direction: column;
    transition: box-shadow 0.2s ease, transform 0.2s ease;
}
.insights-card:hover {
    box-shadow: 0 6px 24px rgba(0,0,0,0.11);
    transform: translateY(-2px);
}
.insights-card__thumb {
    display: block;
    overflow: hidden;
    aspect-ratio: 16 / 9;
}
.insights-card__img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.3s ease;
}
.insights-card:hover .insights-card__img {
    transform: scale(1.03);
}
.insights-card__body {
    padding: var(--space-lg) var(--space-xl);
    display: flex;
    flex-direction: column;
    gap: var(--space-xs);
    flex: 1;
}
.insights-card__category {
    margin-bottom: 0;
}
.insights-card__title {
    font-size: 1.125rem;
    font-weight: 700;
    margin: 0;
    line-height: 1.3;
    color: var(--ct-dark);
}
.insights-card__title a {
    color: inherit;
    text-decoration: none;
}
.insights-card__title a:hover {
    color: var(--ct-orange);
}
.insights-card__excerpt {
    font-size: 0.9375rem;
    color: #555;
    line-height: 1.7;
    margin: var(--space-xs) 0 0;
    flex: 1;
}
.insights-card__footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: var(--space-md);
    gap: var(--space-sm);
    flex-wrap: wrap;
}
.insights-card__date {
    font-style: normal;
}
.insights-card__readmore {
    white-space: nowrap;
}

/* ---- Pagination ---- */
.insights-pagination {
    margin-top: var(--space-xxl);
    display: flex;
    justify-content: center;
}
.insights-pagination .nav-links {
    display: flex;
    align-items: center;
    gap: var(--space-sm);
    flex-wrap: wrap;
    justify-content: center;
}
.insights-pagination .page-numbers {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 40px;
    height: 40px;
    padding: 0 var(--space-sm);
    border: 1px solid var(--ct-border);
    border-radius: var(--ct-radius);
    font-size: 0.875rem;
    font-weight: 500;
    color: var(--ct-dark);
    text-decoration: none;
    transition: border-color 0.15s ease, background-color 0.15s ease, color 0.15s ease;
}
.insights-pagination .page-numbers:hover,
.insights-pagination .page-numbers:focus {
    border-color: var(--ct-orange);
    color: var(--ct-orange);
    outline: none;
}
.insights-pagination .page-numbers.current {
    background-color: var(--ct-orange);
    border-color: var(--ct-orange);
    color: #fff;
}

/* ---- Empty state ---- */
.insights-empty {
    text-align: center;
    max-width: 480px;
    margin: 0 auto;
    padding: var(--space-xxl) 0;
}
.insights-empty h2 {
    font-size: 1.75rem;
    margin: var(--space-sm) 0;
}
.insights-empty p {
    line-height: 1.7;
}

/* ---- Responsive ---- */
@media (max-width: 768px) {
    .insights-grid {
        grid-template-columns: 1fr;
    }
    .insights-card:hover {
        transform: none;
    }
    .insights-card__body {
        padding: var(--space-md) var(--space-lg);
    }
}
</style>

<?php get_footer(); ?>
