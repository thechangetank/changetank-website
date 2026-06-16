<?php
/**
 * ChangeTank theme — main template
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
  <div class="site-title">
    <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
  </div>
</header>

<main class="site-main">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="entry-content"><?php the_content(); ?></div>
  <?php endwhile; else : ?>
    <div class="hero">
      <h1>Technical Consulting for Complex Projects</h1>
      <p>The Change Tank brings 25+ years of senior project management experience to mining, resources, and infrastructure.</p>
      <a href="mailto:mj@changetank.com.au" class="cta-button">Get in touch</a>
    </div>
  <?php endif; ?>
</main>

<footer class="site-footer">
  <p>&copy; <?php echo date('Y'); ?> The Change Tank Pty Ltd — Mullumbimby, NSW</p>
</footer>

<?php wp_footer(); ?>
</body>
</html>