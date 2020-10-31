<?php


/**
 * Displays a human readable HTML representation of the difference between two strings.
 *
 * The Diff is available for getting the changes between versions. The output is
 * HTML, so the primary use is for displaying the changes. If the two strings
 * are equivalent, then an empty string will be returned.
 *
 * The arguments supported and can be changed are listed below.
 *
 * 'title' : Default is an empty string. Titles the diff in a manner compatible
 *      with the output.
 * 'title_left' : Default is an empty string. Change the HTML to the left of the
 *      title.
 * 'title_right' : Default is an empty string. Change the HTML to the right of
 *      the title.
 *
 * @since 2.6.0
 *
 * @see wp_parse_args() Used to change defaults to user defined settings.
 * @uses Text_Diff
 * @uses WP_Text_Diff_Renderer_Table
 *
 * @param string       $left_string  "old" (left) version of string
 * @param string       $right_string "new" (right) version of string
 * @param string|array $args         Optional. Change 'title', 'title_left', and 'title_right' defaults.
 * @return string Empty string if strings are equivalent or HTML with differences.
 */
function wp_text_diff($left_string, $right_string, $args = \null)
{
}