<?php
/**
 * Template part for displaying the post (default) archive page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SC_Starter_2022
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php get_template_part( 'template-parts/content/content', 'page-header' ); ?>
</article>