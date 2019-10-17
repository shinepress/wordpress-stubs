<?php


/**
 * Retrieve post ancestors.
 *
 * This is no longer needed as WP_Post lazy-loads the ancestors
 * property with get_post_ancestors().
 *
 * @since 2.3.4
 * @deprecated 3.5.0 Use get_post_ancestors()
 * @see get_post_ancestors()
 *
 * @param WP_Post &$post Post object, passed by reference (unused).
 */
function _get_post_ancestors(&$post)
{
}