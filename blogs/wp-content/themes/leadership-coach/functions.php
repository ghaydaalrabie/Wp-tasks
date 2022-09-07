<?php 
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/**
 * After setup theme hook
 */
function leadership_coach_theme_setup(){
    /*
     * Make chile theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    load_child_theme_textdomain( 'leadership-coach', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'leadership_coach_theme_setup', 100 );

function leadership_coach_styles() {
    $my_theme = wp_get_theme();
    $version  = $my_theme['Version'];

    wp_enqueue_style( 'coachpress-lite', get_template_directory_uri()  . '/style.css', array( 'animate' ) );
    wp_enqueue_style( 'leadership-coach', get_stylesheet_directory_uri() . '/style.css', array( 'coachpress-lite' ), $version );
}
add_action( 'wp_enqueue_scripts', 'leadership_coach_styles', 10 );

function leadership_coach_customize_script(){
    $my_theme = wp_get_theme();
    $version  = $my_theme['Version'];

    wp_enqueue_script( 'coachpress-lite-customize', get_stylesheet_directory_uri() . '/inc/js/customize.js', array( 'jquery', 'customize-controls' ), $version, true );
}
add_action( 'customize_controls_enqueue_scripts', 'leadership_coach_customize_script' );

//Remove a function from the parent theme
function leadership_coach_remove_parent_filters(){ 
    remove_action( 'customize_register', 'coachpress_lite_customizer_theme_info' );
    remove_action( 'customize_register', 'coachpress_lite_customize_register_appearance' );
    remove_action( 'wp_head', 'coachpress_lite_dynamic_css', 99 );
}
add_action( 'init', 'leadership_coach_remove_parent_filters' );

function leadership_coach_overide_values( $wp_customize ){
    if( coachpress_lite_is_wheel_of_life_activated() ){
        $wp_customize->get_setting( 'wheeloflife_color' )->default = '#eef9f5';
    }
}
add_action( 'customize_register', 'leadership_coach_overide_values', 999 );

function leadership_coach_customizer_register( $wp_customize ) {
	
    $wp_customize->add_section( 'theme_info', 
        array(
            'title'    => __( 'Information Links', 'leadership-coach' ),
            'priority' => 6,
        )
    );

    /** Important Links */
    $wp_customize->add_setting( 'theme_info_theme',
        array(
            'default' => '',
            'sanitize_callback' => 'wp_kses_post',
        )
    );
    
    $theme_info = '<p>';
    $theme_info .= sprintf( __( 'Demo Link: %1$sClick here.%2$s', 'leadership-coach' ),  '<a href="' . esc_url( 'https://blossomthemes.com/theme-demo/?theme=leadership-coach' ) . '" target="_blank">', '</a>' );
    $theme_info .= '</p><p>';
    $theme_info .= sprintf( __( 'Documentation Link: %1$sClick here.%2$s', 'leadership-coach' ),  '<a href="' . esc_url( 'https://docs.blossomthemes.com/leadership-coach/' ) . '" target="_blank">', '</a>' );
    $theme_info .= '</p>';

    $wp_customize->add_control( new CoachPress_Lite_Note_Control( $wp_customize,
        'theme_info_theme', 
            array(
                'section'     => 'theme_info',
                'description' => $theme_info
            )
        )
    );

	/** Header Layout Settings */
    $wp_customize->add_section(
        'header_layout_settings',
        array(
            'title'    => __( 'Header Layout', 'leadership-coach' ),
            'priority' => 10,
            'panel'    => 'layout_settings',
        )
    );
    
    /** Header layout */
    $wp_customize->add_setting( 
        'header_layout', 
        array(
            'default'           => 'two',
            'sanitize_callback' => 'coachpress_lite_sanitize_radio'
        ) 
    );
    
    $wp_customize->add_control(
        new CoachPress_Lite_Radio_Image_Control(
            $wp_customize,
            'header_layout',
            array(
                'section'     => 'header_layout_settings',
                'label'       => __( 'Header Layout', 'leadership-coach' ),
                'description' => __( 'Choose the layout of the header for your site.', 'leadership-coach' ),
                'choices'     => array( 
                    'one'   => get_stylesheet_directory_uri() . '/images/header/one.jpg',
                    'two'  => get_stylesheet_directory_uri() . '/images/header/two.jpg',
                )
            )
        )
    );

    /** Static Banner Layout Settings */
    $wp_customize->add_section(
        'cta_static_banner_layout_settings',
        array(
            'title'    => __( 'CTA Static Banner Layout', 'leadership-coach' ),
            'priority' => 30,
            'panel'    => 'layout_settings',
        )
    );
    
    $wp_customize->add_setting( 
        'cta_static_banner_layout', 
        array(
            'default'           => 'three',
            'sanitize_callback' => 'coachpress_lite_sanitize_radio'
        ) 
    );
    
    $wp_customize->add_control(
        new CoachPress_Lite_Radio_Image_Control(
            $wp_customize,
            'cta_static_banner_layout',
            array(
                'section'     => 'cta_static_banner_layout_settings',
                'label'       => __( 'CTA Static Banner Layout', 'leadership-coach' ),
                'description' => __( 'Choose the layout of the cta static banner for your site.', 'leadership-coach' ),
                'choices'     => array(
                    'one'   => get_stylesheet_directory_uri() . '/images/static_banner/cta_one.jpg',
                    'three' => get_stylesheet_directory_uri() . '/images/static_banner/cta_three.jpg',
                )
            )
        )
    );

    $wp_customize->add_panel( 
        'appearance_settings', 
        array(
            'title'       => __( 'Appearance Settings', 'leadership-coach' ),
            'priority'    => 25,
            'capability'  => 'edit_theme_options',
            'description' => __( 'Change color and body background.', 'leadership-coach' ),
        ) 
    );

    /** Typography */
    $wp_customize->add_section(
        'typography_settings',
        array(
            'title'    => __( 'Typography', 'leadership-coach' ),
            'priority' => 20,
            'panel'    => 'appearance_settings',
        )
    );

    /** Primary Font */
    $wp_customize->add_setting(
        'primary_font',
        array(
            'default' => array(                                         
                'font-family' => 'Lato',
                'variant'     => 'regular',
            ),
            'sanitize_callback' => array( 'CoachPress_Lite_Fonts', 'sanitize_typography' )
        )
    );

    $wp_customize->add_control( 
        new CoachPress_Lite_Typography_Control( 
            $wp_customize, 
            'primary_font', 
            array(
                'label'       => __( 'Primary Font', 'leadership-coach' ),
                'description' => __( 'Primary font of the site.', 'leadership-coach' ),
                'section'     => 'typography_settings',
                'priority'    => 5,
            ) 
        ) 
    );

    /** Secondary Font */
    $wp_customize->add_setting(
        'secondary_font',
        array(
            'default'           => 'Lora',
            'sanitize_callback' => 'coachpress_lite_sanitize_select'
        )
    );

    $wp_customize->add_control(
        new CoachPress_Lite_Select_Control(
            $wp_customize,
            'secondary_font',
            array(
                'label'       => __( 'Secondary Font', 'leadership-coach' ),
                'description' => __( 'Secondary font of the site.', 'leadership-coach' ),
                'section'     => 'typography_settings',
                'choices'     => coachpress_lite_get_all_fonts(),
                'priority'    => 5,   
            )
        )
    );

    /** Tertiary Font */
    $wp_customize->add_setting(
        'tertiary_font',
        array(
            'default'           => 'Great Vibes',
            'sanitize_callback' => 'coachpress_lite_sanitize_select'
        )
    );

    $wp_customize->add_control(
        new CoachPress_Lite_Select_Control(
            $wp_customize,
            'tertiary_font',
            array(
                'label'       => __( 'Tertiary Font', 'leadership-coach' ),
                'section'     => 'typography_settings',
                'choices'     => coachpress_lite_get_all_fonts(),    
            )
        )
    );  

    /** Font Size*/
    $wp_customize->add_setting( 
        'font_size', 
        array(
            'default'           => 18,
            'sanitize_callback' => 'coachpress_lite_sanitize_number_absint'
        ) 
    );
    
    $wp_customize->add_control(
        new CoachPress_Lite_Slider_Control( 
            $wp_customize,
            'font_size',
            array(
                'section'     => 'typography_settings',
                'label'       => __( 'Font Size', 'leadership-coach' ),
                'description' => __( 'Change the font size of your site.', 'leadership-coach' ),
                'choices'     => array(
                    'min'   => 10,
                    'max'   => 50,
                    'step'  => 1,
                )                 
            )
        )
    );

    $wp_customize->add_setting(
        'ed_localgoogle_fonts',
        array(
            'default'           => false,
            'sanitize_callback' => 'coachpress_lite_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_control(
        new CoachPress_Lite_Toggle_Control( 
            $wp_customize,
            'ed_localgoogle_fonts',
            array(
                'section'       => 'typography_settings',
                'label'         => __( 'Load Google Fonts Locally', 'leadership-coach' ),
                'description'   => __( 'Enable to load google fonts from your own server instead from google\'s CDN. This solves privacy concerns with Google\'s CDN and their sometimes less-than-transparent policies.', 'leadership-coach' )
            )
        )
    );   

    $wp_customize->add_setting(
        'ed_preload_local_fonts',
        array(
            'default'           => false,
            'sanitize_callback' => 'coachpress_lite_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_control(
        new CoachPress_Lite_Toggle_Control( 
            $wp_customize,
            'ed_preload_local_fonts',
            array(
                'section'       => 'typography_settings',
                'label'         => __( 'Preload Local Fonts', 'leadership-coach' ),
                'description'   => __( 'Preloading Google fonts will speed up your website speed.', 'leadership-coach' ),
                'active_callback' => 'coachpress_lite_ed_localgoogle_fonts'
            )
        )
    );   

    ob_start(); ?>
        
        <span style="margin-bottom: 5px;display: block;"><?php esc_html_e( 'Click the button to reset the local fonts cache', 'leadership-coach' ); ?></span>
        
        <input type="button" class="button button-primary leadership-coach-flush-local-fonts-button" name="leadership-coach-flush-local-fonts-button" value="<?php esc_attr_e( 'Flush Local Font Files', 'leadership-coach' ); ?>" />
    <?php
    $leadership_coach_flush_button = ob_get_clean();

    $wp_customize->add_setting(
        'ed_flush_local_fonts',
        array(
            'sanitize_callback' => 'wp_kses_post',
        )
    );
    
    $wp_customize->add_control(
        'ed_flush_local_fonts',
        array(
            'label'         => __( 'Flush Local Fonts Cache', 'leadership-coach' ),
            'section'       => 'typography_settings',
            'description'   => $leadership_coach_flush_button,
            'type'          => 'hidden',
            'active_callback' => 'coachpress_lite_ed_localgoogle_fonts'
        )
    );

    /** Move Background Image section to appearance panel */
    $wp_customize->get_section( 'colors' )->panel              = 'appearance_settings';
    $wp_customize->get_section( 'colors' )->priority           = 10;
    $wp_customize->get_section( 'background_image' )->panel    = 'appearance_settings';
    $wp_customize->get_section( 'background_image' )->priority = 15;

    $wp_customize->add_setting(
        'header_contact_button',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    
    $wp_customize->add_control(
        'header_contact_button',
        array(
            'label'         => __( 'Header Contact Button', 'leadership-coach' ),
            'description'   => __( 'This button shows only on header layout 2.', 'leadership-coach' ),
            'section'       => 'header_settings',
            'type'          => 'text',
        )
    );

    $wp_customize->add_setting(
        'header_contact_url',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw', 
        )
    );
    
    $wp_customize->add_control(
        'header_contact_url',
        array(
            'label'     => __( 'Header Contact Button', 'leadership-coach' ),
            'section'   => 'header_settings',
            'type'      => 'url',
        )
    );
}

add_action( 'customize_register', 'leadership_coach_customizer_register', 40 );

/**
 * Form 
*/
function coachpress_lite_header_contact(){ 
    $phone = get_theme_mod( 'phone' );
    $email = get_theme_mod( 'email' );

    if( $phone || $email ) :
        echo '<div class="header-left">';
        if( !empty( $phone ) ) echo '<div class="header-block"><i class="fas fa-phone"></i><a href="tel:' . preg_replace( '/[^\d+]/', '', $phone ) . '">' . esc_html( $phone ) . '</a></div>';
        if( !empty( $email ) ) echo '<div class="header-block"><i class="fas fa-envelope"></i><a href="mailto:' . sanitize_email( $email ) . '">' . sanitize_email( $email ) . '</a></div>';
        echo '</div>';
    endif;
}

/**
 * Header Start
*/
function coachpress_lite_header(){ 
    $ed_cart       = get_theme_mod( 'ed_shopping_cart', true );
    $ed_search     = get_theme_mod( 'ed_header_search', true ); 
    $header_layout = get_theme_mod( 'header_layout', 'two' ); 

    if ( $header_layout == 'one' ) {
        $class = 'center';
    }else{
        $class = 'left';
    }

    ?>
    <header id="masthead" class="site-header style-<?php echo esc_attr( $header_layout ); ?>" itemscope itemtype="http://schema.org/WPHeader">
        <div class="header-top">
            <div class="container">
                <?php 
                coachpress_lite_header_contact();

                if( coachpress_lite_social_links( false ) ) {
                    echo '<div class="header-center">
                        <div class="header-social">';
                        coachpress_lite_social_links();
                        echo '</div>
                    </div>';
                } ?>

                <div class="header-right">
                    <?php 
                    if( $ed_search ) coachpress_lite_header_search();
                    if( coachpress_lite_is_woocommerce_activated() && $ed_cart ) {
                        echo '<div class="header-cart">';
                        coachpress_lite_wc_cart_count();
                        echo '</div>';
                    } ?>
                    <?php coachpress_lite_secondary_navigation(); ?>
                </div>
            </div>
        </div> <!-- .header-top end -->

        <div class="header-main">
            <div class="container">
                <?php 
                    coachpress_lite_site_branding(); 
                    if ( $header_layout == 'two' ) echo '<div class="nav-wrap">';
                        coachpress_lite_primary_navigation();
                        if ( $header_layout == 'two' ) leadership_coach_contact_button();                    
                    if ( $header_layout == 'two' ) echo '</div>';                    
                ?>
            </div>
        </div>
    </header>
    
    <?php 
    coachpress_lite_mobile_navigation();
}

/**
 * Form 
*/
function leadership_coach_contact_button(){ 
    $header_contact_button = get_theme_mod( 'header_contact_button' );
    $header_contact_url = get_theme_mod( 'header_contact_url' );
    if( $header_contact_button && $header_contact_url ) : ?>
        <div class="button-wrap">
            <a href="<?php echo esc_url( $header_contact_url ); ?>" class="btn-readmore btn-two"><?php echo esc_html( $header_contact_button ); ?></a>
        </div>
    <?php
    endif;
}

/**
 * Footer Bottom
*/
function coachpress_lite_footer_bottom(){ ?>
    <div class="footer-bottom">
        <div class="footer-menu">
            <div class="container">
                <?php coachpress_lite_footer_navigation(); ?>
            </div>
        </div>
        <div class="site-info">   
            <div class="container">         
            <?php
                coachpress_lite_get_footer_copyright();
                echo esc_html__( ' Leadership Coach | Developed By ', 'leadership-coach' ); 
                echo '<a href="' . esc_url( 'https://blossomthemes.com/wordpress-themes/leadership-coach/' ) .'" rel="nofollow" target="_blank">' . esc_html__( 'Blossom Themes', 'leadership-coach' ) . '</a>.';                
                printf( esc_html__( ' Powered by %s. ', 'leadership-coach' ), '<a href="'. esc_url( __( 'https://wordpress.org/', 'leadership-coach' ) ) .'" target="_blank">WordPress</a>' );
                if( function_exists( 'the_privacy_policy_link' ) ){
                    the_privacy_policy_link();
                }
            ?>               
            </div>
        </div>
        <button class="back-to-top">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M6.101 359.293L25.9 379.092c4.686 4.686 12.284 4.686 16.971 0L224 198.393l181.13 180.698c4.686 4.686 12.284 4.686 16.971 0l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L232.485 132.908c-4.686-4.686-12.284-4.686-16.971 0L6.101 342.322c-4.687 4.687-4.687 12.285 0 16.971z"></path></svg>
        </button><!-- .back-to-top -->
    </div>
    <?php
}

/**
 * Ajax Callback
 */
function coachpress_lite_dynamic_mce_css_ajax_callback(){
 
    /* Check nonce for security */
    $nonce = isset( $_REQUEST['_nonce'] ) ? $_REQUEST['_nonce'] : '';
    if( ! wp_verify_nonce( $nonce, 'coachpress_lite_dynamic_mce_nonce' ) ){
        die(); // don't print anything
    }
 
    /* Get Link Color */
    $primary_font    = get_theme_mod( 'primary_font', array( 'font-family'=>'Lato', 'variant'=>'regular' ) );
    $primary_fonts   = coachpress_lite_get_fonts( $primary_font['font-family'], $primary_font['variant'] );
    $secondary_font  = get_theme_mod( 'secondary_font', 'Lora' );
    $secondary_fonts = coachpress_lite_get_fonts( $secondary_font, 'regular' );
    $tertiary_font   = get_theme_mod( 'tertiary_font', 'Great Vibes' );
    $tertiary_fonts  = coachpress_lite_get_fonts( $tertiary_font, 'regular' );
 
    /* Set File Type and Print the CSS Declaration */
    header( 'Content-type: text/css' );
    echo ':root .mce-content-body {
        --primary-font: ' . esc_html( $primary_fonts['font'] ) . ';
        --secondary-font: ' . esc_html( $secondary_fonts['font'] ) . ';
        --cursive-font: ' . esc_html( $tertiary_fonts['font'] ) . ';
    }';
    die(); // end ajax process.
}

/**
 * Gutenberg Dynamic Style
 */
function coachpress_lite_gutenberg_inline_style(){
 
    $primary_font    = get_theme_mod( 'primary_font', array( 'font-family'=>'Lato', 'variant'=>'regular' ) );
    $primary_fonts   = coachpress_lite_get_fonts( $primary_font['font-family'], $primary_font['variant'] );
    $secondary_font  = get_theme_mod( 'secondary_font', 'Lora' );
    $secondary_fonts = coachpress_lite_get_fonts( $secondary_font, 'regular' );
    $tertiary_font   = get_theme_mod( 'tertiary_font', 'Great Vibes' );
    $tertiary_fonts  = coachpress_lite_get_fonts( $tertiary_font, 'regular' );
 
    $custom_css = ':root .block-editor-page {
        --primary-font: ' . esc_html( $primary_fonts['font'] ) . ';
        --secondary-font: ' . esc_html( $secondary_fonts['font'] ) . ';
        --cursive-font: ' . esc_html( $tertiary_fonts['font'] ) . ';
    }';

    return $custom_css;
}

