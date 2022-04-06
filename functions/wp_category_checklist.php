<?php


//
// Category Checklists.
//
/**
 * Output an unordered list of checkbox input elements labeled with category names.
 *
 * @since 2.5.1
 *
 * @see wp_terms_checklist()
 *
 * @param int         $post_id              Optional. Post to generate a categories checklist for. Default 0.
 *                                          $selected_cats must not be an array. Default 0.
 * @param int         $descendants_and_self Optional. ID of the category to output along with its descendants.
 *                                          Default 0.
 * @param int[]|false $selected_cats        Optional. Array of category IDs to mark as checked. Default false.
 * @param int[]|false $popular_cats         Optional. Array of category IDs to receive the "popular-category" class.
 *                                          Default false.
 * @param Walker      $walker               Optional. Walker object to use to build the output.
 *                                          Default is a Walker_Category_Checklist instance.
 * @param bool        $checked_ontop        Optional. Whether to move checked items out of the hierarchy and to
 *                                          the top of the list. Default true.
 */
function wp_category_checklist($post_id = 0, $descendants_and_self = 0, $selected_cats = \false, $popular_cats = \false, $walker = \null, $checked_ontop = \true)
{
}