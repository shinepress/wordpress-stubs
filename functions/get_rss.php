<?php


/**
 * Display RSS items in HTML list items.
 *
 * You have to specify which HTML list you want, either ordered or unordered
 * before using the function. You also have to specify how many items you wish
 * to display. You can't display all of them like you can with wp_rss()
 * function.
 *
 * @since 1.5.0
 * @package External
 * @subpackage MagpieRSS
 *
 * @param string $url URL of feed to display. Will not auto sense feed URL.
 * @param int $num_items Optional. Number of items to display, default is all.
 * @return bool False on failure.
 */
function get_rss($url, $num_items = 5)
{
}