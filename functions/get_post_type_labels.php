<?php


/**
 * Builds an object with all post type labels out of a post type object.
 *
 * Accepted keys of the label array in the post type object:
 *
 * - `name` - General name for the post type, usually plural. The same and overridden
 *          by `$post_type_object->label`. Default is 'Posts' / 'Pages'.
 * - `singular_name` - Name for one object of this post type. Default is 'Post' / 'Page'.
 * - `add_new` - Default is 'Add New' for both hierarchical and non-hierarchical types.
 *             When internationalizing this string, please use a {@link https://codex.wordpress.org/I18n_for_WordPress_Developers#Disambiguation_by_context gettext context}
 *             matching your post type. Example: `_x( 'Add New', 'product', 'textdomain' );`.
 * - `add_new_item` - Label for adding a new singular item. Default is 'Add New Post' / 'Add New Page'.
 * - `edit_item` - Label for editing a singular item. Default is 'Edit Post' / 'Edit Page'.
 * - `new_item` - Label for the new item page title. Default is 'New Post' / 'New Page'.
 * - `view_item` - Label for viewing a singular item. Default is 'View Post' / 'View Page'.
 * - `view_items` - Label for viewing post type archives. Default is 'View Posts' / 'View Pages'.
 * - `search_items` - Label for searching plural items. Default is 'Search Posts' / 'Search Pages'.
 * - `not_found` - Label used when no items are found. Default is 'No posts found' / 'No pages found'.
 * - `not_found_in_trash` - Label used when no items are in the trash. Default is 'No posts found in Trash' /
 *                        'No pages found in Trash'.
 * - `parent_item_colon` - Label used to prefix parents of hierarchical items. Not used on non-hierarchical
 *                       post types. Default is 'Parent Page:'.
 * - `all_items` - Label to signify all items in a submenu link. Default is 'All Posts' / 'All Pages'.
 * - `archives` - Label for archives in nav menus. Default is 'Post Archives' / 'Page Archives'.
 * - `attributes` - Label for the attributes meta box. Default is 'Post Attributes' / 'Page Attributes'.
 * - `insert_into_item` - Label for the media frame button. Default is 'Insert into post' / 'Insert into page'.
 * - `uploaded_to_this_item` - Label for the media frame filter. Default is 'Uploaded to this post' /
 *                           'Uploaded to this page'.
 * - `featured_image` - Label for the Featured Image meta box title. Default is 'Featured Image'.
 * - `set_featured_image` - Label for setting the featured image. Default is 'Set featured image'.
 * - `remove_featured_image` - Label for removing the featured image. Default is 'Remove featured image'.
 * - `use_featured_image` - Label in the media frame for using a featured image. Default is 'Use as featured image'.
 * - `menu_name` - Label for the menu name. Default is the same as `name`.
 * - `filter_items_list` - Label for the table views hidden heading. Default is 'Filter posts list' /
 *                       'Filter pages list'.
 * - `items_list_navigation` - Label for the table pagination hidden heading. Default is 'Posts list navigation' /
 *                           'Pages list navigation'.
 * - `items_list` - Label for the table hidden heading. Default is 'Posts list' / 'Pages list'.
 * - `item_published` - Label used when an item is published. Default is 'Post published.' / 'Page published.'
 * - `item_published_privately` - Label used when an item is published with private visibility.
 *                              Default is 'Post published privately.' / 'Page published privately.'
 * - `item_reverted_to_draft` - Label used when an item is switched to a draft.
 *                            Default is 'Post reverted to draft.' / 'Page reverted to draft.'
 * - `item_scheduled` - Label used when an item is scheduled for publishing. Default is 'Post scheduled.' /
 *                    'Page scheduled.'
 * - `item_updated` - Label used when an item is updated. Default is 'Post updated.' / 'Page updated.'
 *
 * Above, the first default value is for non-hierarchical post types (like posts)
 * and the second one is for hierarchical post types (like pages).
 *
 * Note: To set labels used in post type admin notices, see the {@see 'post_updated_messages'} filter.
 *
 * @since 3.0.0
 * @since 4.3.0 Added the `featured_image`, `set_featured_image`, `remove_featured_image`,
 *              and `use_featured_image` labels.
 * @since 4.4.0 Added the `archives`, `insert_into_item`, `uploaded_to_this_item`, `filter_items_list`,
 *              `items_list_navigation`, and `items_list` labels.
 * @since 4.6.0 Converted the `$post_type` parameter to accept a WP_Post_Type object.
 * @since 4.7.0 Added the `view_items` and `attributes` labels.
 * @since 5.0.0 Added the `item_published`, `item_published_privately`, `item_reverted_to_draft`,
 *              `item_scheduled`, and `item_updated` labels.
 *
 * @access private
 *
 * @param object|WP_Post_Type $post_type_object Post type object.
 * @return object Object with all the labels as member variables.
 */
function get_post_type_labels($post_type_object)
{
}