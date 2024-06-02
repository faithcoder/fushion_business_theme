<?php

Kirki::add_config( 'stack_config', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );


Kirki::add_panel( 'stack_panel', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Stack Options', 'stack' ),
    'description' => esc_html__( 'Description', 'stack' ),
) );

// banner Section
Kirki::add_section( 'banner_section', array(
    'title'          => esc_html__( 'Banner Section', 'stack' ),
    'panel'          => 'stack_panel',
    'priority'       => 160,
) );

Kirki::add_field( 'stack_config', [
	'type'        => 'custom',
	'settings'    => 'banner_content_setting',
	'section'     => 'banner_section',
	'default'         => '<h3 style="padding:15px 10px; background:#fff; margin:0;">' . __( 'Banner Content', 'stack' ) . '</h3>',
	'priority'    => 10,
] );

// banner Heading
Kirki::add_field( 'stack_config', [
	'type'     => 'text',
	'settings' => 'banner_heading',
	'label'    => esc_html__( 'Banner Heading', 'stack' ),
	'section'  => 'banner_section',
	'default'  => esc_html__( 'We Discover, Design & Build Digital
    Presence of Businesses', 'stack' ),
	'priority' => 10,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => '.head-title',
            'function' => 'html'
        )
	),
] );

// banner Heading Typography
Kirki::add_field( 'stack_config', [
	'type'        => 'typography',
	'settings'    => 'banner_heading_typo',
	'label'       => esc_html__( 'Banner Heading Typography', 'stack' ),
	'section'     => 'banner_section',
	'default'     => [
		'font-family'    => 'Titillium Web',
		'variant'        => '700',
		'font-size'      => '30px',
		'line-height'    => '48px',
		'letter-spacing' => '0',
		'color'          => '#585b60',
		'text-transform' => 'uppercase',
		'text-align'     => 'center',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '#hero-area .contents .head-title',
		],
	],
] );

// banner Btn Text
Kirki::add_field( 'stack_config', [
	'type'     => 'text',
	'settings' => 'banner_btn_text',
	'label'    => esc_html__( 'Banner Button Text', 'stack' ),
	'section'  => 'banner_section',
	'default'  => esc_html__( 'Explore', 'stack' ),
	'priority' => 10,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => '.btn-common',
            'function' => 'html'
        )
    )
] );

// banner Btn Link
Kirki::add_field( 'stack_config', [
	'type'     => 'link',
	'settings' => 'banner_btn_link',
	'label'    => esc_html__( 'Banner Button Link', 'stack' ),
	'section'  => 'banner_section',
	'default'  => esc_html__( 'https://www.google.com', 'stack' ),
	'priority' => 10,
] );

// banner Image
Kirki::add_field( 'stack_config', [
	'type'     => 'image',
	'settings' => 'banner_image',
	'label'    => esc_html__( 'Banner Image', 'stack' ),
	'section'  => 'banner_section',
	'default'  => '',
] );

// banner Section
Kirki::add_field( 'stack_config', [
	'type'        => 'custom',
	'settings'    => 'banner_section_setting',
	'section'     => 'banner_section',
	'default'         => '<h3 style="padding:15px 10px; background:#fff; margin:0;">' . __( 'banner Section', 'stack' ) . '</h3>',
	'priority'    => 10,
] );

// banner Section Image
Kirki::add_field( 'stack_config', [
	'type'        => 'background',
	'settings'    => 'banner_section_image', 
	'label'       => esc_html__( 'Banner Section Background', 'kirki' ),
	'section'     => 'banner_section',
	'default'     => [
		'background-color'      => 'rgba(20,20,20,.8)',
		'background-image'      => '',
		'background-repeat'     => 'no-repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'fixed',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '#hero-area',
		],
	],
] );


// About Section
Kirki::add_section( 'about_section', array(
    'title'          => esc_html__( 'About Section', 'stack' ),
    'panel'          => 'stack_panel',
    'priority'       => 160,
) );

