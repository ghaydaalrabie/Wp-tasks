<?php


$dark_photography_custom_css = '';

	/*---------------------------text-transform-------------------*/

	$dark_photography_text_transform = get_theme_mod( 'menu_text_transform_dark_photography','UPPERCASE');
    if($dark_photography_text_transform == 'CAPITALISE'){

		$dark_photography_custom_css .='#main-menu ul li a{';

			$dark_photography_custom_css .='text-transform: capitalize ; font-size: 14px !important;';

		$dark_photography_custom_css .='}';

	}else if($dark_photography_text_transform == 'UPPERCASE'){

		$dark_photography_custom_css .='#main-menu ul li a{';

			$dark_photography_custom_css .='text-transform: uppercase ; font-size: 14px !important';

		$dark_photography_custom_css .='}';

	}else if($dark_photography_text_transform == 'LOWERCASE'){

		$dark_photography_custom_css .='#main-menu ul li a{';

			$dark_photography_custom_css .='text-transform: lowercase ; font-size: 14px !important';

		$dark_photography_custom_css .='}';
	}

		/*---------------------------Container Width-------------------*/

	$dark_photography_container_width = get_theme_mod('dark_photography_container_width');

			$dark_photography_custom_css .='body{';

				$dark_photography_custom_css .='width: '.esc_attr($dark_photography_container_width).'%; margin: auto';

			$dark_photography_custom_css .='}';
