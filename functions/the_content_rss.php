<?php


/**
 * Display the post content for the feed.
 *
 * For encoding the HTML or the $encode_html parameter, there are three possible values:
 * - '0' will make urls footnotes and use make_url_footnote().
 * - '1' will encode special characters and automatically display all of the content.
 * - '2' will strip all HTML tags from the content.
 *
 * Also note that you cannot set the amount of words and not set the HTML encoding.
 * If that is the case, then the HTML encoding will default to 2, which will strip
 * all HTML tags.
 *
 * To restrict the amount of words of the content, you can use the cut parameter.
 * If the content is less than the amount, then there won't be any dots added to the end.
 * If there is content left over, then dots will be added and the rest of the content
 * will be removed.
 *
 * @since 0.71
 *
 * @deprecated 2.9.0 Use the_content_feed()
 * @see the_content_feed()
 *
 * @param string $more_link_text Optional. Text to display when more content is available
 *                               but not displayed. Default '(more...)'.
 * @param int    $stripteaser    Optional. Default 0.
 * @param string $more_file      Optional.
 * @param int    $cut            Optional. Amount of words to keep for the content.
 * @param int    $encode_html    Optional. How to encode the content.
 */
function the_content_rss($more_link_text = '(more...)', $stripteaser = 0, $more_file = '', $cut = 0, $encode_html = 0)
{
}