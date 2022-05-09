<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SC_Starter_2022
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div>
			<?php
			sc_starter_2022_posted_on();
			sc_starter_2022_posted_by();
			?>
		</div>
		<?php endif; ?>
	</header>

	<?php sc_starter_2022_post_thumbnail(); ?>

	<div>
		<?php the_excerpt(); ?>
	</div>

	<footer>
		<?php sc_starter_2022_entry_footer(); ?>
	</footer>
</article><!-- #post-<?php the_ID(); ?> -->
