<?php
/**
 * Functions and definitions
 */

// THEME SUPPORT
require get_template_directory() . '/includes/theme-support.php';

// CUSTOMIZER
require get_template_directory() . '/includes/customizer.php';

// ENQUEUE SCRIPTS AND STYLES
require get_template_directory() . '/includes/enqueue-style-scripts.php';

// CUSTOM POST TYPES
require get_template_directory() . '/includes/custom-post-types.php';

// CUSTOM POST TAXONOMIES
require get_template_directory() . '/includes/custom-taxonomies.php';

// CUSTOM POST METABOXES
require get_template_directory() . '/includes/custom-metaboxes.php';

// CUSTOM POST SHORTCODES
require get_template_directory() . '/includes/shortcodes.php';