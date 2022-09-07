<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'calanthalite' ); ?></a>
    <div class="main-wrapper-boxed">
        <header id="calanthalite-header" class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-top-content">
                        <?php 
                        if (true == get_theme_mod( 'calanthalite_show_social_header', true )) {
                            calanthalite_social_network(); 
                        }?>
                        <?php if (true == get_theme_mod('calanthalite_show_search_header', true)){ ?>
                            <div class="search-header">
                                <?php get_search_form() ?>
                            </div>
                        <?php } ?>                  
                    </div>
                </div>
            </div>
            <?php get_template_part( 'template-parts/logo', 'site' ) ?>
            <div class="header-content"> 
                <div class="container">
                    <div class="icon-touch d-lg-none">
                        <a href="javascript:void(0)" class="menu-touch">
                            <div class="navbar-toggle">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                    </div>
                    <div id="nav-wrapper" class="nav-main main-menu-horizontal">
                        <?php
                            wp_nav_menu( array (
                                'container' => false,
                                'theme_location' => 'primary',
                                'menu_class' => 'calanthalite-main-menu',
                                'depth' => 5,
                            ) );
                        ?>
                    </div>
                </div>
            </div>
        </header>
        <div id="content" class="calanthalite-primary">