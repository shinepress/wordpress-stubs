<?php


/**
 * Prints an inline script tag.
 *
 * It is possible to inject attributes in the `<script>` tag via the  {@see 'wp_script_attributes'}  filter.
 * Automatically injects type attribute if needed.
 *
 * @since 5.7.0
 *
 * @param string $data       Data for script tag: JavaScript, importmap, speculationrules, etc.
 * @param array  $attributes Optional. Key-value pairs representing `<script>` tag attributes.
 */
function wp_print_inline_script_tag($data, $attributes = array())
{
}