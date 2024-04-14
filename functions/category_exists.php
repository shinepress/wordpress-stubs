<?php


/**
 * WordPress Taxonomy Administration API.
 *
 * @package WordPress
 * @subpackage Administration
 */
//
// Category.
//
/**
 * Check whether a category exists.
 *
 * @since 2.0.0
 *
 * @see term_exists()
 *
 * @param int|string $cat_name Category name.
 * @param int        $parent   Optional. ID of parent term.
 * @return string|null Returns the category ID as a numeric string if the pairing exists, null if not.
 */
function category_exists($cat_name, $parent = \null)
{
}