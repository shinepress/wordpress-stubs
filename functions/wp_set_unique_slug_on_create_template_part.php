<?php


/**
 * Sets a custom slug when creating auto-draft template parts.
 *
 * This is only needed for auto-drafts created by the regular WP editor.
 * If this page is to be removed, this will not be necessary.
 *
 * @since 5.9.0
 *
 * @param int $post_id Post ID.
 * @phpstan-return void
 */
function wp_set_unique_slug_on_create_template_part($post_id)
{
}