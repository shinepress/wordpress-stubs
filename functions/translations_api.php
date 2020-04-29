<?php


/**
 * WordPress Translation Install Administration API
 *
 * @package WordPress
 * @subpackage Administration
 */
/**
 * Retrieve translations from WordPress Translation API.
 *
 * @since 4.0.0
 *
 * @param string       $type Type of translations. Accepts 'plugins', 'themes', 'core'.
 * @param array|object $args Translation API arguments. Optional.
 * @return object|WP_Error On success an object of translations, WP_Error on failure.
 */
function translations_api($type, $args = \null)
{
}