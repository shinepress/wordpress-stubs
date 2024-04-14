<?php


/**
 * Display RSS widget options form.
 *
 * The options for what fields are displayed for the RSS form are all booleans
 * and are as follows: 'url', 'title', 'items', 'show_summary', 'show_author',
 * 'show_date'.
 *
 * @since 2.5.0
 *
 * @param array|string $args Values for input fields.
 * @param array $inputs Override default display options.
 * @phpstan-param array{number: int, error: bool, title?: string, url?: string, items?: int, show_summary?: int, show_author?: int, show_date?: int} $args
 * @phpstan-param array{title?: bool, url?: bool, items?: bool, show_summary?: bool, show_author?: bool, show_date?: bool} $inputs
 * @phpstan-return void
 */
function wp_widget_rss_form($args, $inputs = \null)
{
}