/** Typography */
function coachpress_lite_fonts_url(){
    $fonts_url = '';
    
    $primary_font       = get_theme_mod( 'primary_font', array( 'font-family'=>'Lato', 'variant'=>'regular' ) );
    $ig_primary_font    = coachpress_lite_is_google_font( $primary_font['font-family'] );    
    $secondary_font     = get_theme_mod( 'secondary_font', 'Lora' );
    $ig_secondary_font  = coachpress_lite_is_google_font( $secondary_font );    
    $tertiary_font      = get_theme_mod( 'tertiary_font', 'Great Vibes' );
    $ig_tertiary_font   = coachpress_lite_is_google_font( $tertiary_font );
    $site_title_font    = get_theme_mod( 'site_title_font', array( 'font-family'=>'Noto Serif', 'variant'=>'regular' ) );
    $ig_site_title_font = coachpress_lite_is_google_font( $site_title_font['font-family'] );
        
    /* Translators: If there are characters in your language that are not
    * supported by respective fonts, translate this to 'off'. Do not translate
    * into your own language.
    */
    $primary    = _x( 'on', 'Primary Font: on or off', 'leadership-coach' );
    $secondary  = _x( 'on', 'Secondary Font: on or off', 'leadership-coach' );
    $tertiary   = _x( 'on', 'Tertiary Font: on or off', 'leadership-coach' );
    $site_title = _x( 'on', 'Site Title Font: on or off', 'leadership-coach' );
    
    
    if ( 'off' !== $primary || 'off' !== $secondary  || 'off' !== $tertiary || 'off' !== $site_title ) {
        
        $font_families = array();
     
        if ( 'off' !== $primary && $ig_primary_font ) {
            $primary_variant = coachpress_lite_check_varient( $primary_font['font-family'], $primary_font['variant'], true );
            if( $primary_variant ){
                $primary_var = ':' . $primary_variant;
            }else{
                $primary_var = '';    
            }            
            $font_families[] = $primary_font['font-family'] . $primary_var;
        }
         
        if ( 'off' !== $secondary && $ig_secondary_font ) {
            $secondary_variant = coachpress_lite_check_varient( $secondary_font, 'regular', true );
            if( $secondary_variant ){
                $secondary_var = ':' . $secondary_variant;    
            }else{
                $secondary_var = '';
            }
            $font_families[] = $secondary_font . $secondary_var;
        }

        if ( 'off' !== $tertiary && $ig_tertiary_font ) {
            $tertiary_variant = coachpress_lite_check_varient( $tertiary_font, 'regular', true );
            if( $tertiary_variant ){
                $tertiary_var = ':' . $tertiary_variant;    
            }else{
                $tertiary_var = '';
            }
            $font_families[] = $tertiary_font . $tertiary_var;
        }
        
        if ( 'off' !== $site_title && $ig_site_title_font ) {
            
            if( ! empty( $site_title_font['variant'] ) ){
                $site_title_var = ':' . coachpress_lite_check_varient( $site_title_font['font-family'], $site_title_font['variant'] );    
            }else{
                $site_title_var = '';
            }
            $font_families[] = $site_title_font['font-family'] . $site_title_var;
        }
        
        $font_families = array_diff( array_unique( $font_families ), array('') );
        
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),            
        );
        
        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
    }
    
    if( get_theme_mod( 'ed_localgoogle_fonts', false ) ) {
        $fonts_url = coachpress_lite_get_webfont_url( add_query_arg( $query_args, 'https://fonts.googleapis.com/css' ) );
    }
     
    return esc_url_raw( $fonts_url );
}

