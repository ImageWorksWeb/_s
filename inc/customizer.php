<?php
/**
 * imageworks Theme Customizer
 *
 * @package imageworks
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function imageworks_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'imageworks_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'imageworks_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'imageworks_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function imageworks_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function imageworks_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function imageworks_customize_preview_js() {
	wp_enqueue_script( ' imageworks-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'imageworks_customize_preview_js' );

function fonts_customize_register( $wp_customize ) {

    $wp_customize->add_section( 'fonts_section' , array(
        'title'      => __( 'Fonts', 'imageworks' ),
        'priority'   => 30,
    ));

    $wp_customize->add_setting( 'typekit-id', array());
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'typekit_control',
            array(
                'label'      => __( 'Tykekit ID', 'imageworks' ),
                'section'    => 'fonts_section',
                'settings'   => 'typekit-id',
                'priority'   => 1
            )
        )
	);
	
	$wp_customize->add_setting( 'google-font', array());
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'googlefont_control',
            array(
                'label'      => __( 'Google Font Name', 'imageworks' ),
                'section'    => 'fonts_section',
                'settings'   => 'google-font',
                'priority'   => 2
            )
        )
    );

    // ..repeat ->add_setting() and ->add_control() for mytheme_company-division
}
add_action( 'customize_register', 'fonts_customize_register' );