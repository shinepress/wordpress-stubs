<?php


/**
 * Make sure that auto-draft posts get their post_date bumped or status changed to draft to prevent premature garbage-collection.
 *
 * When a changeset is updated but remains an auto-draft, ensure the post_date
 * for the auto-draft posts remains the same so that it will be
 * garbage-collected at the same time by `wp_delete_auto_drafts()`. Otherwise,
 * if the changeset is updated to be a draft then update the posts
 * to have a far-future post_date so that they will never be garbage collected
 * unless the changeset post itself is deleted.
 *
 * When a changeset is updated to be a persistent draft or to be scheduled for
 * publishing, then transition any dependent auto-drafts to a draft status so
 * that they likewise will not be garbage-collected but also so that they can
 * be edited in the admin before publishing since there is not yet a post/page
 * editing flow in the Customizer. See #39752.
 *
 * @link https://core.trac.wordpress.org/ticket/39752
 *
 * @since 4.8.0
 * @access private
 * @see wp_delete_auto_drafts()
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string   $new_status Transition to this post status.
 * @param string   $old_status Previous post status.
 * @param \WP_Post $post       Post data.
 * @phpstan-return void
 */
function _wp_keep_alive_customize_changeset_dependent_auto_drafts($new_status, $old_status, $post)
{
}