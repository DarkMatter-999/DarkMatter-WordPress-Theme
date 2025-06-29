<?php
/**
 * Blocks Class File
 *
 * Main Block Assets class file for DarkMatter theme.
 *
 * @package DarkMatter
 **/

namespace DarkMatter;

use DarkMatter\Traits\Singleton;

/**
 * Block Class File
 *
 * Main Block Assets class file for DarkMatter theme.
 *
 * @since 1.0.0
 **/
class Blocks {


	use Singleton;

	/**
	 * Constructor for DarkMatter Theme Assets
	 *
	 * @return void
	 */
	public function __construct() {
			add_filter( 'render_block_core/button', array( $this, 'custom_button_markup' ), 16, 2 );
	}

	/**
	 * Custom markup for the core/button.
	 *
	 * @param string $block_content Blocks Content.
	 * @param array  $block         Block instance.
	 * @return string
	 */
	public function custom_button_markup( $block_content, $block ) {
		if ( isset( $block['blockName'] ) && 'core/button' === $block['blockName'] ) {
			$block_content = preg_replace_callback(
				'/(<a\b[^>]*class="[^"]*wp-block-button__link[^"]*"[^>]*>)(.*?)(<\/a>)/s',
				function ( $matches ) {
					$new_content = $matches[1] . $matches[2]
						. '<span></span><span></span><span></span><span></span>' . $matches[3];
					return $new_content;
				},
				$block_content
			);
		}

		return $block_content;
	}
}
