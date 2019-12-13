<?php


/**
 * Remove a registered script.
 *
 * Note: there are intentional safeguards in place to prevent critical admin scripts,
 * such as jQuery core, from being unregistered.
 *
 * @see WP_Dependencies::remove()
 *
 * @since 2.1.0
 *
 * @param string $handle Name of the script to be removed.
 */
function wp_deregister_script($handle)
{
}