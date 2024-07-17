<?php


/**
 * Regular Expression callable for do_shortcode() for calling shortcode hook.
 *
 * @see get_shortcode_regex() for details of the match array contents.
 *
 * @since 2.5.0
 * @access private
 *
 * @global array $shortcode_tags
 *
 * @param array $m {
 *     Regular expression match array.
 *
 *     @type string $0 Entire matched shortcode text.
 *     @type string $1 Optional second opening bracket for escaping shortcodes.
 *     @type string $2 Shortcode name.
 *     @type string $3 Shortcode arguments list.
 *     @type string $4 Optional self closing slash.
 *     @type string $5 Content of a shortcode when it wraps some content.
 *     @type string $6 Optional second closing bracket for escaping shortcodes.
 * }
 * @return string Shortcode output.
 * @phpstan-param array{
 *   0: string,
 *   1: string,
 *   2: string,
 *   3: string,
 *   4: string,
 *   5: string,
 *   6: string,
 * } $m
 */
function do_shortcode_tag($m)
{
}