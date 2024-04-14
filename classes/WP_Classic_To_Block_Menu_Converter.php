<?php


/**
 * WP_Classic_To_Block_Menu_Converter class
 *
 * @package WordPress
 * @since 6.3.0
 */
/**
 * Converts a Classic Menu to Block Menu blocks.
 *
 * @since 6.3.0
 * @access public
 */
class WP_Classic_To_Block_Menu_Converter
{
    /**
     * Converts a Classic Menu to blocks.
     *
     * @since 6.3.0
     *
     * @param WP_Term $menu The Menu term object of the menu to convert.
     * @return string|WP_Error The serialized and normalized parsed blocks on success,
     *                         an empty string when there are no menus to convert,
     *                         or WP_Error on invalid menu.
     */
    public static function convert($menu)
    {
    }
}