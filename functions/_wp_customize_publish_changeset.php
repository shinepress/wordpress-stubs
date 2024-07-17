<?php


/**
 * Publishes a snapshot's changes.
 *
 * @since 4.7.0
 * @access private
 *
 * @global wpdb                 $wpdb         WordPress database abstraction object.
 * @global WP_Customize_Manager $wp_customize Customizer instance.
 *
 * @param string  $new_status     New post status.
 * @param string  $old_status     Old post status.
 * @param WP_Post $changeset_post Changeset post object.
 * @phpstan-return void
 */
function _wp_customize_publish_changeset($new_status, $old_status, $changeset_post)
{
}