<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package SC_Starter_2022
 */

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function sc_starter_2022_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'sc_starter_2022_pingback_header' );

/**
 * Add Tailwind classes to primary menu navigation links.
 */
function sc_starter_2022_nav_class( $classes, $item, $args ) {
 
    if ( 'menu-1' === $args->theme_location ) {
        $classes[] = "border-b p-3 bg-white md:border-0 md:p-0 ";
    }

    return $classes;
}
add_filter( 'nav_menu_css_class' , 'sc_starter_2022_nav_class' , 1, 3 );
