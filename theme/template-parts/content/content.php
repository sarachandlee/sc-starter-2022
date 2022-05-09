<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SC_Starter_2022
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php
		// if ( is_singular() ) :
		// 	get_template_part( 'template-parts/content/content', 'page-header' ); 
		// else :
		// 	the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		// endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div>
				<?php
				sc_starter_2022_posted_on();
				sc_starter_2022_posted_by();
				?>
			</div>
		<?php endif; ?>
	</header>

	<?php //sc_starter_2022_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span> "%s"</span>', 'sc-starter-2022' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div>' . esc_html__( 'Pages:', 'sc-starter-2022' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>

	<footer>
		<?php sc_starter_2022_entry_footer(); ?>
	</footer>
</article><!-- #post-<?php the_ID(); ?> -->
