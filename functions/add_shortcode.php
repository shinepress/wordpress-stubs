<?php


/**
 * Add hook for shortcode tag.
 *
 * There can only be one hook for each shortcode. Which means that if another
 * plugin has a similar shortcode, it will override yours or yours will override
 * theirs depending on which order the plugins are included and/or ran.
 *
 * Simplest example of a shortcode tag using the API:
 *
 *     // [footag foo="bar"]
 *     function footag_func( $atts ) {
 *         return "foo = {
 *             $atts[foo]
 *         }";
 *     }
 *     add_shortcode( 'footag', 'footag_func' );
 *
 * Example with nice attribute defaults:
 *
 *     // [bartag foo="bar"]
 *     function bartag_func( $atts ) {
 *         $args = shortcode_atts( array(
 *             'foo' => 'no foo',
 *             'baz' => 'default baz',
 *         ), $atts );
 *
 *         return "foo = {$args['foo']}";
 *     }
 *     add_shortcode( 'bartag', 'bartag_func' );
 *
 * Example with enclosed content:
 *
 *     // [baztag]content[/baztag]
 *     function baztag_func( $atts, $content = '' ) {
 *         return "content = $content";
 *     }
 *     add_shortcode( 'baztag', 'baztag_func' );
 *
 * @since 2.5.0
 *
 * @global array $shortcode_tags
 *
 * @param string   $tag  Shortcode tag to be searched in post content.
 * @param callable $func Hook to run when shortcode is found.
 */
function add_shortcode($tag, $func)
{
}