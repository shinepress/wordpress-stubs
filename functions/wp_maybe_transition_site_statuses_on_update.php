<?php


/**
 * Triggers actions on site status updates.
 *
 * @since 5.1.0
 *
 * @param WP_Site      $new_site The site object after the update.
 * @param WP_Site|null $old_site Optional. If $new_site has been updated, this must be the previous
 *                               state of that site. Default null.
 */
function wp_maybe_transition_site_statuses_on_update($new_site, $old_site = \null)
{
}