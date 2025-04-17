<?php


/**
 * Core class used for style engine CSS declarations.
 *
 * Holds, sanitizes, processes, and prints CSS declarations for the style engine.
 *
 * @since 6.1.0
 */
#[\AllowDynamicProperties]
class WP_Style_Engine_CSS_Declarations
{
    /**
     * An array of CSS declarations (property => value pairs).
     *
     * @since 6.1.0
     *
     * @var string[]
     */
    protected $declarations = array();
    /**
     * Constructor for this object.
     *
     * If a `$declarations` array is passed, it will be used to populate
     * the initial `$declarations` prop of the object by calling add_declarations().
     *
     * @since 6.1.0
     *
     * @param string[] $declarations Optional. An associative array of CSS definitions,
     *                               e.g. `array( "$property" => "$value", "$property" => "$value" )`.
     *                               Default empty array.
     */
    public function __construct($declarations = array())
    {
    }
    /**
     * Adds a single declaration.
     *
     * @since 6.1.0
     *
     * @param string $property The CSS property.
     * @param string $value    The CSS value.
     * @return WP_Style_Engine_CSS_Declarations Returns the object to allow chaining methods.
     */
    public function add_declaration($property, $value)
    {
    }
    /**
     * Removes a single declaration.
     *
     * @since 6.1.0
     *
     * @param string $property The CSS property.
     * @return WP_Style_Engine_CSS_Declarations Returns the object to allow chaining methods.
     */
    public function remove_declaration($property)
    {
    }
    /**
     * Adds multiple declarations.
     *
     * @since 6.1.0
     *
     * @param string[] $declarations An array of declarations.
     * @return WP_Style_Engine_CSS_Declarations Returns the object to allow chaining methods.
     */
    public function add_declarations($declarations)
    {
    }
    /**
     * Removes multiple declarations.
     *
     * @since 6.1.0
     *
     * @param string[] $properties Optional. An array of properties. Default empty array.
     * @return WP_Style_Engine_CSS_Declarations Returns the object to allow chaining methods.
     */
    public function remove_declarations($properties = array())
    {
    }
    /**
     * Gets the declarations array.
     *
     * @since 6.1.0
     *
     * @return string[] The declarations array.
     */
    public function get_declarations()
    {
    }
    /**
     * Filters a CSS property + value pair.
     *
     * @since 6.1.0
     *
     * @param string $property The CSS property.
     * @param string $value    The value to be filtered.
     * @param string $spacer   Optional. The spacer between the colon and the value.
     *                         Default empty string.
     * @return string The filtered declaration or an empty string.
     */
    protected static function filter_declaration($property, $value, $spacer = '')
    {
    }
    /**
     * Filters and compiles the CSS declarations.
     *
     * @since 6.1.0
     *
     * @param bool $should_prettify Optional. Whether to add spacing, new lines and indents.
     *                              Default false.
     * @param int  $indent_count    Optional. The number of tab indents to apply to the rule.
     *                              Applies if `prettify` is `true`. Default 0.
     * @return string The CSS declarations.
     */
    public function get_declarations_string($should_prettify = \false, $indent_count = 0)
    {
    }
    /**
     * Sanitizes property names.
     *
     * @since 6.1.0
     *
     * @param string $property The CSS property.
     * @return string The sanitized property name.
     */
    protected function sanitize_property($property)
    {
    }
}