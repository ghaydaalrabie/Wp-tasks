<?php if ( get_theme_mod('dark_photography_gallery_section_enable') ) : ?>

<div class="gallery py-5">
	<div class="container">
		<?php if ( get_theme_mod('dark_photography_gallery_heading_text') ) : ?>
			<h6 class="text-center"><span><?php echo esc_html(get_theme_mod('dark_photography_gallery_heading_text')); ?></span></h6>
		<?php endif; ?>
		<?php if ( get_theme_mod('dark_photography_gallery_heading') ) : ?>
			<h3 class="pb-4 text-center"><?php echo esc_html(get_theme_mod('dark_photography_gallery_heading')); ?></h3>
		<?php endif; ?>
			        
        <?php $args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'category_name' =>  get_theme_mod('dark_photography_gallery_category'),
			'posts_per_page' => 16,
		); ?>
		<div class="row">
		    <?php $arr_posts = new WP_Query( $args );
		    	if ( $arr_posts->have_posts() ) :
		      	while ( $arr_posts->have_posts() ) :
		        $arr_posts->the_post();
		        ?>
		        <div class="col-lg-3 col-md-4 col-sm-6">
			        <div class="gallery_inner_box mb-4">
						<?php if ( has_post_thumbnail() ) :
							the_post_thumbnail();
						endif; ?>
						<div class="gallery_content_box py-3">
			        		<h4><span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></h4>
			            </div>
			        </div>
			    </div>
		      	<?php
		    endwhile;
		    wp_reset_postdata();
		    endif; ?>
		</div>
	</div>
</div>

<?php endif; ?>