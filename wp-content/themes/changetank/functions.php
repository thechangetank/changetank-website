<?php
/**
 * ChangeTank Theme Functions
 *
 * @package ChangeTank
 * @version 2.0
 * @author  The Change Tank
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Prevent direct access
}


/* ============================================================
   THEME SETUP
   ============================================================ */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function changetank_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    load_theme_textdomain( 'changetank', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * Removes the need for a <title> tag in the template.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );

    /*
     * Switch default core markup for several elements to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    /*
     * Enable support for custom logo.
     */
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    /*
     * Enable support for wide and full-width block alignment.
     */
    add_theme_support( 'align-wide' );

    /*
     * Enable support for responsive embedded content.
     */
    add_theme_support( 'responsive-embeds' );

    /*
     * Register navigation menus.
     */
    register_nav_menus( array(
        'primary-nav' => esc_html__( 'Primary Navigation', 'changetank' ),
        'footer-nav'  => esc_html__( 'Footer Navigation', 'changetank' ),
    ) );

}
add_action( 'after_setup_theme', 'changetank_setup' );


/* ============================================================
   ENQUEUE SCRIPTS AND STYLES
   ============================================================ */

/**
 * Enqueues scripts and styles for the front-end.
 */
function changetank_scripts() {

    /*
     * Enqueue DM Sans from Google Fonts.
     * Includes italic 400 and variable-weight upright 300/400/600/700
     * across the 9–40 optical size range.
     */
    wp_enqueue_style(
        'changetank-google-fonts',
        'https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,600;0,9..40,700;1,9..40,400&display=swap',
        array(),
        null // No version — Google Fonts manages cache via URL
    );

    /*
     * Enqueue the main theme stylesheet (style.css).
     * Depends on Google Fonts so it loads after.
     */
    wp_enqueue_style(
        'changetank-style',
        get_stylesheet_uri(),
        array( 'changetank-google-fonts' ),
        wp_get_theme()->get( 'Version' )
    );

    /*
     * Enqueue theme JavaScript (if present).
     * Deferred and loaded in footer to avoid render blocking.
     */
    if ( file_exists( get_template_directory() . '/assets/js/theme.js' ) ) {
        wp_enqueue_script(
            'changetank-theme',
            get_template_directory_uri() . '/assets/js/theme.js',
            array(),
            wp_get_theme()->get( 'Version' ),
            array(
                'in_footer' => true,
                'strategy'  => 'defer',
            )
        );
    }

    /*
     * Enqueue comment reply script only when needed.
     */
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

}
add_action( 'wp_enqueue_scripts', 'changetank_scripts' );


/* ============================================================
   CUSTOM IMAGE SIZES
   ============================================================ */

/**
 * Registers custom image sizes for the theme.
 *
 * hero-portrait    — MJ headshot in hero section (portrait, hard crop)
 * case-study-thumb — Case study featured images (landscape, hard crop)
 */
function changetank_image_sizes() {

    // Hero portrait: tall portrait format for the hero asymmetric layout
    add_image_size( 'hero-portrait', 600, 800, true );

    // Case study thumbnail: landscape card format
    add_image_size( 'case-study-thumb', 800, 500, true );

}
add_action( 'after_setup_theme', 'changetank_image_sizes' );


/* ============================================================
   PERFORMANCE — REMOVE EMOJI SCRIPTS
   ============================================================ */

/**
 * Removes WordPress emoji detection scripts and styles.
 * Not needed for a professional consulting site and adds unnecessary HTTP requests.
 */
function changetank_disable_emojis() {

    remove_action( 'wp_head',             'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script'    );
    remove_action( 'wp_print_styles',     'print_emoji_styles'               );
    remove_action( 'admin_print_styles',  'print_emoji_styles'               );
    remove_filter( 'the_content_feed',    'wp_staticize_emoji'               );
    remove_filter( 'comment_text_rss',    'wp_staticize_emoji'               );
    remove_filter( 'wp_mail',             'wp_staticize_emoji_for_email'     );

    wp_dequeue_script(   'wp-emoji' );
    wp_deregister_script( 'wp-emoji' );

    // Remove emoji from TinyMCE
    add_filter( 'tiny_mce_plugins', 'changetank_disable_emojis_tinymce' );

}
add_action( 'init', 'changetank_disable_emojis' );

/**
 * Filter to remove the emoji plugin from TinyMCE.
 *
 * @param  array $plugins
 * @return array
 */
