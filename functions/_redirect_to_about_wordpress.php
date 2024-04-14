<?php


/**
 * Redirect to the About WordPress page after a successful upgrade.
 *
 * This function is only needed when the existing installation is older than 3.4.0.
 *
 * @since 3.3.0
 *
 * @global string $wp_version The WordPress version string.
 * @global string $pagenow
 * @global string $action
 *
 * @param string $new_version
 * @phpstan-return void
 */
function _redirect_to_about_wordpress($new_version)
{
}