// About Heading
Kirki::add_field( 'stack_config', [
	'type'     => 'text',
	'settings' => 'about_heading',
	'label'    => esc_html__( 'About Heading', 'stack' ),
	'section'  => 'about_section',
	'default'  => esc_html__( 'We are helping to grow
    your business.', 'stack' )
] );

// About Description
Kirki::add_field( 'stack_config', [
	'type'     => 'textarea',
	'settings' => 'about_desc',
	'label'    => esc_html__( 'About Description', 'stack' ),
	'section'  => 'about_section',
	'default'  => esc_html__( 'A digital studio specialising in User Experience & eCommerce, we combine innovation with digital craftsmanship to help brands fulfill their potential.', 'stack' )
] );


// About Btn Text
Kirki::add_field( 'stack_config', [
	'type'     => 'text',
	'settings' => 'about_btn_text',
	'label'    => esc_html__( 'About Button Text', 'stack' ),
	'section'  => 'about_section',
	'default'  => esc_html__( 'More About Us', 'stack' ),
] );

// banner Btn Link
Kirki::add_field( 'stack_config', [
	'type'     => 'link',
	'settings' => 'about_btn_link',
	'label'    => esc_html__( 'About Button Link', 'stack' ),
	'section'  => 'about_section',
	'default'  => esc_html__( 'https://www.google.com', 'stack' ),
	'priority' => 10,
] );


// About Items
Kirki::add_field( 'stack_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'About Items', 'stack' ),
	'section'     => 'about_section',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Add New Item', 'stack' ),
		'field' => 'about_item_title',
	],
	'button_label' => esc_html__('Add New About Item', 'stack' ),
	'settings'     => 'about_repeater',
	'default'      => [
		[
            'about_item_icon' => 'lni-microphone',
			'about_item_title' => __( 'What we do', 'stack' ),
			'about_item_desc'  => __( 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores ', 'stack' ),
		],
	],
	'fields' => [
        'about_item_icon' => [
			'type'        => 'select',
			'label'       => esc_html__( 'About Item Icon', 'stack' ),
			'default'     => '',
            'choices'     => array(
                'lni-microphone' => __('Icon 1', 'stack'),
                'lni-users' => __('Icon 2', 'stack'),
                'lni-medall-alt' => __('Icon 3', 'stack'),
            )
		],
		'about_item_title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'About Item Title', 'stack' ),
			'default'     => '',
		],
		'about_item_desc' => [
			'type'        => 'textarea',
			'label'       => esc_html__( 'About Item Description', 'stack' ),
			'default'     => '',
		],
	],
    'choices' => [
		'limit' => 3
	],
] );


// Services Section
Kirki::add_section( 'services_section', array(
    'title'          => esc_html__( 'Services Section', 'stack' ),
    'panel'          => 'stack_panel',
    'priority'       => 160,
) );

//  Services Show / Hide
Kirki::add_field( 'stack_config', [
	'type'     => 'checkbox',
	'settings' => 'services_show',
	'label'    => esc_html__( 'Services Show?', 'stack' ),
	'section'  => 'services_section',
	'default'  => true
] );

// Services Heading
Kirki::add_field( 'stack_config', [
	'type'     => 'text',
	'settings' => 'services_heading',
	'label'    => esc_html__( 'Services Heading', 'stack' ),
	'section'  => 'services_section',
	'default'  => esc_html__( 'Our Services', 'stack' )
] );