/** Dynamic CSS */
function leadership_coach_dynamic_css(){

    $primary_font    = get_theme_mod( 'primary_font', array( 'font-family'=>'Lato', 'variant'=>'regular' ) );
    $primary_fonts   = coachpress_lite_get_fonts( $primary_font['font-family'], $primary_font['variant'] );
    $secondary_font  = get_theme_mod( 'secondary_font', 'Lora' );
    $secondary_fonts = coachpress_lite_get_fonts( $secondary_font, 'regular' );
    $tertiary_font   = get_theme_mod( 'tertiary_font', 'Great Vibes' );
    $tertiary_fonts  = coachpress_lite_get_fonts( $tertiary_font, 'regular' );

    $font_size       = get_theme_mod( 'font_size', 18 );

    $site_title_font      = get_theme_mod( 'site_title_font', array( 'font-family'=>'Noto Serif', 'variant'=>'regular' ) );
    $site_title_fonts     = coachpress_lite_get_fonts( $site_title_font['font-family'], $site_title_font['variant'] );
    $site_title_font_size = get_theme_mod( 'site_title_font_size', 30 );

    $logo_width       = get_theme_mod( 'logo_width', 150 );

    $wheeloflife_color = get_theme_mod( 'wheeloflife_color', '#eef9f5' );

    echo "<style type='text/css' media='all'>"; ?>

    /*Typography*/

    :root {
        --primary-font: <?php echo wp_kses_post( $primary_fonts['font'] ); ?>;
        --secondary-font: <?php echo wp_kses_post( $secondary_fonts['font'] ); ?>;
        --cursive-font: <?php echo wp_kses_post( $tertiary_fonts['font'] ); ?>;
    }

    body {
        font-size   : <?php echo absint( $font_size ); ?>px;        
    }

    .custom-logo-link img{
        width    : <?php echo absint( $logo_width ); ?>px;
        max-width: 100%;
    }

    .site-title{
        font-size   : <?php echo absint( $site_title_font_size ); ?>px;
        font-family : <?php echo wp_kses_post( $site_title_fonts['font'] ); ?>;
        font-weight : <?php echo esc_html( $site_title_fonts['weight'] ); ?>;
        font-style  : <?php echo esc_html( $site_title_fonts['style'] ); ?>;
    }

    section#wheeloflife_section {
        background-color:<?php echo coachpress_lite_sanitize_hex_color( $wheeloflife_color ); ?>;
    }

