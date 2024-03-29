<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package SC_Starter_2022
 */

get_header();
?>

	<main id="primary">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content/content', get_post_type() );
		?>

			<?php 
				the_post_navigation(
					array(
						'prev_text' => '<span>' . esc_html__( 'Previous:', 'sc-starter-2022' ) . '</span> <span>%title</span>',
						'next_text' => '<span>' . esc_html__( 'Next:', 'sc-starter-2022' ) . '</span> <span>%title</span> ',
					)
				);
			?>
		<div class="max-w-content mx-auto">

		<?php

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</div>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
