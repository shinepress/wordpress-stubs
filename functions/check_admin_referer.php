<?php


/**
 * Makes sure that a user was referred from another admin page.
 *
 * To avoid security exploits.
 *
 * @since 1.2.0
 *
 * @param int|string $action    Action nonce.
 * @param string     $query_arg Optional. Key to check for nonce in `$_REQUEST` (since 2.5).
 *                              Default '_wpnonce'.
 * @return false|int False if the nonce is invalid, 1 if the nonce is valid and generated between
 *                   0-12 hours ago, 2 if the nonce is valid and generated between 12-24 hours ago.
 */
function check_admin_referer($action = -1, $query_arg = '_wpnonce')
{
}