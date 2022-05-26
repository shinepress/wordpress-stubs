<?php


/**
 * WP_Theme_JSON_Schema class
 *
 * @package WordPress
 * @subpackage Theme
 * @since 5.9.0
 */
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
     *
     * @param array $theme_json The structure to migrate.
     *
     * @return array The structure in the last version.
     */
    public static function migrate($theme_json)
    {
    }
    /**
     * Removes the custom prefixes for a few properties
     * that were part of v1:
     *
     * 'border.customRadius'         => 'border.radius',
     * 'spacing.customMargin'        => 'spacing.margin',
     * 'spacing.customPadding'       => 'spacing.padding',
     * 'typography.customLineHeight' => 'typography.lineHeight',
     *
     * @since 5.9.0
     *
     * @param array $old Data to migrate.
     *
     * @return array Data without the custom prefixes.
     */
    private static function migrate_v1_to_v2($old)
    {
    }
    /**
     * Processes the settings subtree.
     *
     * @since 5.9.0
     *
     * @param array $settings        Array to process.
     * @param array $paths_to_rename Paths to rename.
     *
     * @return array The settings in the new format.
     */
    private static function rename_paths($settings, $paths_to_rename)
    {
    }
    /**
     * Processes a settings array, renaming or moving properties.
     *
     * @since 5.9.0
     *
     * @param array $settings        Reference to settings either defaults or an individual block's.
     * @param array $paths_to_rename Paths to rename.
     */
    private static function rename_settings(&$settings, $paths_to_rename)
    {
    }
    /**
     * Removes a property from within the provided settings by its path.
     *
     * @since 5.9.0
     *
     * @param array $settings Reference to the current settings array.
     * @param array $path Path to the property to be removed.
     *
     * @return void
     */
    private static function unset_setting_by_path(&$settings, $path)
    {
    }
}