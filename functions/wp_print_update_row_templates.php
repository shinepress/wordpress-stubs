<?php


/**
 * Prints the JavaScript templates for update and deletion rows in list tables.
 *
 * The update template takes one argument with four values:
 *
 *     param {object} data {
 *         Arguments for the update row
 *
 *         @type string slug    Plugin slug.
 *         @type string plugin  Plugin base name.
 *         @type string colspan The number of table columns this row spans.
 *         @type string content The row content.
 *     }
 *
 * The delete template takes one argument with four values:
 *
 *     param {object} data {
 *         Arguments for the update row
 *
 *         @type string slug    Plugin slug.
 *         @type string plugin  Plugin base name.
 *         @type string name    Plugin name.
 *         @type string colspan The number of table columns this row spans.
 *     }
 *
 * @since 4.6.0
 */
function wp_print_update_row_templates()
{
}