function changetank_disable_emojis_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    }
    return array();
}


/* ============================================================
   PERFORMANCE — CLEAN UP WP_HEAD
   ============================================================ */

/**
 * Removes unnecessary tags from wp_head that are not needed
 * for a focused, performance-optimised consulting site.
 *
 * Removes:
 * - Really Simple Discovery (RSD) link — for external blog editors
 * - Windows Live Writer manifest link — not used
 * - WordPress version meta tag — reduces security fingerprinting
 * - Shortlink tag — canonical URL handles this
 */
function changetank_clean_wp_head() {

    remove_action( 'wp_head', 'rsd_link'                );  // Really Simple Discovery
    remove_action( 'wp_head', 'wlwmanifest_link'        );  // Windows Live Writer
    remove_action( 'wp_head', 'wp_generator'            );  // WP version meta tag
    remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 ); // Shortlink

}
add_action( 'init', 'changetank_clean_wp_head' );


/* ============================================================
   SEO — JSON-LD ORGANISATION SCHEMA
   ============================================================ */

/**
 * Outputs JSON-LD Organisation schema in the <head>.
 * Supports brand protection and rich results for The Change Tank.
 * Hex colour uses the confirmed placeholder — update when MJ confirms exact brand orange.
 */
function changetank_organisation_schema() {

    $schema = array(
        '@context'      => 'https://schema.org',
        '@type'         => 'ProfessionalService',
        'name'          => 'The Change Tank',
        'url'           => 'https://www.changetank.com.au',
        'logo'          => get_template_directory_uri() . '/assets/images/changetank-logo.png',
        'email'         => 'mj@changetank.com.au',
        'telephone'     => '+61420976779',
        'areaServed'    => 'AU',
        'description'   => 'Management consulting and business transformation — specialising in operational readiness, project and program management, and change management across mining, resources, rail, ports, and infrastructure.',
        'founder'       => array(
            '@type' => 'Person',
            'name'  => 'Matthew Johnston',
            'url'   => 'https://www.linkedin.com/in/matthewj1/',
        ),
        'sameAs'        => array(
            'https://www.linkedin.com/in/matthewj1/',
        ),
    );

    echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . '</script>' . "\n";

}
add_action( 'wp_head', 'changetank_organisation_schema' );


/* ============================================================
   WIDGETS
   ============================================================ */

/**
 * Register widget areas.
 */
