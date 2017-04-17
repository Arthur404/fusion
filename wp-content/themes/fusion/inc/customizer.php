<?php
/**
 * Theme Customizer
 */

function fusion_customize_register( $wp_customize ) {

    /*--------------------------------------------------------------
    # Home page panel
    --------------------------------------------------------------*/
    $wp_customize->add_panel('home_page', array(
        'priority' => 1,
        'title' => esc_html__('Home page', 'fusion'),
        'description' => esc_html__('Settings of home page.', 'fusion'),
    ));
    /*--------------------------------------------------------------
    # Hero section
    --------------------------------------------------------------*/
    $wp_customize->add_section(
        'hero-section',
        array(
            'title' => esc_html__('Hero settings', 'fusion'),
            'priority' => 10,
            'panel' => 'home_page',
        )
    );
    $wp_customize->add_setting(
        'add_phone_number'
    );
    $wp_customize->add_control(
        'add_phone_number',
        array(
            'label' => esc_html__('Phone number', 'fusion'),
            'section' => 'hero-section'
        )
    );
    $wp_customize->add_setting(
        'hero-intro'
    );
    $wp_customize->add_control(
        'hero-intro',
        array(
            'label' => esc_html__('Intro', 'fusion'),
            'section' => 'hero-section'
        )
    );
    $wp_customize->add_setting(
        'hero_description'
    );
    $wp_customize->add_control(
        'hero_description',
        array(
            'label' => esc_html__('Intro description', 'fusion'),
            'section' => 'hero-section',
            'type' => 'textarea'
        )
    );
    $wp_customize->add_setting(
        'btn_text'
    );
    $wp_customize->add_control(
        'btn_text',
        array(
            'label' => esc_html__('Button text', 'fusion'),
            'section' => 'hero-section'
        )
    );
    $wp_customize->add_setting(
        'btn_url'
    );
    $wp_customize->add_control(
        'btn_url',
        array(
            'label' => esc_html__('Button URL', 'fusion'),
            'section' => 'hero-section',
            'type'     => 'dropdown-pages'
        )
    );
    $wp_customize->add_setting(
        'bg-hero'
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'bg-hero',
            array(
                'label' => esc_html__('Background image', 'fusion'),
                'section' => 'hero-section'
            )
        )
    );
    /*--------------------------------------------------------------
    # Welcome section
    --------------------------------------------------------------*/
    $wp_customize->add_section(
        'welcome-section',
        array(
            'title' => esc_html__('Welcome settings', 'fusion'),
            'priority' => 10,
            'panel' => 'home_page',
        )
    );
    $wp_customize->add_setting(
        'title-welcome'
    );
    $wp_customize->add_control(
        'title-welcome',
        array(
            'label' => esc_html__('Welcome title', 'fusion'),
            'section' => 'welcome-section',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'description-welcome'
    );
    $wp_customize->add_control(
        'description-welcome',
        array(
            'label' => esc_html__('Welcome description', 'fusion'),
            'section' => 'welcome-section',
            'type' => 'textarea',
        )
    );
    $wp_customize->add_setting(
        'background-color-welcome',
        array(
            'default' => '#fff'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'background-color-welcome',
            array(
                'label' => esc_html__('Background color', 'fusion'),
                'section' => 'welcome-section'
            )
        )
    );
    $wp_customize->add_setting(
        'hide-welcome'
    );
    $wp_customize->add_control(
        'hide-welcome',
        array(
            'label' => esc_html__('Hide section', 'fusion'),
            'section' => 'welcome-section',
            'type' => 'checkbox'
        )
    );
    /*--------------------------------------------------------------
    # Footer section
    --------------------------------------------------------------*/
    $wp_customize->add_section(
        'footer-section',
        array(
            'title' => esc_html__('Footer settings', 'fusion'),
            'priority' => 10,
            'panel' => 'home_page',
        )
    );
    $wp_customize->add_setting(
        'copyright'
    );
    $wp_customize->add_control(
        'copyright',
        array(
            'label' => esc_html__('Copyright text', 'fusion'),
            'section' => 'footer-section'
        )
    );
    /*--------------------------------------------------------------
    # Social section
    --------------------------------------------------------------*/
    $wp_customize->add_section(
        'social',
        array(
            'title' => esc_html__( 'Social button settings', 'fusion' ),
            'priority' => 3
        )
    );
    $wp_customize->add_setting(
        'title_social'
    );
    $wp_customize->add_control(
        'title_social',
        array(
            'label' => esc_html__('Title social ', 'fusion'),
            'section' => 'social',
            'type' => 'text',
        )
    );
    $social = array("twitter", "facebook", "instagram", "google", "linkedin", "pinterest", "dribbble", "youtube");
    for ($i=0; $i<count($social); $i++) {
        $wp_customize->add_setting(
            'url_'.$social[$i]
        );
        $wp_customize->add_control(
            'url_'.$social[$i],
            array(
                'label' => esc_html__('URL '.$social[$i], 'fusion'),
                'section' => 'social',
                'type' => 'text',
            )
        );
    }
}
add_action( 'customize_register', 'fusion_customize_register' );

function custom_style() {
    ?>
    <style type="text/css">
        .hero {
            background: url(<?php echo get_theme_mod('bg-hero') ?>) 50% 25% /cover no-repeat, #000;
        }
        <?php if ( is_front_page() ) : ?>
        .hero {
            height: 100vh;
        }
        <?php else : ?>
        .hero {
            height: auto;
            padding: 120px 0 30px;
        }
        <?php endif; ?>
        .welcome {
            display: <?php if(get_theme_mod('hide-welcome')) echo "none"; ?>;
            background-color: <?php echo get_theme_mod('background-color-welcome'); ?>;
        }
    </style>
    <?php
}
add_action('wp_head', 'custom_style');