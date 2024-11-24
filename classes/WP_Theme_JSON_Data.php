<?php


/**
 * Class to provide access to update a theme.json structure.
 */
#[\AllowDynamicProperties]
class WP_Theme_JSON_Data
{
    /**
     * Constructor.
     *
     * @since 6.1.0
     *
     * @link https://developer.wordpress.org/block-editor/reference-guides/theme-json-reference/
     *
     * @param array  $data   Array following the theme.json specification.
     * @param string $origin The origin of the data: default, theme, user.
     */
    public function __construct($data = array('version' => \WP_Theme_JSON::LATEST_SCHEMA), $origin = 'theme')
    {
    }
    /**
     * Updates the theme.json with the the given data.
     *
     * @since 6.1.0
     *
     * @param array $new_data Array following the theme.json specification.
     *
     * @return WP_Theme_JSON_Data The own instance with access to the modified data.
     */
    public function update_with($new_data)
    {
    }
    /**
     * Returns an array containing the underlying data
     * following the theme.json specification.
     *
     * @since 6.1.0
     *
     * @return array
     */
    public function get_data()
    {
    }
    /**
     * Returns theme JSON object.
     *
     * @since 6.6.0
     *
     * @return WP_Theme_JSON The theme JSON structure stored in this data object.
     */
    public function get_theme_json()
    {
    }
}