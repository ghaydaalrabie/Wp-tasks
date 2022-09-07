<?php 
if ( has_post_thumbnail() )
{          
    if ( is_single() ){ 
        $featured_image = azura_resize_image( get_post_thumbnail_id(), null, 1270, 675, true, true );
        ?>
        <div class="post-format">
            <img class="pinit" src="<?php echo esc_url($featured_image); ?>" alt="<?php the_title_attribute(); ?>" />
        </div>
    <?php }else{
        $featured_image = azura_resize_image( get_post_thumbnail_id(), null, 550, 410, true );
        ?>
        <div class="post-format">
             <a class="post-image" href="<?php the_permalink()?>">
                 <img src="<?php echo esc_url($featured_image); ?>" alt="<?php the_title_attribute(); ?>" />
             </a>
        </div>
    <?php }
}
?>