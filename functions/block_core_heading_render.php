<?php


/**
 * Appending the wp-block-heading to before rendering the stored `core/heading` block contents.
 *
 * @package WordPress
 */
/**
 * Adds a wp-block-heading class to the heading block content.
 *
 * For example, the following block content:
 *  <h2 class="align-left">Hello World</h2>
 *
 * Would be transformed to:
 *  <h2 class="align-left wp-block-heading">Hello World</h2>
 *
 * @param array  $attributes Attributes of the block being rendered.
 * @param string $content Content of the block being rendered.
 *
 * @return string The content of the block being rendered.
 */
function block_core_heading_render($attributes, $content)
{
}