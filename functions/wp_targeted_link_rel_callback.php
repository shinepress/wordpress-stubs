<?php


/**
 * Callback to add rel="noreferrer noopener" string to HTML A element.
 *
 * Will not duplicate existing noreferrer and noopener values
 * to prevent from invalidating the HTML.
 *
 * @param array $matches Single Match
 * @return string HTML A Element with rel noreferrer noopener in addition to any existing values
 */
function wp_targeted_link_rel_callback($matches)
{
}