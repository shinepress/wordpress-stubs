<?php


/**
 * Displays file upload quota on dashboard.
 *
 * Runs on the {@see 'activity_box_end'} hook in wp_dashboard_right_now().
 *
 * @since 3.0.0
 *
 * @return bool|null True if not multisite, user can't upload files, or the space check option is disabled.
 */
function wp_dashboard_quota()
{
}