<?php


/**
 * Legacy function used for generating a categories drop-down control.
 *
 * @since 1.2.0
 * @deprecated 3.0.0 Use wp_dropdown_categories()
 * @see wp_dropdown_categories()
 *
 * @param int $current_cat     Optional. ID of the current category. Default 0.
 * @param int $current_parent  Optional. Current parent category ID. Default 0.
 * @param int $category_parent Optional. Parent ID to retrieve categories for. Default 0.
 * @param int $level           Optional. Number of levels deep to display. Default 0.
 * @param array $categories    Optional. Categories to include in the control. Default 0.
 * @return void|false Void on success, false if no categories were found.
 */
function wp_dropdown_cats($current_cat = 0, $current_parent = 0, $category_parent = 0, $level = 0, $categories = 0)
{
}