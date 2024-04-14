<?php


/**
 * Style Engine: WP_Style_Engine_CSS_Rule class
 *
 * @package WordPress
 * @subpackage StyleEngine
 * @since 6.1.0
 */
/**
 * Core class used for style engine CSS rules.
 *
 * Holds, sanitizes, processes, and prints CSS declarations for the style engine.
 *
 * @since 6.1.0
 */
#[\AllowDynamicProperties]
class WP_Style_Engine_CSS_Rule
{
    /**
     * The selector.
     *
     * @since 6.1.0
     * @var string
     */
    protected $selector;
    /**
     * The selector declarations.
     *
     * Contains a WP_Style_Engine_CSS_Declarations object.
     *
     * @since 6.1.0
     * @var WP_Style_Engine_CSS_Declarations
     */
    protected $declarations;
    /**
     * Constructor.
     *
     * @since 6.1.0
     *
     * @param string                                    $selector     Optional. The CSS selector. Default empty string.
     * @param string[]|WP_Style_Engine_CSS_Declarations $declarations Optional. An associative array of CSS definitions,
     *                                                                e.g. `array( "$property" => "$value", "$property" => "$value" )`,
     *                                                                or a WP_Style_Engine_CSS_Declarations object.
     *                                                                Default empty array.
     */
    public function __construct($selector = '', $declarations = array())
    {
    }
    /**
     * Sets the selector.
     *
     * @since 6.1.0
     *
     * @param string $selector The CSS selector.
     * @return WP_Style_Engine_CSS_Rule Returns the object to allow chaining of methods.
     */
    public function set_selector($selector)
    {
    }
    /**
     * Sets the declarations.
     *
     * @since 6.1.0
     *
     * @param string[]|WP_Style_Engine_CSS_Declarations $declarations An array of declarations (property => value pairs),
     *                                                                or a WP_Style_Engine_CSS_Declarations object.
     * @return WP_Style_Engine_CSS_Rule Returns the object to allow chaining of methods.
     */
    public function add_declarations($declarations)
    {
    }
    /**
     * Gets the declarations object.
     *
     * @since 6.1.0
     *
     * @return WP_Style_Engine_CSS_Declarations The declarations object.
     */
    public function get_declarations()
    {
    }
    /**
     * Gets the full selector.
     *
     * @since 6.1.0
     *
     * @return string
     */
    public function get_selector()
    {
    }
    /**
     * Gets the CSS.
     *
     * @since 6.1.0
     *
     * @param bool $should_prettify Optional. Whether to add spacing, new lines and indents.
     *                              Default false.
     * @param int  $indent_count    Optional. The number of tab indents to apply to the rule.
     *                              Applies if `prettify` is `true`. Default 0.
     * @return string
     */
    public function get_css($should_prettify = \false, $indent_count = 0)
    {
    }
}