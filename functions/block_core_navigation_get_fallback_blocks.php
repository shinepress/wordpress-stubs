<?php


/**
 * Retrieves the appropriate fallback to be used on the front of the
 * site when there is no menu assigned to the Nav block.
 *
 * This aims to mirror how the fallback mechanic for wp_nav_menu works.
 * See https://developer.wordpress.org/reference/functions/wp_nav_menu/#more-information.
 *
 * @return array the array of blocks to be used as a fallback.
 */
function block_core_navigation_get_fallback_blocks()
{
}