//  Services Description
Kirki::add_field( 'stack_config', [
	'type'     => 'textarea',
	'settings' => 'services_desc',
	'label'    => esc_html__( 'Services Description', 'stack' ),
	'section'  => 'services_section',
	'default'  => esc_html__( 'A desire to help and empower others between community contributors in technology
	began to grow in 2020.', 'stack' )
] );

// Services Items
Kirki::add_field( 'stack_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Services Items', 'stack' ),
	'section'     => 'services_section',
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Add New Item', 'stack' ),
		'field' => 'service_item_title',
	],
	'button_label' => esc_html__('Add New Service Item', 'stack' ),
	'settings'     => 'services_repeater',
	'default'      => [
		[
            'service_item_icon' => 'lni-pencil',
			'service_item_title' => __( 'Service Title', 'stack' ),
			'service_item_desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...', 'stack' ),
		],
	],
	'fields' => [
        'service_item_icon' => [
			'type'        => 'select',
			'label'       => esc_html__( 'Service Item Icon', 'stack' ),
			'default'     => '',
            'choices'     => array(
                'lni-pencil' => __('Pencil', 'stack'),
                'lni-briefcase' => __('Briefcase', 'stack'),
                'lni-cog' => __('Cog', 'stack'),
                'lni-mobile' => __('Mobile', 'stack'),
                'lni-layers' => __('Layers', 'stack'),
                'lni-rocket' => __('Rocket', 'stack'),
            )
		],
		'service_item_title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Service Item Title', 'stack' ),
			'default'     => '',
		],
		'service_item_desc' => [
			'type'        => 'textarea',
			'label'       => esc_html__( 'Service Item Description', 'stack' ),
			'default'     => '',
		],
	],
    'choices' => [
		'limit' => 6
	],
] );

//  Services Items Align
Kirki::add_field( 'stack_config', [
	'type'     => 'radio-buttonset',
	'settings' => 'services_item_align',
	'label'    => esc_html__( 'Services Items Alignment', 'stack' ),
	'section'  => 'services_section',
	'default'  => 'left',
	'choices'     => [
		'left'   => esc_html__( 'Left', 'stack' ),
		'center' => esc_html__( 'Center', 'stack' ),
		'right'  => esc_html__( 'Right', 'stack' ),
	],
	'output' => array(
		array(
			'element' => '.services-item',
			'property' => 'text-align'
		)
	)
] );

//  Services Items Number
Kirki::add_field( 'stack_config', [
	'type'     => 'select',
	'settings' => 'services_item_number',
	'label'    => esc_html__( 'Services Items Number', 'stack' ),
	'section'  => 'services_section',
	'default'  => 'col-lg-4',
	'choices'     => [
		'col-lg-4'   => esc_html__( '3 Columns', 'stack' ),
		'col-lg-6' => esc_html__( '2 Columns', 'stack' ),
		'col-lg-3'  => esc_html__( '4 Columns', 'stack' ),
	]
] );

// Video Section
Kirki::add_section( 'video_section', array(
    'title'          => esc_html__( 'Video Section', 'stack' ),
    'panel'          => 'stack_panel',
    'priority'       => 160,
) );

//  Video Show / Hide
Kirki::add_field( 'stack_config', [
	'type'     => 'checkbox',
	'settings' => 'video_show',
	'label'    => esc_html__( 'Video Show?', 'stack' ),
	'section'  => 'video_section',
	'default'  => true
] );

// Video URL
Kirki::add_field( 'stack_config', [
	'type'     => 'link',
	'settings' => 'video_url',
	'label'    => esc_html__( 'Video URL', 'stack' ),
	'section'  => 'video_section',
	'default'  => 'https://www.youtube.com/watch?v=yP6kdOZHids'
] );

// Video Title
Kirki::add_field( 'stack_config', [
	'type'     => 'text',
	'settings' => 'video_title',
	'label'    => esc_html__( 'Video Title', 'stack' ),
	'section'  => 'video_section',
	'default'  => __('Watch Video', 'stack')
] );

// Video Background
Kirki::add_field( 'stack_config', [
	'type'        => 'background',
	'settings'    => 'video_background',
	'label'       => esc_html__( 'Background Control', 'stack' ),
	'section'     => 'video_section',
	'default'     => [
		'background-color'      => 'rgba(20,20,20,.8)',
		'background-image'      => '',
		'background-repeat'     => 'repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.video-promo',
		],
	],
] );
