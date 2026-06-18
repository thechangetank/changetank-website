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


<?php get_footer(); ?>
