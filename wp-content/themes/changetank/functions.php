<?php
/**
 * ChangeTank theme functions
 */

function changetank_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
}
add_action('after_setup_theme', 'changetank_setup');

function changetank_styles() {
  wp_enqueue_style('changetank-style', get_stylesheet_uri(), [], '0.1.0');
}
add_action('wp_enqueue_scripts', 'changetank_styles');