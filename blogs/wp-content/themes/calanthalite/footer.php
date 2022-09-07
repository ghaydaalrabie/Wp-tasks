    </div><!-- #calanthalite-primary -->
    <footer id="calanthalite-footer">
        <?php if ( is_active_sidebar('footer-ins') ) : ?>
        <div class="footer-ins">
            <?php dynamic_sidebar('footer-ins'); ?>
        </div>
        <?php endif; ?>
        <div class="main-footer">
            <div class="container">
        		<div class="logo-footer">
                   <?php
                    if ( get_theme_mod('logo_footer') ) {
                        $logo_footer = get_theme_mod( 'logo_footer' );
                    ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php echo esc_url($logo_footer); ?>" alt="<?php echo get_bloginfo('name'); ?>">
                    </a>
                    <?php } ?>
					<?php if( get_theme_mod('calanthalite_show_tagline_footer') == true ) { ?>
                    <span class="tag-line"><?php echo get_bloginfo( 'description'); ?></span>
					<?php } ?>
        		</div>
                <?php 
                if ( get_theme_mod('calanthalite_show_social_footer') == true ) {
                    calanthalite_social_network(false); 
                } ?>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="copyright"><?php echo wp_kses_post( get_theme_mod('calanthalite_footer_copyright_text') ); ?></div>
            </div>
        </div>
    </footer>
</div>
<?php wp_footer(); ?>    
</body>
</html>