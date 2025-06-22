<?php
/**
 * Main Assets Class File
 *
 * Main Theme Asset class file for DarkMatter theme. This class enqueues the necessary scripts and styles.
 *
 * @package DarkMatter
 **/

namespace DarkMatter;

use DarkMatter\Traits\Singleton;

/**
 * Main Assets Class File
 *
 * Main Theme Asset class file for DarkMatter theme. This class enqueues the necessary scripts and styles.
 *
 * @since 1.0.0
 **/
class Assets
{

    use Singleton;

    /**
     * Constructor for DarkMatter Theme Screen TimeAssets
     *
     * @return void
     */
    public function __construct()
    {
        add_action('enqueue_block_assets', array( $this, 'enqueue_assets' ));
        add_action('enqueue_block_editor_assets', array($this, 'enqueue_block_assets'));
    }

    /**
     * Enqueues styles and scripts for the theme.
     *
     * @return void
     */
    public function enqueue_assets()
    {
        $style_asset = include get_theme_file_path('assets/build/css/screen.asset.php');
        wp_enqueue_style(
            'main',
            get_theme_file_uri('assets/build/css/screen.css'),
            $style_asset['dependencies'],
            $style_asset['version']
        );

        $script_asset = include get_theme_file_path('assets/build/js/screen.asset.php');

        wp_enqueue_script(
            'main-js',
            get_theme_file_uri('assets/build/js/screen.js'),
            $script_asset['dependencies'],
            $script_asset['version'],
            true
        );
    }

    /**
     * Enqueues styles and scripts for the block editor.
     *
     * @return void
     */
    public function enqueue_block_assets()
    {
        $style_asset = include get_theme_file_path('assets/build/css/editor.asset.php');

        wp_enqueue_style(
            'main-editor',
            get_theme_file_uri('assets/build/css/editor.css'),
            $style_asset['dependencies'],
            $style_asset['version']
        );
    }
}
