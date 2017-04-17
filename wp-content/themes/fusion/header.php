<?php
/**
 * The header for our theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container">
            <div class="navbar">
                <nav class="main-nav">
                    <button class="nav-btn open-btn" id="open-nav">
                        <i class="icon-menu"></i>
                    </button>
                    <button class="nav-btn close-btn remove-btn" id="close-nav">
                        <i class="icon-cross"></i>
                    </button>
                    <?php wp_nav_menu(array('theme_location' => 'menu-header', 'container_class' => 'navbar-nav', 'menu_class' => 'navigation')) ?>
                </nav>
                <?php if (get_theme_mod('add_phone_number')): ?>
                    <span class="tel">
                        <?php
                        echo esc_html__('Hotline: ', 'fusion');
                        ?>
                        <a href="tel:<?php echo get_theme_mod('add_phone_number'); ?>"><?php echo get_theme_mod('add_phone_number'); ?></a>
                    </span>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <section class="hero">
        <div class="container">

            <?php if ( is_front_page() ) : ?>
                <div class="intro-hero">
                <?php if (get_theme_mod('hero-intro')): ?>
                    <h2><?php echo get_theme_mod('hero-intro'); ?></h2>
                <?php endif; ?>
                <?php if (get_theme_mod('hero_description')): ?>
                    <p><?php echo get_theme_mod('hero_description'); ?></p>
                <?php endif; ?>
                <?php if (get_theme_mod('btn_text')): ?>
                    <a href="<?php echo get_permalink(get_theme_mod('btn_url')); ?>"
                       class="btn"><?php echo get_theme_mod('btn_text'); ?></a>
                <?php endif; ?>
                </div>
                <?php else: ?>
                <h2 class="title"><?php echo wp_get_document_title(); ?></h2>
            <?php endif; ?>

        </div>
    </section>

    <div class="site-content">
