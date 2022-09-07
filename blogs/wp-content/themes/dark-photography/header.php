<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dark-photography' ); ?></a>

<div class="topheader py-2">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-7 col-sm-7 align-self-center text-center text-md-left">
				<?php if ( get_theme_mod('dark_photography_header_phone_number') ) : ?>
			      <span class="mr-3"><i class="fas fa-phone mr-2"></i><span class="mr-2"><?php esc_html_e('Call Us:','dark-photography'); ?></span><?php echo esc_html( get_theme_mod('dark_photography_header_phone_number' ) ); ?></span>
			    <?php endif; ?>

			    <?php if ( get_theme_mod('dark_photography_header_email_address') ) : ?>
			      <span><i class="fas fa-envelope mr-2"></i><span class="mr-2"><?php esc_html_e('Mail Us:','dark-photography'); ?></span><?php echo esc_html( get_theme_mod('dark_photography_header_email_address' ) ); ?></span>
			    <?php endif; ?>
			</div>
			<div class="col-lg-4 col-md-5 col-sm-5 align-self-center">
				<?php $dark_photography_settings = get_theme_mod( 'dark_photography_social_links_settings' ); ?>
				<div class="social-links text-center text-md-right">
					<?php if ( is_array($dark_photography_settings) || is_object($dark_photography_settings) ){ ?>
				    	<?php foreach( $dark_photography_settings as $dark_photography_setting ) { ?>
					        <a href="<?php echo esc_url( $dark_photography_setting['link_url'] ); ?>">
					            <i class="<?php echo esc_attr( $dark_photography_setting['link_text'] ); ?> mr-3"></i>
					        </a>
				    	<?php } ?>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<header id="site-navigation" class="header text-center text-md-left py-2">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-12 col-sm-12 align-self-center">
				<div class="logo">
		    		<div class="logo-image">
		    			<?php echo esc_url( the_custom_logo() ); ?>
			    	</div>
			    	<div class="logo-content text-center text-lg-left">
				    	<?php
				    		if ( get_theme_mod('dark_photography_display_header_title', true) == true ) :
					      		echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
					      			echo esc_attr(get_bloginfo('name'));
					      		echo '</a>';
					      	endif;

					      	if ( get_theme_mod('dark_photography_display_header_text', true) == true ) :
				      			echo '<span>'. esc_attr(get_bloginfo('description')) . '</span>';
				      		endif;
			    		?>
					</div>
				</div>
		   	</div>
			<div class="col-lg-8 col-md-11 col-sm-11 align-self-center">
				<?php if(has_nav_menu('main-menu')){ ?>
					<button class="menu-toggle my-2 py-2 px-3" aria-controls="top-menu" aria-expanded="false" type="button">
						<span aria-hidden="true"><?php esc_html_e( 'Menu', 'dark-photography' ); ?></span>
					</button>
					<nav id="main-menu" class="close-panal">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'main-menu',
								'container' => 'false'
							));
						?>
						<button class="close-menu my-2 p-2" type="button">
							<span aria-hidden="true"><i class="fa fa-times"></i></span>
						</button>
					</nav>
				<?php }?>
			</div>
			<div class="col-lg-1 col-md-1 col-sm-1 align-self-center">
				<div class="header-search text-center py-3 py-md-0">
	            	<?php if ( get_theme_mod('dark_photography_search_box_enable', true) == true ) : ?>
	                    <a class="open-search-form" href="#search-form"><i class="fa fa-search" aria-hidden="true"></i></a>
	                    <div class="search-form"><?php get_search_form();?></div>
	            	<?php endif; ?>
	            </div>
	       	</div>
	   	</div>
	</div>
</header>