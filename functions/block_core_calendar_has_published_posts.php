<?php


/**
 * Returns whether or not there are any published posts.
 *
 * Used to hide the calendar block when there are no published posts.
 * This compensates for a known Core bug: https://core.trac.wordpress.org/ticket/12016
 *
 * @return bool Has any published posts or not.
 */
function block_core_calendar_has_published_posts()
{
}