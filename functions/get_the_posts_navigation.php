<?php


/**
 * Returns the navigation to next/previous set of posts, when applicable.
 *
 * @since 4.1.0
 * @since 5.3.0 Added the `aria_label` parameter.
 * @since 5.5.0 Added the `class` parameter.
 *
 * @global WP_Query $wp_query WordPress Query object.
 *
 * @param array $args {
 *     Optional. Default posts navigation arguments. Default empty array.
 *
 *     @type string $prev_text          Anchor text to display in the previous posts link.
 *                                      Default 'Older posts'.
 *     @type string $next_text          Anchor text to display in the next posts link.
 *                                      Default 'Newer posts'.
 *     @type string $screen_reader_text Screen reader text for the nav element.
 *                                      Default 'Posts navigation'.
 *     @type string $aria_label         ARIA label text for the nav element. Default 'Posts'.
 *     @type string $class              Custom class for the nav element. Default 'posts-navigation'.
 * }
 * @return string Markup for posts links.
 * @phpstan-param array{
 *   prev_text?: string,
 *   next_text?: string,
 *   screen_reader_text?: string,
 *   aria_label?: string,
 *   class?: string,
 * } $args
 */
function get_the_posts_navigation($args = array())
{
}