<?php


/**
 * Returns a filtered list of allowed area values for template parts.
 *
 * @since 5.9.0
 *
 * @return array[] {
 *     The allowed template part area values.
 *
 *     @type array ...$0 {
 *         Data for the allowed template part area.
 *
 *         @type string $area        Template part area name.
 *         @type string $label       Template part area label.
 *         @type string $description Template part area description.
 *         @type string $icon        Template part area icon.
 *         @type string $area_tag    Template part area tag.
 *     }
 * }
 * @phpstan-return array<int|string, array{
 *   area: string,
 *   label: string,
 *   description: string,
 *   icon: string,
 *   area_tag: string,
 * }>
 */
function get_allowed_block_template_part_areas()
{
}