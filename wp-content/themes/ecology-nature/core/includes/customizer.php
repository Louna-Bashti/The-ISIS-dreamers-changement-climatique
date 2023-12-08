<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'ecology_nature_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'ecology-nature' ),
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
		'settings'    => 'ecology_nature_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ecology_nature_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'ecology-nature' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'ecology-nature' ),
			'off' => esc_html__( 'Disable', 'ecology-nature' ),
		],
		'partial_refresh'    => [
		'ecology_nature_display_header_title' => [
			'selector'        => '.logo a',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ecology_nature_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'ecology-nature' ),
		'section'     => 'title_tagline',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'ecology-nature' ),
			'off' => esc_html__( 'Disable', 'ecology-nature' ),
		],
		'partial_refresh'    => [
		'ecology_nature_display_header_text' => [
			'selector'        => '.logo-content span',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

	// FONT STYLE TYPOGRAPHY

	Kirki::add_panel( 'ecology_nature_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Typography', 'ecology-nature' ),
	) );

	Kirki::add_section( 'ecology_nature_font_style_section', array(
		'title'      => esc_attr__( 'Typography Option',  'ecology-nature' ),
		'priority'   => 2,
		'capability' => 'edit_theme_options',
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_all_headings_typography',
		'section'     => 'ecology_nature_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading Of All Sections',  'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'ecology_nature_all_headings_typography',
		'label'       => esc_attr__( 'Heading Typography',  'ecology-nature' ),
		'description' => esc_attr__( 'Select the typography options for your heading.',  'ecology-nature' ),
		'section'     => 'ecology_nature_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'h1','h2','h3','h4','h5','h6', ),
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_body_content_typography',
		'section'     => 'ecology_nature_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Body Content',  'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'ecology_nature_body_content_typography',
		'label'       => esc_attr__( 'Content Typography',  'ecology-nature' ),
		'description' => esc_attr__( 'Select the typography options for your content.',  'ecology-nature' ),
		'section'     => 'ecology_nature_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'body', ),
			),
		),
	) );

	// PANEL

	Kirki::add_panel( 'ecology_nature_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'ecology-nature' ),
	) );

	// Additional Settings

	Kirki::add_section( 'ecology_nature_additional_settings', array(
	    'title'          => esc_html__( 'Additional Settings', 'ecology-nature' ),
	    'description'    => esc_html__( 'Scroll To Top', 'ecology-nature' ),
	    'panel'          => 'ecology_nature_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'ecology_nature_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'ecology-nature' ),
		'section'     => 'ecology_nature_additional_settings',
		'default'     => '1',
		'priority'    => 10,
		'partial_refresh'    => [
		'ecology_nature_scroll_enable_setting' => [
			'selector'        => '.scroll-up a',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

	new \Kirki\Field\Radio_Buttonset( [
		'settings'    => 'ecology_nature_scroll_top_position',
		'label'       => esc_html__( 'Alignment for Scroll To Top', 'ecology-nature' ),
		'section'     => 'ecology_nature_additional_settings',
		'default'     => 'Right',
		'priority'    => 10,
		'choices'     => [
			'Left'   => esc_html__( 'Left', 'ecology-nature' ),
			'Center' => esc_html__( 'Center', 'ecology-nature' ),
			'Right'  => esc_html__( 'Right', 'ecology-nature' ),
		],
	]
		);

	new \Kirki\Field\Select(
	[
		'settings'    => 'menu_text_transform_ecology_nature',
		'label'       => esc_html__( 'Menus Text Transform', 'ecology-nature' ),
		'section'     => 'ecology_nature_additional_settings',
		'default'     => 'CAPITALISE',
		'placeholder' => esc_html__( 'Choose an option', 'ecology-nature' ),
		'choices'     => [
			'CAPITALISE' => esc_html__( 'CAPITALISE', 'ecology-nature' ),
			'UPPERCASE' => esc_html__( 'UPPERCASE', 'ecology-nature' ),
			'LOWERCASE' => esc_html__( 'LOWERCASE', 'ecology-nature' ),

		],
	]	);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'ecology_nature_container_width',
		'label'       => esc_html__( 'Theme Container Width', 'ecology-nature' ),
		'section'     => 'ecology_nature_additional_settings',
		'default'     => 100,
		'choices'     => [
			'min'  => 50,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'ecology_nature_sticky_header',
		'label'       => esc_html__( 'Here you can enable or disable your Sticky Header.', 'ecology-nature' ),
		'section'     => 'ecology_nature_additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'ecology_nature_site_loader',
		'label'       => esc_html__( 'Here you can enable or disable your Site Loader.', 'ecology-nature' ),
		'section'     => 'ecology_nature_additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'ecology_nature_page_layout',
		'label'       => esc_html__( 'Page Layout Setting', 'ecology-nature' ),
		'section'     => 'ecology_nature_additional_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'ecology-nature' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','ecology-nature'),
            'Right Sidebar' => __('Right Sidebar','ecology-nature'),
            'One Column' => __('One Column','ecology-nature')
		],
	] );

	if ( class_exists("woocommerce")){

	// Woocommerce Settings

	Kirki::add_section( 'ecology_nature_woocommerce_settings', array(
		'title'          => esc_html__( 'Woocommerce Settings', 'ecology-nature' ),
		'description'    => esc_html__( 'Shop Page', 'ecology-nature' ),
		'panel'          => 'ecology_nature_panel_id',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'ecology_nature_shop_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable shop page sidebar.', 'ecology-nature' ),
		'section'     => 'ecology_nature_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'ecology_nature_product_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable product page sidebar.', 'ecology-nature' ),
		'section'     => 'ecology_nature_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'ecology_nature_related_product_setting',
		'label'       => esc_html__( 'Here you can enable or disable your related products.', 'ecology-nature' ),
		'section'     => 'ecology_nature_woocommerce_settings',
		'default'     => true,
		'priority'    => 10,
	] );

	new \Kirki\Field\Number(
	[
		'settings' => 'ecology_nature_per_columns',
		'label'    => esc_html__( 'Product Per Row', 'ecology-nature' ),
		'section'  => 'ecology_nature_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 4,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'ecology_nature_product_per_page',
		'label'    => esc_html__( 'Product Per Page', 'ecology-nature' ),
		'section'  => 'ecology_nature_woocommerce_settings',
		'default'  => 9,
		'choices'  => [
			'min'  => 1,
			'max'  => 15,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Select(
	[
		'settings'    => 'ecology_nature_shop_page_layout',
		'label'       => esc_html__( 'Shop Page Layout Setting', 'ecology-nature' ),
		'section'     => 'ecology_nature_woocommerce_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'ecology-nature' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','ecology-nature'),
            'Right Sidebar' => __('Right Sidebar','ecology-nature')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'ecology_nature_product_page_layout',
		'label'       => esc_html__( 'Product Page Layout Setting', 'ecology-nature' ),
		'section'     => 'ecology_nature_woocommerce_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'ecology-nature' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','ecology-nature'),
            'Right Sidebar' => __('Right Sidebar','ecology-nature')
		],
	] );

}

	// COLOR SECTION

	Kirki::add_section( 'ecology_nature_section_color', array(
	    'title'          => esc_html__( 'Global Color', 'ecology-nature' ),
	    'description'    => esc_html__( 'Theme Color Settings', 'ecology-nature' ),
	    'panel'          => 'ecology_nature_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_global_colors',
		'section'     => 'ecology_nature_section_color',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Here you can change your theme color on one click.', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'ecology_nature_global_color',
		'label'       => __( 'choose your Appropriate Color', 'ecology-nature' ),
		'section'     => 'ecology_nature_section_color',
		'default'     => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'ecology_nature_global_color_2',
		'label'       => __( 'Choose Your Second Color', 'ecology-nature' ),
		'section'     => 'ecology_nature_section_color',
		'default'     => '',
	] );

	// POST SECTION

	Kirki::add_section( 'ecology_nature_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'ecology-nature' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'ecology-nature' ),
	    'panel'          => 'ecology_nature_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_enable_post_heading',
		'section'     => 'ecology_nature_section_post',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Post Settings.', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
		'partial_refresh'    => [
		'ecology_nature_enable_post_heading' => [
			'selector'        => 'h3.post-title',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ecology_nature_blog_admin_enable',
		'label'       => esc_html__( 'Post Author Enable / Disable Button', 'ecology-nature' ),
		'section'     => 'ecology_nature_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'ecology-nature' ),
			'off' => esc_html__( 'Disable', 'ecology-nature' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ecology_nature_blog_comment_enable',
		'label'       => esc_html__( 'Post Comment Enable / Disable Button', 'ecology-nature' ),
		'section'     => 'ecology_nature_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'ecology-nature' ),
			'off' => esc_html__( 'Disable', 'ecology-nature' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'ecology_nature_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'ecology-nature' ),
		'section'     => 'ecology_nature_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'ecology_nature_pagination_setting',
		'label'       => esc_html__( 'Here you can enable or disable your Pagination.', 'ecology-nature' ),
		'section'     => 'ecology_nature_section_post',
		'default'     => true,
		'priority'    => 10,
	] );

	// HEADER SECTION

	Kirki::add_section( 'ecology_nature_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'ecology-nature' ),
	    'description'    => esc_html__( 'Here you can add different type of social icons.', 'ecology-nature' ),
	    'panel'          => 'ecology_nature_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_phone_number_heading_1',
		'section'     => 'ecology_nature_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Choose Your Icon', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'dashicons',
		'settings' => 'ecology_nature_dashicons_setting_1',
		'label'    => esc_html__( 'Select Appropriate Icon', 'ecology-nature' ),
		'section'  => 'ecology_nature_section_header',
		'default'  => 'dashicons dashicons-controls-volumeon',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_phone_number_heading',
		'section'     => 'ecology_nature_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Phone Number', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
		'partial_refresh'    => [
		'ecology_nature_phone_number_heading' => [
			'selector'        => '.contact-box span',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    => esc_html__( 'Text', 'ecology-nature' ),
		'settings' => 'ecology_nature_header_phone_number_text',
		'section'  => 'ecology_nature_section_header',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'ecology_nature_header_phone_number',
		'section'  => 'ecology_nature_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_phone_number_heading_2',
		'section'     => 'ecology_nature_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Choose Your Icon', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'dashicons',
		'settings' => 'ecology_nature_dashicons_setting_2',
		'label'    => esc_html__( 'Select Appropriate Icon', 'ecology-nature' ),
		'section'  => 'ecology_nature_section_header',
		'default'  => 'dashicons dashicons-airplane',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_email_address_heading',
		'section'     => 'ecology_nature_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Email Address', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    => esc_html__( 'Text', 'ecology-nature' ),
		'settings' => 'ecology_nature_header_email_address_text',
		'section'  => 'ecology_nature_section_header',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'ecology_nature_header_email_address',
		'section'  => 'ecology_nature_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_header_button_heading',
		'section'     => 'ecology_nature_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Button', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    => esc_html__( 'Button Text', 'ecology-nature' ),
		'settings' => 'ecology_nature_header_button_text',
		'section'  => 'ecology_nature_section_header',
		'default'  => '',
		'priority' => 10,
		'partial_refresh'    => [
		'ecology_nature_header_button_text' => [
			'selector'        => 'a.shop-btn',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'label'    => esc_html__( 'Button URL', 'ecology-nature' ),
		'settings' => 'ecology_nature_header_button_url',
		'section'  => 'ecology_nature_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_enable_search',
		'section'     => 'ecology_nature_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Search Box', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ecology_nature_search_box_enable',
		'label'       => esc_html__( 'Search Enable / Disable Button', 'ecology-nature' ),
		'section'     => 'ecology_nature_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'ecology-nature' ),
			'off' => esc_html__( 'Disable', 'ecology-nature' ),
		],
		'partial_refresh'    => [
		'ecology_nature_search_box_enable' => [
			'selector'        => '.header-search',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_enable_socail_link',
		'section'     => 'ecology_nature_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'ecology_nature_section_header',
		'priority'    => 10,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'ecology-nature' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'ecology-nature' ),
		'settings'     => 'ecology_nature_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'ecology-nature' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'ecology-nature' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'ecology-nature' ),
				'description' => esc_html__( 'Add the social icon url here.', 'ecology-nature' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
	] );

	// SLIDER SECTION

	Kirki::add_section( 'ecology_nature_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'ecology-nature' ),
        'description'    => esc_html__( 'You have to select post category to show slider.', 'ecology-nature' ),
        'panel'          => 'ecology_nature_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_enable_heading',
		'section'     => 'ecology_nature_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ecology_nature_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'ecology-nature' ),
		'section'     => 'ecology_nature_blog_slide_section',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'ecology-nature' ),
			'off' => esc_html__( 'Disable', 'ecology-nature' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ecology_nature_title_enable',
		'label'       => esc_html__( 'Title Enable / Disable', 'ecology-nature' ),
		'section'     => 'ecology_nature_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'ecology-nature' ),
			'off' => esc_html__( 'Disable', 'ecology-nature' ),
		],
		'partial_refresh'    => [
		'ecology_nature_title_enable' => [
			'selector'        => '.blog_box h3',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ecology_nature_text_enable',
		'label'       => esc_html__( 'Text Enable / Disable', 'ecology-nature' ),
		'section'     => 'ecology_nature_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'ecology-nature' ),
			'off' => esc_html__( 'Disable', 'ecology-nature' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_slider_heading',
		'section'     => 'ecology_nature_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'ecology_nature_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'ecology-nature' ),
		'section'     => 'ecology_nature_blog_slide_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'ecology_nature_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'ecology-nature' ),
		'section'     => 'ecology_nature_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'ecology-nature' ),
		'priority'    => 10,
		'choices'     => ecology_nature_get_categories_select(),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_excerpt_slide_number',
		'section'     => 'ecology_nature_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Number Of Text', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'ecology_nature_excerpt_number',
		'label'       => esc_html__( 'Slide Content Range', 'ecology-nature' ),
		'section'     => 'ecology_nature_blog_slide_section',
		'default'     => 20,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_slider_button_heading',
		'section'     => 'ecology_nature_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider Button Text', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'ecology_nature_slider_button_text',
		'section'  => 'ecology_nature_blog_slide_section',
		'default'  => '',
		'priority' => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'ecology_nature_slider_content_alignment',
		'label'       => esc_html__( 'Slider Content Alignment', 'ecology-nature' ),
		'section'     => 'ecology_nature_blog_slide_section',
		'default'     => 'LEFT-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'ecology-nature' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'ecology-nature' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'ecology-nature' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'ecology-nature' ),

		],
	] );

		new \Kirki\Field\Select(
	[
		'settings'    => 'ecology_nature_slider_opacity_color',
		'label'       => esc_html__( 'Slider Opacity Option', 'ecology-nature' ),
		'section'     => 'ecology_nature_blog_slide_section',
		'default'     => '0.7',
		'placeholder' => esc_html__( 'Choose an option', 'ecology-nature' ),
		'choices'     => [
			'0' => esc_html__( '0', 'ecology-nature' ),
			'0.1' => esc_html__( '0.1', 'ecology-nature' ),
			'0.2' => esc_html__( '0.2', 'ecology-nature' ),
			'0.3' => esc_html__( '0.3', 'ecology-nature' ),
			'0.4' => esc_html__( '0.4', 'ecology-nature' ),
			'0.5' => esc_html__( '0.5', 'ecology-nature' ),
			'0.6' => esc_html__( '0.6', 'ecology-nature' ),
			'0.7' => esc_html__( '0.7', 'ecology-nature' ),
			'0.8' => esc_html__( '0.8', 'ecology-nature' ),
			'0.9' => esc_html__( '0.9', 'ecology-nature' ),
			'1.0' => esc_html__( '1.0', 'ecology-nature' ),
			

		],
	] );

	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ecology_nature_overlay_option',
		'label'       => esc_html__( 'Enable / Disable Slider Overlay', 'ecology-nature' ),
		'section'     => 'ecology_nature_blog_slide_section',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'ecology-nature' ),
			'off' => esc_html__( 'Disable', 'ecology-nature' ),
		],
	] );

	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'ecology_nature_slider_image_overlay_color',
		'label'       => __( 'choose your Appropriate Overlay Color', 'ecology-nature' ),
		'section'     => 'ecology_nature_blog_slide_section',
		'default'     => '',
	] );


	// ABOUT US SECTION

	Kirki::add_section( 'ecology_nature_about_section', array(
        'title'          => esc_html__( 'About Us Settings', 'ecology-nature' ),
        'description'    => esc_html__( 'You have to select page to show about us.', 'ecology-nature' ),
        'panel'          => 'ecology_nature_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_about_enable_heading',
		'section'     => 'ecology_nature_about_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable About Us', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ecology_nature_about_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'ecology-nature' ),
		'section'     => 'ecology_nature_about_section',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'ecology-nature' ),
			'off' => esc_html__( 'Disable', 'ecology-nature' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_about_page_heading',
		'section'     => 'ecology_nature_about_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Page Dropdown', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
		'partial_refresh'    => [
		'ecology_nature_about_page_heading' => [
			'selector'        => '#about-us h4',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'dropdown-pages',
		'settings'    => 'ecology_nature_about_us',
		'section'     => 'ecology_nature_about_section',
		'default'     => 42,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_about_button_heading',
		'section'     => 'ecology_nature_about_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Button Text', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'ecology_nature_about_button_text',
		'section'  => 'ecology_nature_about_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_about_excerpt_number_heading',
		'section'     => 'ecology_nature_about_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Number Of Text', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'ecology_nature_about_excerpt_number',
		'label'       => esc_html__( 'About Content Range', 'ecology-nature' ),
		'section'     => 'ecology_nature_about_section',
		'default'     => 50,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	// FOOTER SECTION

	Kirki::add_section( 'ecology_nature_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'ecology-nature' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'ecology-nature' ),
        'panel'          => 'ecology_nature_panel_id',
        'priority'       => 180,
    ) );

		Kirki::add_field( 'theme_config_id', [
			'type'        => 'toggle',
			'settings'    => 'ecology_nature_footer_enable_disable',
			'label'       => esc_html__( 'Here you can enable or disable copyright section.', 'ecology-nature' ),
			'section'     => 'ecology_nature_footer_section',
			'default'     => true,
			'priority'    => 10,
		] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_footer_text_heading',
		'section'     => 'ecology_nature_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'ecology_nature_footer_text',
		'section'  => 'ecology_nature_footer_section',
		'default'  => '',
		'priority' => 10,
		'partial_refresh'    => [
		'ecology_nature_footer_text' => [
			'selector'        => '.copy-text p',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

			Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_footer_text_heading_2',
		'section'     => 'ecology_nature_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Alignment', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
		] );

		new \Kirki\Field\Select(
		[
		'settings'    => 'ecology_nature_copyright_text_alignment',
		'label'       => esc_html__( 'Copyright text Alignment', 'ecology-nature' ),
		'section'     => 'ecology_nature_footer_section',
		'default'     => 'LEFT-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'ecology-nature' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'ecology-nature' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'ecology-nature' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'ecology-nature' ),

		],
		] );

		Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecology_nature_footer_text_heading_1',
		'section'     => 'ecology_nature_footer_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Background Color', 'ecology-nature' ) . '</h3>',
		'priority'    => 10,
		] );

		Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'ecology_nature_copyright_bg',
		'label'       => __( 'Choose Your Copyright Background Color', 'ecology-nature' ),
		'section'     => 'ecology_nature_footer_section',
		'default'     => '',
		] );

}
