<?php 
/**
 * Template part for displaying the page heading.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SC_Starter_2022
 */

if( is_front_page() ) {
    return false;
}
?>
<header class="mb-5">
    <?php
        $bg = '';
        $featured_img = ( is_singular(  ) ) ? get_the_post_thumbnail_url() : '';
        if( $featured_img != '') {
            $bg = 'style="background-image:url(' . $featured_img . ');background-position: center center;background-size:cover;"';
        }
        $title = ( is_archive() || is_home() ) ? get_the_archive_title() : get_the_title();
    ?>
    <div class="flex items-center justify-center bg-black text-white p-32" <?php echo $bg; ?>>
        <h1 class="entry-title text-white"> <?php echo $title; ?></h1>
    </div>
</header>