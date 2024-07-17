<?php


/**
 * Interactivity API: WP_Interactivity_API_Directives_Processor class.
 *
 * @package WordPress
 * @subpackage Interactivity API
 * @since 6.5.0
 */
/**
 * Class used to iterate over the tags of an HTML string and help process the
 * directive attributes.
 *
 * @since 6.5.0
 *
 * @access private
 */
final class WP_Interactivity_API_Directives_Processor extends \WP_HTML_Tag_Processor
{
    /**
     * List of tags whose closer tag is not visited by the WP_HTML_Tag_Processor.
     *
     * @since 6.5.0
     * @var string[]
     */
    const TAGS_THAT_DONT_VISIT_CLOSER_TAG = array('SCRIPT', 'IFRAME', 'NOEMBED', 'NOFRAMES', 'STYLE', 'TEXTAREA', 'TITLE', 'XMP');
    /**
     * Returns the content between two balanced template tags.
     *
     * It positions the cursor in the closer tag of the balanced template tag,
     * if it exists.
     *
     * @since 6.5.0
     *
     * @access private
     *
     * @return string|null The content between the current opener template tag and its matching closer tag or null if it
     *                     doesn't find the matching closing tag or the current tag is not a template opener tag.
     */
    public function get_content_between_balanced_template_tags()
    {
    }
    /**
     * Sets the content between two balanced tags.
     *
     * @since 6.5.0
     *
     * @access private
     *
     * @param string $new_content The string to replace the content between the matching tags.
     * @return bool Whether the content was successfully replaced.
     */
    public function set_content_between_balanced_tags(string $new_content): bool
    {
    }
    /**
     * Appends content after the closing tag of a template tag.
     *
     * It positions the cursor in the closer tag of the balanced template tag,
     * if it exists.
     *
     * @access private
     *
     * @param string $new_content The string to append after the closing template tag.
     * @return bool Whether the content was successfully appended.
     */
    public function append_content_after_template_tag_closer(string $new_content): bool
    {
    }
    /**
     * Skips processing the content between tags.
     *
     * It positions the cursor in the closer tag of the foreign element, if it
     * exists.
     *
     * This function is intended to skip processing SVG and MathML inner content
     * instead of bailing out the whole processing.
     *
     * @since 6.5.0
     *
     * @access private
     *
     * @return bool Whether the foreign content was successfully skipped.
     */
    public function skip_to_tag_closer(): bool
    {
    }
    /**
     * Finds the matching closing tag for an opening tag.
     *
     * When called while the processor is on an open tag, it traverses the HTML
     * until it finds the matching closer tag, respecting any in-between content,
     * including nested tags of the same name. Returns false when called on a
     * closer tag, a tag that doesn't have a closer tag (void), a tag that
     * doesn't visit the closer tag, or if no matching closing tag was found.
     *
     * @since 6.5.0
     *
     * @access private
     *
     * @return bool Whether a matching closing tag was found.
     */
    public function next_balanced_tag_closer_tag(): bool
    {
    }
    /**
     * Checks whether the current tag has and will visit its matching closer tag.
     *
     * @since 6.5.0
     *
     * @access private
     *
     * @return bool Whether the current tag has a closer tag.
     */
    public function has_and_visits_its_closer_tag(): bool
    {
    }
}