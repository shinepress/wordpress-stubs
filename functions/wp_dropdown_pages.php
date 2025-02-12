<?php


/**
 * Retrieves or displays a list of pages as a dropdown (select list).
 *
 * @since 2.1.0
 * @since 4.2.0 The `$value_field` argument was added.
 * @since 4.3.0 The `$class` argument was added.
 *
 * @see get_pages()
 *
 * @param array|string $args {
 *     Optional. Array or string of arguments to generate a page dropdown. See get_pages() for additional arguments.
 *
 *     @type int          $depth                 Maximum depth. Default 0.
 *     @type int          $child_of              Page ID to retrieve child pages of. Default 0.
 *     @type int|string   $selected              Value of the option that should be selected. Default 0.
 *     @type bool|int     $echo                  Whether to echo or return the generated markup. Accepts 0, 1,
 *                                               or their bool equivalents. Default 1.
 *     @type string       $name                  Value for the 'name' attribute of the select element.
 *                                               Default 'page_id'.
 *     @type string       $id                    Value for the 'id' attribute of the select element.
 *     @type string       $class                 Value for the 'class' attribute of the select element. Default: none.
 *                                               Defaults to the value of `$name`.
 *     @type string       $show_option_none      Text to display for showing no pages. Default empty (does not display).
 *     @type string       $show_option_no_change Text to display for "no change" option. Default empty (does not display).
 *     @type string       $option_none_value     Value to use when no page is selected. Default empty.
 *     @type string       $value_field           Post field used to populate the 'value' attribute of the option
 *                                               elements. Accepts any valid post field. Default 'ID'.
 * }
 * @return string HTML dropdown list of pages.
 * @phpstan-param array{
 *   depth?: int,
 *   child_of?: int,
 *   selected?: int|string,
 *   echo?: bool|int,
 *   name?: string,
 *   id?: string,
 *   class?: string,
 *   show_option_none?: string,
 *   show_option_no_change?: string,
 *   option_none_value?: string,
 *   value_field?: string,
 *   child_of?: int,
 *   sort_order?: string,
 *   sort_column?: string,
 *   hierarchical?: bool,
 *   exclude?: int[],
 *   include?: int[],
 *   meta_key?: string,
 *   meta_value?: string,
 *   authors?: string,
 *   parent?: int,
 *   exclude_tree?: string|int[],
 *   number?: int,
 *   offset?: int,
 *   post_type?: string,
 *   post_status?: string|array,
 * } $args
 */
function wp_dropdown_pages($args = '')
{
}