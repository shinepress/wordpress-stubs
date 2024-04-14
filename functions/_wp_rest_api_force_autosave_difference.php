<?php


/**
 * This is a workaround for the autosave endpoint returning early if the
 * revision field are equal. The problem is that "footnotes" is not real
 * revision post field, so there's nothing to compare against.
 *
 * This trick sets the "footnotes" field (value doesn't matter), which will
 * cause the autosave endpoint to always update the latest revision. That should
 * be fine, it should be ok to update the revision even if nothing changed. Of
 * course, this is temporary fix.
 *
 * @since 6.3.0
 *
 * @param WP_Post         $prepared_post The prepared post object.
 * @param WP_REST_Request $request       The request object.
 *
 * See https://github.com/WordPress/wordpress-develop/blob/2103cb9966e57d452c94218bbc3171579b536a40/src/wp-includes/rest-api/endpoints/class-wp-rest-autosaves-controller.php#L365-L384.
 * See https://github.com/WordPress/wordpress-develop/blob/2103cb9966e57d452c94218bbc3171579b536a40/src/wp-includes/rest-api/endpoints/class-wp-rest-autosaves-controller.php#L219.
 */
function _wp_rest_api_force_autosave_difference($prepared_post, $request)
{
}