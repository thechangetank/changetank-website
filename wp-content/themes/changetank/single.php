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


<?php get_footer(); ?>
