<?php


/**
 * Builds the Caption shortcode output.
 *
 * Allows a plugin to replace the content that would otherwise be returned. The
 * filter is {@see 'img_caption_shortcode'} and passes an empty string, the attr
 * parameter and the content parameter values.
 *
 * The supported attributes for the shortcode are 'id', 'caption_id', 'align',
 * 'width', 'caption', and 'class'.
 *
 * @since 2.6.0
 * @since 3.9.0 The `class` attribute was added.
 * @since 5.1.0 The `caption_id` attribute was added.
 *
 * @param array  $attr {
 *     Attributes of the caption shortcode.
 *
 *     @type string $id         ID of the image and caption container element, i.e. `<figure>` or `<div>`.
 *     @type string $caption_id ID of the caption element, i.e. `<figcaption>` or `<p>`.
 *     @type string $align      Class name that aligns the caption. Default 'alignnone'. Accepts 'alignleft',
 *                              'aligncenter', alignright', 'alignnone'.
 *     @type int    $width      The width of the caption, in pixels.
 *     @type string $caption    The caption text.
 *     @type string $class      Additional class name(s) added to the caption container.
 * }
 * @param string $content Shortcode content.
 * @return string HTML content to display the caption.
 */
function img_caption_shortcode($attr, $content = \null)
{
}