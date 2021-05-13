<?php


/**
 * Require the template file with WordPress environment.
 *
 * The globals are set up for the template file to ensure that the WordPress
 * environment is available from within the function. The query variables are
 * also available.
 *
 * @since 1.5.0
 *
 * @global array      $posts
 * @global WP_Post    $post
 * @global bool       $wp_did_header
 * @global WP_Query   $wp_query
 * @global WP_Rewrite $wp_rewrite
 * @global wpdb       $wpdb
 * @global string     $wp_version
 * @global WP         $wp
 * @global int        $id
 * @global WP_Comment $comment
 * @global int        $user_ID
 *
 * @param string $_template_file Path to template file.
 * @param bool   $require_once   Whether to require_once or require. Default true.
 */
function load_template($_template_file, $require_once = \true)
{
}