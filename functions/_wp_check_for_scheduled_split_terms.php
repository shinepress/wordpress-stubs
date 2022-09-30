<?php


/**
 * In order to avoid the _wp_batch_split_terms() job being accidentally removed,
 * check that it's still scheduled while we haven't finished splitting terms.
 *
 * @ignore
 * @since 4.3.0
 */
function _wp_check_for_scheduled_split_terms()
{
}