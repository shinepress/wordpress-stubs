<?php


/**
 * Display tag cloud.
 *
 * The text size is set by the 'smallest' and 'largest' arguments, which will
 * use the 'unit' argument value for the CSS text size unit. The 'format'
 * argument can be 'flat' (default), 'list', or 'array'. The flat value for the
 * 'format' argument will separate tags with spaces. The list value for the
 * 'format' argument will format the tags in a UL HTML list. The array value for
 * the 'format' argument will return in PHP array type format.
 *
 * The 'orderby' argument will accept 'name' or 'count' and defaults to 'name'.
 * The 'order' is the direction to sort, defaults to 'ASC' and can be 'DESC'.
 *
 * The 'number' argument is how many tags to return. By default, the limit will
 * be to return the top 45 tags in the tag cloud list.
 *
 * The 'topic_count_text' argument is a nooped plural from _n_noop() to generate the
 * text for the tooltip of the tag link.
 *
 * The 'topic_count_text_callback' argument is a function, which given the count
 * of the posts with that tag returns a text for the tooltip of the tag link.
 *
 * The 'post_type' argument is used only when 'link' is set to 'edit'. It determines the post_type
 * passed to edit.php for the popular tags edit links.
 *
 * The 'exclude' and 'include' arguments are used for the get_tags() function. Only one
 * should be used, because only one will be used and the other ignored, if they are both set.
 *
 * @since 2.3.0
 *
 * @param array|string|null $args Optional. Override default arguments.
 * @return void|array Generated tag cloud, only if no failures and 'array' is set for the 'format' argument.
 *                    Otherwise, this function outputs the tag cloud.
 */
function wp_tag_cloud($args = '')
{
}