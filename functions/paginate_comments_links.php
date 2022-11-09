<?php


/**
 * Displays or retrieves pagination links for the comments on the current post.
 *
 * @see paginate_links()
 * @since 2.7.0
 *
 * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
 *
 * @param string|array $args Optional args. See paginate_links(). Default empty array.
 * @return string|array|void Markup for comment page links or array of comment page links.
 * @phpstan-param array{
 *   base?: string,
 *   format?: string,
 *   total?: int,
 *   current?: int,
 *   aria_current?: string,
 *   show_all?: bool,
 *   end_size?: int,
 *   mid_size?: int,
 *   prev_next?: bool,
 *   prev_text?: bool,
 *   next_text?: bool,
 *   type?: string,
 *   add_args?: array,
 *   add_fragment?: string,
 *   before_page_number?: string,
 *   after_page_number?: string,
 * } $args See paginate_links()
 */
function paginate_comments_links($args = array())
{
}