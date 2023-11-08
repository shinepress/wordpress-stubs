<?php


/**
 * Ensures backwards compatibility for any users running the Gutenberg plugin
 * who have used Post Comments before it was merged into Comments Query Loop.
 *
 * The same approach was followed when core/query-loop was renamed to
 * core/post-template.
 *
 * @see https://github.com/WordPress/gutenberg/pull/41807
 * @see https://github.com/WordPress/gutenberg/pull/32514
 */
function register_legacy_post_comments_block()
{
}