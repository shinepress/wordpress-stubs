<?php


/**
 * Block support flags.
 *
 * @package WordPress
 *
 * @since 5.6.0
 */
/**
 * Class encapsulating and implementing Block Supports.
 *
 * @since 5.6.0
 *
 * @access private
 */
#[\AllowDynamicProperties]
class WP_Block_Supports
{
    /**
     * Tracks the current block to be rendered.
     *
     * @since 5.6.0
     * @var array
     */
    public static $block_to_render = \null;
    /**
     * Utility method to retrieve the main instance of the class.
     *
     * The instance will be created if it does not exist yet.
     *
     * @since 5.6.0
     *
     * @return WP_Block_Supports The main instance.
     */
    public static function get_instance()
    {
    }
    /**
     * Initializes the block supports. It registers the block supports block attributes.
     *
     * @since 5.6.0
     */
    public static function init()
    {
    }
    /**
     * Registers a block support.
     *
     * @since 5.6.0
     *
     * @link https://developer.wordpress.org/block-editor/reference-guides/block-api/block-supports/
     *
     * @param string $block_support_name   Block support name.
     * @param array  $block_support_config Array containing the properties of the block support.
     */
    public function register($block_support_name, $block_support_config)
    {
    }
    /**
     * Generates an array of HTML attributes, such as classes, by applying to
     * the given block all of the features that the block supports.
     *
     * @since 5.6.0
     *
     * @return string[] Array of HTML attribute values keyed by their name.
     */
    public function apply_block_supports()
    {
    }
}