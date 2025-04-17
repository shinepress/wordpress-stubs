<?php


/**
 * The Font Face Resolver abstracts the processing of different data sources
 * (such as theme.json) for processing within the Font Face.
 *
 * This class is for internal core usage and is not supposed to be used by
 * extenders (plugins and/or themes).
 *
 * @access private
 */
class WP_Font_Face_Resolver
{
    /**
     * Gets fonts defined in theme.json.
     *
     * @since 6.4.0
     *
     * @return array Returns the font-families, each with their font-face variations.
     */
    public static function get_fonts_from_theme_json()
    {
    }
    /**
     * Gets fonts defined in style variations.
     *
     * @since 6.7.0
     *
     * @return array Returns an array of font-families.
     */
    public static function get_fonts_from_style_variations()
    {
    }
}