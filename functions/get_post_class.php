<?php


/**
 * Retrieves an array of the class names for the post container element.
 *
 * The class names are many. If the post is a sticky, then the 'sticky'
 * class name. The class 'hentry' is always added to each post. If the post has a
 * post thumbnail, 'has-post-thumbnail' is added as a class. For each taxonomy that
 * the post belongs to, a class will be added of the format '{$taxonomy}-{$slug}' -
 * eg 'category-foo' or 'my_custom_taxonomy-bar'.
 *
 * The 'post_tag' taxonomy is a special
 * case; the class has the 'tag-' prefix instead of 'post_tag-'. All class names are
 * passed through the filter, {@see 'post_class'}, with the list of class names, followed by
 * $class parameter value, with the post ID as the last parameter.
 *
 * @since 2.7.0
 * @since 4.2.0 Custom taxonomy class names were added.
 *
 * @param string|string[] $class   Space-separated string or array of class names to add to the class list.
 * @param int|WP_Post     $post_id Optional. Post ID or post object.
 * @return string[] Array of class names.
 */
function get_post_class($class = '', $post_id = \null)
{
}