<?php


/**
 * Finds and exports attachments associated with an email address.
 *
 * @since 4.9.6
 *
 * @param string $email_address The attachment owner email address.
 * @param int    $page          Attachment page number.
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
function wp_media_personal_data_exporter($email_address, $page = 1)
{
}