<?php
function ocws_natural_enqueue_styles() {

    $parent_style = 'natural-style'; 

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'ocws_natural_enqueue_styles' );

	
           	remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
		remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

		add_action('woocommerce_before_main_content', 'ocws_natural_wrapper_start', 10);
		add_action('woocommerce_after_main_content', 'ocws_natural_wrapper_end', 10); 

        


remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'ocws_natural_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'ocws_natural_wrapper_end', 10);

function ocws_natural_wrapper_start() {
  
    echo '<div class="postarea full">';
  
}

function ocws_natural_wrapper_end() {
  echo '</div>';
}
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

                /*
		* Enable support for custom header.
		*/
		register_default_headers( array(
			'default' => array(
			'url'   => get_template_directory_uri() . '/images/default-header.jpg',
			'thumbnail_url' => get_template_directory_uri() . '/images/default-header.jpg',
			'description'   => esc_html__( 'Default Custom Header', 'ocws-natural' ),
			),
		));
		$defaults = array(
			'width'                 => 1600,
			'height'                => 480,
			'default-image'			=> get_template_directory_uri() . '/images/default-header.jpg',
			'flex-height'           => true,
			'flex-width'            => true,
			'header-text'           => false,
			'uploads'               => true,
		);
		add_theme_support( 'custom-header', $defaults );


?>