<?php


/**
 * Intercept personal data exporter page ajax responses in order to assemble the personal data export file.
 * @see wp_privacy_personal_data_export_page
 * @since 4.9.6
 *
 * @param array  $response        The response from the personal data exporter for the given page.
 * @param int    $exporter_index  The index of the personal data exporter. Begins at 1.
 * @param string $email_address   The email address of the user whose personal data this is.
 * @param int    $page            The page of personal data for this exporter. Begins at 1.
 * @param int    $request_id      The request ID for this personal data export.
 * @param bool   $send_as_email   Whether the final results of the export should be emailed to the user.
 * @param string $exporter_key    The slug (key) of the exporter.
 * @return array The filtered response.
 */
function wp_privacy_process_personal_data_export_page($response, $exporter_index, $email_address, $page, $request_id, $send_as_email, $exporter_key)
{
}