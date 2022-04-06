<?php


/**
 * Generate a single group for the personal data export report.
 *
 * @since 4.9.6
 *
 * @param array $group_data {
 *     The group data to render.
 *
 *     @type string $group_label  The user-facing heading for the group, e.g. 'Comments'.
 *     @type array  $items        {
 *         An array of group items.
 *
 *         @type array  $group_item_data  {
 *             An array of name-value pairs for the item.
 *
 *             @type string $name   The user-facing name of an item name-value pair, e.g. 'IP Address'.
 *             @type string $value  The user-facing value of an item data pair, e.g. '50.60.70.0'.
 *         }
 *     }
 * }
 * @return string The HTML for this group and its items.
 * @phpstan-param array{
 *   group_label?: string,
 *   items?: array,
 * } $group_data
 */
function wp_privacy_generate_personal_data_export_group_html($group_data)
{
}