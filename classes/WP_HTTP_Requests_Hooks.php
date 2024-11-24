<?php


/**
 * Bridge to connect Requests internal hooks to WordPress actions.
 *
 * @since 4.7.0
 *
 * @see WpOrg\Requests\Hooks
 */
#[\AllowDynamicProperties]
class WP_HTTP_Requests_Hooks extends \WpOrg\Requests\Hooks
{
    /**
     * Requested URL.
     *
     * @var string Requested URL.
     */
    protected $url;
    /**
     * WordPress WP_HTTP request data.
     *
     * @var array Request data in WP_Http format.
     */
    protected $request = array();
    /**
     * Constructor.
     *
     * @param string $url     URL to request.
     * @param array  $request Request data in WP_Http format.
     */
    public function __construct($url, $request)
    {
    }
    /**
     * Dispatch a Requests hook to a native WordPress action.
     *
     * @param string $hook       Hook name.
     * @param array  $parameters Parameters to pass to callbacks.
     * @return bool True if hooks were run, false if nothing was hooked.
     */
    public function dispatch($hook, $parameters = array())
    {
    }
}