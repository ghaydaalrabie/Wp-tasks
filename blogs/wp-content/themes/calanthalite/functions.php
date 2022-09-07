<?php
# Define
define('CALANTHALITE_LIBS_URI', get_template_directory_uri() . '/libs/');
define('CALANTHALITE_CORE_PATH', get_template_directory() . '/core/');
define('CALANTHALITE_CORE_URI', get_template_directory_uri() . '/core/');
define('CALANTHALITE_CORE_CLASSES', CALANTHALITE_CORE_PATH . 'classes/');
define('CALANTHALITE_CORE_FUNCTIONS', CALANTHALITE_CORE_PATH . 'functions/');

# Set Content Width
if ( ! isset( $content_width ) ) { $content_width = 1530; }

# After setup theme
add_action('after_setup_theme', 'calanthalite_setup');
function calanthalite_setup()
{
    load_theme_textdomain('calanthalite', get_template_directory().'/languages');
    add_theme_support( 'custom-logo' );
	add_theme_support('automatic-feed-links');
	add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
	register_nav_menus(array('primary' => esc_html__('Main Menu', 'calanthalite')));
    add_theme_support('align-wide');
    add_theme_support('align-full');
    add_theme_support( 'woocommerce' );
    add_theme_support( 'custom-background' );
    add_theme_support('editor-styles');
    add_editor_style('style-editor.css');

}

# Enqueue Scripts
add_action( 'wp_enqueue_scripts', 'calanthalite_load_scripts' );
function calanthalite_load_scripts()
{
    # CSS
    wp_enqueue_style('bootstrap', CALANTHALITE_LIBS_URI . 'bootstrap/bootstrap.css');
    wp_enqueue_style('calanthalite-font-awesome', CALANTHALITE_LIBS_URI . 'font-awesome/css/all.css');
    wp_enqueue_style('chosen', CALANTHALITE_LIBS_URI . 'chosen/chosen.css');
    wp_enqueue_style('wp-mediaelement');
     wp_enqueue_style('calanthalite-style', get_theme_root_uri() . '/calanthalite/style.css');
    wp_enqueue_style('calanthalite-theme-style', get_theme_root_uri() . '/calanthalite/assets/css/theme.css');

    # JS
	wp_enqueue_script('jquery');
	wp_enqueue_script('fitvids', CALANTHALITE_LIBS_URI . 'fitvids/fitvids.js', array(), false, true);
    wp_enqueue_script('chosen', CALANTHALITE_LIBS_URI . 'chosen/chosen.js', array(), false, true);
    wp_enqueue_script( 'wp-mediaelement' );
    
    wp_enqueue_script('calanthalite-scripts', get_template_directory_uri() . '/assets/js/calanthalite-scripts.js', array(), false, true);

    if ( is_singular() && get_option('thread_comments') ) {
        wp_enqueue_script('comment-reply');
    }
}


# Register Sidebar
add_action( 'widgets_init', 'calanthalite_widgets_init' );
function calanthalite_widgets_init() {
    register_sidebar(array(
		'name'            => esc_html__('Sidebar', 'calanthalite'),
		'id'              => 'sidebar',
		'before_widget'   => '<div id="%1$s" class="widget %2$s">',
		'after_widget'    => '</div>',
		'before_title'    => '<h4 class="widget-title">',
		'after_title'     => '</h4>'
	));
    register_sidebar(array(
		'name'            => esc_html__('Footer Instagram', 'calanthalite'),
		'id'              => 'footer-ins',
		'before_widget'   => '<div id="%1$s" class="widget %2$s">',
		'after_widget'    => '</div>',
		'before_title'    => '<h4 class="widget-title">',
		'after_title'     => '</h4>'
	));
}

# Check file exists
function calanthalite_require_file( $path ) {
    if ( file_exists($path) ) {
        require $path;
    }
}

# Require file
calanthalite_require_file( get_template_directory() . '/core/init.php' );


//Exclude pages from WordPress Search
if ( !is_admin() ) {
    function calanthalite_search_filter($query) {
        if ($query->is_search) {
            $query->set('post_type', 'post');
        }
        return $query;
    }
    add_filter('pre_get_posts','calanthalite_search_filter');
}

