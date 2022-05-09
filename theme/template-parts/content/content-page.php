<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SC_Starter_2022
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- The page heading. -->
	<?php get_template_part( 'template-parts/content/content', 'page-header' ); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div>' . esc_html__( 'Pages:', 'sc-starter-2022' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>

	<?php if ( get_edit_post_link() ) : ?>
		<footer>
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span>%s</span>', 'sc-starter-2022' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span>',
				'</span>'
			);
			?>
		</footer>
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
