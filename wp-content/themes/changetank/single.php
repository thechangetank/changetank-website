<?php
/**
 * single.php — Single blog post / Insight template
 *
 * Used for all single post views in the Insights section.
 * Sections: featured image, post title, post meta (date + category),
 * post content, author bio strip, back link.
 *
 * Author bio strip links to the About page and uses a brief intro about MJ.
 * Content is rendered via the_content() — written and published in WordPress admin.
 *
 * @package ChangeTank
 * @version 2.0
 */

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

    <!-- ============================================================
         FEATURED IMAGE (full-width banner, if set)
         ============================================================ -->
    <?php if ( has_post_thumbnail() ) : ?>
        <div class="single-hero-image" aria-hidden="true">
            <?php
            the_post_thumbnail( 'full', array(
                'class'   => 'single-hero-image__img',
                'loading' => 'eager',
                'decoding' => 'async',
                'alt'     => '',
            ) );
            ?>
        </div>
    <?php endif; ?>


    <!-- ============================================================
         POST HEADER: Title + Meta
         ============================================================ -->
    <header class="single-post-header">
        <div class="container container-narrow">

            <!-- Category eyebrow -->
            <?php
            $categories = get_the_category();
            if ( $categories ) :
            ?>
                <p class="eyebrow single-post-header__category">
                    <?php echo esc_html( $categories[0]->name ); ?>
                </p>
            <?php endif; ?>

            <!-- Post title -->
            <h1 class="single-post-header__title">
                <?php the_title(); ?>
            </h1>

            <!-- Meta: date -->
            <div class="single-post-header__meta text-small text-muted">
                <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
                    Published <?php echo esc_html( get_the_date( 'j F Y' ) ); ?>
                </time>
                <?php if ( get_the_modified_date() !== get_the_date() ) : ?>
                    <span class="single-post-header__meta-sep" aria-hidden="true">·</span>
                    <time datetime="<?php echo esc_attr( get_the_modified_date( 'c' ) ); ?>">
                        Updated <?php echo esc_html( get_the_modified_date( 'j F Y' ) ); ?>
                    </time>
                <?php endif; ?>
            </div>

        </div>
    </header><!-- /.single-post-header -->


    <!-- ============================================================
         POST CONTENT
         ============================================================ -->
    <main id="main-content" class="single-post-content" role="main">
        <div class="container container-narrow">
            <div class="entry-content">
                <?php the_content(); ?>
            </div>

            <!-- Post navigation (prev/next) -->
            <nav class="single-post-nav" aria-label="Post navigation">
                <?php
                the_post_navigation( array(
                    'prev_text' => '<span class="nav-subtitle">&larr; Previous</span><span class="nav-title">%title</span>',
                    'next_text' => '<span class="nav-subtitle">Next &rarr;</span><span class="nav-title">%title</span>',
                    'in_same_term' => true,
                ) );
                ?>
            </nav>

        </div>
    </main>


    <!-- ============================================================
         AUTHOR BIO STRIP
         Cream background. MJ bio + link to About page.
         ============================================================ -->
    <aside class="author-bio" aria-label="About the author">
        <div class="container container-narrow">
            <div class="author-bio__inner">

                <div class="author-bio__image">
                    <img
                        src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/mj-headshot.jpg"
                        alt="Matthew Johnston"
                        width="80"
                        height="80"
                        loading="lazy"
                        decoding="async"
                    >
                    <!-- HEADSHOT PLACEHOLDER — replace with final asset in Phase 3B -->
                </div>

                <div class="author-bio__text">
                    <p class="eyebrow">About the author</p>
                    <h3 class="author-bio__name">Matthew Johnston</h3>
                    <p class="author-bio__blurb">
                        MJ Johnston is a senior management consultant and founder of The Change Tank.
                        25+ years of experience across mining, resources, rail, infrastructure, and health.
                        Delivered personally — no junior team.
                    </p>
                    <a href="/about/" class="btn-text">About Matthew Johnston</a>
                </div>

            </div><!-- /.author-bio__inner -->
        </div>
    </aside><!-- /.author-bio -->


    <!-- ============================================================
         BACK TO INSIGHTS
         ============================================================ -->
    <div class="single-post-backnav section--cream">
        <div class="container">
            <a href="/insights/" class="btn-text">&larr; Back to Insights</a>
        </div>
    </div>

<?php endwhile; ?>

<style id="ct-single-styles">
/* ---- Featured image ---- */
.single-hero-image {
    width: 100%;
    max-height: 480px;
    overflow: hidden;
    background: var(--ct-cream);
}
.single-hero-image__img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    display: block;
    max-height: 480px;
}

