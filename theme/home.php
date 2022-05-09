<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SC_Starter_2022
 */

get_header();
?>

	<main id="primary">

		<?php if ( have_posts() ) : ?>
			<!-- The page heading. -->
			<?php get_template_part( 'template-parts/content/content', 'page-header' ); ?>
			
			<section class="container mx-auto p-3 md:flex md:flex-wrap">
					<?php
					/* Start the Loop */
					while ( have_posts() ) :

						the_post();

						get_template_part( 'template-parts/content/content', 'archive-post' );

					endwhile; ?>
			</section>

			<?php

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
