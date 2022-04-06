<?php


/**
 * WordPress Post Administration API.
 *
 * @package WordPress
 * @subpackage Administration
 */
/**
 * Rename $_POST data from form names to DB post columns.
 *
 * Manipulates $_POST directly.
 *
 * @since 2.6.0
 *
 * @param bool  $update    Are we updating a pre-existing post?
 * @param array $post_data Array of post data. Defaults to the contents of $_POST.
 * @return array|WP_Error Array of post data on success, WP_Error on failure.
 */
function _wp_translate_postdata($update = \false, $post_data = \null)
{
}