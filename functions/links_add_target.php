<?php


/**
 * Adds a Target attribute to all links in passed content.
 *
 * This function by default only applies to `<a>` tags, however this can be
 * modified by the 3rd param.
 *
 * *NOTE:* Any current target attributed will be stripped and replaced.
 *
 * @since 2.7.0
 *
 * @global string $_links_add_target
 *
 * @param string   $content String to search for links in.
 * @param string   $target  The Target to add to the links.
 * @param string[] $tags    An array of tags to apply to.
 * @return string The processed content.
 */
function links_add_target($content, $target = '_blank', $tags = array('a'))
{
}