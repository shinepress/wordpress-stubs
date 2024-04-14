<?php


/**
 * Displays the edit post link for post.
 *
 * @since 1.0.0
 * @since 4.4.0 The `$class` argument was added.
 *
 * @param string      $text   Optional. Anchor text. If null, default is 'Edit This'. Default null.
 * @param string      $before Optional. Display before edit link. Default empty.
 * @param string      $after  Optional. Display after edit link. Default empty.
 * @param int|WP_Post $post   Optional. Post ID or post object. Default is the global `$post`.
 * @param string      $class  Optional. Add custom class to link. Default 'post-edit-link'.
 * @phpstan-return void
 */
function edit_post_link($text = \null, $before = '', $after = '', $post = 0, $class = 'post-edit-link')
{
}