<?php


/**
 * Display or retrieve the current post title with optional markup.
 *
 * @since 0.71
 *
 * @param string $before Optional. Markup to prepend to the title. Default empty.
 * @param string $after  Optional. Markup to append to the title. Default empty.
 * @param bool   $echo   Optional. Whether to echo or return the title. Default true for echo.
 * @return void|string Void if `$echo` argument is true, current post title if `$echo` is false.
 * @phpstan-return ($display is true ? void : string|void)
 */
function the_title($before = '', $after = '', $echo = \true)
{
}