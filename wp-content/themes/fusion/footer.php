<?php
/**
 * The template for displaying the footer
 */
?>

    </div><!-- .site-content -->
    <div class="site-info">
        <div class="container">
            <ul class="footer-widgets">
                <?php if ( is_active_sidebar( 'sidebar-footer' ) ) : ?>
                    <?php dynamic_sidebar( 'sidebar-footer' ); ?>
                <?php endif; ?>

                <li class="widget-social">
                    <?php if (get_theme_mod('title_social') != ''): ?>
                        <h3><?php echo get_theme_mod('title_social'); ?></h3>
                    <?php endif; ?>
                    <?php get_template_part( 'template-parts/content', 'social' ); ?>
                </li>

            </ul>
        </div>
    </div>
    <footer class="site-footer">
        <div class="container">
            <?php if (get_theme_mod('copyright')): ?>
                <span class="copy"><?php echo get_theme_mod('copyright'); ?></span>
            <?php endif; ?>
        </div>
    </footer>

<?php wp_footer(); ?>

</body>
</html>