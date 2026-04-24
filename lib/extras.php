<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

/**
 * Add all Gravity Forms capabilities to Author role.
 * Runs when this theme is activated.
 * 
 * @access public
 * @return void
 */
function grant_gforms_author_access() {
  
  $role = get_role( 'author' );
  $role->add_cap( 'gform_full_access' );
}
// Tie into the 'after_switch_theme' hook
add_action( 'after_switch_theme', 'grant_gforms_author_access' );

/**
 * Remove Gravity Forms capabilities from Author role.
 * Runs when this theme is deactivated (in favor of another).
 * 
 * @access public
 * @return void
 */
function revoke_gforms_author_access() {
  
  $role = get_role( 'author' );
  $role->remove_cap( 'gform_full_access' );
}
// Tie into the 'switch_theme' hook
add_action( 'switch_theme', 'revoke_gforms_author_access' );
