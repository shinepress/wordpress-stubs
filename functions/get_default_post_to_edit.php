<?php


/**
 * Returns default post information to use when populating the "Write Post" form.
 *
 * @since 2.0.0
 *
 * @param string $post_type    Optional. A post type string. Default 'post'.
 * @param bool   $create_in_db Optional. Whether to insert the post into database. Default false.
 * @return WP_Post Post object containing all the default post data as attributes
 */
function get_default_post_to_edit($post_type = 'post', $create_in_db = \false)
{
}