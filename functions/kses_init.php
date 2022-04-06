<?php


/**
 * Sets up most of the Kses filters for input form content.
 *
 * If you remove the kses_init() function from {@see 'init'} hook and
 * {@see 'set_current_user'} (priority is default), then none of the Kses filter hooks
 * will be added.
 *
 * First removes all of the Kses filters in case the current user does not need
 * to have Kses filter the content. If the user does not have unfiltered_html
 * capability, then Kses filters are added.
 *
 * @since 2.0.0
 */
function kses_init()
{
}