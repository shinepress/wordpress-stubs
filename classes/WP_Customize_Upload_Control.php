<?php


/**
 * Customize Upload Control Class.
 *
 * @since 3.4.0
 *
 * @see WP_Customize_Media_Control
 */
class WP_Customize_Upload_Control extends \WP_Customize_Media_Control
{
    /**
     * Control type.
     *
     * @since 3.4.0
     * @var string
     */
    public $type = 'upload';
    /**
     * Media control mime type.
     *
     * @since 4.1.0
     * @var string
     */
    public $mime_type = '';
    /**
     * Button labels.
     *
     * @since 4.1.0
     * @var array
     */
    public $button_labels = array();
    public $removed = '';
    public $context;
    public $extensions = array();
    /**
     * Refresh the parameters passed to the JavaScript via JSON.
     *
     * @since 3.4.0
     *
     * @uses WP_Customize_Media_Control::to_json()
     */
    public function to_json()
    {
    }
}