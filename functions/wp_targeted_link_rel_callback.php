<?php


/**
 * Callback to add `rel="noopener"` string to HTML A element.
 *
 * Will not duplicate an existing 'noopener' value to avoid invalidating the HTML.
 *
 * @since 5.1.0
 * @since 5.6.0 Removed 'noreferrer' relationship.
 * @deprecated 6.7.0
 *
 * @param array $matches Single match.
 * @return string HTML A Element with `rel="noopener"` in addition to any existing values.
 */
function wp_targeted_link_rel_callback($matches)
{
}