<?php


/**
 * Style Engine: WP_Style_Engine class
 *
 * @package WordPress
 * @subpackage StyleEngine
 * @since 6.1.0
 */
/**
 * The main class integrating all other WP_Style_Engine_* classes.
 *
 * The Style Engine aims to provide a consistent API for rendering styling for blocks
 * across both client-side and server-side applications.
 *
 * This class is final and should not be extended.
 *
 * This class is for internal Core usage and is not supposed to be used by extenders
 * (plugins and/or themes). This is a low-level API that may need to do breaking changes.
 * Please, use wp_style_engine_get_styles() instead.
 *
 * @access private
 * @since 6.1.0
 * @since 6.3.0 Added support for text-columns.
 */
#[\AllowDynamicProperties]
final class WP_Style_Engine
{
    /**
     * Style definitions that contain the instructions to
     * parse/output valid Gutenberg styles from a block's attributes.
     *
     * For every style definition, the following properties are valid:
     *
     *  - classnames    => (array) An array of classnames to be returned for block styles.
     *                     The key is a classname or pattern.
     *                     A value of `true` means the classname should be applied always.
     *                     Otherwise, a valid CSS property (string) to match the incoming value,
     *                     e.g. "color" to match var:preset|color|somePresetSlug.
     *  - css_vars      => (array) An array of key value pairs used to generate CSS var values.
     *                     The key is a CSS var pattern, whose `$slug` fragment will be replaced with a preset slug.
     *                     The value should be a valid CSS property (string) to match the incoming value,
     *                     e.g. "color" to match var:preset|color|somePresetSlug.
     *  - property_keys => (array) An array of keys whose values represent a valid CSS property,
     *                     e.g. "margin" or "border".
     *  - path          => (array) A path that accesses the corresponding style value in the block style object.
     *  - value_func    => (string) The name of a function to generate a CSS definition array
     *                     for a particular style object. The output of this function should be
     *                     `array( "$property" => "$value", ... )`.
     *
     * @since 6.1.0
     * @var array
     */
    const BLOCK_STYLE_DEFINITIONS_METADATA = array('color' => array('text' => array('property_keys' => array('default' => 'color'), 'path' => array('color', 'text'), 'css_vars' => array('color' => '--wp--preset--color--$slug'), 'classnames' => array('has-text-color' => \true, 'has-$slug-color' => 'color')), 'background' => array('property_keys' => array('default' => 'background-color'), 'path' => array('color', 'background'), 'classnames' => array('has-background' => \true, 'has-$slug-background-color' => 'color')), 'gradient' => array('property_keys' => array('default' => 'background'), 'path' => array('color', 'gradient'), 'classnames' => array('has-background' => \true, 'has-$slug-gradient-background' => 'gradient'))), 'border' => array('color' => array('property_keys' => array('default' => 'border-color', 'individual' => 'border-%s-color'), 'path' => array('border', 'color'), 'classnames' => array('has-border-color' => \true, 'has-$slug-border-color' => 'color')), 'radius' => array('property_keys' => array('default' => 'border-radius', 'individual' => 'border-%s-radius'), 'path' => array('border', 'radius')), 'style' => array('property_keys' => array('default' => 'border-style', 'individual' => 'border-%s-style'), 'path' => array('border', 'style')), 'width' => array('property_keys' => array('default' => 'border-width', 'individual' => 'border-%s-width'), 'path' => array('border', 'width')), 'top' => array('value_func' => array(self::class, 'get_individual_property_css_declarations'), 'path' => array('border', 'top'), 'css_vars' => array('color' => '--wp--preset--color--$slug')), 'right' => array('value_func' => array(self::class, 'get_individual_property_css_declarations'), 'path' => array('border', 'right'), 'css_vars' => array('color' => '--wp--preset--color--$slug')), 'bottom' => array('value_func' => array(self::class, 'get_individual_property_css_declarations'), 'path' => array('border', 'bottom'), 'css_vars' => array('color' => '--wp--preset--color--$slug')), 'left' => array('value_func' => array(self::class, 'get_individual_property_css_declarations'), 'path' => array('border', 'left'), 'css_vars' => array('color' => '--wp--preset--color--$slug'))), 'shadow' => array('shadow' => array('property_keys' => array('default' => 'box-shadow'), 'path' => array('shadow'), 'css_vars' => array('shadow' => '--wp--preset--shadow--$slug'))), 'dimensions' => array('minHeight' => array('property_keys' => array('default' => 'min-height'), 'path' => array('dimensions', 'minHeight'), 'css_vars' => array('spacing' => '--wp--preset--spacing--$slug'))), 'spacing' => array('padding' => array('property_keys' => array('default' => 'padding', 'individual' => 'padding-%s'), 'path' => array('spacing', 'padding'), 'css_vars' => array('spacing' => '--wp--preset--spacing--$slug')), 'margin' => array('property_keys' => array('default' => 'margin', 'individual' => 'margin-%s'), 'path' => array('spacing', 'margin'), 'css_vars' => array('spacing' => '--wp--preset--spacing--$slug'))), 'typography' => array('fontSize' => array('property_keys' => array('default' => 'font-size'), 'path' => array('typography', 'fontSize'), 'classnames' => array('has-$slug-font-size' => 'font-size')), 'fontFamily' => array('property_keys' => array('default' => 'font-family'), 'path' => array('typography', 'fontFamily'), 'classnames' => array('has-$slug-font-family' => 'font-family')), 'fontStyle' => array('property_keys' => array('default' => 'font-style'), 'path' => array('typography', 'fontStyle')), 'fontWeight' => array('property_keys' => array('default' => 'font-weight'), 'path' => array('typography', 'fontWeight')), 'lineHeight' => array('property_keys' => array('default' => 'line-height'), 'path' => array('typography', 'lineHeight')), 'textColumns' => array('property_keys' => array('default' => 'column-count'), 'path' => array('typography', 'textColumns')), 'textDecoration' => array('property_keys' => array('default' => 'text-decoration'), 'path' => array('typography', 'textDecoration')), 'textTransform' => array('property_keys' => array('default' => 'text-transform'), 'path' => array('typography', 'textTransform')), 'letterSpacing' => array('property_keys' => array('default' => 'letter-spacing'), 'path' => array('typography', 'letterSpacing'))));
    /**
     * Stores a CSS rule using the provided CSS selector and CSS declarations.
     *
     * @since 6.1.0
     *
     * @param string   $store_name       A valid store key.
     * @param string   $css_selector     When a selector is passed, the function will return
     *                                   a full CSS rule `$selector { ...rules }`
     *                                   otherwise a concatenated string of properties and values.
     * @param string[] $css_declarations An associative array of CSS definitions,
     *                                   e.g. `array( "$property" => "$value", "$property" => "$value" )`.
     */
    public static function store_css_rule($store_name, $css_selector, $css_declarations)
    {
    }
    /**
     * Returns a store by store key.
     *
     * @since 6.1.0
     *
     * @param string $store_name A store key.
     * @return WP_Style_Engine_CSS_Rules_Store|null
     */
    public static function get_store($store_name)
    {
    }
    /**
     * Returns classnames and CSS based on the values in a styles object.
     *
     * Return values are parsed based on the instructions in BLOCK_STYLE_DEFINITIONS_METADATA.
     *
     * @since 6.1.0
     *
     * @param array $block_styles The style object.
     * @param array $options      {
     *     Optional. An array of options. Default empty array.
     *
     *     @type bool        $convert_vars_to_classnames Whether to skip converting incoming CSS var patterns,
     *                                                   e.g. `var:preset|<PRESET_TYPE>|<PRESET_SLUG>`,
     *                                                   to `var( --wp--preset--* )` values. Default false.
     *     @type string      $selector                   Optional. When a selector is passed,
     *                                                   the value of `$css` in the return value will comprise
     *                                                   a full CSS rule `$selector { ...$css_declarations }`,
     *                                                   otherwise, the value will be a concatenated string
     *                                                   of CSS declarations.
     * }
     * @return array {
     *     @type string[] $classnames   Array of class names.
     *     @type string[] $declarations An associative array of CSS definitions,
     *                                  e.g. `array( "$property" => "$value", "$property" => "$value" )`.
     * }
     * @phpstan-param array{
     *   convert_vars_to_classnames?: bool,
     *   selector?: string,
     * } $options
     * @phpstan-return array{
     *   classnames: string[],
     *   declarations: string[],
     * }
     */
    public static function parse_block_styles($block_styles, $options)
    {
    }
    /**
     * Returns compiled CSS from CSS declarations.
     *
     * @since 6.1.0
     *
     * @param string[] $css_declarations An associative array of CSS definitions,
     *                                   e.g. `array( "$property" => "$value", "$property" => "$value" )`.
     * @param string   $css_selector     When a selector is passed, the function will return
     *                                   a full CSS rule `$selector { ...rules }`,
     *                                   otherwise a concatenated string of properties and values.
     * @return string A compiled CSS string.
     */
    public static function compile_css($css_declarations, $css_selector)
    {
    }
    /**
     * Returns a compiled stylesheet from stored CSS rules.
     *
     * @since 6.1.0
     *
     * @param WP_Style_Engine_CSS_Rule[] $css_rules An array of WP_Style_Engine_CSS_Rule objects
     *                                              from a store or otherwise.
     * @param array                      $options   {
     *     Optional. An array of options. Default empty array.
     *
     *     @type string|null $context  An identifier describing the origin of the style object,
     *                                 e.g. 'block-supports' or 'global-styles'. Default 'block-supports'.
     *                                 When set, the style engine will attempt to store the CSS rules.
     *     @type bool        $optimize Whether to optimize the CSS output, e.g. combine rules.
     *                                 Default true.
     *     @type bool        $prettify Whether to add new lines and indents to output.
     *                                 Defaults to whether the `SCRIPT_DEBUG` constant is defined.
     * }
     * @return string A compiled stylesheet from stored CSS rules.
     * @phpstan-param array{
     *   context?: string|null,
     *   optimize?: bool,
     *   prettify?: bool,
     * } $options
     */
    public static function compile_stylesheet_from_css_rules($css_rules, $options = array())
    {
    }
}