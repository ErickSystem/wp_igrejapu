<?php 

function wpigrejapu_customizer( $wp_customize ){

	// Copyright

	$wp_customize->add_section( 
		'sec_copyright', array(
			'title' => __('Copyright', 'wpigrejapu'),
			'description' => __('Seção Copyright', 'wpigrejapu')
		)
	);

	$wp_customize->add_setting(
		'set_copyright', array(
			'type' => 'theme_mod',
			'default' => __('Copyright © 2018 - Criado Por ', 'wpigrejapu'),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_copyright', array(
			'label' => __('Copyright', 'wpigrejapu'),
			'description' => __('Escolha se deseja mostrar a seção Serviços ou não', 'wpigrejapu'),
			'section' => 'sec_copyright',
			'type' => 'text'
		)
	);	

	// Copyright Criado por
	$wp_customize->add_setting(
		'set_copyright_createdby', array(
			'type' => 'theme_mod',
			'default' => '',
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_copyright_createdby', array(
			'label' => __('Criado Por', 'wpigrejapu'),
			'description' => __('Informe a URL', 'wpigrejapu'),
			'section' => 'sec_copyright',
			'type' => 'url'
		)
	);

	// Copyright Distríbuido por
	$wp_customize->add_setting(
		'set_copyright_poweredby', array(
			'type' => 'theme_mod',
			'default' => '',
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_copyright_poweredby', array(
			'label' => __('Distríbuido por', 'wpigrejapu'),
			'description' => __('Informe a URL', 'wpigrejapu'),
			'section' => 'sec_copyright',
			'type' => 'url'
		)
	);

	// Map

	$wp_customize->add_section( 
		'sec_map', array(
			'title' => __('Mapa', 'wpigrejapu'),
			'description' => __('Seção Mapa', 'wpigrejapu')
		)
	);	

	// API Key

	$wp_customize->add_setting(
		'set_map_apikey', array(
			'type' => 'theme_mod',
			'default' => '',
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_map_apikey', array(
			'label' => __('Chave API', 'wpigrejapu'),
			'description' => sprintf(
				__('Obtenha sua chave <a target="_blank" href="%s">here</a>', 'wpigrejapu'),
				'https://console.developers.google.com/flows/enableapi?apiid=maps_backend'),
			'section' => 'sec_map',
			'type' => 'text'
		)
	);

	// Address

	$wp_customize->add_setting(
		'set_map_address', array(
			'type' => 'theme_mod',
			'default' => '',
			'sanitize_callback' => 'esc_textarea'
		)
	);

	$wp_customize->add_control(
		'set_map_address', array(
			'label' => __('Digite seu endereço aqui', 'wpigrejapu'),
			'description' => __('caracteres especiais não são permitidos', 'wpigrejapu'),
			'section' => 'sec_map',
			'type' => 'textarea'
		)
	);	

	// Slider

	$wp_customize->add_section( 
		'sec_slider', array(
			'title' => __('Slider', 'wpigrejapu'),
			'description' => __('Seção Slider', 'wpigrejapu')
		)
	);

	// Design

	$wp_customize->add_setting(
		'set_slider_option', array(
			'type' => 'theme_mod',
			'default' => '1',
			'sanitize_callback' => 'wpigrejapu_sanitize_select'
		)
	);

	$wp_customize->add_control(
		'set_slider_option', array(
			'label' => __('Escolha o seu tipo de desenho aqui', 'wpigrejapu'),
			'description' => __('Escolha o seu tipo de design', 'wpigrejapu'),
			'section' => 'sec_slider',
			'type' => 'select',
			'choices' => array(
				'1' => __('Tipo de design 1', 'wpigrejapu'),
				'2' => __('Tipo de design Tipo 2', 'wpigrejapu'),
				'3' => __('Tipo de design Tipo 3', 'wpigrejapu'),
				'4' => __('Tipo de design Tipo 4', 'wpigrejapu')
			)
		)
	);	

	// Limit

	$wp_customize->add_setting(
		'set_slider_limit', array(
			'type' => 'theme_mod',
			'default' => '5',
			'sanitize_callback' => 'absint'
		)
	);

	$wp_customize->add_control(
		'set_slider_limit', array(
			'label' => __('Número de postagens para exibir', 'wpigrejapu'),
			'description' => __('Escolha o número de postagens a serem exibidas', 'wpigrejapu'),
			'section' => 'sec_slider',
			'type' => 'number'
		)
	);	

	// Front Page Loops

	$wp_customize->add_section( 
		'sec_loops', array(
			'title' => __('Loops de Página Frontal', 'wpigrejapu'),
			'description' => __('Controla os loops na primeira página', 'wpigrejapu')
		)
	);

	$wp_customize->add_setting(
		'set_loop1_categories', array(
			'type' => 'theme_mod',
			'default' => '',
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_loop1_categories', array(
			'label' => __('Categorias para incluir no primeiro loop', 'wpigrejapu'),
			'description' => __('Escolha as categorias para incluir no primeiro loop. Use vírgulas para separar as categorias. Por exemplo 4,5,8,20', 'wpigrejapu'),
			'section' => 'sec_loops',
			'type' => 'text'
		)
	);

	$wp_customize->add_setting(
		'set_posts_per_page', array(
			'type' => 'theme_mod',
			'default' => '2',
			'sanitize_callback' => 'absint'
		)
	);

	$wp_customize->add_control(
		'set_posts_per_page', array(
			'label' => __('Número de postagens para exibir', 'wpigrejapu'),
			'description' => __('Escolha o número de postagens para exibir no loop', 'wpigrejapu'),
			'section' => 'sec_loops',
			'type' => 'number'
		)
	);
}
add_action( 'customize_register', 'wpigrejapu_customizer' );

function wpigrejapu_sanitize_select( $input, $setting ){
 
    //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
    $input = sanitize_key($input);

    //get the list of possible select options 
    $choices = $setting->manager->get_control( $setting->id )->choices;
                     
    //return input if valid or return default option
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
     
}