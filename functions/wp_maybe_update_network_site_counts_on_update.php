<?php


/**
 * Updates the count of sites for a network based on a changed site.
 *
 * @since 5.1.0
 *
 * @param WP_Site      $new_site The site object that has been inserted, updated or deleted.
 * @param WP_Site|null $old_site Optional. If $new_site has been updated, this must be the previous
 *                               state of that site. Default null.
 */
function wp_maybe_update_network_site_counts_on_update($new_site, $old_site = \null)
{
}