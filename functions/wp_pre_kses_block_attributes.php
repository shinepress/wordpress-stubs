<?php


/**
 * Removes non-allowable HTML from parsed block attribute values when filtering
 * in the post context.
 *
 * @since 5.3.1
 *
 * @param string         $content           Content to be run through KSES.
 * @param array[]|string $allowed_html      An array of allowed HTML elements
 *                                          and attributes, or a context name
 *                                          such as 'post'.
 * @param string[]       $allowed_protocols Array of allowed URL protocols.
 * @return string Filtered text to run through KSES.
 */
function wp_pre_kses_block_attributes($content, $allowed_html, $allowed_protocols)
{
}