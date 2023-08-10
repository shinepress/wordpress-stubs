<?php


/**
 * Navigation Fallback
 *
 * Functions required for managing Navigation fallbacks behavior.
 *
 * @package WordPress
 * @since 6.3.0
 */
/**
 * Expose additional fields in the embeddable links of the
 * Navigation Fallback REST endpoint.
 *
 * The endpoint may embed the full Navigation Menu object into the
 * response as the `self` link. By default, the Posts Controller
 * will only expose a limited subset of fields but the editor requires
 * additional fields to be available in order to utilize the menu.
 *
 * @since 6.3.0
 *
 * @param array $schema the schema for the `wp_navigation` post.
 * @return array the modified schema.
 */
function wp_add_fields_to_navigation_fallback_embedded_links($schema)
{
}