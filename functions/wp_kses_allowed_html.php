<?php


/**
 * Return a list of allowed tags and attributes for a given context.
 *
 * @since 3.5.0
 *
 * @global array $allowedposttags
 * @global array $allowedtags
 * @global array $allowedentitynames
 *
 * @param string|array $context The context for which to retrieve tags.
 *                              Allowed values are post, strip, data, entities, or
 *                              the name of a field filter such as pre_user_description.
 * @return array List of allowed tags and their allowed attributes.
 */
function wp_kses_allowed_html($context = '')
{
}