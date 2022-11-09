<?php


/**
 * Feed API: WP_SimplePie_Sanitize_KSES class
 *
 * @package WordPress
 * @subpackage Feed
 * @since 4.7.0
 */
/**
 * Core class used to implement SimplePie feed sanitization.
 *
 * Extends the SimplePie_Sanitize class to use KSES, because
 * we cannot universally count on DOMDocument being available.
 *
 * @since 3.5.0
 *
 * @see SimplePie_Sanitize
 */
class WP_SimplePie_Sanitize_KSES extends \SimplePie_Sanitize
{
    /**
     * WordPress SimplePie sanitization using KSES.
     *
     * Sanitizes the incoming data, to ensure that it matches the type of data expected, using KSES.
     *
     * @since 3.5.0
     *
     * @param mixed   $data The data that needs to be sanitized.
     * @param int     $type The type of data that it's supposed to be.
     * @param string  $base Optional. The `xml:base` value to use when converting relative
     *                      URLs to absolute ones. Default empty.
     * @return mixed Sanitized data.
     */
    public function sanitize($data, $type, $base = '')
    {
    }
}