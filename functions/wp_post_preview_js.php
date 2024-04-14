<?php


/**
 * Outputs a small JS snippet on preview tabs/windows to remove `window.name` when a user is navigating to another page.
 *
 * This prevents reusing the same tab for a preview when the user has navigated away.
 *
 * @since 4.3.0
 *
 * @global WP_Post $post Global post object.
 * @phpstan-return void
 */
function wp_post_preview_js()
{
}