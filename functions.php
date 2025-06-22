<?php
/**
 * Functions file for DarkMatter theme.
 *
 * @package darkmatter
 * @since   DarkMatter 1.0.0
 */

use DarkMatter\Theme;

/**
 * Screen Time FSE theme base directory path
 */
define('DM_THEME_PATH', get_template_directory());

/**
 * Screen Time FSE theme base URL path
 */
define('DM_THEME_URL', get_template_directory_uri());

require_once DM_THEME_PATH . '/include/helpers/autoloader.php';

if (! function_exists('darkmatter_setup') ) {
    /**
     * Screen Time FSE Main setup function.
     *
     * @return void
     */
    function darkmatter_setup()
    {
        Theme::get_instance();
    }
}
darkmatter_setup();

if (! function_exists('dm_load_textdomain') ) {
    /**
     * Load the textdomain from template-dir/languages
     *
     * @return void
     */
    function dm_load_textdomain()
    {
        load_theme_textdomain('dm-darkmatter', false, DM_THEME_PATH . '/languages');
    }
}

add_action('after_setup_theme', 'dm_load_textdomain');
