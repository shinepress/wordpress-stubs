<?php


/**
 * Finds and exports personal data associated with an email address from the user and user_meta table.
 *
 * @since 4.9.6
 * @since 5.4.0 Added 'Community Events Location' group to the export data.
 * @since 5.4.0 Added 'Session Tokens' group to the export data.
 *
 * @param string $email_address  The user's email address.
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
function wp_user_personal_data_exporter($email_address)
{
}