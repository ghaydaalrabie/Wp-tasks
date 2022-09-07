<?php 
$categories = get_the_category($post->ID);
if ($categories) :
	$category_ids = array();
	foreach($categories as $individual_category) {
        $category_ids[] = $individual_category->term_id;
	}
	$args = array(
		'category__in'        => $category_ids,
		'post__not_in'        => array($post->ID),
		'posts_per_page'      => 3,
		'ignore_sticky_posts' => 1,
		'orderby'             => 'rand'
	);
	$new_query = new WP_Query( $args );
?>
    <?php if( $new_query->have_posts() ) : ?>
    <div class="post-related calanthalite-blog">
        <h3 class="post-related-title"><?php esc_html_e('Related Posts', 'calanthalite'); ?></h3>
        <div class="row">
        <?php while( $new_query->have_posts() ) : $new_query->the_post(); ?>
            <div class="col-md-4 item-relate post">
                <div class="inner-post">
                    <div class="post-header">
                        <?php $featured_image = azura_resize_image( get_post_thumbnail_id(), null, 570, 524, true, true );  ?>
                        <div class="post-format">
                            <a class="post-image" href="<?php the_permalink()?>">
								<img src="<?php echo esc_url($featured_image); ?>" alt="<?php the_title_attribute(); ?>" />
							</a>
                        </div>
                        <div class="date-post">
                            <span class="month"><?php echo get_the_date( 'M'); ?></span>
                            <span class="day"><?php echo get_the_date( 'd'); ?></span>
                            <span class="year"><?php echo get_the_date( 'Y'); ?></span>
                        </div>
                    </div>
                    <div class="post-info">
                        <div class="post-cats"><i class="far fa-bookmark"></i><?php the_category(', '); ?></div>
                        <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
		</div> 
    </div>
    <?php endif; ?>
<?php endif;
wp_reset_query();