<?php


/**
 * Runs a remote HTTPS request to detect whether HTTPS supported, and stores potential errors.
 *
 * This internal function is called by a regular Cron hook to ensure HTTPS support is detected and maintained.
 *
 * @since 5.7.0
 * @deprecated 6.4.0 The `wp_update_https_detection_errors()` function is no longer used and has been replaced by
 *                   `wp_get_https_detection_errors()`. Previously the function was called by a regular Cron hook to
 *                    update the `https_detection_errors` option, but this is no longer necessary as the errors are
 *                    retrieved directly in Site Health and no longer used outside of Site Health.
 * @access private
 * @phpstan-return void
 */
function wp_update_https_detection_errors()
{
}