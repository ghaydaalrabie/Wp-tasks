<?php 
/**
 * Enqueue the stylesheet.
 */
function calanthalite_enqueue_customizer_stylesheet() {
	wp_register_style( 'aulietta-customizer-css', get_template_directory_uri() . '/assets/css/customizer.css', NULL, NULL, 'all' );
	wp_enqueue_style( 'aulietta-customizer-css' );
}

add_action( 'customize_controls_print_styles', 'calanthalite_enqueue_customizer_stylesheet' );
/**
 * Premade a Post
 */
function calanthalite_customize_pre_posts()
{
    $args = array(
        'posts_per_page' => -1
    );
    $posts = get_posts( $args );
    $options = array();
    $options[0] = 'Select a Post';
    foreach ( $posts as $post ) {
        $options[$post->ID] = wp_trim_words( $post->post_title, 5, '...');
    }
    wp_reset_postdata();
    return $options;
}
if (class_exists('Kirki')) {
	/**Remove sections default*/
	function calanthalite_changer_sections( $wp_customize ) {
	    $wp_customize->remove_section( 'title_tagline' );
	    $wp_customize->remove_section( 'colors' );
	    $wp_customize->remove_section( 'background_image' );
	    $wp_customize->remove_panel( 'tt_font_typography_panel' );
	}
	add_action( 'customize_register', 'calanthalite_changer_sections' );

	// Custormizer setting ----------------------------------------------------------------------------------------------
	Kirki::add_config( 'calanthalite_theme_option', array(
		'capability'    => 'edit_theme_options',
		'option_type'   => 'theme_mod',
	) );
	/*------------------------------
		Genaral
	--------------------------------*/
	Kirki::add_panel( 'calanthalite_style_setting', array(
	    'title'       => esc_html__( 'Site Style Setting', 'calanthalite' ),
	    'priority'    => 1,
	) );

	Kirki::add_section( 'colors', array(
	    'title'          => esc_html__( 'Color', 'calanthalite' ),
	    'panel'          => 'calanthalite_style_setting',
	    'priority'       => 5,
	) );
	Kirki::add_field( 'calanthalite_theme_option', [
		'type'        => 'color',
		'settings'    => 'calanthalite_body_color',
		'label'       => __( 'Body Color', 'calanthalite' ),
		'section'     => 'colors',
		'default'     => '#333',
	] );
	Kirki::add_field( 'calanthalite_theme_option', [
		'type'        => 'color',
		'settings'    => 'calanthalite_accent_color',
		'label'       => __( 'Accent Color', 'calanthalite' ),
		'section'     => 'colors',
		'default'     => '#c37808',
	] );
	Kirki::add_section( 'background_image', array(
	    'title'          => esc_html__( 'Background Image', 'calanthalite' ),
	    'panel'          => 'calanthalite_style_setting',
	    'priority'       => 10,
	) );

	/*----------------------------*/
	#Header
	/*----------------------------*/
	Kirki::add_panel( 'calanthalite_header_setting', array(
	    'title'       => esc_html__( 'Header', 'calanthalite' ),
	    'priority'    => 1,
	) );
	// Site Indentity
	Kirki::add_section( 'title_tagline', array(
	    'title'          => esc_html__( 'Site Indentity', 'calanthalite' ),
	    'panel'          => 'calanthalite_header_setting',
	    'priority'       => 2,
	) );
	Kirki::add_field( 'calanthalite_theme_option', [
		'type'        => 'switch',
		'settings'    => 'calanthalite_hide_tagline',
		'label'       => esc_html__( 'Display tagline?', 'calanthalite' ),
		'section'     => 'title_tagline',
		'default'     => 'on',
		'priority'    => 15,
		'choices'     => [
			'on'   => esc_html__( 'Show', 'calanthalite' ),
			'off' => esc_html__( 'Hide', 'calanthalite' ),
		],
	] );

	/*-------------------------
		SOCIAL NETWORK
	--------------------------*/
	Kirki::add_section( 'calanthalite_section_social_media', array(
	    'title'       => esc_html__( 'Social Network', 'calanthalite' ),
	    'priority'    => 25,
	) );
	Kirki::add_field( 'calanthalite_theme_option', [
		'type'     => 'link',
		'settings' => 'calanthalite_facebook_url',
		'label'    => __( 'Facebook Url', 'calanthalite' ),
		'section'  => 'calanthalite_section_social_media',
		'default'  => '',
	] );
	Kirki::add_field( 'calanthalite_theme_option', [
		'type'     => 'link',
		'settings' => 'calanthalite_twitter_url',
		'label'    => __( 'Twitter Url', 'calanthalite' ),
		'section'  => 'calanthalite_section_social_media',
		'default'  => '',
	] );
	Kirki::add_field( 'calanthalite_theme_option', [
		'type'     => 'link',
		'settings' => 'calanthalite_instagram_url',
		'label'    => __( 'Instagram Url', 'calanthalite' ),
		'section'  => 'calanthalite_section_social_media',
		'default'  => '',
	] );
	Kirki::add_field( 'calanthalite_theme_option', [
		'type'     => 'link',
		'settings' => 'calanthalite_pinterest_url',
		'label'    => __( 'Pinterest Url', 'calanthalite' ),
		'section'  => 'calanthalite_section_social_media',
		'default'  => '',
	] );
	Kirki::add_field( 'calanthalite_theme_option', [
		'type'     => 'link',
		'settings' => 'calanthalite_youtube_url',
		'label'    => __( 'Youtube Url', 'calanthalite' ),
		'section'  => 'calanthalite_section_social_media',
		'default'  => '',
	] );
	Kirki::add_field( 'calanthalite_theme_option', [
		'type'     => 'link',
		'settings' => 'calanthalite_vimeo_url',
		'label'    => __( 'Vimeo Url', 'calanthalite' ),
		'section'  => 'calanthalite_section_social_media',
		'default'  => '',
	] );
	Kirki::add_field( 'calanthalite_theme_option', [
		'type'     => 'link',
		'settings' => 'calanthalite_linkedin_url',
		'label'    => __( 'Linkedin Url', 'calanthalite' ),
		'section'  => 'calanthalite_section_social_media',
		'default'  => '',
	] );

	/*--------------------------
			FOOTER
	--------------------------*/
	Kirki::add_section( 'calanthalite_section_footer', array(
	    'title'       => esc_html__( 'Footer', 'calanthalite' ),
	    'priority'    => 30,
	) );
	Kirki::add_field( 'calanthalite_theme_option', [
		'type'        => 'custom',
		'settings'    => 'heading_main_footer',
		'section'     => 'calanthalite_section_footer',
		'default'         => '<h3 class="heading-custormize">' . __( 'Main Footer', 'calanthalite' ) . '</h3>',
	] );	
	Kirki::add_field( 'calanthalite_theme_option', [
		'type'        => 'image',
		'settings'    => 'logo_footer',
		'label'       => esc_html__( 'Logo Footer', 'calanthalite' ),
		'section'     => 'calanthalite_section_footer',
		'default'     => '',
	] );
	Kirki::add_field( 'calanthalite_theme_option', [
		'type'        => 'switch',
		'settings'    => 'calanthalite_show_tagline_footer',
		'label'       => esc_html__( 'Display tagline footer?', 'calanthalite' ),
		'section'     => 'calanthalite_section_footer',
		'default'     => 'on',
		'choices'     => [
			'on'   => esc_html__( 'Show', 'calanthalite' ),
			'off' => esc_html__( 'Hide', 'calanthalite' ),
		],
	] );
	Kirki::add_field( 'calanthalite_theme_option', [
		'type'        => 'switch',
		'settings'    => 'calanthalite_show_social_footer',
		'label'       => esc_html__( 'Show/hide social footer?', 'calanthalite' ),
		'section'     => 'calanthalite_section_footer',
		'default'     => 'on',
		'choices'     => [
			'on'   => esc_html__( 'Show', 'calanthalite' ),
			'off' => esc_html__( 'Hide', 'calanthalite' ),
		],
	] );
	Kirki::add_field( 'calanthalite_theme_option', [
		'type'        => 'custom',
		'settings'    => 'heading_copuright_footer',
		'section'     => 'calanthalite_section_footer',
		'default'         => '<h3 class="heading-custormize">' . __( 'Copyright', 'calanthalite' ) . '</h3>',
	] );
	Kirki::add_field( 'calanthalite_theme_option', [
		'type'     => 'textarea',
		'settings' => 'calanthalite_footer_copyright_text',
		'label'    => esc_html__( 'Copyright Text', 'calanthalite' ),
		'section'  => 'calanthalite_section_footer',
		'default'  => esc_html__( 'Your Copyright Text', 'calanthalite' ),
	] );
}