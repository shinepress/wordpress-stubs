<?php


/**
 * Enqueues all scripts, styles, settings, and templates necessary to use
 * all media JS APIs.
 *
 * @since 3.5.0
 *
 * @global int       $content_width
 * @global wpdb      $wpdb          WordPress database abstraction object.
 * @global WP_Locale $wp_locale     WordPress date and time locale object.
 *
 * @param array $args {
 *     Arguments for enqueuing media scripts.
 *
 *     @type int|WP_Post $post A post object or ID.
 * }
 * @phpstan-param array{
 *   post?: int|WP_Post,
 * } $args
 * @phpstan-return void
 */
function wp_enqueue_media($args = array())
{
}