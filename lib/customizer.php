<?php

namespace Roots\Sage\Customizer;

use Roots\Sage\Assets;

/**
 * Add postMessage support
 */
function customize_register($wp_customize) {
  $wp_customize->get_setting('blogname')->transport = 'postMessage';

}
add_action('customize_register', __NAMESPACE__ . '\\customize_register');

/**
 * Customizer JS
 */
function customize_preview_js() {
  wp_enqueue_script('sage/customizer', Assets\asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
}
add_action('customize_preview_init', __NAMESPACE__ . '\\customize_preview_js');

/**
 * Customizer Header
 */
function custom_header_and_background() {
  add_theme_support( 'custom-header', apply_filters( __NAMESPACE__ . '\\custom_header_args', array(
  'default-text-color'     => '#fff',
  'width'                  => 1200,
  'height'                 => 280,
  'flex-height'            => true
  ) ) );
}
add_action( 'after_setup_theme',  __NAMESPACE__ . '\\custom_header_and_background' );
