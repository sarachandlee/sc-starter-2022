<?php 
/**
 * A function to register custom block patterns for this theme.
 *
 * @package SC_Starter_2022
 */

function sc_starter_2022_register_block_patterns() {
    register_block_pattern(
        'sc_starter_2022/3-col-features',
        array(
            'title'         => __( '3 Column Features', 'sc_starter_2022' ),
            'description'   => _x( 'A simple pattern for a 3 column features block.', 'Block pattern description', 'sc_starter_2022' ),
            'content'       => '
                                <!-- wp:group {"align":"full","backgroundColor":"tertiary","className":"py-6"} -->
                                <div class="wp-block-group alignfull py-6 has-tertiary-background-color has-background"><!-- wp:heading {"textAlign":"center"} -->
                                <h2 class="has-text-align-center">How to get started.</h2>
                                <!-- /wp:heading -->
                                
                                <!-- wp:group {"layout":{"inherit":true}} -->
                                <div class="wp-block-group"><!-- wp:columns {"align":"wide"} -->
                                <div class="wp-block-columns alignwide"><!-- wp:column -->
                                <div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":3} -->
                                <h3 class="has-text-align-center">Heading 3</h3>
                                <!-- /wp:heading -->
                                
                                <!-- wp:paragraph {"align":"center"} -->
                                <p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <!-- /wp:paragraph --></div>
                                <!-- /wp:column -->
                                
                                <!-- wp:column -->
                                <div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":3} -->
                                <h3 class="has-text-align-center">Heading 3</h3>
                                <!-- /wp:heading -->
                                
                                <!-- wp:paragraph {"align":"center"} -->
                                <p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <!-- /wp:paragraph --></div>
                                <!-- /wp:column -->
                                
                                <!-- wp:column -->
                                <div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":3} -->
                                <h3 class="has-text-align-center">Heading 3</h3>
                                <!-- /wp:heading -->
                                
                                <!-- wp:paragraph {"align":"center"} -->
                                <p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <!-- /wp:paragraph --></div>
                                <!-- /wp:column --></div>
                                <!-- /wp:columns --></div>
                                <!-- /wp:group --></div>
                                <!-- /wp:group -->                                
                                ',
            'categories'    => array( 'text' ),
            'keywords'      => array( 'columns', 'features' ),
            'viewportWidth' => 800,
        )
    );
}
add_action( 'init', 'sc_starter_2022_register_block_patterns' );