<?php
/**
 * Title: Hero Section Pattern
 * Slug: darkmatter/hero
 *
 * @package DarkMatter
 */

?>


<!-- wp:group {"className":"dm-hero","layout":{"type":"constrained","contentSize":"1001px"}} -->
<div class="wp-block-group dm-hero">

	<!-- wp:html -->
	<div class="dm-bubbles"><span style="--i: 37;"></span><span style="--i: 30;"></span><span style="--i: 39;"></span><span style="--i: 12;"></span><span style="--i: 16;"></span><span style="--i: 22;"></span><span style="--i: 43;"></span><span style="--i: 14;"></span><span style="--i: 23;"></span><span style="--i: 35;"></span><span style="--i: 48;"></span><span style="--i: 35;"></span><span style="--i: 22;"></span><span style="--i: 15;"></span><span style="--i: 34;"></span><span style="--i: 44;"></span><span style="--i: 18;"></span><span style="--i: 41;"></span><span style="--i: 28;"></span><span style="--i: 10;"></span><span style="--i: 40;"></span><span style="--i: 22;"></span><span style="--i: 35;"></span><span style="--i: 41;"></span><span style="--i: 48;"></span><span style="--i: 11;"></span><span style="--i: 18;"></span><span style="--i: 38;"></span><span style="--i: 18;"></span></div>
	<!-- /wp:html -->

	<!-- wp:media-text {"mediaType":"image","mediaWidth":40,"imageFill":false,"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
	<div
	class="wp-block-media-text is-stacked-on-mobile"
	style="
		padding-top: var(--wp--preset--spacing--80);
		padding-right: var(--wp--preset--spacing--40);
		padding-bottom: var(--wp--preset--spacing--80);
		padding-left: var(--wp--preset--spacing--40);
		grid-template-columns: 40% auto;
	"
	>
	<figure class="wp-block-media-text__media">
		<img
		src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pc.svg"
		alt=""
		/>
	</figure>
	<div class="wp-block-media-text__content">
		<!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"huge"} -->
		<h1
		class="wp-block-heading has-huge-font-size"
		style="margin-top: 0; margin-bottom: 0"
		>
		Hello! I am
		</h1>
		<!-- /wp:heading -->

		<!-- wp:heading {"className":"hero-name","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"100","fontSize":"5.6rem"}},"fontFamily":"galada"} -->
		<h2
		class="wp-block-heading hero-name has-galada-font-family"
		style="
			margin-top: 0;
			margin-bottom: 0;
			padding-top: 0;
			padding-right: 0;
			padding-bottom: 0;
			padding-left: 0;
			font-size: 5.6rem;
			font-style: normal;
			font-weight: 100;
		"
		>
		DarkMatter<mark
			style="background-color: rgba(0, 0, 0, 0)"
			class="has-inline-color has-contrast-color"
			>.</mark
		>
		</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.5rem"}}} -->
		<p style="font-size: 1.5rem">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
		veniam, quis nostrud exercitation ullamco laboris.
		</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
		<div class="wp-block-buttons">
		<!-- wp:button {"style":{"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}}}} -->
		<div class="wp-block-button">
		<a class="wp-block-button__link wp-element-button" href="#projects" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0" rel="#projects">View my Projects<span></span><span></span><span></span><span></span></a>
		</div>
		<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	</div>
	<!-- /wp:media-text -->
</div>
<!-- /wp:group -->
