<?php


/**
 * WP_Navigation_Fallback class
 *
 * Manages fallback behavior for Navigation menus.
 *
 * @package WordPress
 * @subpackage Navigation
 * @since 6.3.0
 */
/**
 * Manages fallback behavior for Navigation menus.
 *
 * @access public
 * @since 6.3.0
 */
class WP_Navigation_Fallback
{
    /**
     * Updates the wp_navigation custom post type schema, in order to expose
     * additional fields in the embeddable links of WP_REST_Navigation_Fallback_Controller.
     *
     * The Navigation Fallback endpoint may embed the full Navigation Menu object
     * into the response as the `self` link. By default, the Posts Controller
     * will only expose a limited subset of fields but the editor requires
     * additional fields to be available in order to utilize the menu.
     *
     * Used with the `rest_wp_navigation_item_schema` hook.
     *
     * @since 6.4.0
     *
     * @param array $schema The schema for the `wp_navigation` post.
     * @return array The modified schema.
     */
    public static function update_wp_navigation_post_schema($schema)
    {
    }
    /**
     * Gets (and/or creates) an appropriate fallback Navigation Menu.
     *
     * @since 6.3.0
     *
     * @return WP_Post|null the fallback Navigation Post or null.
     */
    public static function get_fallback()
    {
    }
}