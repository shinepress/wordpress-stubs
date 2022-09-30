<?php


/**
 * Administration: Community Events class.
 *
 * @package WordPress
 * @subpackage Administration
 * @since 4.8.0
 */
/**
 * Class WP_Community_Events.
 *
 * A client for api.wordpress.org/events.
 *
 * @since 4.8.0
 */
class WP_Community_Events
{
    /**
     * ID for a WordPress user account.
     *
     * @since 4.8.0
     *
     * @var int
     */
    protected $user_id = 0;
    /**
     * Stores location data for the user.
     *
     * @since 4.8.0
     *
     * @var false|array
     */
    protected $user_location = \false;
    /**
     * Constructor for WP_Community_Events.
     *
     * @since 4.8.0
     *
     * @param int        $user_id       WP user ID.
     * @param false|array $user_location {
     *     Stored location data for the user. false to pass no location.
     *
     *     @type string $description The name of the location
     *     @type string $latitude    The latitude in decimal degrees notation, without the degree
     *                               symbol. e.g.: 47.615200.
     *     @type string $longitude   The longitude in decimal degrees notation, without the degree
     *                               symbol. e.g.: -122.341100.
     *     @type string $country     The ISO 3166-1 alpha-2 country code. e.g.: BR
     * }
     * @phpstan-param false|array{
     *   description?: string,
     *   latitude?: string,
     *   longitude?: string,
     *   country?: string,
     * } $user_location
     */
    public function __construct($user_id, $user_location = \false)
    {
    }
    /**
     * Gets data about events near a particular location.
     *
     * Cached events will be immediately returned if the `user_location` property
     * is set for the current user, and cached events exist for that location.
     *
     * Otherwise, this method sends a request to the w.org Events API with location
     * data. The API will send back a recognized location based on the data, along
     * with nearby events.
     *
     * The browser's request for events is proxied with this method, rather
     * than having the browser make the request directly to api.wordpress.org,
     * because it allows results to be cached server-side and shared with other
     * users and sites in the network. This makes the process more efficient,
     * since increasing the number of visits that get cached data means users
     * don't have to wait as often; if the user's browser made the request
     * directly, it would also need to make a second request to WP in order to
     * pass the data for caching. Having WP make the request also introduces
     * the opportunity to anonymize the IP before sending it to w.org, which
     * mitigates possible privacy concerns.
     *
     * @since 4.8.0
     * @since 5.5.2 Response no longer contains formatted date field. They're added
     *              in `wp.communityEvents.populateDynamicEventFields()` now.
     *
     * @param string $location_search Optional. City name to help determine the location.
     *                                e.g., "Seattle". Default empty string.
     * @param string $timezone        Optional. Timezone to help determine the location.
     *                                Default empty string.
     * @return array|WP_Error A WP_Error on failure; an array with location and events on
     *                        success.
     */
    public function get_events($location_search = '', $timezone = '')
    {
    }
    /**
     * Builds an array of args to use in an HTTP request to the w.org Events API.
     *
     * @since 4.8.0
     *
     * @param string $search   Optional. City search string. Default empty string.
     * @param string $timezone Optional. Timezone string. Default empty string.
     * @return array The request args.
     */
    protected function get_request_args($search = '', $timezone = '')
    {
    }
    /**
     * Determines the user's actual IP address and attempts to partially
     * anonymize an IP address by converting it to a network ID.
     *
     * Geolocating the network ID usually returns a similar location as the
     * actual IP, but provides some privacy for the user.
     *
     * $_SERVER['REMOTE_ADDR'] cannot be used in all cases, such as when the user
     * is making their request through a proxy, or when the web server is behind
     * a proxy. In those cases, $_SERVER['REMOTE_ADDR'] is set to the proxy address rather
     * than the user's actual address.
     *
     * Modified from https://stackoverflow.com/a/2031935/450127, MIT license.
     * Modified from https://github.com/geertw/php-ip-anonymizer, MIT license.
     *
     * SECURITY WARNING: This function is _NOT_ intended to be used in
     * circumstances where the authenticity of the IP address matters. This does
     * _NOT_ guarantee that the returned address is valid or accurate, and it can
     * be easily spoofed.
     *
     * @since 4.8.0
     *
     * @return string|false The anonymized address on success; the given address
     *                      or false on failure.
     */
    public static function get_unsafe_client_ip()
    {
    }
    /**
     * Test if two pairs of latitude/longitude coordinates match each other.
     *
     * @since 4.8.0
     *
     * @param array $a The first pair, with indexes 'latitude' and 'longitude'.
     * @param array $b The second pair, with indexes 'latitude' and 'longitude'.
     * @return bool True if they match, false if they don't.
     */
    protected function coordinates_match($a, $b)
    {
    }
    /**
     * Generates a transient key based on user location.
     *
     * This could be reduced to a one-liner in the calling functions, but it's
     * intentionally a separate function because it's called from multiple
     * functions, and having it abstracted keeps the logic consistent and DRY,
     * which is less prone to errors.
     *
     * @since 4.8.0
     *
     * @param array $location Should contain 'latitude' and 'longitude' indexes.
     * @return string|false Transient key on success, false on failure.
     */
    protected function get_events_transient_key($location)
    {
    }
    /**
     * Caches an array of events data from the Events API.
     *
     * @since 4.8.0
     *
     * @param array     $events     Response body from the API request.
     * @param int|false $expiration Optional. Amount of time to cache the events. Defaults to false.
     * @return bool true if events were cached; false if not.
     */
    protected function cache_events($events, $expiration = \false)
    {
    }
    /**
     * Gets cached events.
     *
     * @since 4.8.0
     * @since 5.5.2 Response no longer contains formatted date field. They're added
     *              in `wp.communityEvents.populateDynamicEventFields()` now.
     *
     * @return array|false An array containing `location` and `events` items
     *                     on success, false on failure.
     */
    public function get_cached_events()
    {
    }
    /**
     * Adds formatted date and time items for each event in an API response.
     *
     * This has to be called after the data is pulled from the cache, because
     * the cached events are shared by all users. If it was called before storing
     * the cache, then all users would see the events in the localized data/time
     * of the user who triggered the cache refresh, rather than their own.
     *
     * @since 4.8.0
     * @deprecated 5.6.0 No longer used in core.
     *
     * @param array $response_body The response which contains the events.
     * @return array The response with dates and times formatted.
     */
    protected function format_event_data_time($response_body)
    {
    }
    /**
     * Prepares the event list for presentation.
     *
     * Discards expired events, and makes WordCamps "sticky." Attendees need more
     * advanced notice about WordCamps than they do for meetups, so camps should
     * appear in the list sooner. If a WordCamp is coming up, the API will "stick"
     * it in the response, even if it wouldn't otherwise appear. When that happens,
     * the event will be at the end of the list, and will need to be moved into a
     * higher position, so that it doesn't get trimmed off.
     *
     * @since 4.8.0
     * @since 4.9.7 Stick a WordCamp to the final list.
     * @since 5.5.2 Accepts and returns only the events, rather than an entire HTTP response.
     * @since 6.0.0 Decode HTML entities from the event title.
     *
     * @param array $events The events that will be prepared.
     * @return array The response body with events trimmed.
     */
    protected function trim_events(array $events)
    {
    }
    /**
     * Logs responses to Events API requests.
     *
     * @since 4.8.0
     * @deprecated 4.9.0 Use a plugin instead. See #41217 for an example.
     *
     * @param string $message A description of what occurred.
     * @param array  $details Details that provide more context for the
     *                        log entry.
     */
    protected function maybe_log_events_response($message, $details)
    {
    }
}