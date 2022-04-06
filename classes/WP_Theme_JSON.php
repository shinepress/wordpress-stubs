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
     * Container of data in theme.json format.
     *
     * @since 5.8.0
     * @var array
     */
    private $theme_json = \null;
    /**
     * Holds block metadata extracted from block.json
     * to be shared among all instances so we don't
     * process it twice.
     *
     * @since 5.8.0
     * @var array
     */
    private static $blocks_metadata = \null;
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
     * Sanitizes the input according to the schemas.
     *
     * @since 5.8.0
     *
     * @param array $input Structure to sanitize.
     * @return array The sanitized output.
     */
    private static function sanitize($input)
    {
    }
    /**
     * Returns the metadata for each block.
     *
     * Example:
     *
     *     {
     *       'core/paragraph': {
     *         'selector': 'p',
     *         'elements': {
     *           'link' => 'link selector',
     *           'etc'  => 'element selector'
     *         }
     *       },
     *       'core/heading': {
     *         'selector': 'h1',
     *         'elements': {}
     *       }
     *       'core/group': {
     *         'selector': '.wp-block-group',
     *         'elements': {}
     *       }
     *     }
     *
     * @since 5.8.0
     *
     * @return array Block metadata.
     */
    private static function get_blocks_metadata()
    {
    }
    /**
     * Given a tree, removes the keys that are not present in the schema.
     *
     * It is recursive and modifies the input in-place.
     *
     * @since 5.8.0
     *
     * @param array $tree   Input to process.
     * @param array $schema Schema to adhere to.
     * @return array Returns the modified $tree.
     */
    private static function remove_keys_not_in_schema($tree, $schema)
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
     * Converts each style section into a list of rulesets
     * containing the block styles to be appended to the stylesheet.
     *
     * See glossary at https://developer.mozilla.org/en-US/docs/Web/CSS/Syntax
     *
     * For each section this creates a new ruleset such as:
     *
     *   block-selector {
     *     style-property-one: value;
     *   }
     *
     * Additionally, it'll also create new rulesets
     * as classes for each preset value such as:
     *
     *     .has-value-color {
     *       color: value;
     *     }
     *
     *     .has-value-background-color {
     *       background-color: value;
     *     }
     *
     *     .has-value-font-size {
     *       font-size: value;
     *     }
     *
     *     .has-value-gradient-background {
     *       background: value;
     *     }
     *
     *     p.has-value-gradient-background {
     *       background: value;
     *     }
     *
     * @since 5.8.0
     *
     * @param array $style_nodes   Nodes with styles.
     * @param array $setting_nodes Nodes with settings.
     * @return string The new stylesheet.
     */
    private function get_block_styles($style_nodes, $setting_nodes)
    {
    }
    /**
     * Converts each styles section into a list of rulesets
     * to be appended to the stylesheet.
     * These rulesets contain all the css variables (custom variables and preset variables).
     *
     * See glossary at https://developer.mozilla.org/en-US/docs/Web/CSS/Syntax
     *
     * For each section this creates a new ruleset such as:
     *
     *     block-selector {
     *       --wp--preset--category--slug: value;
     *       --wp--custom--variable: value;
     *     }
     *
     * @since 5.8.0
     *
     * @param array $nodes Nodes with settings.
     * @return string The new stylesheet.
     */
    private function get_css_variables($nodes)
    {
    }
    /**
     * Given a selector and a declaration list,
     * creates the corresponding ruleset.
     *
     * @since 5.8.0
     *
     * @param string $selector     CSS selector.
     * @param array  $declarations List of declarations.
     * @return string CSS ruleset.
     */
    private static function to_ruleset($selector, $declarations)
    {
    }
    /**
     * Function that appends a sub-selector to a existing one.
     *
     * Given the compounded $selector "h1, h2, h3"
     * and the $to_append selector ".some-class" the result will be
     * "h1.some-class, h2.some-class, h3.some-class".
     *
     * @since 5.8.0
     *
     * @param string $selector  Original selector.
     * @param string $to_append Selector to append.
     * @return string
     */
    private static function append_to_selector($selector, $to_append)
    {
    }
    /**
     * Given an array of presets keyed by origin and the value key of the preset,
     * it returns an array where each key is the preset slug and each value the preset value.
     *
     * @since 5.8.0
     *
     * @param array  $preset_per_origin Array of presets keyed by origin.
     * @param string $value_key         The property of the preset that contains its value.
     * @return array Array of presets where each key is a slug and each value is the preset value.
     */
    private static function get_merged_preset_by_slug($preset_per_origin, $value_key)
    {
    }
    /**
     * Given a settings array, it returns the generated rulesets
     * for the preset classes.
     *
     * @since 5.8.0
     *
     * @param array  $settings Settings to process.
     * @param string $selector Selector wrapping the classes.
     * @return string The result of processing the presets.
     */
    private static function compute_preset_classes($settings, $selector)
    {
    }
    /**
     * Given the block settings, it extracts the CSS Custom Properties
     * for the presets and adds them to the $declarations array
     * following the format:
     *
     *     array(
     *       'name'  => 'property_name',
     *       'value' => 'property_value,
     *     )
     *
     * @since 5.8.0
     *
     * @param array $settings Settings to process.
     * @return array Returns the modified $declarations.
     */
    private static function compute_preset_vars($settings)
    {
    }
    /**
     * Given an array of settings, it extracts the CSS Custom Properties
     * for the custom values and adds them to the $declarations
     * array following the format:
     *
     *     array(
     *       'name'  => 'property_name',
     *       'value' => 'property_value,
     *     )
     *
     * @since 5.8.0
     *
     * @param array $settings Settings to process.
     * @return array Returns the modified $declarations.
     */
    private static function compute_theme_vars($settings)
    {
    }
    /**
     * Given a tree, it creates a flattened one
     * by merging the keys and binding the leaf values
     * to the new keys.
     *
     * It also transforms camelCase names into kebab-case
     * and substitutes '/' by '-'.
     *
     * This is thought to be useful to generate
     * CSS Custom Properties from a tree,
     * although there's nothing in the implementation
     * of this function that requires that format.
     *
     * For example, assuming the given prefix is '--wp'
     * and the token is '--', for this input tree:
     *
     *     {
     *       'some/property': 'value',
     *       'nestedProperty': {
     *         'sub-property': 'value'
     *       }
     *     }
     *
     * it'll return this output:
     *
     *     {
     *       '--wp--some-property': 'value',
     *       '--wp--nested-property--sub-property': 'value'
     *     }
     *
     * @since 5.8.0
     *
     * @param array  $tree   Input tree to process.
     * @param string $prefix Optional. Prefix to prepend to each variable. Default empty string.
     * @param string $token  Optional. Token to use between levels. Default '--'.
     * @return array The flattened tree.
     */
    private static function flatten_tree($tree, $prefix = '', $token = '--')
    {
    }
    /**
     * Given a styles array, it extracts the style properties
     * and adds them to the $declarations array following the format:
     *
     *     array(
     *       'name'  => 'property_name',
     *       'value' => 'property_value,
     *     )
     *
     * @since 5.8.0
     *
     * @param array $styles Styles to process.
     * @return array Returns the modified $declarations.
     */
    private static function compute_style_properties($styles)
    {
    }
    /**
     * Whether the metadata contains a key named properties.
     *
     * @since 5.8.0
     *
     * @param array $metadata Description of the style property.
     * @return bool True if properties exists, false otherwise.
     */
    private static function has_properties($metadata)
    {
    }
    /**
     * Returns the style property for the given path.
     *
     * It also converts CSS Custom Property stored as
     * "var:preset|color|secondary" to the form
     * "--wp--preset--color--secondary".
     *
     * @since 5.8.0
     *
     * @param array $styles Styles subtree.
     * @param array $path   Which property to process.
     * @return string Style property value.
     */
    private static function get_property_value($styles, $path)
    {
    }
    /**
     * Builds metadata for the setting nodes, which returns in the form of:
     *
     *     [
     *       [
     *         'path'     => ['path', 'to', 'some', 'node' ],
     *         'selector' => 'CSS selector for some node'
     *       ],
     *       [
     *         'path'     => [ 'path', 'to', 'other', 'node' ],
     *         'selector' => 'CSS selector for other node'
     *       ],
     *     ]
     *
     * @since 5.8.0
     *
     * @param array $theme_json The tree to extract setting nodes from.
     * @param array $selectors  List of selectors per block.
     * @return array
     */
    private static function get_setting_nodes($theme_json, $selectors = array())
    {
    }
    /**
     * Builds metadata for the style nodes, which returns in the form of:
     *
     *     [
     *       [
     *         'path'     => [ 'path', 'to', 'some', 'node' ],
     *         'selector' => 'CSS selector for some node'
     *       ],
     *       [
     *         'path'     => ['path', 'to', 'other', 'node' ],
     *         'selector' => 'CSS selector for other node'
     *       ],
     *     ]
     *
     * @since 5.8.0
     *
     * @param array $theme_json The tree to extract style nodes from.
     * @param array $selectors  List of selectors per block.
     * @return array
     */
    private static function get_style_nodes($theme_json, $selectors = array())
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