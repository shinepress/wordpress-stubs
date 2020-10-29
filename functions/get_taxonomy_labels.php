<?php


/**
 * Builds an object with all taxonomy labels out of a taxonomy object
 *
 * Accepted keys of the label array in the taxonomy object:
 *
 * - name - general name for the taxonomy, usually plural. The same as and overridden by $tax->label. Default is Tags/Categories
 * - singular_name - name for one object of this taxonomy. Default is Tag/Category
 * - search_items - Default is Search Tags/Search Categories
 * - popular_items - This string isn't used on hierarchical taxonomies. Default is Popular Tags
 * - all_items - Default is All Tags/All Categories
 * - parent_item - This string isn't used on non-hierarchical taxonomies. In hierarchical ones the default is Parent Category
 * - parent_item_colon - The same as `parent_item`, but with colon `:` in the end
 * - edit_item - Default is Edit Tag/Edit Category
 * - view_item - Default is View Tag/View Category
 * - update_item - Default is Update Tag/Update Category
 * - add_new_item - Default is Add New Tag/Add New Category
 * - new_item_name - Default is New Tag Name/New Category Name
 * - separate_items_with_commas - This string isn't used on hierarchical taxonomies. Default is "Separate tags with commas", used in the meta box.
 * - add_or_remove_items - This string isn't used on hierarchical taxonomies. Default is "Add or remove tags", used in the meta box when JavaScript is disabled.
 * - choose_from_most_used - This string isn't used on hierarchical taxonomies. Default is "Choose from the most used tags", used in the meta box.
 * - not_found - Default is "No tags found"/"No categories found", used in the meta box and taxonomy list table.
 * - no_terms - Default is "No tags"/"No categories", used in the posts and media list tables.
 * - items_list_navigation - String for the table pagination hidden heading.
 * - items_list - String for the table hidden heading.
 *
 * Above, the first default value is for non-hierarchical taxonomies (like tags) and the second one is for hierarchical taxonomies (like categories).
 *
 * @todo Better documentation for the labels array.
 *
 * @since 3.0.0
 * @since 4.3.0 Added the `no_terms` label.
 * @since 4.4.0 Added the `items_list_navigation` and `items_list` labels.
 *
 * @param WP_Taxonomy $tax Taxonomy object.
 * @return object object with all the labels as member variables.
 */
function get_taxonomy_labels($tax)
{
}