function changetank_widgets_init() {

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget Area', 'changetank' ),
        'id'            => 'footer-widget-area',
        'description'   => esc_html__( 'Add widgets here to appear in the footer.', 'changetank' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

}
add_action( 'widgets_init', 'changetank_widgets_init' );


/* ============================================================
   CONTENT WIDTH
   ============================================================ */

/**
 * Set the content width in pixels, based on the theme's design.
 * Used by WordPress core for embedded content sizing.
 *
 * @global int $content_width
 */
if ( ! isset( $content_width ) ) {
    $content_width = 800;
}


/* ============================================================
   SEO — HOMEPAGE JSON-LD SCHEMA (HOMEPAGE ONLY)
   ============================================================ */

/**
 * Outputs a richer JSON-LD ProfessionalService schema on the homepage only.
 *
 * Note: changetank_organisation_schema() (above) already fires on all pages and
 * includes telephone, logo, and sameAs data. This homepage-only variant adds
 * areaServed, founder detail, and knowsAbout — properties more appropriate for
 * a homepage rich result than a sitewide declaration. Both schemas are valid;
 * Google accepts multiple JSON-LD blocks on a single page.
 */
function ct_homepage_schema() {
    if ( is_front_page() ) {
        echo '<script type="application/ld+json">' . json_encode( array(
            '@context'    => 'https://schema.org',
            '@type'       => 'ProfessionalService',
            'name'        => 'The Change Tank',
            'url'         => 'https://www.changetank.com.au',
            'email'       => 'mj@changetank.com.au',
            'description' => 'Senior management consulting for complex projects in mining, resources, and infrastructure. 25+ years experience. Delivered personally by Matthew Johnston.',
            'founder'     => array( '@type' => 'Person', 'name' => 'Matthew Johnston' ),
            'areaServed'  => 'Australia',
            'knowsAbout'  => array(
                'Management Consulting',
                'Business Transformation',
                'Change Management',
                'Operational Readiness',
                'Program Management',
                'Mining',
                'Resources',
            ),
        ), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES ) . '</script>' . "\n";
    }
}
add_action( 'wp_head', 'ct_homepage_schema' );


/* ============================================================
   SEO — DYNAMIC TITLE TAGS
   ============================================================ */

/**
 * Returns the correct SEO title tag per page slug.
 *
 * Registered via pre_get_document_title filter so WordPress uses this value
 * inside the <title> element managed by add_theme_support('title-tag').
 * Falls back to the default WordPress-generated title for any page not in the map
 * (e.g. individual posts, search results, archives).
 *
 * When Yoast SEO is installed at migration it will replace this filter with its
 * own title management. No conflict — Yoast's filter runs at a higher priority
 * and will override this value automatically.
 *
 * @param  string $title The default title passed by WordPress.
 * @return string        The custom title or the unmodified default.
 */
function ct_page_title( $title ) {

    // Never alter admin-area titles.
    if ( is_admin() ) {
        return $title;
    }

    $title_map = array(
        'home'           => 'Management Consultant Mining Australia | The Change Tank',
        'about'          => 'Matthew Johnston | Senior Management Consultant Australia | The Change Tank',
        'capabilities'   => 'Business Transformation Consultant Australia | The Change Tank',
        'case-studies'   => 'Change Management Case Studies — Mining & Resources | The Change Tank',
        'insights'       => 'Insights | Change Management Consultant Australia | The Change Tank',
        'contact'        => 'Contact | Independent Management Consultant Australia | The Change Tank',
        'privacy-policy' => 'Privacy Policy | The Change Tank',
    );

    // Front page / homepage (slug may be 'home' or empty depending on WP setup).
    if ( is_front_page() ) {
        return $title_map['home'];
    }

    // Static pages — match by post slug.
    if ( is_page() ) {
        $slug = get_post_field( 'post_name', get_the_ID() );
        if ( ! empty( $slug ) && isset( $title_map[ $slug ] ) ) {
            return $title_map[ $slug ];
        }
    }

    return $title;

}
add_filter( 'pre_get_document_title', 'ct_page_title' );


/* ============================================================
   SEO — META DESCRIPTIONS
   ============================================================ */

/**
 * Outputs a <meta name="description"> tag in wp_head for each mapped page.
 *
 * Skips automatically if Yoast SEO is active — Yoast manages meta descriptions
 * via its own wp_head output and adding a second description tag would be
 * incorrect. At migration, install Yoast and configure its focus keyphrases;
 * this function then becomes a no-op with no code changes required.
 *
 * For pages not in the map (e.g. individual blog posts, archives), no tag is
 * output — WordPress core does not add one, and that is acceptable until Yoast
 * is installed and can generate dynamic descriptions from post content.
 */
function ct_meta_description() {

    // Defer to Yoast once installed at migration.
    if ( defined( 'WPSEO_VERSION' ) ) {
        return;
    }

    $description_map = array(
        'home'           => 'Matthew Johnston — senior independent management consultant with 25+ years in mining, resources, and infrastructure. Business transformation and change management, delivered personally.',
        'about'          => 'Matthew Johnston is a senior independent management consultant with 25+ years experience across mining, resources, health, and rail. The Change Tank delivers consulting personally.',
        'capabilities'   => 'Business transformation, change management, operational readiness, and program management consulting across mining and resources. Senior consulting delivered personally.',
        'case-studies'   => 'Real change management and business transformation case studies from mining, resources, and infrastructure. Delivered by senior consultant Matthew Johnston.',
        'insights'       => 'Perspectives on change management, business transformation, and program management in mining and resources. From senior consultant Matthew Johnston.',
        'contact'        => 'Get in touch with Matthew Johnston — independent management consultant Australia. Available Australia-wide and internationally. Based in Mullumbimby, NSW.',
    );

    $description = '';

    if ( is_front_page() ) {
        $description = $description_map['home'];
    } elseif ( is_page() ) {
        $slug = get_post_field( 'post_name', get_the_ID() );
        if ( ! empty( $slug ) && isset( $description_map[ $slug ] ) ) {
            $description = $description_map[ $slug ];
        }
    }

    if ( ! empty( $description ) ) {
        echo '<meta name="description" content="' . esc_attr( $description ) . '" />' . "\n";
    }

}
add_action( 'wp_head', 'ct_meta_description' );
