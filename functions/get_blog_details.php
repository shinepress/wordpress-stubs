<?php


/**
 * Retrieve the details for a blog from the blogs table and blog options.
 *
 * @since MU
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int|string|array $fields  Optional. A blog ID, a blog slug, or an array of fields to query against.
 *                                  If not specified the current blog ID is used.
 * @param bool             $get_all Whether to retrieve all details or only the details in the blogs table.
 *                                  Default is true.
 * @return WP_Site|false Blog details on success. False on failure.
 */
function get_blog_details($fields = \null, $get_all = \true)
{
}