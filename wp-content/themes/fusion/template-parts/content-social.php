<?php
/**
 * Social button
 */
?>

<ul class="social-btn">
    <?php if (get_theme_mod('url_twitter')) :?>
        <li class="tw">
            <a href="<?php echo get_theme_mod('url_twitter'); ?>" target="_blank"><i class="icon-twitter"></i></a>
        </li>
    <?php endif; ?>
    <?php if (get_theme_mod('url_facebook')) :?>
        <li class="fb">
            <a href="<?php echo get_theme_mod('url_facebook'); ?>" target="_blank"><i class="icon-facebook"></i></a>
        </li>
    <?php endif; ?>
    <?php if (get_theme_mod('url_instagram')) :?>
        <li class="inst">
            <a href="<?php echo get_theme_mod('url_instagram'); ?>" target="_blank"><i class="icon-instagram"></i></a>
        </li>
    <?php endif; ?>
    <?php if (get_theme_mod('url_google')) :?>
        <li class="google">
            <a href="<?php echo get_theme_mod('url_google'); ?>" target="_blank"><i class="icon-google-plus"></i></a>
        </li>
    <?php endif; ?>
    <?php if (get_theme_mod('url_linkedin')) :?>
        <li class="in">
            <a href="<?php echo get_theme_mod('url_linkedin'); ?>" target="_blank"><i class="icon-linkedin2"></i></a>
        </li>
    <?php endif; ?>
    <?php if (get_theme_mod('url_pinterest')) :?>
        <li class="pin">
            <a href="<?php echo get_theme_mod('url_pinterest'); ?>" target="_blank"><i class="icon-pinterest"></i></a>
        </li>
    <?php endif; ?>
    <?php if (get_theme_mod('url_dribbble')) :?>
        <li class="drib">
            <a href="<?php echo get_theme_mod('url_dribbble'); ?>" target="_blank"><i class="icon-dribbble"></i></a>
        </li>
    <?php endif; ?>
    <?php if (get_theme_mod('url_youtube')) :?>
        <li class="you">
            <a href="<?php echo get_theme_mod('url_youtube'); ?>" target="_blank"><i class="icon-youtube"></i></a>
        </li>
    <?php endif; ?>
</ul>
