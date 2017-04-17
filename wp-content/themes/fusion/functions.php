<?php
/**
 * Functions and definitions
 */

function fusion_setup() {

    load_theme_textdomain( 'fusion', get_template_directory() . '/lang' );

    add_theme_support( 'title-tag' );

    add_theme_support( 'post-thumbnails' );

    register_nav_menus( array(
        'menu-header' => esc_html__( 'Primary', 'fusion' ),
        'menu-footer' => esc_html__( 'Footer', 'fusion' ),
    ));

    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'fusion_setup' );

function fusion_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Widget footer', 'fusion' ),
        'id'            => 'sidebar-footer',
        'description'   => esc_html__( 'Add widgets here.', 'fusion' ),
        'before_widget' => '<li class="%2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action( 'widgets_init', 'fusion_widgets_init' );

function fusion_scripts() {

    /*Add styles*/
    wp_enqueue_style( 'style_css', get_stylesheet_uri() );

    /*Add scripts*/
    wp_deregister_script( 'jquery' );

    wp_register_script( 'jquery', get_template_directory_uri() . '/vendors/jquery/dist/jquery.min.js', '', '', true);

    wp_enqueue_script('jquery');

    wp_register_script('main_js', get_template_directory_uri() . '/js/main.js', ['jquery'], '', true);

    wp_enqueue_script('main_js');

}
add_action( 'wp_enqueue_scripts', 'fusion_scripts' );

add_filter('document_title_parts', function( $parts ){
    if( isset($parts['site']) ) unset($parts['site']);
    return $parts;
});

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load custom post types file.
 */
require get_template_directory() . '/inc/custom-post-types.php';
