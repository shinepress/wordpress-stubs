<?php


/**
 * This deprecated function formerly set the site_name property of the $current_site object.
 *
 * This function simply returns the object, as before.
 * The bootstrap takes care of setting site_name.
 *
 * @access private
 * @since 3.0.0
 * @deprecated 3.9.0 Use get_current_site() instead.
 *
 * @param object $current_site
 * @return object
 */
function get_current_site_name($current_site)
{
}