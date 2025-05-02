<?php


/**
 * WordPress PHPMailer class.
 *
 * Overrides the internationalization method in order to use WordPress' instead.
 *
 * @since 6.8.0
 */
class WP_PHPMailer extends \PHPMailer\PHPMailer\PHPMailer
{
    /**
     * Constructor.
     *
     * @since 6.8.0
     *
     * @param bool $exceptions Optional. Whether to throw exceptions for errors. Default false.
     */
    public function __construct($exceptions = \false)
    {
    }
    /**
     * Defines the error messages using WordPress' internationalization method.
     *
     * @since 6.8.0
     *
     * @return true Always returns true.
     */
    public function SetLanguage($langcode = 'en', $lang_path = '')
    {
    }
}