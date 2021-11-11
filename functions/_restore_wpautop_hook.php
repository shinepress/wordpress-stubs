<?php


/**
 * If do_blocks() needs to remove wp_autop() from the `the_content` filter, this re-adds it afterwards,
 * for subsequent `the_content` usage.
 *
 * @access private
 *
 * @since 5.0.0
 *
 * @param string $content The post content running through this filter.
 * @return string The unmodified content.
 */
function _restore_wpautop_hook($content)
{
}