<?php


/**
 * WP_Theme_JSON class
 *
 * @package WordPress
 * @subpackage Theme
 * @since 5.8.0
 */
/**
 * Class that encapsulates the processing of structures that adhere to the theme.json spec.
 *
 * @access private
 */
class WP_Theme_JSON
{
    /**
     * The CSS selector for the top-level styles.
     *
     * @since 5.8.0
     * @var string
     */
    const ROOT_BLOCK_SELECTOR = 'body';
    /**
     * The sources of data this object can represent.
     *
     * @since 5.8.0
     * @var array
     */
    const VALID_ORIGINS = array('core', 'theme', 'user');
    /**
     * Presets are a set of values that serve
     * to bootstrap some styles: colors, font sizes, etc.
     *
     * They are a unkeyed array of values such as:
     *
     * ```php
     * array(
     *   array(
     *     'slug'      => 'unique-name-within-the-set',
     *     'name'      => 'Name for the UI',
     *     <value_key> => 'value'
     *   ),
     * )
     * ```
     *
     * This contains the necessary metadata to process them:
     *
     * - path          => where to find the preset within the settings section
     *
     * - value_key     => the key that represents the value
     *
     * - css_var_infix => infix to use in generating the CSS Custom Property. Example:
     *                   --wp--preset--<preset_infix>--<slug>: <preset_value>
     *
     * - classes      => array containing a structure with the classes to
     *                   generate for the presets. Each class should have
     *                   the class suffix and the property name. Example:
     *
     *                   .has-<slug>-<class_suffix> {
     *                       <property_name>: <preset_value>
     *                   }
     *
     * @since 5.8.0
     * @var array
     */
    const PRESETS_METADATA = array(array('path' => array('color', 'palette'), 'value_key' => 'color', 'css_var_infix' => 'color', 'classes' => array(array('class_suffix' => 'color', 'property_name' => 'color'), array('class_suffix' => 'background-color', 'property_name' => 'background-color'))), array('path' => array('color', 'gradients'), 'value_key' => 'gradient', 'css_var_infix' => 'gradient', 'classes' => array(array('class_suffix' => 'gradient-background', 'property_name' => 'background'))), array('path' => array('typography', 'fontSizes'), 'value_key' => 'size', 'css_var_infix' => 'font-size', 'classes' => array(array('class_suffix' => 'font-size', 'property_name' => 'font-size'))));
    /**
     * Metadata for style properties.
     *
     * Each property declares:
     *
     * - 'value': path to the value in theme.json and block attributes.
     *
     * @since 5.8.0
     * @var array
     */
    const PROPERTIES_METADATA = array('background' => array('value' => array('color', 'gradient')), 'background-color' => array('value' => array('color', 'background')), 'color' => array('value' => array('color', 'text')), 'font-size' => array('value' => array('typography', 'fontSize')), 'line-height' => array('value' => array('typography', 'lineHeight')), 'margin' => array('value' => array('spacing', 'margin'), 'properties' => array('top', 'right', 'bottom', 'left')), 'padding' => array('value' => array('spacing', 'padding'), 'properties' => array('top', 'right', 'bottom', 'left')));
    /**
     * @since 5.8.0
     * @var array
     */
    const ALLOWED_TOP_LEVEL_KEYS = array('settings', 'styles', 'version');
    /**
     * @since 5.8.0
     * @var array
     */
    const ALLOWED_SETTINGS = array('border' => array('customRadius' => \null), 'color' => array('custom' => \null, 'customDuotone' => \null, 'customGradient' => \null, 'duotone' => \null, 'gradients' => \null, 'link' => \null, 'palette' => \null), 'custom' => \null, 'layout' => array('contentSize' => \null, 'wideSize' => \null), 'spacing' => array('customMargin' => \null, 'customPadding' => \null, 'units' => \null), 'typography' => array('customFontSize' => \null, 'customLineHeight' => \null, 'dropCap' => \null, 'fontSizes' => \null));
    /**
     * @since 5.8.0
     * @var array
     */
    const ALLOWED_STYLES = array('border' => array('radius' => \null), 'color' => array('background' => \null, 'gradient' => \null, 'text' => \null), 'spacing' => array('margin' => array('top' => \null, 'right' => \null, 'bottom' => \null, 'left' => \null), 'padding' => array('bottom' => \null, 'left' => \null, 'right' => \null, 'top' => \null)), 'typography' => array('fontSize' => \null, 'lineHeight' => \null));
    /**
     * @since 5.8.0
     * @var array
     */
    const ELEMENTS = array('link' => 'a', 'h1' => 'h1', 'h2' => 'h2', 'h3' => 'h3', 'h4' => 'h4', 'h5' => 'h5', 'h6' => 'h6');
    /**
     * @since 5.8.0
     * @var int
     */
    const LATEST_SCHEMA = 1;
    /**
     * Constructor.
     *
     * @since 5.8.0
     *
     * @param array $theme_json A structure that follows the theme.json schema.
     * @param string $origin    Optional. What source of data this object represents.
     *                          One of 'core', 'theme', or 'user'. Default 'theme'.
     */
    public function __construct($theme_json = array(), $origin = 'theme')
    {
    }
    /**
     * Returns the existing settings for each block.
     *
     * Example:
     *
     *     {
     *       'root': {
     *         'color': {
     *           'custom': true
     *         }
     *       },
     *       'core/paragraph': {
     *         'spacing': {
     *           'customPadding': true
     *         }
     *       }
     *     }
     *
     * @since 5.8.0
     *
     * @return array Settings per block.
     */
    public function get_settings()
    {
    }
    /**
     * Returns the stylesheet that results of processing
     * the theme.json structure this object represents.
     *
     * @since 5.8.0
     *
     * @param string $type Optional. Type of stylesheet we want. Accepts 'all',
     *                     'block_styles', and 'css_variables'. Default 'all'.
     * @return string Stylesheet.
     */
    public function get_stylesheet($type = 'all')
    {
    }
    /**
     * Merge new incoming data.
     *
     * @since 5.8.0
     *
     * @param WP_Theme_JSON $incoming Data to merge.
     */
    public function merge($incoming)
    {
    }
    /**
     * Returns the raw data.
     *
     * @since 5.8.0
     *
     * @return array Raw data.
     */
    public function get_raw_data()
    {
    }
    /**
     * Transforms the given editor settings according the
     * add_theme_support format to the theme.json format.
     *
     * @since 5.8.0
     *
     * @param array $settings Existing editor settings.
     * @return array Config that adheres to the theme.json schema.
     */
    public static function get_from_editor_settings($settings)
    {
    }
}