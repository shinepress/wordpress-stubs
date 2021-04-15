<?php


/**
 * Customize API: WP_Customize_Custom_CSS_Setting class
 *
 * This handles validation, sanitization and saving of the value.
 *
 * @package WordPress
 * @subpackage Customize
 * @since 4.7.0
 */
/**
 * Custom Setting to handle WP Custom CSS.
 *
 * @since 4.7.0
 *
 * @see WP_Customize_Setting
 */
final class WP_Customize_Custom_CSS_Setting extends \WP_Customize_Setting
{
    /**
     * The setting type.
     *
     * @since 4.7.0
     * @access public
     * @var string
     */
    public $type = 'custom_css';
    /**
     * Setting Transport
     *
     * @since 4.7.0
     * @access public
     * @var string
     */
    public $transport = 'postMessage';
    /**
     * Capability required to edit this setting.
     *
     * @since 4.7.0
     * @access public
     * @var string
     */
    public $capability = 'edit_css';
    /**
     * Stylesheet
     *
     * @since 4.7.0
     * @access public
     * @var string
     */
    public $stylesheet = '';
    /**
     * WP_Customize_Custom_CSS_Setting constructor.
     *
     * @since 4.7.0
     * @access public
     *
     * @throws Exception If the setting ID does not match the pattern `custom_css[$stylesheet]`.
     *
     * @param WP_Customize_Manager $manager The Customize Manager class.
     * @param string               $id      An specific ID of the setting. Can be a
     *                                      theme mod or option name.
     * @param array                $args    Setting arguments.
     */
    public function __construct($manager, $id, $args = array())
    {
    }
    /**
     * Add filter to preview post value.
     *
     * @since 4.7.9
     * @access public
     *
     * @return bool False when preview short-circuits due no change needing to be previewed.
     */
    public function preview()
    {
    }
    /**
     * Filter `wp_get_custom_css` for applying the customized value.
     *
     * This is used in the preview when `wp_get_custom_css()` is called for rendering the styles.
     *
     * @since 4.7.0
     * @access private
     * @see wp_get_custom_css()
     *
     * @param string $css        Original CSS.
     * @param string $stylesheet Current stylesheet.
     * @return string CSS.
     */
    public function filter_previewed_wp_get_custom_css($css, $stylesheet)
    {
    }
    /**
     * Fetch the value of the setting. Will return the previewed value when `preview()` is called.
     *
     * @since 4.7.0
     * @access public
     * @see WP_Customize_Setting::value()
     *
     * @return string
     */
    public function value()
    {
    }
    /**
     * Validate CSS.
     *
     * Checks for imbalanced braces, brackets, and comments.
     * Notifications are rendered when the customizer state is saved.
     *
     * @todo There are cases where valid CSS can be incorrectly marked as invalid when strings or comments include balancing characters. To fix, CSS tokenization needs to be used.
     *
     * @since 4.7.0
     * @access public
     *
     * @param string $css The input string.
     * @return true|WP_Error True if the input was validated, otherwise WP_Error.
     */
    public function validate($css)
    {
    }
    /**
     * Store the CSS setting value in the custom_css custom post type for the stylesheet.
     *
     * @since 4.7.0
     * @access public
     *
     * @param string $css The input value.
     * @return int|false The post ID or false if the value could not be saved.
     */
    public function update($css)
    {
    }
    /**
     * Ensure there are a balanced number of paired characters.
     *
     * This is used to check that the number of opening and closing
     * characters is equal.
     *
     * For instance, there should be an equal number of braces ("{", "}")
     * in the CSS.
     *
     * @since 4.7.0
     * @access private
     *
     * @param string $opening_char The opening character.
     * @param string $closing_char The closing character.
     * @param string $css The CSS input string.
     *
     * @return bool
     */
    private function validate_balanced_characters($opening_char, $closing_char, $css)
    {
    }
    /**
     * Ensure there are an even number of paired characters.
     *
     * This is used to check that the number of a specific
     * character is even.
     *
     * For instance, there should be an even number of double quotes
     * in the CSS.
     *
     * @since 4.7.0
     * @access private
     *
     * @param string $char A character.
     * @param string $css The CSS input string.
     * @return bool Equality.
     */
    private function validate_equal_characters($char, $css)
    {
    }
    /**
     * Count unclosed CSS Comments.
     *
     * Used during validation.
     *
     * @see self::validate()
     *
     * @since 4.7.0
     * @access private
     *
     * @param string $css The CSS input string.
     * @return int Count.
     */
    private function validate_count_unclosed_comments($css)
    {
    }
    /**
     * Find "content:" within a string.
     *
     * Imbalanced/Unclosed validation errors may be caused
     * when a character is used in a "content:" declaration.
     *
     * This function is used to detect if this is a possible
     * cause of the validation error, so that if it is,
     * a notification may be added to the Validation Errors.
     *
     * Example:
     * .element::before {
     *   content: "(\"";
     * }
     * .element::after {
     *   content: "\")";
     * }
     *
     * Using ! empty() because strpos() may return non-boolean values
     * that evaluate to false. This would be problematic when
     * using a strict "false === strpos()" comparison.
     *
     * @since 4.7.0
     * @access private
     *
     * @param string $css The CSS input string.
     * @return bool
     */
    private function is_possible_content_error($css)
    {
    }
}