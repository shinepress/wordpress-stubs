<?php


/**
 * Retrieves the permalink for an attachment.
 *
 * This can be used in the WordPress Loop or outside of it.
 *
 * @since 2.0.0
 *
 * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
 *
 * @param int|WP_Post $post      Optional. Post ID or object. Default uses the global `$post`.
 * @param bool        $leavename Optional. Whether to keep the page name. Default false.
 * @return string The attachment permalink.
 */
function get_attachment_link($post = \null, $leavename = \false)
{
}