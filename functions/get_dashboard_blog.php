<?php


/**
 * Deprecated functions from WordPress MU and the multisite feature. You shouldn't
 * use these functions and look for the alternatives instead. The functions will be
 * removed in a later version.
 *
 * @package WordPress
 * @subpackage Deprecated
 * @since 3.0.0
 */
/*
 * Deprecated functions come here to die.
 */
/**
 * Get the "dashboard blog", the blog where users without a blog edit their profile data.
 * Dashboard blog functionality was removed in WordPress 3.1, replaced by the user admin.
 *
 * @since MU (3.0.0)
 * @deprecated 3.1.0 Use get_site()
 * @see get_site()
 *
 * @return WP_Site Current site object.
 */
function get_dashboard_blog()
{
}