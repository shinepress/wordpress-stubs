<?php


/**
 * Returns a filtered list of default template types, containing their
 * localized titles and descriptions.
 *
 * @since 5.9.0
 *
 * @return array[] {
 *     The default template types.
 *
 *     @type array ...$0 {
 *         Data for the template type.
 *
 *         @type string $title       Template type title.
 *         @type string $description Template type description.
 *    }
 * }
 * @phpstan-return array<int|string, array{
 *   title: string,
 *   description: string,
 * }>
 */
function get_default_block_template_types()
{
}