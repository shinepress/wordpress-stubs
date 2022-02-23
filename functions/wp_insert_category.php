<?php


/**
 * Updates an existing Category or creates a new Category.
 *
 * @since 2.0.0
 * @since 2.5.0 $wp_error parameter was added.
 * @since 3.0.0 The 'taxonomy' argument was added.
 *
 * @param array $catarr {
 *     Array of arguments for inserting a new category.
 *
 *     @type int        $cat_ID               Category ID. A non-zero value updates an existing category.
 *                                            Default 0.
 *     @type string     $taxonomy             Taxonomy slug. Default 'category'.
 *     @type string     $cat_name             Category name. Default empty.
 *     @type string     $category_description Category description. Default empty.
 *     @type string     $category_nicename    Category nice (display) name. Default empty.
 *     @type int|string $category_parent      Category parent ID. Default empty.
 * }
 * @param bool  $wp_error Optional. Default false.
 * @return int|WP_Error The ID number of the new or updated Category on success. Zero or a WP_Error on failure,
 *                      depending on param `$wp_error`.
 * @phpstan-param array{
 *   cat_ID?: int,
 *   taxonomy?: string,
 *   cat_name?: string,
 *   category_description?: string,
 *   category_nicename?: string,
 *   category_parent?: int|string,
 * } $catarr
 */
function wp_insert_category($catarr, $wp_error = \false)
{
}