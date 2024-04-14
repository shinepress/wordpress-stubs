<?php


/**
 * Retrieves the permalink for the current page or page ID.
 *
 * Respects page_on_front. Use this one.
 *
 * @since 1.5.0
 *
 * @param int|WP_Post $post      Optional. Post ID or object. Default uses the global `$post`.
 * @param bool        $leavename Optional. Whether to keep the page name. Default false.
 * @param bool        $sample    Optional. Whether it should be treated as a sample permalink.
 *                               Default false.
 * @return string The page permalink.
 */
function get_page_link($post = \false, $leavename = \false, $sample = \false)
{
}