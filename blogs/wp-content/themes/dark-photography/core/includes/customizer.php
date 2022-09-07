<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'dark_photography_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'dark-photography' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'dark_photography_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'dark-photography' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'dark_photography_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'dark-photography' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'dark-photography' ),
			'off' => esc_html__( 'Disable', 'dark-photography' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'dark_photography_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'dark-photography' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'dark-photography' ),
			'off' => esc_html__( 'Disable', 'dark-photography' ),
		],
	] );

	// PANEL

	Kirki::add_panel( 'dark_photography_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'dark-photography' ),
	) );

	// Scroll Top

	Kirki::add_section( 'dark_photography_section_scroll', array(
	    'title'          => esc_html__( 'Additional Settings', 'dark-photography' ),
	    'description'    => esc_html__( 'Scroll To Top', 'dark-photography' ),
	    'panel'          => 'dark_photography_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'dark_photography_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'dark-photography' ),
		'section'     => 'dark_photography_section_scroll',
		'default'     => '1',
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'menu_text_transform_dark_photography',
		'label'       => esc_html__( 'Menus Text Transform', 'dark-photography' ),
		'section'     => 'dark_photography_section_scroll',
		'default'     => 'UPPERCASE',
		'placeholder' => esc_html__( 'Choose an option', 'dark-photography' ),
		'choices'     => [
			'CAPITALISE' => esc_html__( 'CAPITALISE', 'dark-photography' ),
			'UPPERCASE' => esc_html__( 'UPPERCASE', 'dark-photography' ),
			'LOWERCASE' => esc_html__( 'LOWERCASE', 'dark-photography' ),

		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'dark_photography_container_width',
		'label'       => esc_html__( 'Theme Container Width', 'dark-photography' ),
		'section'     => 'dark_photography_section_scroll',
		'default'     => 100,
		'choices'     => [
			'min'  => 50,
			'max'  => 100,
			'step' => 1,
		],
	] );

	// POST SECTION

	Kirki::add_section( 'dark_photography_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'dark-photography' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'dark-photography' ),
	    'panel'          => 'dark_photography_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'dark_photography_enable_post_heading',
		'section'     => 'dark_photography_section_post',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Post Settings.', 'dark-photography' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'dark_photography_blog_admin_enable',
		'label'       => esc_html__( 'Post Author Enable / Disable Button', 'dark-photography' ),
		'section'     => 'dark_photography_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'dark-photography' ),
			'off' => esc_html__( 'Disable', 'dark-photography' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'dark_photography_blog_comment_enable',
		'label'       => esc_html__( 'Post Comment Enable / Disable Button', 'dark-photography' ),
		'section'     => 'dark_photography_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'dark-photography' ),
			'off' => esc_html__( 'Disable', 'dark-photography' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'dark_photography_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'dark-photography' ),
		'section'     => 'dark_photography_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	// HEADER SECTION

	Kirki::add_section( 'dark_photography_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'dark-photography' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'dark-photography' ),
	    'panel'          => 'dark_photography_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'dark_photography_phone_number_heading',
		'section'     => 'dark_photography_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Phone Number', 'dark-photography' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'dark_photography_header_phone_number',
		'section'  => 'dark_photography_section_header',
		'default'  => '',
		'priority' => 10,
		'sanitize_callback' => 'dark_photography_sanitize_phone_number',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'dark_photography_email_address_heading',
		'section'     => 'dark_photography_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Email Address', 'dark-photography' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'dark_photography_header_email_address',
		'section'  => 'dark_photography_section_header',
		'default'  => '',
		'priority' => 10,
		'sanitize_callback' => 'sanitize_email',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'dark_photography_enable_socail_link',
		'section'     => 'dark_photography_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'dark-photography' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'dark_photography_section_header',
		'priority'    => 11,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'dark-photography' ),
			'field' => 'link_text',
		],
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Text', 'dark-photography' ),
			'field' => 'link_text1',
		],
		'button_label' => esc_html__('Add New Social Icon', 'dark-photography' ),
		'settings'     => 'dark_photography_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'dark-photography' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'dark-photography' ),
				'default'     => '',
			],
			'link_text1' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Text', 'dark-photography' ),
				'description' => esc_html__( 'Add the social text  ex: "facebook".', 'dark-photography' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'dark-photography' ),
				'description' => esc_html__( 'Add the social icon url here.', 'dark-photography' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
	] );

	// SLIDER SECTION

	Kirki::add_section( 'dark_photography_blog_slide_section', array(
        'title'          => esc_html__( 'Slider Settings', 'dark-photography' ),
        'description'    => esc_html__( 'You have to select post category to show slider.', 'dark-photography' ),
        'panel'          => 'dark_photography_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'dark_photography_enable_heading',
		'section'     => 'dark_photography_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'dark-photography' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'dark_photography_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'dark-photography' ),
		'section'     => 'dark_photography_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'dark-photography' ),
			'off' => esc_html__( 'Disable', 'dark-photography' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'dark_photography_slider_heading',
		'section'     => 'dark_photography_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'dark-photography' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'dark_photography_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'dark-photography' ),
		'section'     => 'dark_photography_blog_slide_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'dark_photography_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'dark-photography' ),
		'section'     => 'dark_photography_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'dark-photography' ),
		'priority'    => 10,
		'choices'     => dark_photography_get_categories_select(),
	] );

	//GALLERY SECTION

	Kirki::add_section( 'dark_photography_gallery_section', array(
	    'title'          => esc_html__( 'Our Gallery Settings', 'dark-photography' ),
	    'description'    => esc_html__( 'Here you can add different type of gallery.', 'dark-photography' ),
	    'panel'          => 'dark_photography_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'dark_photography_enable_heading',
		'section'     => 'dark_photography_gallery_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Our Gallery',  'dark-photography' ) . '</h3>',
		'priority'    => 1,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'dark_photography_gallery_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable',  'dark-photography' ),
		'section'     => 'dark_photography_gallery_section',
		'default'     => '0',
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'dark-photography' ),
			'off' => esc_html__( 'Disable',  'dark-photography' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'dark_photography_gallery_text_heading',
		'section'     => 'dark_photography_gallery_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Gallery', 'dark-photography' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Text', 'dark-photography' ),
		'settings' => 'dark_photography_gallery_heading_text',
		'section'  => 'dark_photography_gallery_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Heading', 'dark-photography' ),
		'settings' => 'dark_photography_gallery_heading',
		'section'  => 'dark_photography_gallery_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'dark_photography_gallery_category',
		'label'       => esc_html__( 'Select the category to show gallery ', 'dark-photography' ),
		'section'     => 'dark_photography_gallery_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'dark-photography' ),
		'priority'    => 10,
		'choices'     => dark_photography_get_categories_select(),
	] );

	// FOOTER SECTION

	Kirki::add_section( 'dark_photography_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'dark-photography' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'dark-photography' ),
        'panel'          => 'dark_photography_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'dark_photography_footer_text_heading',
		'section'     => 'dark_photography_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'dark-photography' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'dark_photography_footer_text',
		'section'  => 'dark_photography_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'dark_photography_footer_enable_heading',
		'section'     => 'dark_photography_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'dark-photography' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'dark_photography_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'dark-photography' ),
		'section'     => 'dark_photography_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'dark-photography' ),
			'off' => esc_html__( 'Disable', 'dark-photography' ),
		],
	] );
}
