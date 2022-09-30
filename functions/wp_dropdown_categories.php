<?php


/**
 * Display or retrieve the HTML dropdown list of categories.
 *
 * The 'hierarchical' argument, which is disabled by default, will override the
 * depth argument, unless it is true. When the argument is false, it will
 * display all of the categories. When it is enabled it will use the value in
 * the 'depth' argument.
 *
 * @since 2.1.0
 * @since 4.2.0 Introduced the `value_field` argument.
 * @since 4.6.0 Introduced the `required` argument.
 *
 * @param array|string $args {
 *     Optional. Array or string of arguments to generate a categories drop-down element. See WP_Term_Query::__construct()
 *     for information on additional accepted arguments.
 *
 *     @type string       $show_option_all   Text to display for showing all categories. Default empty.
 *     @type string       $show_option_none  Text to display for showing no categories. Default empty.
 *     @type string       $option_none_value Value to use when no category is selected. Default empty.
 *     @type string       $orderby           Which column to use for ordering categories. See get_terms() for a list
 *                                           of accepted values. Default 'id' (term_id).
 *     @type bool         $pad_counts        See get_terms() for an argument description. Default false.
 *     @type bool|int     $show_count        Whether to include post counts. Accepts 0, 1, or their bool equivalents.
 *                                           Default 0.
 *     @type bool|int     $echo              Whether to echo or return the generated markup. Accepts 0, 1, or their
 *                                           bool equivalents. Default 1.
 *     @type bool|int     $hierarchical      Whether to traverse the taxonomy hierarchy. Accepts 0, 1, or their bool
 *                                           equivalents. Default 0.
 *     @type int          $depth             Maximum depth. Default 0.
 *     @type int          $tab_index         Tab index for the select element. Default 0 (no tabindex).
 *     @type string       $name              Value for the 'name' attribute of the select element. Default 'cat'.
 *     @type string       $id                Value for the 'id' attribute of the select element. Defaults to the value
 *                                           of `$name`.
 *     @type string       $class             Value for the 'class' attribute of the select element. Default 'postform'.
 *     @type int|string   $selected          Value of the option that should be selected. Default 0.
 *     @type string       $value_field       Term field that should be used to populate the 'value' attribute
 *                                           of the option elements. Accepts any valid term field: 'term_id', 'name',
 *                                           'slug', 'term_group', 'term_taxonomy_id', 'taxonomy', 'description',
 *                                           'parent', 'count'. Default 'term_id'.
 *     @type string|array $taxonomy          Name of the category or categories to retrieve. Default 'category'.
 *     @type bool         $hide_if_empty     True to skip generating markup if no categories are found.
 *                                           Default false (create select element even if no categories are found).
 *     @type bool         $required          Whether the `<select>` element should have the HTML5 'required' attribute.
 *                                           Default false.
 * }
 * @return string HTML dropdown list of categories.
 * @phpstan-param array{
 *   show_option_all?: string,
 *   show_option_none?: string,
 *   option_none_value?: string,
 *   orderby?: string,
 *   pad_counts?: bool,
 *   show_count?: bool|int,
 *   echo?: bool|int,
 *   hierarchical?: bool|int,
 *   depth?: int,
 *   tab_index?: int,
 *   name?: string,
 *   id?: string,
 *   class?: string,
 *   selected?: int|string,
 *   value_field?: string,
 *   taxonomy?: string|array,
 *   hide_if_empty?: bool,
 *   required?: bool,
 *   taxonomy?: string|array,
 *   object_ids?: int|array,
 *   orderby?: string,
 *   order?: string,
 *   hide_empty?: bool|int,
 *   include?: array|string,
 *   exclude?: array|string,
 *   exclude_tree?: array|string,
 *   number?: int|string,
 *   offset?: int,
 *   fields?: string,
 *   count?: bool,
 *   name?: string|array,
 *   slug?: string|array,
 *   term_taxonomy_id?: int|array,
 *   hierarchical?: bool,
 *   search?: string,
 *   name__like?: string,
 *   description__like?: string,
 *   pad_counts?: bool,
 *   get?: string,
 *   child_of?: int,
 *   parent?: int|string,
 *   childless?: bool,
 *   cache_domain?: string,
 *   update_term_meta_cache?: bool,
 *   meta_query?: array,
 *   meta_key?: string,
 *   meta_value?: string,
 *   meta_type?: string,
 *   meta_compare?: string,
 * } $args
 */
function wp_dropdown_categories($args = '')
{
}