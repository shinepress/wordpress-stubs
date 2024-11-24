<?php


/**
 * Prints a CSS rule to fix potential visual issues with images using `sizes=auto`.
 *
 * This rule overrides the similar rule in the default user agent stylesheet, to avoid images that use e.g.
 * `width: auto` or `width: fit-content` to appear smaller.
 *
 * @since 6.7.1
 * @see https://html.spec.whatwg.org/multipage/rendering.html#img-contain-size
 * @see https://core.trac.wordpress.org/ticket/62413
 * @phpstan-return void
 */
function wp_print_auto_sizes_contain_css_fix()
{
}