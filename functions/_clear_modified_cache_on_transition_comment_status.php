<?php


/**
 * Clear the lastcommentmodified cached value when a comment status is changed.
 *
 * Deletes the lastcommentmodified cache key when a comment enters or leaves
 * 'approved' status.
 *
 * @since 4.7.0
 * @access private
 *
 * @param string $new_status The new comment status.
 * @param string $old_status The old comment status.
 */
function _clear_modified_cache_on_transition_comment_status($new_status, $old_status)
{
}