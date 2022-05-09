<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SC_Starter_2022
 */

?>

<footer id="colophon" class="bg-black text-white p-3">
	<div class="text-center container mx-auto">
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'sc-starter-2022' ) ); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf( esc_html__( 'Proudly powered by %s', 'sc-starter-2022' ), 'WordPress' );
			?>
		</a>
	</div>
</footer><!-- #colophon -->
