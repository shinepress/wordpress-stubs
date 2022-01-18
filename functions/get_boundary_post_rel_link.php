<?php


/**
 * Get boundary post relational link.
 *
 * Can either be start or end post relational link.
 *
 * @since 2.8.0
 * @deprecated 3.3.0
 *
 * @param string $title Optional. Link title format.
 * @param bool $in_same_cat Optional. Whether link should be in a same category.
 * @param string $excluded_categories Optional. Excluded categories IDs.
 * @param bool $start Optional, default is true. Whether to display link to first or last post.
 * @return string
 */
function get_boundary_post_rel_link($title = '%title', $in_same_cat = \false, $excluded_categories = '', $start = \true)
{
}