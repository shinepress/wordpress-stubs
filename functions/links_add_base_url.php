<?php


/**
 * Adds a base URL to relative links in passed content.
 *
 * By default it supports the 'src' and 'href' attributes. However this can be
 * changed via the 3rd param.
 *
 * @since 2.7.0
 *
 * @global string $_links_add_base
 *
 * @param string $content String to search for links in.
 * @param string $base    The base URL to prefix to links.
 * @param array  $attrs   The attributes which should be processed.
 * @return string The processed content.
 */
function links_add_base_url($content, $base, $attrs = array('src', 'href'))
{
}