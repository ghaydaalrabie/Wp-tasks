<?php if ( get_theme_mod('dark_photography_blog_box_enable') ) : ?>

<?php $args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'category_name' =>  get_theme_mod('dark_photography_blog_slide_category'),
  'posts_per_page' => get_theme_mod('dark_photography_blog_slide_number'),
); ?>

<div class="slider">
  <div class="owl-carousel">
    <?php $arr_posts = new WP_Query( $args );
    if ( $arr_posts->have_posts() ) :
      while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
        <div class="blog_inner_box">
          <?php
            if ( has_post_thumbnail() ) :
              the_post_thumbnail();
            endif;
          ?>
          <div class="blog_box pt-3 pt-md-0">
            <h3 class="my-3"><?php the_title(); ?></h3>
            <p class="mt-2"><?php echo wp_trim_words( get_the_content(), 25 ); ?></p>
            <p class="slider-button mt-4">
              <a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php esc_html_e('Contact Us','dark-photography'); ?></a>
            </p>
          </div>
        </div>
      <?php
    endwhile;
    wp_reset_postdata();
    endif; ?>
  </div>
  <?php $dark_photography_settings = get_theme_mod( 'dark_photography_social_links_settings' ); ?>
  <div class="home-social-link social-links">
    <?php if ( is_array($dark_photography_settings) || is_object($dark_photography_settings) ){ ?>
      <?php foreach( $dark_photography_settings as $dark_photography_setting ) { ?>
        <a href="<?php echo esc_url( $dark_photography_setting['link_url'] ); ?>">
          <span class="mr-3"><i class="<?php echo esc_attr( $dark_photography_setting['link_text'] ); ?> mr-2"></i><?php echo esc_html( $dark_photography_setting['link_text1'] ); ?></span>
        </a>
      <?php } ?>
    <?php } ?>
  </div>
  <div class="home-info">
    <?php if ( get_theme_mod('dark_photography_header_phone_number') ) : ?>
      <span class="mr-3"><i class="fas fa-phone mr-2"></i><span class="mr-2 name-color"><?php esc_html_e('Call Us:','dark-photography'); ?></span><?php echo esc_html( get_theme_mod('dark_photography_header_phone_number' ) ); ?></span>
    <?php endif; ?>

    <?php if ( get_theme_mod('dark_photography_header_email_address') ) : ?>
      <span><i class="fas fa-envelope mr-2"></i><span class="mr-2 name-color"><?php esc_html_e('Mail Us:','dark-photography'); ?></span><?php echo esc_html( get_theme_mod('dark_photography_header_email_address' ) ); ?></span>
    <?php endif; ?>
  </div>
</div>

<?php endif; ?>