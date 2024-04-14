<?php


/**
 * Filters preview post meta retrieval to get values from the autosave.
 *
 * Filters revisioned meta keys only.
 *
 * @since 6.4.0
 *
 * @param mixed  $value     Meta value to filter.
 * @param int    $object_id Object ID.
 * @param string $meta_key  Meta key to filter a value for.
 * @param bool   $single    Whether to return a single value. Default false.
 * @return mixed Original meta value if the meta key isn't revisioned, the object doesn't exist,
 *               the post type is a revision or the post ID doesn't match the object ID.
 *               Otherwise, the revisioned meta value is returned for the preview.
 */
function _wp_preview_meta_filter($value, $object_id, $meta_key, $single)
{
}