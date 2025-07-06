<?php
/**
 * Title: Project Link Pattern
 * Slug: darkmatter/project_link
 *
 * @package DarkMatter
 */

$project_link = get_post_meta( get_the_ID(), 'dm_project_link', true );

if ( ! empty( $project_link ) ) :
	?>
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
	<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $project_link ); ?>">View Repository</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
	<?php
elseif ( is_admin() ) :
	?>
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">View Repository</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php endif; ?>
