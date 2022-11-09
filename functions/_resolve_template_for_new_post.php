<?php


/**
 * Sets the current WP_Query to return auto-draft posts.
 *
 * The auto-draft status indicates a new post, so allow the the WP_Query instance to
 * return an auto-draft post for template resolution when editing a new post.
 *
 * @access private
 * @since 5.9.0
 *
 * @param WP_Query $wp_query Current WP_Query instance, passed by reference.
 */
function _resolve_template_for_new_post($wp_query)
{
}