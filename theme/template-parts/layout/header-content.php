<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SC_Starter_2022
 */

?>

<header id="masthead" class="border-b relative">
	<div class="flex container mx-auto p-3 space-x-6 justify-between items-center">
		<div class="w-1/2">
			<?php
			if( the_custom_logo() ) {
				the_custom_logo();
			} else { ?>
				<h2 class="font-bold text-2xl"><a href="<?php echo home_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a></h2>
			<?php 
			}
			?>

		</div>

		<nav id="site-navigation" class="w-1/2 flex justify-end">
			<button 
				aria-controls="primary-menu" 
				aria-expanded="false"
				class="md:hidden block"
			>
				<?php esc_html_e( 'Primary Menu', 'sc-starter-2022' ); ?>
			</button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'	 => 'absolute left-0 right-0 top-14 hidden z-50 md:flex md:static md:justify-between md:space-x-8 ',
					'a_class'   	 => 'border-b',
					'container'		 => 'ul'
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</div>
</header><!-- #masthead -->
