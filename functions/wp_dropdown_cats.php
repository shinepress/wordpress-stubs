<?php


/**
 * Legacy function used for generating a categories drop-down control.
 *
 * @since 1.2.0
 * @deprecated 3.0.0 Use wp_dropdown_categories()
 * @see wp_dropdown_categories()
 *
 * @param int $currentcat    Optional. ID of the current category. Default 0.
 * @param int $currentparent Optional. Current parent category ID. Default 0.
 * @param int $parent        Optional. Parent ID to retrieve categories for. Default 0.
 * @param int $level         Optional. Number of levels deep to display. Default 0.
 * @param array $categories  Optional. Categories to include in the control. Default 0.
 * @return void|false Void on success, false if no categories were found.
 */
function wp_dropdown_cats($currentcat = 0, $currentparent = 0, $parent = 0, $level = 0, $categories = 0)
{
}