<?php


/**
 * Main WordPress Formatting API.
 *
 * Handles many functions for formatting output.
 *
 * @package WordPress
 */
/**
 * Replaces common plain text characters into formatted entities
 *
 * As an example,
 *
 *     'cause today's effort makes it worth tomorrow's "holiday" ...
 *
 * Becomes:
 *
 *     &#8217;cause today&#8217;s effort makes it worth tomorrow&#8217;s &#8220;holiday&#8221; &#8230;
 *
 * Code within certain html blocks are skipped.
 *
 * Do not use this function before the {@see 'init'} action hook; everything will break.
 *
 * @since 0.71
 *
 * @global array $wp_cockneyreplace Array of formatted entities for certain common phrases
 * @global array $shortcode_tags
 * @staticvar array $static_characters
 * @staticvar array $static_replacements
 * @staticvar array $dynamic_characters
 * @staticvar array $dynamic_replacements
 * @staticvar array $default_no_texturize_tags
 * @staticvar array $default_no_texturize_shortcodes
 * @staticvar bool  $run_texturize
 *
 * @param string $text The text to be formatted
 * @param bool   $reset Set to true for unit testing. Translated patterns will reset.
 * @return string The string replaced with html entities
 */
function wptexturize($text, $reset = \false)
{
}