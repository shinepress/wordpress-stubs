<?php


/**
 * Fetches, processes and compiles stored core styles, then combines and renders them to the page.
 * Styles are stored via the style engine API.
 *
 * @link https://developer.wordpress.org/block-editor/reference-guides/packages/packages-style-engine/
 *
 * @since 6.1.0
 *
 * @param array $options {
 *     Optional. An array of options to pass to wp_style_engine_get_stylesheet_from_context().
 *     Default empty array.
 *
 *     @type bool $optimize Whether to optimize the CSS output, e.g., combine rules.
 *                          Default true.
 *     @type bool $prettify Whether to add new lines and indents to output.
 *                          Default to whether the `SCRIPT_DEBUG` constant is defined.
 * }
 * @phpstan-param array{
 *   optimize?: bool,
 *   prettify?: bool,
 * } $options
 * @phpstan-return void
 */
function wp_enqueue_stored_styles($options = array())
{
}