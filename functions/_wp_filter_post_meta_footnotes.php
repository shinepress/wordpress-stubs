<?php


/**
 * Strips all HTML from the content of footnotes, and sanitizes the ID.
 *
 * This function expects slashed data on the footnotes content.
 *
 * @access private
 * @since 6.3.2
 *
 * @param string $footnotes JSON-encoded string of an array containing the content and ID of each footnote.
 * @return string Filtered content without any HTML on the footnote content and with the sanitized ID.
 */
function _wp_filter_post_meta_footnotes($footnotes)
{
}