<?php


/**
 * Finds and exports personal data associated with an email address from the comments table.
 *
 * @since 4.9.6
 *
 * @param string $email_address The comment author email address.
 * @param int    $page          Comment page number.
 * @return array {
 *     An array of personal data.
 *
 *     @type array[] $data An array of personal data arrays.
 *     @type bool    $done Whether the exporter is finished.
 * }
 * @phpstan-return array{
 *   data: array[],
 *   done: bool,
 * }
 */
function wp_comments_personal_data_exporter($email_address, $page = 1)
{
}