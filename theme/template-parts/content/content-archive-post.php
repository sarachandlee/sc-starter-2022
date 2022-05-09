<?php 
/**
 * Template part for displaying the page heading.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SC_Starter_2022
 */

?>

<div class="w-full mb-4 md:w-1/2 lg:w-1/4 md:pr-3">

    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">

        <!-- The post thumbnail. -->
        <div class="h-48 md:h-40 bg-primary" style="background-image:url(<?php echo get_the_post_thumbnail_url()?>);background-position: center center;background-size:cover"></div>

        <!-- The title & content. -->
        <?php 

            the_title('<h2 class="font-bold">', '</h2>');

            echo get_the_excerpt();

        ?>

    </a>
</div>