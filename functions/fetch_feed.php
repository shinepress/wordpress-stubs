<?php


/**
 * Build SimplePie object based on RSS or Atom feed from URL.
 *
 * @since 2.8.0
 *
 * @param mixed $url URL of feed to retrieve. If an array of URLs, the feeds are merged
 * using SimplePie's multifeed feature.
 * See also {@link ​http://simplepie.org/wiki/faq/typical_multifeed_gotchas}
 *
 * @return WP_Error|SimplePie WP_Error object on failure or SimplePie object on success
 */
function fetch_feed($url)
{
}