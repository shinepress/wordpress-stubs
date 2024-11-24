<?php


/**
 * Erases personal data associated with an email address from the comments table.
 *
 * @since 4.9.6
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $email_address The comment author email address.
 * @param int    $page          Comment page number.
 * @return array {
 *     Data removal results.
 *
 *     @type bool     $items_removed  Whether items were actually removed.
 *     @type bool     $items_retained Whether items were retained.
 *     @type string[] $messages       An array of messages to add to the personal data export file.
 *     @type bool     $done           Whether the eraser is finished.
 * }
 * @phpstan-return array{
 *   items_removed: bool,
 *   items_retained: bool,
 *   messages: string[],
 *   done: bool,
 * }
 */
function wp_comments_personal_data_eraser($email_address, $page = 1)
{
}