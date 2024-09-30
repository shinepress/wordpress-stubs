<?php


/**
 * Requests for PHP
 *
 * Inspired by Requests for Python.
 *
 * Based on concepts from SimplePie_File, RequestCore and WP_Http.
 *
 * @package Requests
 *
 * @deprecated 6.2.0 Use `WpOrg\Requests\Requests` instead for the actual functionality and
 *                   use `WpOrg\Requests\Autoload` for the autoloading.
 */
class Requests extends \WpOrg\Requests\Requests
{
    /**
     * Deprecated autoloader for Requests.
     *
     * @deprecated 6.2.0 Use the `WpOrg\Requests\Autoload::load()` method instead.
     *
     * @codeCoverageIgnore
     *
     * @param string $class Class name to load
     */
    public static function autoloader($class)
    {
    }
    /**
     * Register the built-in autoloader
     *
     * @deprecated 6.2.0 Include the `WpOrg\Requests\Autoload` class and
     *                   call `WpOrg\Requests\Autoload::register()` instead.
     *
     * @codeCoverageIgnore
     */
    public static function register_autoloader()
    {
    }
}