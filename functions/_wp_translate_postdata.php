<?php


/**
 * WordPress Post Administration API.
 *
 * @package WordPress
 * @subpackage Administration
 */
/**
 * Renames `$_POST` data from form names to DB post columns.
 *
 * Manipulates `$_POST` directly.
 *
 * @since 2.6.0
 *
 * @param bool       $update    Whether the post already exists.
 * @param array|null $post_data Optional. The array of post data to process.
 *                              Defaults to the `$_POST` superglobal.
 * @return array|WP_Error Array of post data on success, WP_Error on failure.
 */
function _wp_translate_postdata($update = \false, $post_data = \null)
{
}