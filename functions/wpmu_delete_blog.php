<?php


/**
 * Deletes a site.
 *
 * @since 3.0.0
 * @since 5.1.0 Use wp_delete_site() internally to delete the site row from the database.
 *
 * @param int  $blog_id Site ID.
 * @param bool $drop    True if site's database tables should be dropped. Default false.
 */
function wpmu_delete_blog($blog_id, $drop = \false)
{
}