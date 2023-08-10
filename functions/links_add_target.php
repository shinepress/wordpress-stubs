<?php


/**
 * Adds a target attribute to all links in passed content.
 *
 * By default, this function only applies to `<a>` tags.
 * However, this can be modified via the `$tags` parameter.
 *
 * *NOTE:* Any current target attribute will be stripped and replaced.
 *
 * @since 2.7.0
 *
 * @global string $_links_add_target
 *
 * @param string   $content String to search for links in.
 * @param string   $target  The target to add to the links.
 * @param string[] $tags    An array of tags to apply to.
 * @return string The processed content.
 */
function links_add_target($content, $target = '_blank', $tags = array('a'))
{
}