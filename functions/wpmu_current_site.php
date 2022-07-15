<?php


/**
 * This deprecated function managed much of the site and network loading in multisite.
 *
 * The current bootstrap code is now responsible for parsing the site and network load as
 * well as setting the global $current_site object.
 *
 * @access private
 * @since 3.0.0
 * @deprecated 3.9.0
 *
 * @global WP_Network $current_site
 *
 * @return WP_Network
 */
function wpmu_current_site()
{
}