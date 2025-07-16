<?php


/**
 * Checks whether HTTPS is supported for the server and domain.
 *
 * This function makes an HTTP request through `wp_get_https_detection_errors()`
 * to check for HTTPS support. As this process can be resource-intensive,
 * it should be used cautiously, especially in performance-sensitive environments,
 * to avoid potential latency issues.
 *
 * @since 5.7.0
 *
 * @return bool True if HTTPS is supported, false otherwise.
 */
function wp_is_https_supported()
{
}