<?php echo "</style>";
}
add_action( 'wp_head', 'leadership_coach_dynamic_css', 99 );

/**
 * Returns Home Sections 
*/
function coachpress_lite_get_home_sections(){
    
    $ed_banner = get_theme_mod( 'ed_banner_section', 'static_banner' );
    $sections = array( 
        'promo'         => array( 'sidebar' => 'promo' ),
        'about'         => array( 'sidebar' => 'about' ),
        'client'        => array( 'sidebar' => 'client' ),
        'service'       => array( 'sidebar' => 'service' ),
        'wheeloflife'   => array( 'section' => 'wheeloflife'),
        'testimonial'   => array( 'sidebar' => 'testimonial' ),        
        'cta'           => array( 'sidebar' => 'cta' ),
        'blog'          => array( 'section' => 'blog' ),
        'newsletter'    => array( 'sidebar' => 'newsletter' ),
    );
    
    $enabled_section = array();
    
    if( $ed_banner == 'static_banner' || $ed_banner == 'slider_banner' || $ed_banner == 'static_nl_banner' ) array_push( $enabled_section, 'banner' );
    
    foreach( $sections as $k => $v ){
        if( array_key_exists( 'sidebar', $v ) ){
            if( is_active_sidebar( $v['sidebar'] ) ) array_push( $enabled_section, $v['sidebar'] );
        }else{
            if( get_theme_mod( 'ed_' . $v['section'] . '_section', false ) ) array_push( $enabled_section, $v['section'] );
        }
    }  
    return apply_filters( 'coachpress_lite_home_sections', $enabled_section );
}