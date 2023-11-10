<?php

namespace WpOrg\Requests;

/**
 * Autoloader for Requests for PHP.
 *
 * This autoloader supports the PSR-4 based Requests 2.0.0 classes in a case-sensitive manner
 * as the most common server OS-es are case-sensitive and the file names are in mixed case.
 *
 * For the PSR-0 Requests 1.x BC-layer, requested classes will be treated case-insensitively.
 *
 * @package Requests
 */
final class Autoload
{
    /**
     * Register the autoloader.
     *
     * Note: the autoloader is *prepended* in the autoload queue.
     * This is done to ensure that the Requests 2.0 autoloader takes precedence
     * over a potentially (dependency-registered) Requests 1.x autoloader.
     *
     * @internal This method contains a safeguard against the autoloader being
     * registered multiple times. This safeguard uses a global constant to
     * (hopefully/in most cases) still function correctly, even if the
     * class would be renamed.
     *
     * @return void
     */
    public static function register()
    {
    }
    /**
     * Autoloader.
     *
     * @param string $class_name Name of the class name to load.
     *
     * @return bool Whether a class was loaded or not.
     */
    public static function load($class_name)
    {
    }
}