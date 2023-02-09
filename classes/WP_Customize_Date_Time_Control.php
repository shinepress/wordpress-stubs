<?php


/**
 * Customize API: WP_Customize_Date_Time_Control class
 *
 * @package WordPress
 * @subpackage Customize
 * @since 4.9.0
 */
/**
 * Customize Date Time Control class.
 *
 * @since 4.9.0
 *
 * @see WP_Customize_Control
 */
class WP_Customize_Date_Time_Control extends \WP_Customize_Control
{
    /**
     * Customize control type.
     *
     * @since 4.9.0
     * @var string
     */
    public $type = 'date_time';
    /**
     * Minimum Year.
     *
     * @since 4.9.0
     * @var int
     */
    public $min_year = 1000;
    /**
     * Maximum Year.
     *
     * @since 4.9.0
     * @var int
     */
    public $max_year = 9999;
    /**
     * Allow past date, if set to false user can only select future date.
     *
     * @since 4.9.0
     * @var bool
     */
    public $allow_past_date = \true;
    /**
     * Whether hours, minutes, and meridian should be shown.
     *
     * @since 4.9.0
     * @var bool
     */
    public $include_time = \true;
    /**
     * If set to false the control will appear in 24 hour format,
     * the value will still be saved in Y-m-d H:i:s format.
     *
     * @since 4.9.0
     * @var bool
     */
    public $twelve_hour_format = \true;
    /**
     * Don't render the control's content - it's rendered with a JS template.
     *
     * @since 4.9.0
     */
    public function render_content()
    {
    }
    /**
     * Export data to JS.
     *
     * @since 4.9.0
     * @return array
     */
    public function json()
    {
    }
    /**
     * Renders a JS template for the content of date time control.
     *
     * @since 4.9.0
     */
    public function content_template()
    {
    }
    /**
     * Generate options for the month Select.
     *
     * Based on touch_time().
     *
     * @since 4.9.0
     *
     * @see touch_time()
     *
     * @global WP_Locale $wp_locale WordPress date and time locale object.
     *
     * @return array
     */
    public function get_month_choices()
    {
    }
    /**
     * Get timezone info.
     *
     * @since 4.9.0
     *
     * @return array {
     *     Timezone info. All properties are optional.
     *
     *     @type string $abbr        Timezone abbreviation. Examples: PST or CEST.
     *     @type string $description Human-readable timezone description as HTML.
     * }
     * @phpstan-return array{
     *   abbr: string,
     *   description: string,
     * }
     */
    public function get_timezone_info()
    {
    }
    /**
     * Format GMT Offset.
     *
     * @since 4.9.0
     *
     * @see wp_timezone_choice()
     *
     * @param float $offset Offset in hours.
     * @return string Formatted offset.
     */
    public function format_gmt_offset($offset)
    {
    }
}