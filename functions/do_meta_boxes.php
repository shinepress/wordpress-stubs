<?php


/**
 * Meta-Box template function
 *
 * @since 2.5.0
 *
 * @global array $wp_meta_boxes
 *
 * @staticvar bool $already_sorted
 *
 * @param string|WP_Screen $screen  Screen identifier. If you have used add_menu_page() or
 *                                  add_submenu_page() to create a new screen (and hence screen_id)
 *                                  make sure your menu slug conforms to the limits of sanitize_key()
 *                                  otherwise the 'screen' menu may not correctly render on your page.
 * @param string           $context box context
 * @param mixed            $object  gets passed to the box callback function as first parameter
 * @return int number of meta_boxes
 */
function do_meta_boxes($screen, $context, $object)
{
}