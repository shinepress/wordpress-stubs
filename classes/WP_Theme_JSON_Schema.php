<?php


/**
 * Class that migrates a given theme.json structure to the latest schema.
 *
 * This class is for internal core usage and is not supposed to be used by extenders (plugins and/or themes).
 * This is a low-level API that may need to do breaking changes. Please,
 * use get_global_settings, get_global_styles, and get_global_stylesheet instead.
 *
 * @since 5.9.0
 * @access private
 */
#[\AllowDynamicProperties]
class WP_Theme_JSON_Schema
{
    /**
     * Maps old properties to their new location within the schema's settings.
     * This will be applied at both the defaults and individual block levels.
     */
    const V1_TO_V2_RENAMED_PATHS = array('border.customRadius' => 'border.radius', 'spacing.customMargin' => 'spacing.margin', 'spacing.customPadding' => 'spacing.padding', 'typography.customLineHeight' => 'typography.lineHeight');
    /**
     * Function that migrates a given theme.json structure to the last version.
     *
     * @since 5.9.0
     * @since 6.6.0 Migrate up to v3 and add $origin parameter.
     *
     * @param array $theme_json The structure to migrate.
     * @param string $origin    Optional. What source of data this object represents.
     *                          One of 'blocks', 'default', 'theme', or 'custom'. Default 'theme'.
     * @return array The structure in the last version.
     * @phpstan-param 'blocks'|'default'|'theme'|'custom' $origin
     */
    public static function migrate($theme_json, $origin = 'theme')
    {
    }
}