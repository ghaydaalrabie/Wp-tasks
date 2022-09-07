<?php
function calanthalite_custom_css()
{	
    $custom_css = "";
    if ( get_theme_mod( 'calanthalite_body_color' ) ) {
    	$custom_css .= "
    		:root {
				--color-text: " . esc_attr( get_theme_mod( 'calanthalite_body_color' ) ) . ";
			}
    	";
    }
    if (get_theme_mod('calanthalite_accent_color')) {
    	$custom_css .= "
    		:root {
				--recent-color: " . esc_attr( get_theme_mod('calanthalite_accent_color') ) . ";
			}
    	";
    }
    wp_add_inline_style( 'calanthalite-theme-style', $custom_css );
}

add_action( 'wp_enqueue_scripts', 'calanthalite_custom_css', 15 );