<?php
/**
 * Template part: sticky mobile circle navigation.
 *
 * Renders site pages as circular links in a horizontally scrollable bar.
 * Loaded on the front page only via twentytwentyfive_render_sticky_mobile_nav().
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<nav
	class="mobile-sticky-circle-nav"
	aria-label="<?php esc_attr_e( 'Mobile page navigation', 'twentytwentyfive' ); ?>"
>
	<div class="mobile-sticky-circle-nav__scroll" tabindex="0">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'sticky-mobile',
				'container'      => false,
				'menu_class'     => 'circle-nav-container',
				'fallback_cb'    => 'twentytwentyfive_sticky_mobile_nav_fallback',
				'depth'          => 1,
				'link_before'    => '<span class="circle-nav-label">',
				'link_after'     => '</span>',
			)
		);
		?>
	</div>
</nav>
