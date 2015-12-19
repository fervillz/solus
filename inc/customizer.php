<?php
/**
 * Solus Theme Customizer.
 *
 * @package Solus
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function solus_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->add_section( 'solus_section' , array(
    'title'       => __( 'Logo', 'solus' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
    ) );
    
    $wp_customize->add_setting( 'solus',
        'sanitize_callback' == 'esc_url_raw'
    );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'solus', array(
        'label'    => __( 'Logo', 'solus' ),
        'section'  => 'solus_section',
        'settings' => 'solus',
        'sanitize_callback' => 'esc_url_raw',
    ) ) );

    /**
     * Custom template tags for this theme.
     */
    require get_template_directory() . '/inc/customizer-social.php';

}
add_action( 'customize_register', 'solus_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function solus_customize_preview_js() {
	wp_enqueue_script( 'solus_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'solus_customize_preview_js' );
