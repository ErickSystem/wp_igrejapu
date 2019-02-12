<?php

// Incluindo os arquivos da TGM
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/required-plugins.php';
require_once get_template_directory() . '/inc/wp_bootstrap_pagination.php';

// Requerendo o arquivo do Customizer
require get_template_directory() . '/inc/customizer.php';

// Carregando nossos scripts e folhas de estilos
function load_scripts_web(){
	wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array( 'jquery' ), '4.0.0', true );
	wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0', 'all' );
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );
}
function load_scripts_local(){
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '4.0.0', true );
	wp_enqueue_script( 'jquery-3.3.1', get_template_directory_uri() . '/js/jquery-3.3.1.js', array(), '3.3.1', true );
	wp_enqueue_script( 'janela', get_template_directory_uri() . '/js/janela.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.0.0', 'all' );
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );
}
// add_action( 'wp_enqueue_scripts', 'load_scripts_web' );
add_action( 'wp_enqueue_scripts', 'load_scripts_local' );

// Função de Configuração do Tema
function wp_igrejapu_config(){
	// Registrando nossos menus
	register_nav_menus(
		array(
			'my_main_menu' => __( 'Menu Principal', 'wpigrejapu' ),
			'footer_menu' => __( 'Menu Rodapé', 'wpigrejapu' )
		)
	);	

	// Adicionando suporte ao tema
	$args = array(
		'height'	=> 225,
		'width'		=> 1920
	);
	add_theme_support( 'custom-header', $args );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'video', 'gallery', 'aside', 'image' ) );
	add_theme_support( 'title-tag');
	add_theme_support( 'custom-logo', array( 'height' => 150, 'width' => 420 ) );

	// Habilitando suporte à tradução
	$textdomain = 'wpigrejapu';
	load_theme_textdomain( $textdomain, get_stylesheet_directory() . '/languages/' );
	load_theme_textdomain( $textdomain, get_template_directory() . '/languages/' );

}
add_action( 'after_setup_theme', 'wp_igrejapu_config', 0 );

/* Customizando logo */
add_filter( 'wp_get_attachment_image_attributes', function( $attr )
{
    if( isset( $attr['class'] )  && 'custom-logo' === $attr['class'] )
        $attr['class'] = 'custom-logo img-fluid';

    return $attr;
} );

// Registrando Sidebars
add_action( 'widgets_init', 'wpigrejapu_sidebars' );
function wpigrejapu_sidebars(){
	register_sidebar(
		array(
			'name' => __( 'Home Page Barra Lateral', 'wpigrejapu' ),
			'id' => 'gallery-1',
			'description' => __( 'Galeria de fotos Home pagina', 'wpigrejapu'),
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget'  => '</li>',
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => '</h2>',
		)
	);
}

/* Function to do paginator */
function customize_wp_bootstrap_pagination($args) {
    
    $args['previous_string'] = 'previous';
    $args['next_string'] = 'next';
    
    return $args;
}
add_filter('wp_bootstrap_pagination_defaults', 'customize_wp_bootstrap_pagination');

function wpdocs_custom_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// Registrando Sidebars
add_action( 'widgets_init', 'wpcurso_sidebars' );
function wpcurso_sidebars(){
	register_sidebar(
		array(
			'name' => __( 'Home Page Sidebar', 'wpcurso' ),
			'id' => 'sidebar-1',
			'description' => __( 'Sidebar to be used on Home Page', 'wpcurso'),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Blog Sidebar', 'wpcurso'),
			'id' => 'sidebar-2',
			'description' => __( 'Sidebar to be used on Blog Page', 'wpcurso'),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Services 1', 'wpcurso' ),
			'id' => 'services-1',
			'description' => __( 'First Services Area.', 'wpcurso' ),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Services 2', 'wpcurso' ),
			'id' => 'services-2',
			'description' => __( 'Second Services Area.', 'wpcurso' ),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Services 3', 'wpcurso' ),
			'id' => 'services-3',
			'description' => __( 'Third Services Area.', 'wpcurso' ),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);						
}