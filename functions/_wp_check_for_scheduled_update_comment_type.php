<?php


/**
 * In order to avoid the _wp_batch_update_comment_type() job being accidentally removed,
 * check that it's still scheduled while we haven't finished updating comment types.
 *
 * @ignore
 * @since 5.5.0
 */
function _wp_check_for_scheduled_update_comment_type()
{
}