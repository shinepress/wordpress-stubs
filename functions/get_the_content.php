<?php


/**
 * Retrieve the post content.
 *
 * @since 0.71
 *
 * @global int   $page      Page number of a single post/page.
 * @global int   $more      Boolean indicator for whether single post/page is being viewed.
 * @global bool  $preview   Whether post/page is in preview mode.
 * @global array $pages     Array of all pages in post/page. Each array element contains part of the content separated by the <!--nextpage--> tag.
 * @global int   $multipage Boolean indicator for whether multiple pages are in play.
 *
 * @param string $more_link_text Optional. Content for when there is more text.
 * @param bool   $strip_teaser   Optional. Strip teaser content before the more text. Default is false.
 * @return string
 */
function get_the_content($more_link_text = \null, $strip_teaser = \false)
{
}