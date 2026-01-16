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
class Assets {


	use Singleton;

	/**
	 * Constructor for DarkMatter Theme Assets
	 *
	 * @return void
	 */
	public function __construct() {
		add_action( 'enqueue_block_assets', array( $this, 'enqueue_assets' ) );
		add_filter( 'style_loader_tag', array( $this, 'enqueue_non_critical_assets' ), 10, 2 );
	}

	/**
	 * Enqueues styles and scripts for the theme.
	 *
	 * @return void
	 */
	public function enqueue_assets() {
		$style_asset = include get_theme_file_path( 'assets/build/css/screen.asset.php' );
		wp_enqueue_style(
			'main',
			get_theme_file_uri( 'assets/build/css/screen.css' ),
			$style_asset['dependencies'],
			$style_asset['version']
		);

		$hand_asset = include get_theme_file_path( 'assets/build/css/hand.asset.php' );

		wp_enqueue_style(
			'hand',
			get_theme_file_uri( 'assets/build/css/hand.css' ),
			$hand_asset['dependencies'],
			$hand_asset['version']
		);

		if ( is_front_page() ) {
			$home_styles = include get_theme_file_path( 'assets/build/css/home.asset.php' );
				wp_enqueue_style(
					'home',
					get_theme_file_uri( 'assets/build/css/home.css' ),
					$style_asset['dependencies'],
					$style_asset['version']
				);
		}

		$script_asset = include get_theme_file_path( 'assets/build/js/screen.asset.php' );

		wp_enqueue_script(
			'main-js',
			get_theme_file_uri( 'assets/build/js/screen.js' ),
			$script_asset['dependencies'],
			$script_asset['version'],
			array(
				'strategy' => 'defer',
			)
		);
	}

	/**
	 * Filters the style tag for non‑critical assets to load them asynchronously.
	 *
	 * @param string $html   The style tag HTML.
	 * @param string $handle The style handle.
	 * @return string Modified HTML with media attributes for asynchronous loading.
	 */
	public function enqueue_non_critical_assets( $html, $handle ) {
		if ( 'hand' === $handle ) {
			$html = str_replace( "media='all'", "media='print' onload=\"this.media='all'\"", $html );
		}
		return $html;
	}
}
