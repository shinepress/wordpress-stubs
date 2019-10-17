<?php


/**
 * Switch the current blog.
 *
 * This function is useful if you need to pull posts, or other information,
 * from other blogs. You can switch back afterwards using restore_current_blog().
 *
 * Things that aren't switched:
 *  - plugins. See #14941
 *
 * @see restore_current_blog()
 * @since MU (3.0.0)
 *
 * @global wpdb            $wpdb
 * @global int             $blog_id
 * @global array           $_wp_switched_stack
 * @global bool            $switched
 * @global string          $table_prefix
 * @global WP_Object_Cache $wp_object_cache
 *
 * @param int  $new_blog   The id of the blog you want to switch to. Default: current blog
 * @param bool $deprecated Deprecated argument
 * @return true Always returns True.
 */
function switch_to_blog($new_blog, $deprecated = \null)
{
}