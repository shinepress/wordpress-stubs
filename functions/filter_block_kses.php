<?php


/**
 * Filters and sanitizes a parsed block to remove non-allowable HTML from block
 * attribute values.
 *
 * @since 5.3.1
 *
 * @param WP_Block_Parser_Block $block             The parsed block object.
 * @param array[]|string        $allowed_html      An array of allowed HTML
 *                                                 elements and attributes, or a
 *                                                 context name such as 'post'.
 * @param string[]              $allowed_protocols Allowed URL protocols.
 * @return array The filtered and sanitized block object result.
 */
function filter_block_kses($block, $allowed_html, $allowed_protocols = array())
{
}