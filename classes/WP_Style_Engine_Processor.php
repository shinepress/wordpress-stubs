<?php


/**
 * WP_Style_Engine_Processor
 *
 * Compiles styles from stores or collection of CSS rules.
 *
 * @package WordPress
 * @subpackage StyleEngine
 * @since 6.1.0
 */
/**
 * Class WP_Style_Engine_Processor.
 *
 * Compiles styles from stores or collection of CSS rules.
 *
 * @since 6.1.0
 */
#[\AllowDynamicProperties]
class WP_Style_Engine_Processor
{
    /**
     * A collection of Style Engine Store objects.
     *
     * @since 6.1.0
     * @var WP_Style_Engine_CSS_Rules_Store[]
     */
    protected $stores = array();
    /**
     * The set of CSS rules that this processor will work on.
     *
     * @since 6.1.0
     * @var WP_Style_Engine_CSS_Rule[]
     */
    protected $css_rules = array();
    /**
     * Adds a store to the processor.
     *
     * @since 6.1.0
     *
     * @param WP_Style_Engine_CSS_Rules_Store $store The store to add.
     *
     * @return WP_Style_Engine_Processor Returns the object to allow chaining methods.
     */
    public function add_store($store)
    {
    }
    /**
     * Adds rules to be processed.
     *
     * @since 6.1.0
     *
     * @param WP_Style_Engine_CSS_Rule|WP_Style_Engine_CSS_Rule[] $css_rules A single, or an array of, WP_Style_Engine_CSS_Rule objects from a store or otherwise.
     *
     * @return WP_Style_Engine_Processor Returns the object to allow chaining methods.
     */
    public function add_rules($css_rules)
    {
    }
    /**
     * Gets the CSS rules as a string.
     *
     * @since 6.1.0
     *
     * @param array $options   {
     *     Optional. An array of options. Default empty array.
     *
     *     @type bool $optimize Whether to optimize the CSS output, e.g., combine rules. Default is `false`.
     *     @type bool $prettify Whether to add new lines and indents to output. Default is the test of whether the global constant `SCRIPT_DEBUG` is defined.
     * }
     *
     * @return string The computed CSS.
     * @phpstan-param array{
     *   optimize?: bool,
     *   prettify?: bool,
     * } $options
     */
    public function get_css($options = array())
    {
    }
}