<?php


/**
 * Adds a style tag for the --wp--style--unstable-gallery-gap var.
 *
 * The Gallery block needs to recalculate Image block width based on
 * the current gap setting in order to maintain the number of flex columns
 * so a css var is added to allow this.
 *
 * @param array  $attributes Attributes of the block being rendered.
 * @param string $content Content of the block being rendered.
 * @return string The content of the block being rendered.
 */
function block_core_gallery_render($attributes, $content)
{
}