/* ---- Post header ---- */
.single-post-header {
    padding: var(--space-xxl) 0 var(--space-lg);
    background: var(--ct-white);
}
.single-post-header__category {
    margin-bottom: var(--space-xs);
}
.single-post-header__title {
    font-size: clamp(1.75rem, 4vw, 2.75rem);
    font-weight: 700;
    margin: 0 0 var(--space-sm);
    color: var(--ct-dark);
    line-height: 1.15;
}
.single-post-header__meta {
    display: flex;
    align-items: center;
    gap: var(--space-sm);
    flex-wrap: wrap;
}
.single-post-header__meta-sep {
    color: var(--ct-border);
}

/* ---- Post content ---- */
.single-post-content {
    padding: var(--space-xl) 0 var(--space-xxl);
}
.entry-content p {
    font-size: 1.0625rem;
    line-height: 1.85;
    color: #333;
    margin-bottom: var(--space-lg);
}
.entry-content h2 {
    font-size: 1.5rem;
    font-weight: 700;
    margin: var(--space-xl) 0 var(--space-sm);
    color: var(--ct-dark);
}
.entry-content h3 {
    font-size: 1.25rem;
    font-weight: 600;
    margin: var(--space-lg) 0 var(--space-xs);
    color: var(--ct-dark);
}
.entry-content ul,
.entry-content ol {
    margin: 0 0 var(--space-md) var(--space-lg);
    padding: 0;
}
.entry-content li {
    font-size: 1.0625rem;
    line-height: 1.7;
    color: #333;
    margin-bottom: var(--space-xs);
}
.entry-content blockquote {
    margin: var(--space-xl) 0;
    padding: var(--space-md) var(--space-xl);
    border-left: 4px solid var(--ct-orange);
    background: rgba(244, 123, 32, 0.05);
    border-radius: 0 var(--ct-radius) var(--ct-radius) 0;
    font-size: 1.125rem;
    color: var(--ct-dark);
    font-style: italic;
}
.entry-content a {
    color: var(--ct-orange);
    text-decoration: underline;
}
.entry-content img {
    max-width: 100%;
    height: auto;
    border-radius: var(--ct-radius);
    margin: var(--space-lg) 0;
}

/* ---- Post nav ---- */
.single-post-nav {
    margin-top: var(--space-xxl);
    padding-top: var(--space-xl);
    border-top: 1px solid var(--ct-border);
}
.single-post-nav .nav-links {
    display: flex;
    justify-content: space-between;
    gap: var(--space-lg);
}
.single-post-nav .nav-previous,
.single-post-nav .nav-next {
    flex: 1;
    max-width: 45%;
}
.single-post-nav .nav-next {
    text-align: right;
}
.single-post-nav a {
    display: flex;
    flex-direction: column;
    gap: var(--space-xs);
    text-decoration: none;
    color: var(--ct-dark);
}
.single-post-nav a:hover .nav-title {
    color: var(--ct-orange);
}
.single-post-nav .nav-subtitle {
    font-size: 0.8125rem;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: var(--ct-orange);
}
.single-post-nav .nav-title {
    font-size: 0.9375rem;
    font-weight: 600;
    line-height: 1.4;
    transition: color 0.15s ease;
}

/* ---- Author bio ---- */
.author-bio {
    background: var(--ct-cream);
    padding: var(--space-xl) 0;
    border-top: 1px solid var(--ct-border);
    border-bottom: 1px solid var(--ct-border);
}
.author-bio__inner {
    display: flex;
    align-items: flex-start;
    gap: var(--space-xl);
}
.author-bio__image img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
    object-position: top;
    flex-shrink: 0;
}
.author-bio__name {
    font-size: 1.125rem;
    font-weight: 700;
    margin: var(--space-xs) 0 var(--space-sm);
    color: var(--ct-dark);
}
.author-bio__blurb {
    font-size: 0.9375rem;
    color: #555;
    line-height: 1.7;
    margin: 0 0 var(--space-sm);
}

/* ---- Back nav ---- */
.single-post-backnav {
    padding: var(--space-lg) 0;
}

/* ---- Responsive ---- */
@media (max-width: 768px) {
    .author-bio__inner {
        flex-direction: column;
        gap: var(--space-md);
    }
    .single-post-nav .nav-links {
        flex-direction: column;
    }
    .single-post-nav .nav-previous,
    .single-post-nav .nav-next {
        max-width: 100%;
        text-align: left;
    }
}
</style>

<?php get_footer(); ?>
