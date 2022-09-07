<?php

add_action( 'admin_menu', 'dark_photography_getting_started' );
function dark_photography_getting_started() {
	add_theme_page( esc_html__('Get Started', 'dark-photography'), esc_html__('Get Started', 'dark-photography'), 'edit_theme_options', 'dark-photography-guide-page', 'dark_photography_test_guide');
}

function dark_photography_admin_enqueue_scripts() {
	wp_enqueue_style( 'dark-photography-admin-style', esc_url( get_template_directory_uri() ).'/css/main.css' );
}
add_action( 'admin_enqueue_scripts', 'dark_photography_admin_enqueue_scripts' );

if ( ! defined( 'DARK_PHOTOGRAPHY_DOCS_FREE' ) ) {
define('DARK_PHOTOGRAPHY_DOCS_FREE',__('https://www.misbahwp.com/docs/dark-photography-free-docs/','dark-photography'));
}
if ( ! defined( 'DARK_PHOTOGRAPHY_DOCS_PRO' ) ) {
define('DARK_PHOTOGRAPHY_DOCS_PRO',__('https://www.misbahwp.com/docs/dark-photography-pro-docs','dark-photography'));
}
if ( ! defined( 'DARK_PHOTOGRAPHY_BUY_NOW' ) ) {
define('DARK_PHOTOGRAPHY_BUY_NOW',__('https://www.misbahwp.com/themes/dark-photography-wordpress-theme/','dark-photography'));
}
if ( ! defined( 'DARK_PHOTOGRAPHY_SUPPORT_FREE' ) ) {
define('DARK_PHOTOGRAPHY_SUPPORT_FREE',__('https://wordpress.org/support/theme/dark-photography','dark-photography'));
}
if ( ! defined( 'DARK_PHOTOGRAPHY_REVIEW_FREE' ) ) {
define('DARK_PHOTOGRAPHY_REVIEW_FREE',__('https://wordpress.org/support/theme/dark-photography/reviews/#new-post','dark-photography'));
}
if ( ! defined( 'DARK_PHOTOGRAPHY_DEMO_PRO' ) ) {
define('DARK_PHOTOGRAPHY_DEMO_PRO',__('https://www.misbahwp.com/demo/dark-photography/','dark-photography'));
}

function dark_photography_test_guide() { ?>
	<?php $theme = wp_get_theme(); ?>

	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( DARK_PHOTOGRAPHY_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'dark-photography' ) ?></a>
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'dark-photography' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( DARK_PHOTOGRAPHY_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'dark-photography' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( DARK_PHOTOGRAPHY_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'dark-photography' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','dark-photography'); ?><?php echo esc_html( $theme ); ?>  <span><?php esc_html_e('Version: ', 'dark-photography'); ?><?php echo esc_html($theme['Version']);?></span></h3>
				<img class="img_responsive" style="width:100%;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png">
				<div id="description-inside">
					<?php
						$theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>

		<div id="righty">
			<div class="postbox donate">
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','dark-photography'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','dark-photography'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','dark-photography'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','dark-photography'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','dark-photography'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','dark-photography'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','dark-photography'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','dark-photography'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','dark-photography'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','dark-photography'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','dark-photography'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','dark-photography'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','dark-photography'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','dark-photography'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','dark-photography'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
	  		</div>
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'dark-photography' ); ?></h3>
				<div class="inside">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','dark-photography'); ?></p>
					<div id="admin_pro_links">
						<a class="blue-button-2" href="<?php echo esc_url( DARK_PHOTOGRAPHY_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'dark-photography' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( DARK_PHOTOGRAPHY_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'dark-photography' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( DARK_PHOTOGRAPHY_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'dark-photography' ) ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php } ?>