// Social Network
function calanthalite_social_network( $header = true )
{
    $empty = false;
    $facebook_url   = get_theme_mod('calanthalite_facebook_url');
    $twitter_url    = get_theme_mod('calanthalite_twitter_url');
    $instagram_url  = get_theme_mod('calanthalite_instagram_url');
    $pinterest_url  = get_theme_mod('calanthalite_pinterest_url');
    $youtube_url    = get_theme_mod('calanthalite_youtube_url');
    $vimeo_url      = get_theme_mod('calanthalite_vimeo_url');
    $linkedin_url   = get_theme_mod('calanthalite_linkedin_url');

    if ( $facebook_url == '' && $twitter_url == '' && $instagram_url =='' && $pinterest_url == '' && $youtube_url == '' && $vimeo_url == '' && $linkedin_url == '' ) {
        $empty = true;
    }
    $class = $header ? 'header-social' : 'footer-social';
    if ( ! $empty ) { ?>
        <div class="social-network <?php echo esc_attr($class); ?>">
            <?php if( $facebook_url ) { ?>
            <a href="<?php echo esc_url($facebook_url); ?>"><i class="fab fa-facebook-f"></i></a>
            <?php } ?>
            <?php if ( $twitter_url ){ ?>
            <a href="<?php echo esc_url($twitter_url); ?>"><i class="fab fa-twitter"></i></a>
            <?php } ?>
            <?php if( $pinterest_url ){ ?>
            <a href="<?php echo esc_url($pinterest_url); ?>"><i class="fab fa-pinterest"></i></a>
            <?php } ?>
            <?php if( $instagram_url ){ ?>
            <a href="<?php echo esc_url($instagram_url); ?>"><i class="fab fa-instagram"></i></a>
            <?php } ?>
            <?php if( $youtube_url ){ ?>
            <a href="<?php echo esc_url($youtube_url); ?>"><i class="fab fa-youtube"></i></a>
            <?php } ?> 
            <?php if( $vimeo_url ){ ?>
            <a href="<?php echo esc_url($vimeo_url); ?>"><i class="fab fa-vimeo-v"></i></a>
            <?php } ?>
            <?php if( $linkedin_url ){ ?>
            <a href="<?php echo esc_url($linkedin_url); ?>"><i class="fab fa-linkedin-in"></i></a>
            <?php } ?>
        </div><?php
    }
}

# Comment Layout
function calanthalite_custom_comment($comment, $args, $depth) {
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
	<<?php echo esc_attr($tag); ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
		<div class="comment-author">
		<?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
		</div>
		<div class="comment-content">
		    <h4 class="author-name"><?php echo get_comment_author_link(); ?></h4>
			<div class="date-comment">
				<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
				<?php printf( esc_html__('%1$s at %2$s', 'calanthalite'), get_comment_date(),  get_comment_time() ); ?></a>
			</div>
			<div class="reply">
				<?php edit_comment_link( esc_html__( '(Edit)', 'calanthalite' ), '  ', '' );?>
				<?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div>
			<?php if ( $comment->comment_approved == '0' ) : ?>
				<em class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'calanthalite' ); ?></em>
				<br />
			<?php endif; ?>
			<div class="comment-text"><?php comment_text(); ?></div>
		</div>	
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php
}

# Pagination
function calanthalite_pagination()
{
    global $wp_query;
    if ( (int)$wp_query->found_posts > (int)get_option('posts_per_page') ) : ?>
    <div class="calanthalite-pagination"><?php
        $args = array(
            'prev_text' => '<span class="fa fa-angle-left"></span>',
            'next_text' => '<span class="fa fa-angle-right"></span>'
        );
        the_posts_pagination($args);
    ?>
    </div>
    <?php
    endif;
}

# Include the TGM_Plugin_Activation class
add_action('tgmpa_register', 'calanthalite_register_required_plugins');
function calanthalite_register_required_plugins()
{
	$plugins = array(

        array(
			'name'   => esc_html__('Kirki Customizer Framework', 'calanthalite'),
			'slug'   => 'kirki'
		),
		array(
			'name'   => esc_html__('Contact Form 7', 'calanthalite'),
			'slug'   => 'contact-form-7'
		),
        array(
            'name'   => esc_html__('Smash Balloon Social Photo Feed', 'calanthalite'),
            'slug'   => 'instagram-feed'
        ),
	);

	$config = array(
		'id'           => 'calanthalite',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'parent_slug'  => 'themes.php',
		'capability'   => 'edit_theme_options',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => true,
		'message'      => ''
	);
	tgmpa($plugins, $config);
}
