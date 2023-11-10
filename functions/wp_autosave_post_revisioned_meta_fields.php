<?php


/**
 * Autosave the revisioned meta fields.
 *
 * Iterates through the revisioned meta fields and checks each to see if they are set,
 * and have a changed value. If so, the meta value is saved and attached to the autosave.
 *
 * @since 6.4.0
 *
 * @param array $new_autosave The new post data being autosaved.
 */
function wp_autosave_post_revisioned_meta_fields($new_autosave)
{
}