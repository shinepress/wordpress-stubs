<?php


/**
 * Class that encapsulates the processing of structures that adhere to the theme.json spec.
 *
 * This class is for internal core usage and is not supposed to be used by extenders (plugins and/or themes).
 * This is a low-level API that may need to do breaking changes. Please,
 * use get_global_settings, get_global_styles, and get_global_stylesheet instead.
 *
 * @access private
 */
#[\AllowDynamicProperties]
class WP_Theme_JSON
{
    /**
     * Container of data in theme.json format.
     *
     * @since 5.8.0
     * @var array
     */
    protected $theme_json = \null;
    /**
     * Holds block metadata extracted from block.json
     * to be shared among all instances so we don't
     * process it twice.
     *
     * @since 5.8.0
     * @since 6.1.0 Initialize as an empty array.
     * @var array
     */
    protected static $blocks_metadata = array();
    /**
     * The CSS selector for the top-level preset settings.
     *
     * @since 6.6.0
     * @var string
     */
    const ROOT_CSS_PROPERTIES_SELECTOR = ':root';
    /**
     * The CSS selector for the top-level styles.
     *
     * @since 5.8.0
     * @var string
     */
    const ROOT_BLOCK_SELECTOR = 'body';
    /**
     * The sources of data this object can represent.
     *
     * @since 5.8.0
     * @since 6.1.0 Added 'blocks'.
     * @var string[]
     */
    const VALID_ORIGINS = array('default', 'blocks', 'theme', 'custom');
    /**
     * Presets are a set of values that serve
     * to bootstrap some styles: colors, font sizes, etc.
     *
     * They are a unkeyed array of values such as:
     *
     *     array(
     *       array(
     *         'slug'      => 'unique-name-within-the-set',
     *         'name'      => 'Name for the UI',
     *         <value_key> => 'value'
     *       ),
     *     )
     *
     * This contains the necessary metadata to process them:
     *
     * - path             => Where to find the preset within the settings section.
     * - prevent_override => Disables override of default presets by theme presets.
     *                       The relationship between whether to override the defaults
     *                       and whether the defaults are enabled is inverse:
     *                         - If defaults are enabled  => theme presets should not be overridden
     *                         - If defaults are disabled => theme presets should be overridden
     *                       For example, a theme sets defaultPalette to false,
     *                       making the default palette hidden from the user.
     *                       In that case, we want all the theme presets to be present,
     *                       so they should override the defaults by setting this false.
     * - use_default_names => whether to use the default names
     * - value_key        => the key that represents the value
     * - value_func       => optionally, instead of value_key, a function to generate
     *                       the value that takes a preset as an argument
     *                       (either value_key or value_func should be present)
     * - css_vars         => template string to use in generating the CSS Custom Property.
     *                       Example output: "--wp--preset--duotone--blue: <value>" will generate as many CSS Custom Properties as presets defined
     *                       substituting the $slug for the slug's value for each preset value.
     * - classes          => array containing a structure with the classes to
     *                       generate for the presets, where for each array item
     *                       the key is the class name and the value the property name.
     *                       The "$slug" substring will be replaced by the slug of each preset.
     *                       For example:
     *                       'classes' => array(
     *                         '.has-$slug-color'            => 'color',
     *                         '.has-$slug-background-color' => 'background-color',
     *                         '.has-$slug-border-color'     => 'border-color',
     *                       )
     * - properties       => array of CSS properties to be used by kses to
     *                       validate the content of each preset
     *                       by means of the remove_insecure_properties method.
     *
     * @since 5.8.0
     * @since 5.9.0 Added the `color.duotone` and `typography.fontFamilies` presets,
     *              `use_default_names` preset key, and simplified the metadata structure.
     * @since 6.0.0 Replaced `override` with `prevent_override` and updated the
     *              `prevent_override` value for `color.duotone` to use `color.defaultDuotone`.
     * @since 6.2.0 Added 'shadow' presets.
     * @since 6.3.0 Replaced value_func for duotone with `null`. Custom properties are handled by class-wp-duotone.php.
     * @since 6.6.0 Added the `dimensions.aspectRatios` and `dimensions.defaultAspectRatios` presets.
     *              Updated the 'prevent_override' value for font size presets to use 'typography.defaultFontSizes'
     *              and spacing size presets to use `spacing.defaultSpacingSizes`.
     * @var array
     */
    const PRESETS_METADATA = array(array('path' => array('dimensions', 'aspectRatios'), 'prevent_override' => array('dimensions', 'defaultAspectRatios'), 'use_default_names' => \false, 'value_key' => 'ratio', 'css_vars' => '--wp--preset--aspect-ratio--$slug', 'classes' => array(), 'properties' => array('aspect-ratio')), array('path' => array('color', 'palette'), 'prevent_override' => array('color', 'defaultPalette'), 'use_default_names' => \false, 'value_key' => 'color', 'css_vars' => '--wp--preset--color--$slug', 'classes' => array('.has-$slug-color' => 'color', '.has-$slug-background-color' => 'background-color', '.has-$slug-border-color' => 'border-color'), 'properties' => array('color', 'background-color', 'border-color')), array('path' => array('color', 'gradients'), 'prevent_override' => array('color', 'defaultGradients'), 'use_default_names' => \false, 'value_key' => 'gradient', 'css_vars' => '--wp--preset--gradient--$slug', 'classes' => array('.has-$slug-gradient-background' => 'background'), 'properties' => array('background')), array(
        'path' => array('color', 'duotone'),
        'prevent_override' => array('color', 'defaultDuotone'),
        'use_default_names' => \false,
        'value_func' => \null,
        // CSS Custom Properties for duotone are handled by block supports in class-wp-duotone.php.
        'css_vars' => \null,
        'classes' => array(),
        'properties' => array('filter'),
    ), array('path' => array('typography', 'fontSizes'), 'prevent_override' => array('typography', 'defaultFontSizes'), 'use_default_names' => \true, 'value_func' => 'wp_get_typography_font_size_value', 'css_vars' => '--wp--preset--font-size--$slug', 'classes' => array('.has-$slug-font-size' => 'font-size'), 'properties' => array('font-size')), array('path' => array('typography', 'fontFamilies'), 'prevent_override' => \false, 'use_default_names' => \false, 'value_key' => 'fontFamily', 'css_vars' => '--wp--preset--font-family--$slug', 'classes' => array('.has-$slug-font-family' => 'font-family'), 'properties' => array('font-family')), array('path' => array('spacing', 'spacingSizes'), 'prevent_override' => array('spacing', 'defaultSpacingSizes'), 'use_default_names' => \true, 'value_key' => 'size', 'css_vars' => '--wp--preset--spacing--$slug', 'classes' => array(), 'properties' => array('padding', 'margin')), array('path' => array('shadow', 'presets'), 'prevent_override' => array('shadow', 'defaultPresets'), 'use_default_names' => \false, 'value_key' => 'shadow', 'css_vars' => '--wp--preset--shadow--$slug', 'classes' => array(), 'properties' => array('box-shadow')));
    /**
     * Metadata for style properties.
     *
     * Each element is a direct mapping from the CSS property name to the
     * path to the value in theme.json & block attributes.
     *
     * @since 5.8.0
     * @since 5.9.0 Added the `border-*`, `font-family`, `font-style`, `font-weight`,
     *              `letter-spacing`, `margin-*`, `padding-*`, `--wp--style--block-gap`,
     *              `text-decoration`, `text-transform`, and `filter` properties,
     *              simplified the metadata structure.
     * @since 6.1.0 Added the `border-*-color`, `border-*-width`, `border-*-style`,
     *              `--wp--style--root--padding-*`, and `box-shadow` properties,
     *              removed the `--wp--style--block-gap` property.
     * @since 6.2.0 Added `outline-*`, and `min-height` properties.
     * @since 6.3.0 Added `column-count` property.
     * @since 6.4.0 Added `writing-mode` property.
     * @since 6.5.0 Added `aspect-ratio` property.
     * @since 6.6.0 Added `background-[image|position|repeat|size]` properties.
     *
     * @var array
     */
    const PROPERTIES_METADATA = array('aspect-ratio' => array('dimensions', 'aspectRatio'), 'background' => array('color', 'gradient'), 'background-color' => array('color', 'background'), 'background-image' => array('background', 'backgroundImage'), 'background-position' => array('background', 'backgroundPosition'), 'background-repeat' => array('background', 'backgroundRepeat'), 'background-size' => array('background', 'backgroundSize'), 'border-radius' => array('border', 'radius'), 'border-top-left-radius' => array('border', 'radius', 'topLeft'), 'border-top-right-radius' => array('border', 'radius', 'topRight'), 'border-bottom-left-radius' => array('border', 'radius', 'bottomLeft'), 'border-bottom-right-radius' => array('border', 'radius', 'bottomRight'), 'border-color' => array('border', 'color'), 'border-width' => array('border', 'width'), 'border-style' => array('border', 'style'), 'border-top-color' => array('border', 'top', 'color'), 'border-top-width' => array('border', 'top', 'width'), 'border-top-style' => array('border', 'top', 'style'), 'border-right-color' => array('border', 'right', 'color'), 'border-right-width' => array('border', 'right', 'width'), 'border-right-style' => array('border', 'right', 'style'), 'border-bottom-color' => array('border', 'bottom', 'color'), 'border-bottom-width' => array('border', 'bottom', 'width'), 'border-bottom-style' => array('border', 'bottom', 'style'), 'border-left-color' => array('border', 'left', 'color'), 'border-left-width' => array('border', 'left', 'width'), 'border-left-style' => array('border', 'left', 'style'), 'color' => array('color', 'text'), 'text-align' => array('typography', 'textAlign'), 'column-count' => array('typography', 'textColumns'), 'font-family' => array('typography', 'fontFamily'), 'font-size' => array('typography', 'fontSize'), 'font-style' => array('typography', 'fontStyle'), 'font-weight' => array('typography', 'fontWeight'), 'letter-spacing' => array('typography', 'letterSpacing'), 'line-height' => array('typography', 'lineHeight'), 'margin' => array('spacing', 'margin'), 'margin-top' => array('spacing', 'margin', 'top'), 'margin-right' => array('spacing', 'margin', 'right'), 'margin-bottom' => array('spacing', 'margin', 'bottom'), 'margin-left' => array('spacing', 'margin', 'left'), 'min-height' => array('dimensions', 'minHeight'), 'outline-color' => array('outline', 'color'), 'outline-offset' => array('outline', 'offset'), 'outline-style' => array('outline', 'style'), 'outline-width' => array('outline', 'width'), 'padding' => array('spacing', 'padding'), 'padding-top' => array('spacing', 'padding', 'top'), 'padding-right' => array('spacing', 'padding', 'right'), 'padding-bottom' => array('spacing', 'padding', 'bottom'), 'padding-left' => array('spacing', 'padding', 'left'), '--wp--style--root--padding' => array('spacing', 'padding'), '--wp--style--root--padding-top' => array('spacing', 'padding', 'top'), '--wp--style--root--padding-right' => array('spacing', 'padding', 'right'), '--wp--style--root--padding-bottom' => array('spacing', 'padding', 'bottom'), '--wp--style--root--padding-left' => array('spacing', 'padding', 'left'), 'text-decoration' => array('typography', 'textDecoration'), 'text-transform' => array('typography', 'textTransform'), 'filter' => array('filter', 'duotone'), 'box-shadow' => array('shadow'), 'writing-mode' => array('typography', 'writingMode'));
    /**
     * Indirect metadata for style properties that are not directly output.
     *
     * Each element maps from a CSS property name to an array of
     * paths to the value in theme.json & block attributes.
     *
     * Indirect properties are not output directly by `compute_style_properties`,
     * but are used elsewhere in the processing of global styles. The indirect
     * property is used to validate whether a style value is allowed.
     *
     * @since 6.2.0
     * @since 6.6.0 Added background-image properties.
     *
     * @var array
     */
    const INDIRECT_PROPERTIES_METADATA = array('gap' => array(array('spacing', 'blockGap')), 'column-gap' => array(array('spacing', 'blockGap', 'left')), 'row-gap' => array(array('spacing', 'blockGap', 'top')), 'max-width' => array(array('layout', 'contentSize'), array('layout', 'wideSize')), 'background-image' => array(array('background', 'backgroundImage', 'url')));
    /**
     * Protected style properties.
     *
     * These style properties are only rendered if a setting enables it
     * via a value other than `null`.
     *
     * Each element maps the style property to the corresponding theme.json
     * setting key.
     *
     * @since 5.9.0
     */
    const PROTECTED_PROPERTIES = array('spacing.blockGap' => array('spacing', 'blockGap'));
    /**
     * The top-level keys a theme.json can have.
     *
     * @since 5.8.0 As `ALLOWED_TOP_LEVEL_KEYS`.
     * @since 5.9.0 Renamed from `ALLOWED_TOP_LEVEL_KEYS` to `VALID_TOP_LEVEL_KEYS`,
     *              added the `customTemplates` and `templateParts` values.
     * @since 6.3.0 Added the `description` value.
     * @since 6.6.0 Added `blockTypes` to support block style variation theme.json partials.
     * @var string[]
     */
    const VALID_TOP_LEVEL_KEYS = array('blockTypes', 'customTemplates', 'description', 'patterns', 'settings', 'slug', 'styles', 'templateParts', 'title', 'version');
    /**
     * The valid properties under the settings key.
     *
     * @since 5.8.0 As `ALLOWED_SETTINGS`.
     * @since 5.9.0 Renamed from `ALLOWED_SETTINGS` to `VALID_SETTINGS`,
     *              added new properties for `border`, `color`, `spacing`,
     *              and `typography`, and renamed others according to the new schema.
     * @since 6.0.0 Added `color.defaultDuotone`.
     * @since 6.1.0 Added `layout.definitions` and `useRootPaddingAwareAlignments`.
     * @since 6.2.0 Added `dimensions.minHeight`, 'shadow.presets', 'shadow.defaultPresets',
     *              `position.fixed` and `position.sticky`.
     * @since 6.3.0 Added support for `typography.textColumns`, removed `layout.definitions`.
     * @since 6.4.0 Added support for `layout.allowEditing`, `background.backgroundImage`,
     *              `typography.writingMode`, `lightbox.enabled` and `lightbox.allowEditing`.
     * @since 6.5.0 Added support for `layout.allowCustomContentAndWideSize`,
     *              `background.backgroundSize` and `dimensions.aspectRatio`.
     * @since 6.6.0 Added support for 'dimensions.aspectRatios', 'dimensions.defaultAspectRatios',
     *              'typography.defaultFontSizes', and 'spacing.defaultSpacingSizes'.
     * @var array
     */
    const VALID_SETTINGS = array('appearanceTools' => \null, 'useRootPaddingAwareAlignments' => \null, 'background' => array('backgroundImage' => \null, 'backgroundSize' => \null), 'border' => array('color' => \null, 'radius' => \null, 'style' => \null, 'width' => \null), 'color' => array('background' => \null, 'custom' => \null, 'customDuotone' => \null, 'customGradient' => \null, 'defaultDuotone' => \null, 'defaultGradients' => \null, 'defaultPalette' => \null, 'duotone' => \null, 'gradients' => \null, 'link' => \null, 'heading' => \null, 'button' => \null, 'caption' => \null, 'palette' => \null, 'text' => \null), 'custom' => \null, 'dimensions' => array('aspectRatio' => \null, 'aspectRatios' => \null, 'defaultAspectRatios' => \null, 'minHeight' => \null), 'layout' => array('contentSize' => \null, 'wideSize' => \null, 'allowEditing' => \null, 'allowCustomContentAndWideSize' => \null), 'lightbox' => array('enabled' => \null, 'allowEditing' => \null), 'position' => array('fixed' => \null, 'sticky' => \null), 'spacing' => array('customSpacingSize' => \null, 'defaultSpacingSizes' => \null, 'spacingSizes' => \null, 'spacingScale' => \null, 'blockGap' => \null, 'margin' => \null, 'padding' => \null, 'units' => \null), 'shadow' => array('presets' => \null, 'defaultPresets' => \null), 'typography' => array('fluid' => \null, 'customFontSize' => \null, 'defaultFontSizes' => \null, 'dropCap' => \null, 'fontFamilies' => \null, 'fontSizes' => \null, 'fontStyle' => \null, 'fontWeight' => \null, 'letterSpacing' => \null, 'lineHeight' => \null, 'textAlign' => \null, 'textColumns' => \null, 'textDecoration' => \null, 'textTransform' => \null, 'writingMode' => \null));
    /*
     * The valid properties for fontFamilies under settings key.
     *
     * @since 6.5.0
     *
     * @var array
     */
    const FONT_FAMILY_SCHEMA = array(array('fontFamily' => \null, 'name' => \null, 'slug' => \null, 'fontFace' => array(array('ascentOverride' => \null, 'descentOverride' => \null, 'fontDisplay' => \null, 'fontFamily' => \null, 'fontFeatureSettings' => \null, 'fontStyle' => \null, 'fontStretch' => \null, 'fontVariationSettings' => \null, 'fontWeight' => \null, 'lineGapOverride' => \null, 'sizeAdjust' => \null, 'src' => \null, 'unicodeRange' => \null))));
    /**
     * The valid properties under the styles key.
     *
     * @since 5.8.0 As `ALLOWED_STYLES`.
     * @since 5.9.0 Renamed from `ALLOWED_STYLES` to `VALID_STYLES`,
     *              added new properties for `border`, `filter`, `spacing`,
     *              and `typography`.
     * @since 6.1.0 Added new side properties for `border`,
     *              added new property `shadow`,
     *              updated `blockGap` to be allowed at any level.
     * @since 6.2.0 Added `outline`, and `minHeight` properties.
     * @since 6.3.0 Added support for `typography.textColumns`.
     * @since 6.5.0 Added support for `dimensions.aspectRatio`.
     * @since 6.6.0 Added `background` sub properties to top-level only.
     *
     * @var array
     */
    const VALID_STYLES = array('background' => array('backgroundImage' => 'top', 'backgroundPosition' => 'top', 'backgroundRepeat' => 'top', 'backgroundSize' => 'top'), 'border' => array('color' => \null, 'radius' => \null, 'style' => \null, 'width' => \null, 'top' => \null, 'right' => \null, 'bottom' => \null, 'left' => \null), 'color' => array('background' => \null, 'gradient' => \null, 'text' => \null), 'dimensions' => array('aspectRatio' => \null, 'minHeight' => \null), 'filter' => array('duotone' => \null), 'outline' => array('color' => \null, 'offset' => \null, 'style' => \null, 'width' => \null), 'shadow' => \null, 'spacing' => array('margin' => \null, 'padding' => \null, 'blockGap' => \null), 'typography' => array('fontFamily' => \null, 'fontSize' => \null, 'fontStyle' => \null, 'fontWeight' => \null, 'letterSpacing' => \null, 'lineHeight' => \null, 'textAlign' => \null, 'textColumns' => \null, 'textDecoration' => \null, 'textTransform' => \null, 'writingMode' => \null), 'css' => \null);
    /**
     * Defines which pseudo selectors are enabled for which elements.
     *
     * The order of the selectors should be: link, any-link, visited, hover, focus, active.
     * This is to ensure the user action (hover, focus and active) styles have a higher
     * specificity than the visited styles, which in turn have a higher specificity than
     * the unvisited styles.
     *
     * See https://core.trac.wordpress.org/ticket/56928.
     * Note: this will affect both top-level and block-level elements.
     *
     * @since 6.1.0
     * @since 6.2.0 Added support for ':link' and ':any-link'.
     */
    const VALID_ELEMENT_PSEUDO_SELECTORS = array('link' => array(':link', ':any-link', ':visited', ':hover', ':focus', ':active'), 'button' => array(':link', ':any-link', ':visited', ':hover', ':focus', ':active'));
    /**
     * The valid elements that can be found under styles.
     *
     * @since 5.8.0
     * @since 6.1.0 Added `heading`, `button`, and `caption` elements.
     * @var string[]
     */
    const ELEMENTS = array(
        'link' => 'a:where(:not(.wp-element-button))',
        // The `where` is needed to lower the specificity.
        'heading' => 'h1, h2, h3, h4, h5, h6',
        'h1' => 'h1',
        'h2' => 'h2',
        'h3' => 'h3',
        'h4' => 'h4',
        'h5' => 'h5',
        'h6' => 'h6',
        // We have the .wp-block-button__link class so that this will target older buttons that have been serialized.
        'button' => '.wp-element-button, .wp-block-button__link',
        // The block classes are necessary to target older content that won't use the new class names.
        'caption' => '.wp-element-caption, .wp-block-audio figcaption, .wp-block-embed figcaption, .wp-block-gallery figcaption, .wp-block-image figcaption, .wp-block-table figcaption, .wp-block-video figcaption',
        'cite' => 'cite',
    );
    const __EXPERIMENTAL_ELEMENT_CLASS_NAMES = array('button' => 'wp-element-button', 'caption' => 'wp-element-caption');
    /**
     * List of block support features that can have their related styles
     * generated under their own feature level selector rather than the block's.
     *
     * @since 6.1.0
     * @var string[]
     */
    const BLOCK_SUPPORT_FEATURE_LEVEL_SELECTORS = array('__experimentalBorder' => 'border', 'color' => 'color', 'spacing' => 'spacing', 'typography' => 'typography');
    /**
     * Return the input schema at the root and per origin.
     *
     * @since 6.5.0
     *
     * @param array $schema The base schema.
     * @return array The schema at the root and per origin.
     *
     * Example:
     * schema_in_root_and_per_origin(
     *   array(
     *    'fontFamily' => null,
     *    'slug' => null,
     *   )
     * )
     *
     * Returns:
     * array(
     *  'fontFamily' => null,
     *  'slug' => null,
     *  'default' => array(
     *    'fontFamily' => null,
     *    'slug' => null,
     *  ),
     *  'blocks' => array(
     *    'fontFamily' => null,
     *    'slug' => null,
     *  ),
     *  'theme' => array(
     *     'fontFamily' => null,
     *     'slug' => null,
     *  ),
     *  'custom' => array(
     *     'fontFamily' => null,
     *     'slug' => null,
     *  ),
     * )
     */
    protected static function schema_in_root_and_per_origin($schema)
    {
    }
    /**
     * Returns a class name by an element name.
     *
     * @since 6.1.0
     *
     * @param string $element The name of the element.
     * @return string The name of the class.
     */
    public static function get_element_class_name($element)
    {
    }
    /**
     * Options that settings.appearanceTools enables.
     *
     * @since 6.0.0
     * @since 6.2.0 Added `dimensions.minHeight` and `position.sticky`.
     * @since 6.4.0 Added `background.backgroundImage`.
     * @since 6.5.0 Added `background.backgroundSize` and `dimensions.aspectRatio`.
     * @var array
     */
    const APPEARANCE_TOOLS_OPT_INS = array(array('background', 'backgroundImage'), array('background', 'backgroundSize'), array('border', 'color'), array('border', 'radius'), array('border', 'style'), array('border', 'width'), array('color', 'link'), array('color', 'heading'), array('color', 'button'), array('color', 'caption'), array('dimensions', 'aspectRatio'), array('dimensions', 'minHeight'), array('position', 'sticky'), array('spacing', 'blockGap'), array('spacing', 'margin'), array('spacing', 'padding'), array('typography', 'lineHeight'));
    /**
     * The latest version of the schema in use.
     *
     * @since 5.8.0
     * @since 5.9.0 Changed value from 1 to 2.
     * @since 6.6.0 Changed value from 2 to 3.
     * @var int
     */
    const LATEST_SCHEMA = 3;
    /**
     * Constructor.
     *
     * @since 5.8.0
     * @since 6.6.0 Key spacingScale by origin, and Pre-generate the spacingSizes from spacingScale.
     *              Added unwrapping of shared block style variations into block type variations if registered.
     *
     * @param array  $theme_json A structure that follows the theme.json schema.
     * @param string $origin     Optional. What source of data this object represents.
     *                           One of 'blocks', 'default', 'theme', or 'custom'. Default 'theme'.
     * @phpstan-param 'blocks'|'default'|'theme'|'custom' $origin
     */
    public function __construct($theme_json = array('version' => self::LATEST_SCHEMA), $origin = 'theme')
    {
    }
    /**
     * Enables some opt-in settings if theme declared support.
     *
     * @since 5.9.0
     *
     * @param array $theme_json A theme.json structure to modify.
     * @return array The modified theme.json structure.
     */
    protected static function maybe_opt_in_into_settings($theme_json)
    {
    }
    /**
     * Enables some settings.
     *
     * @since 5.9.0
     *
     * @param array $context The context to which the settings belong.
     */
    protected static function do_opt_in_into_settings(&$context)
    {
    }
    /**
     * Sanitizes the input according to the schemas.
     *
     * @since 5.8.0
     * @since 5.9.0 Added the `$valid_block_names` and `$valid_element_name` parameters.
     * @since 6.3.0 Added the `$valid_variations` parameter.
     * @since 6.6.0 Updated schema to allow extended block style variations.
     *
     * @param array $input               Structure to sanitize.
     * @param array $valid_block_names   List of valid block names.
     * @param array $valid_element_names List of valid element names.
     * @param array $valid_variations    List of valid variations per block.
     * @return array The sanitized output.
     */
    protected static function sanitize($input, $valid_block_names, $valid_element_names, $valid_variations)
    {
    }
    /**
     * Appends a sub-selector to an existing one.
     *
     * Given the compounded $selector "h1, h2, h3"
     * and the $to_append selector ".some-class" the result will be
     * "h1.some-class, h2.some-class, h3.some-class".
     *
     * @since 5.8.0
     * @since 6.1.0 Added append position.
     * @since 6.3.0 Removed append position parameter.
     *
     * @param string $selector  Original selector.
     * @param string $to_append Selector to append.
     * @return string The new selector.
     */
    protected static function append_to_selector($selector, $to_append)
    {
    }
    /**
     * Prepends a sub-selector to an existing one.
     *
     * Given the compounded $selector "h1, h2, h3"
     * and the $to_prepend selector ".some-class " the result will be
     * ".some-class h1, .some-class  h2, .some-class  h3".
     *
     * @since 6.3.0
     *
     * @param string $selector   Original selector.
     * @param string $to_prepend Selector to prepend.
     * @return string The new selector.
     */
    protected static function prepend_to_selector($selector, $to_prepend)
    {
    }
    /**
     * Returns the metadata for each block.
     *
     * Example:
     *
     *     {
     *       'core/paragraph': {
     *         'selector': 'p',
     *         'elements': {
     *           'link' => 'link selector',
     *           'etc'  => 'element selector'
     *         }
     *       },
     *       'core/heading': {
     *         'selector': 'h1',
     *         'elements': {}
     *       },
     *       'core/image': {
     *         'selector': '.wp-block-image',
     *         'duotone': 'img',
     *         'elements': {}
     *       }
     *     }
     *
     * @since 5.8.0
     * @since 5.9.0 Added `duotone` key with CSS selector.
     * @since 6.1.0 Added `features` key with block support feature level selectors.
     * @since 6.3.0 Refactored and stabilized selectors API.
     * @since 6.6.0 Updated to include block style variations from the block styles registry.
     *
     * @return array Block metadata.
     */
    protected static function get_blocks_metadata()
    {
    }
    /**
     * Given a tree, removes the keys that are not present in the schema.
     *
     * It is recursive and modifies the input in-place.
     *
     * @since 5.8.0
     *
     * @param array $tree   Input to process.
     * @param array $schema Schema to adhere to.
     * @return array The modified $tree.
     */
    protected static function remove_keys_not_in_schema($tree, $schema)
    {
    }
    /**
     * Returns the existing settings for each block.
     *
     * Example:
     *
     *     {
     *       'root': {
     *         'color': {
     *           'custom': true
     *         }
     *       },
     *       'core/paragraph': {
     *         'spacing': {
     *           'customPadding': true
     *         }
     *       }
     *     }
     *
     * @since 5.8.0
     *
     * @return array Settings per block.
     */
    public function get_settings()
    {
    }
    /**
     * Returns the stylesheet that results of processing
     * the theme.json structure this object represents.
     *
     * @since 5.8.0
     * @since 5.9.0 Removed the `$type` parameter, added the `$types` and `$origins` parameters.
     * @since 6.3.0 Add fallback layout styles for Post Template when block gap support isn't available.
     * @since 6.6.0 Added boolean `skip_root_layout_styles` and `include_block_style_variations` options
     *              to control styles output as desired.
     *
     * @param string[] $types   Types of styles to load. Will load all by default. It accepts:
     *                          - `variables`: only the CSS Custom Properties for presets & custom ones.
     *                          - `styles`: only the styles section in theme.json.
     *                          - `presets`: only the classes for the presets.
     * @param string[] $origins A list of origins to include. By default it includes VALID_ORIGINS.
     * @param array    $options {
     *     Optional. An array of options for now used for internal purposes only (may change without notice).
     *
     *     @type string $scope                           Makes sure all style are scoped to a given selector
     *     @type string $root_selector                   Overwrites and forces a given selector to be used on the root node
     *     @type bool   $skip_root_layout_styles         Omits root layout styles from the generated stylesheet. Default false.
     *     @type bool   $include_block_style_variations  Includes styles for block style variations in the generated stylesheet. Default false.
     * }
     * @return string The resulting stylesheet.
     * @phpstan-param array{
     *   scope?: string,
     *   root_selector?: string,
     *   skip_root_layout_styles?: bool,
     *   include_block_style_variations?: bool,
     * } $options
     */
    public function get_stylesheet($types = array('variables', 'styles', 'presets'), $origins = \null, $options = array())
    {
    }
    /**
     * Processes the CSS, to apply nesting.
     *
     * @since 6.2.0
     * @since 6.6.0 Enforced 0-1-0 specificity for block custom CSS selectors.
     *
     * @param string $css      The CSS to process.
     * @param string $selector The selector to nest.
     * @return string The processed CSS.
     */
    protected function process_blocks_custom_css($css, $selector)
    {
    }
    /**
     * Returns the global styles custom CSS.
     *
     * @since 6.2.0
     *
     * @return string The global styles custom CSS.
     */
    public function get_custom_css()
    {
    }
    /**
     * Returns the page templates of the active theme.
     *
     * @since 5.9.0
     *
     * @return array
     */
    public function get_custom_templates()
    {
    }
    /**
     * Returns the template part data of active theme.
     *
     * @since 5.9.0
     *
     * @return array
     */
    public function get_template_parts()
    {
    }
    /**
     * Converts each style section into a list of rulesets
     * containing the block styles to be appended to the stylesheet.
     *
     * See glossary at https://developer.mozilla.org/en-US/docs/Web/CSS/Syntax
     *
     * For each section this creates a new ruleset such as:
     *
     *   block-selector {
     *     style-property-one: value;
     *   }
     *
     * @since 5.8.0 As `get_block_styles()`.
     * @since 5.9.0 Renamed from `get_block_styles()` to `get_block_classes()`
     *              and no longer returns preset classes.
     *              Removed the `$setting_nodes` parameter.
     * @since 6.1.0 Moved most internal logic to `get_styles_for_block()`.
     *
     * @param array $style_nodes Nodes with styles.
     * @return string The new stylesheet.
     */
    protected function get_block_classes($style_nodes)
    {
    }
    /**
     * Gets the CSS layout rules for a particular block from theme.json layout definitions.
     *
     * @since 6.1.0
     * @since 6.3.0 Reduced specificity for layout margin rules.
     * @since 6.5.1 Only output rules referencing content and wide sizes when values exist.
     * @since 6.5.3 Add types parameter to check if only base layout styles are needed.
     * @since 6.6.0 Updated layout style specificity to be compatible with overall 0-1-0 specificity in global styles.
     *
     * @param array $block_metadata Metadata about the block to get styles for.
     * @param array $types          Optional. Types of styles to output. If empty, all styles will be output.
     * @return string Layout styles for the block.
     */
    protected function get_layout_styles($block_metadata, $types = array())
    {
    }
    /**
     * Creates new rulesets as classes for each preset value such as:
     *
     *   .has-value-color {
     *     color: value;
     *   }
     *
     *   .has-value-background-color {
     *     background-color: value;
     *   }
     *
     *   .has-value-font-size {
     *     font-size: value;
     *   }
     *
     *   .has-value-gradient-background {
     *     background: value;
     *   }
     *
     *   p.has-value-gradient-background {
     *     background: value;
     *   }
     *
     * @since 5.9.0
     *
     * @param array    $setting_nodes Nodes with settings.
     * @param string[] $origins       List of origins to process presets from.
     * @return string The new stylesheet.
     */
    protected function get_preset_classes($setting_nodes, $origins)
    {
    }
    /**
     * Converts each styles section into a list of rulesets
     * to be appended to the stylesheet.
     * These rulesets contain all the css variables (custom variables and preset variables).
     *
     * See glossary at https://developer.mozilla.org/en-US/docs/Web/CSS/Syntax
     *
     * For each section this creates a new ruleset such as:
     *
     *     block-selector {
     *       --wp--preset--category--slug: value;
     *       --wp--custom--variable: value;
     *     }
     *
     * @since 5.8.0
     * @since 5.9.0 Added the `$origins` parameter.
     *
     * @param array    $nodes   Nodes with settings.
     * @param string[] $origins List of origins to process.
     * @return string The new stylesheet.
     */
    protected function get_css_variables($nodes, $origins)
    {
    }
    /**
     * Given a selector and a declaration list,
     * creates the corresponding ruleset.
     *
     * @since 5.8.0
     *
     * @param string $selector     CSS selector.
     * @param array  $declarations List of declarations.
     * @return string The resulting CSS ruleset.
     */
    protected static function to_ruleset($selector, $declarations)
    {
    }
    /**
     * Given a settings array, returns the generated rulesets
     * for the preset classes.
     *
     * @since 5.8.0
     * @since 5.9.0 Added the `$origins` parameter.
     * @since 6.6.0 Added check for root CSS properties selector.
     *
     * @param array    $settings Settings to process.
     * @param string   $selector Selector wrapping the classes.
     * @param string[] $origins  List of origins to process.
     * @return string The result of processing the presets.
     */
    protected static function compute_preset_classes($settings, $selector, $origins)
    {
    }
    /**
     * Function that scopes a selector with another one. This works a bit like
     * SCSS nesting except the `&` operator isn't supported.
     *
     * <code>
     * $scope = '.a, .b .c';
     * $selector = '> .x, .y';
     * $merged = scope_selector( $scope, $selector );
     * // $merged is '.a > .x, .a .y, .b .c > .x, .b .c .y'
     * </code>
     *
     * @since 5.9.0
     * @since 6.6.0 Added early return if missing scope or selector.
     *
     * @param string $scope    Selector to scope to.
     * @param string $selector Original selector.
     * @return string Scoped selector.
     */
    public static function scope_selector($scope, $selector)
    {
    }
    /**
     * Scopes the selectors for a given style node.
     *
     * This includes the primary selector, i.e. `$node['selector']`, as well as any custom
     * selectors for features and subfeatures, e.g. `$node['selectors']['border']` etc.
     *
     * @since 6.6.0
     *
     * @param string $scope Selector to scope to.
     * @param array  $node  Style node with selectors to scope.
     * @return array Node with updated selectors.
     */
    protected static function scope_style_node_selectors($scope, $node)
    {
    }
    /**
     * Gets preset values keyed by slugs based on settings and metadata.
     *
     * <code>
     * $settings = array(
     *     'typography' => array(
     *         'fontFamilies' => array(
     *             array(
     *                 'slug'       => 'sansSerif',
     *                 'fontFamily' => '"Helvetica Neue", sans-serif',
     *             ),
     *             array(
     *                 'slug'   => 'serif',
     *                 'colors' => 'Georgia, serif',
     *             )
     *         ),
     *     ),
     * );
     * $meta = array(
     *    'path'      => array( 'typography', 'fontFamilies' ),
     *    'value_key' => 'fontFamily',
     * );
     * $values_by_slug = get_settings_values_by_slug();
     * // $values_by_slug === array(
     * //   'sans-serif' => '"Helvetica Neue", sans-serif',
     * //   'serif'      => 'Georgia, serif',
     * // );
     * </code>
     *
     * @since 5.9.0
     * @since 6.6.0 Passing $settings to the callbacks defined in static::PRESETS_METADATA.
     *
     * @param array    $settings        Settings to process.
     * @param array    $preset_metadata One of the PRESETS_METADATA values.
     * @param string[] $origins         List of origins to process.
     * @return array Array of presets where each key is a slug and each value is the preset value.
     */
    protected static function get_settings_values_by_slug($settings, $preset_metadata, $origins)
    {
    }
    /**
     * Similar to get_settings_values_by_slug, but doesn't compute the value.
     *
     * @since 5.9.0
     *
     * @param array    $settings        Settings to process.
     * @param array    $preset_metadata One of the PRESETS_METADATA values.
     * @param string[] $origins         List of origins to process.
     * @return array Array of presets where the key and value are both the slug.
     */
    protected static function get_settings_slugs($settings, $preset_metadata, $origins = \null)
    {
    }
    /**
     * Transforms a slug into a CSS Custom Property.
     *
     * @since 5.9.0
     *
     * @param string $input String to replace.
     * @param string $slug  The slug value to use to generate the custom property.
     * @return string The CSS Custom Property. Something along the lines of `--wp--preset--color--black`.
     */
    protected static function replace_slug_in_string($input, $slug)
    {
    }
    /**
     * Given the block settings, extracts the CSS Custom Properties
     * for the presets and adds them to the $declarations array
     * following the format:
     *
     *     array(
     *       'name'  => 'property_name',
     *       'value' => 'property_value,
     *     )
     *
     * @since 5.8.0
     * @since 5.9.0 Added the `$origins` parameter.
     *
     * @param array    $settings Settings to process.
     * @param string[] $origins  List of origins to process.
     * @return array The modified $declarations.
     */
    protected static function compute_preset_vars($settings, $origins)
    {
    }
    /**
     * Given an array of settings, extracts the CSS Custom Properties
     * for the custom values and adds them to the $declarations
     * array following the format:
     *
     *     array(
     *       'name'  => 'property_name',
     *       'value' => 'property_value,
     *     )
     *
     * @since 5.8.0
     *
     * @param array $settings Settings to process.
     * @return array The modified $declarations.
     */
    protected static function compute_theme_vars($settings)
    {
    }
    /**
     * Given a tree, it creates a flattened one
     * by merging the keys and binding the leaf values
     * to the new keys.
     *
     * It also transforms camelCase names into kebab-case
     * and substitutes '/' by '-'.
     *
     * This is thought to be useful to generate
     * CSS Custom Properties from a tree,
     * although there's nothing in the implementation
     * of this function that requires that format.
     *
     * For example, assuming the given prefix is '--wp'
     * and the token is '--', for this input tree:
     *
     *     {
     *       'some/property': 'value',
     *       'nestedProperty': {
     *         'sub-property': 'value'
     *       }
     *     }
     *
     * it'll return this output:
     *
     *     {
     *       '--wp--some-property': 'value',
     *       '--wp--nested-property--sub-property': 'value'
     *     }
     *
     * @since 5.8.0
     *
     * @param array  $tree   Input tree to process.
     * @param string $prefix Optional. Prefix to prepend to each variable. Default empty string.
     * @param string $token  Optional. Token to use between levels. Default '--'.
     * @return array The flattened tree.
     */
    protected static function flatten_tree($tree, $prefix = '', $token = '--')
    {
    }
    /**
     * Given a styles array, it extracts the style properties
     * and adds them to the $declarations array following the format:
     *
     *     array(
     *       'name'  => 'property_name',
     *       'value' => 'property_value,
     *     )
     *
     * @since 5.8.0
     * @since 5.9.0 Added the `$settings` and `$properties` parameters.
     * @since 6.1.0 Added `$theme_json`, `$selector`, and `$use_root_padding` parameters.
     * @since 6.5.0 Output a `min-height: unset` rule when `aspect-ratio` is set.
     * @since 6.6.0 Pass current theme JSON settings to wp_get_typography_font_size_value(), and process background properties.
     *
     * @param array   $styles Styles to process.
     * @param array   $settings Theme settings.
     * @param array   $properties Properties metadata.
     * @param array   $theme_json Theme JSON array.
     * @param string  $selector The style block selector.
     * @param boolean $use_root_padding Whether to add custom properties at root level.
     * @return array  Returns the modified $declarations.
     */
    protected static function compute_style_properties($styles, $settings = array(), $properties = \null, $theme_json = \null, $selector = \null, $use_root_padding = \null)
    {
    }
    /**
     * Returns the style property for the given path.
     *
     * It also converts references to a path to the value
     * stored at that location, e.g.
     * { "ref": "style.color.background" } => "#fff".
     *
     * @since 5.8.0
     * @since 5.9.0 Added support for values of array type, which are returned as is.
     * @since 6.1.0 Added the `$theme_json` parameter.
     * @since 6.3.0 It no longer converts the internal format "var:preset|color|secondary"
     *              to the standard form "--wp--preset--color--secondary".
     *              This is already done by the sanitize method,
     *              so every property will be in the standard form.
     *
     * @param array $styles Styles subtree.
     * @param array $path   Which property to process.
     * @param array $theme_json Theme JSON array.
     * @return string|array Style property value.
     */
    protected static function get_property_value($styles, $path, $theme_json = \null)
    {
    }
    /**
     * Builds metadata for the setting nodes, which returns in the form of:
     *
     *     [
     *       [
     *         'path'     => ['path', 'to', 'some', 'node' ],
     *         'selector' => 'CSS selector for some node'
     *       ],
     *       [
     *         'path'     => [ 'path', 'to', 'other', 'node' ],
     *         'selector' => 'CSS selector for other node'
     *       ],
     *     ]
     *
     * @since 5.8.0
     *
     * @param array $theme_json The tree to extract setting nodes from.
     * @param array $selectors  List of selectors per block.
     * @return array An array of setting nodes metadata.
     */
    protected static function get_setting_nodes($theme_json, $selectors = array())
    {
    }
    /**
     * Builds metadata for the style nodes, which returns in the form of:
     *
     *     [
     *       [
     *         'path'     => [ 'path', 'to', 'some', 'node' ],
     *         'selector' => 'CSS selector for some node',
     *         'duotone'  => 'CSS selector for duotone for some node'
     *       ],
     *       [
     *         'path'     => ['path', 'to', 'other', 'node' ],
     *         'selector' => 'CSS selector for other node',
     *         'duotone'  => null
     *       ],
     *     ]
     *
     * @since 5.8.0
     * @since 6.6.0 Added options array for modifying generated nodes.
     *
     * @param array $theme_json The tree to extract style nodes from.
     * @param array $selectors  List of selectors per block.
     * @param array $options {
     *     Optional. An array of options for now used for internal purposes only (may change without notice).
     *
     *     @type bool $include_block_style_variations Includes style nodes for block style variations. Default false.
     * }
     * @return array An array of style nodes metadata.
     * @phpstan-param array{
     *   include_block_style_variations?: bool,
     * } $options
     */
    protected static function get_style_nodes($theme_json, $selectors = array(), $options = array())
    {
    }
    /**
     * A public helper to get the block nodes from a theme.json file.
     *
     * @since 6.1.0
     *
     * @return array The block nodes in theme.json.
     */
    public function get_styles_block_nodes()
    {
    }
    /**
     * Gets the CSS rules for a particular block from theme.json.
     *
     * @since 6.1.0
     * @since 6.6.0 Setting a min-height of HTML when root styles have a background gradient or image.
     *              Updated general global styles specificity to 0-1-0.
     *              Fixed custom CSS output in block style variations.
     *
     * @param array $block_metadata Metadata about the block to get styles for.
     *
     * @return string Styles for the block.
     */
    public function get_styles_for_block($block_metadata)
    {
    }
    /**
     * Outputs the CSS for layout rules on the root.
     *
     * @since 6.1.0
     * @since 6.6.0 Use `ROOT_CSS_PROPERTIES_SELECTOR` for CSS custom properties and improved consistency of root padding rules.
     *              Updated specificity of body margin reset and first/last child selectors.
     *
     * @param string $selector The root node selector.
     * @param array  $block_metadata The metadata for the root block.
     * @return string The additional root rules CSS.
     */
    public function get_root_layout_rules($selector, $block_metadata)
    {
    }
    /**
     * For metadata values that can either be booleans or paths to booleans, gets the value.
     *
     *     $data = array(
     *       'color' => array(
     *         'defaultPalette' => true
     *       )
     *     );
     *
     *     static::get_metadata_boolean( $data, false );
     *     // => false
     *
     *     static::get_metadata_boolean( $data, array( 'color', 'defaultPalette' ) );
     *     // => true
     *
     * @since 6.0.0
     *
     * @param array      $data          The data to inspect.
     * @param bool|array $path          Boolean or path to a boolean.
     * @param bool       $default_value Default value if the referenced path is missing.
     *                                  Default false.
     * @return bool Value of boolean metadata.
     */
    protected static function get_metadata_boolean($data, $path, $default_value = \false)
    {
    }
    /**
     * Merges new incoming data.
     *
     * @since 5.8.0
     * @since 5.9.0 Duotone preset also has origins.
     *
     * @param WP_Theme_JSON $incoming Data to merge.
     */
    public function merge($incoming)
    {
    }
    /**
     * Converts all filter (duotone) presets into SVGs.
     *
     * @since 5.9.1
     *
     * @param array $origins List of origins to process.
     * @return string SVG filters.
     */
    public function get_svg_filters($origins)
    {
    }
    /**
     * Determines whether a presets should be overridden or not.
     *
     * @since 5.9.0
     * @deprecated 6.0.0 Use {@see 'get_metadata_boolean'} instead.
     *
     * @param array      $theme_json The theme.json like structure to inspect.
     * @param array      $path       Path to inspect.
     * @param bool|array $override   Data to compute whether to override the preset.
     * @return bool
     */
    protected static function should_override_preset($theme_json, $path, $override)
    {
    }
    /**
     * Returns the default slugs for all the presets in an associative array
     * whose keys are the preset paths and the leaves is the list of slugs.
     *
     * For example:
     *
     *     array(
     *       'color' => array(
     *         'palette'   => array( 'slug-1', 'slug-2' ),
     *         'gradients' => array( 'slug-3', 'slug-4' ),
     *       ),
     *     )
     *
     * @since 5.9.0
     *
     * @param array $data      A theme.json like structure.
     * @param array $node_path The path to inspect. It's 'settings' by default.
     * @return array
     */
    protected static function get_default_slugs($data, $node_path)
    {
    }
    /**
     * Gets a `default`'s preset name by a provided slug.
     *
     * @since 5.9.0
     *
     * @param string $slug The slug we want to find a match from default presets.
     * @param array  $base_path The path to inspect. It's 'settings' by default.
     * @return string|null
     */
    protected function get_name_from_defaults($slug, $base_path)
    {
    }
    /**
     * Removes the preset values whose slug is equal to any of given slugs.
     *
     * @since 5.9.0
     *
     * @param array $node  The node with the presets to validate.
     * @param array $slugs The slugs that should not be overridden.
     * @return array The new node.
     */
    protected static function filter_slugs($node, $slugs)
    {
    }
    /**
     * Removes insecure data from theme.json.
     *
     * @since 5.9.0
     * @since 6.3.2 Preserves global styles block variations when securing styles.
     * @since 6.6.0 Updated to allow variation element styles and $origin parameter.
     *
     * @param array  $theme_json Structure to sanitize.
     * @param string $origin    Optional. What source of data this object represents.
     *                          One of 'blocks', 'default', 'theme', or 'custom'. Default 'theme'.
     * @return array Sanitized structure.
     * @phpstan-param 'blocks'|'default'|'theme'|'custom' $origin
     */
    public static function remove_insecure_properties($theme_json, $origin = 'theme')
    {
    }
    /**
     * Processes a setting node and returns the same node
     * without the insecure settings.
     *
     * @since 5.9.0
     *
     * @param array $input Node to process.
     * @return array
     */
    protected static function remove_insecure_settings($input)
    {
    }
    /**
     * Processes a style node and returns the same node
     * without the insecure styles.
     *
     * @since 5.9.0
     *
     * @param array $input Node to process.
     * @return array
     */
    protected static function remove_insecure_styles($input)
    {
    }
    /**
     * Checks that a declaration provided by the user is safe.
     *
     * @since 5.9.0
     *
     * @param string $property_name  Property name in a CSS declaration, i.e. the `color` in `color: red`.
     * @param string $property_value Value in a CSS declaration, i.e. the `red` in `color: red`.
     * @return bool
     */
    protected static function is_safe_css_declaration($property_name, $property_value)
    {
    }
    /**
     * Returns the raw data.
     *
     * @since 5.8.0
     *
     * @return array Raw data.
     */
    public function get_raw_data()
    {
    }
    /**
     * Transforms the given editor settings according the
     * add_theme_support format to the theme.json format.
     *
     * @since 5.8.0
     *
     * @param array $settings Existing editor settings.
     * @return array Config that adheres to the theme.json schema.
     */
    public static function get_from_editor_settings($settings)
    {
    }
    /**
     * Returns the current theme's wanted patterns(slugs) to be
     * registered from Pattern Directory.
     *
     * @since 6.0.0
     *
     * @return string[]
     */
    public function get_patterns()
    {
    }
    /**
     * Returns a valid theme.json as provided by a theme.
     *
     * Unlike get_raw_data() this returns the presets flattened, as provided by a theme.
     * This also uses appearanceTools instead of their opt-ins if all of them are true.
     *
     * @since 6.0.0
     *
     * @return array
     */
    public function get_data()
    {
    }
    /**
     * Sets the spacingSizes array based on the spacingScale values from theme.json.
     *
     * @since 6.1.0
     * @deprecated 6.6.0 No longer used as the spacingSizes are automatically
     *                   generated in the constructor and merge methods instead
     *                   of manually after instantiation.
     *
     * @return null|void
     */
    public function set_spacing_sizes()
    {
    }
    /**
     * Returns the selectors metadata for a block.
     *
     * @since 6.3.0
     *
     * @param object $block_type    The block type.
     * @param string $root_selector The block's root selector.
     *
     * @return array The custom selectors set by the block.
     */
    protected static function get_block_selectors($block_type, $root_selector)
    {
    }
    /**
     * Generates all the element selectors for a block.
     *
     * @since 6.3.0
     *
     * @param string $root_selector The block's root CSS selector.
     * @return array The block's element selectors.
     */
    protected static function get_block_element_selectors($root_selector)
    {
    }
    /**
     * Generates style declarations for a node's features e.g., color, border,
     * typography etc. that have custom selectors in their related block's
     * metadata.
     *
     * @since 6.3.0
     *
     * @param object $metadata The related block metadata containing selectors.
     * @param object $node     A merged theme.json node for block or variation.
     *
     * @return array The style declarations for the node's features with custom
     * selectors.
     */
    protected function get_feature_declarations_for_node($metadata, &$node)
    {
    }
    /**
     * Resolves the values of CSS variables in the given styles.
     *
     * @since 6.3.0
     * @param WP_Theme_JSON $theme_json The theme json resolver.
     *
     * @return WP_Theme_JSON The $theme_json with resolved variables.
     */
    public static function resolve_variables($theme_json)
    {
    }
    /**
     * Generates a selector for a block style variation.
     *
     * @since 6.5.0
     *
     * @param string $variation_name Name of the block style variation.
     * @param string $block_selector CSS selector for the block.
     * @return string Block selector with block style variation selector added to it.
     */
    protected static function get_block_style_variation_selector($variation_name, $block_selector)
    {
    }
    /**
     * Collects valid block style variations keyed by block type.
     *
     * @since 6.6.0
     *
     * @return array Valid block style variations by block type.
     */
    protected static function get_valid_block_style_variations()
    {
    }
}