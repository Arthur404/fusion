<?php
/*
Home page
*/

get_header(); ?>
    <section class="welcome">
        <div class="container">
            <div class="title">
                <?php if (get_theme_mod('title-welcome') != ''): ?>
                    <h2><?php echo get_theme_mod('title-welcome'); ?></h2>
                <?php endif; ?>
                <?php if (get_theme_mod('description-welcome') != ''): ?>
                    <p><?php echo get_theme_mod('description-welcome'); ?></p>
                <?php endif; ?>
            </div>
            <ul class="welcome-wrap">

                <?php
                $args = array(
                    'post_type' => 'welcome',
                    'posts_per_page' => 3,
                );
                $the_query = new WP_Query($args);
                if ( $the_query -> have_posts() ) : while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>

                <li>
                    <div class="welcome-icon">
                        <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                        }
                        ?>
                    </div>
                    <div class="welcome-title">
                        <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                    </div>
                    <div class="welcome-content">
                        <?php the_content(); ?>
                    </div>
                </li>

                <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>

            </ul>
        </div>
    </section>
<?php
get_footer();
