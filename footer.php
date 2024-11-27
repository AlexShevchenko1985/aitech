<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aitech
 */

?>

	<footer id="colophon" class="site-footer">
        <div class="container">
            <div class="footer-logo">
                <?php the_custom_logo(); ?>
                <p>© 2024 SOLIDUS AI TECH LIMITED, ALL RIGHTS RESERVED</p>
            </div>
            <div class="footer-navbar">
                <?php if ( has_nav_menu( 'footer_menu_1' ) ) : ?>
                <div class="navbar-section">
                    <b>Company</b>
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'footer_menu_1',
                        'menu_class'     => 'footer-menu-1',
                    ) );
                    ?>
                </div>
                <?php endif; ?>

                <?php if ( has_nav_menu( 'footer_menu_1' ) ) : ?>
                    <div class="navbar-section">
                        <b>Resources</b>
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'footer_menu_2',
                            'menu_class'     => 'footer-menu-2',
                        ) );
                        ?>
                    </div>
                <?php endif; ?>

                <div class="navbar-section">
                    <b class="desktop-only">Socials</b>
                    <div class="socials">
                        <a href="" class="socials__item"><img src="<?= get_template_directory_uri() . '/build/img/tg.svg' ?>" alt=""></a>
                        <a href="" class="socials__item"><img src="<?= get_template_directory_uri() . '/build/img/discord.svg' ?>" alt=""></a>
                        <a href="" class="socials__item"><img src="<?= get_template_directory_uri() . '/build/img/x.svg' ?>" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
