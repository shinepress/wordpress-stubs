<?php


/**
 * Switches the current blog.
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
 * @global wpdb            $wpdb               WordPress database abstraction object.
 * @global int             $blog_id
 * @global array           $_wp_switched_stack
 * @global bool            $switched
 * @global string          $table_prefix
 * @global string          $wp_template_path
 * @global string          $wp_stylesheet_path
 * @global WP_Object_Cache $wp_object_cache
 *
 * @param int  $new_blog_id The ID of the blog to switch to. Default: current blog.
 * @param bool $deprecated  Not used.
 * @return true Always returns true.
 */
function switch_to_blog($new_blog_id, $deprecated = \null)
{
}