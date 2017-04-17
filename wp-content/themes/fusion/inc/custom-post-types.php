<?php
/**
 * Fusion site custom post types
 */

function create_post_type() {
    register_post_type( 'welcome',
        array(
            'labels' => array(
                'name' => esc_html__( 'Welcome', 'fusion' ),
                'singular_name' => esc_html__( 'Post', 'fusion' ),
                'add_new' => esc_html__( 'New post', 'fusion' )
            ),
            'public' => true,
            'has_archive' => true,
            'show_ui' => true,
            'taxonomies' => array( 'category', 'post_tag' ),
            'capability_type' => 'post',
            'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'custom-fields' ),
        )
    );
}
add_action( 'init', 'create_post_type' );