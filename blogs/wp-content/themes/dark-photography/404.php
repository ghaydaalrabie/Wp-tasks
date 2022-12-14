<?php get_header(); ?>

<div id="content">
	<div class="container">
		<div class="py-5">
			<h1><?php esc_html_e('404', 'dark-photography'); ?></h1>
			<h2><?php esc_html_e('Not found', 'dark-photography'); ?></h2>
			<p><?php esc_html_e('Sorry, no posts matched your criteria.', 'dark-photography'); ?></p>
			<?php get_search_form(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>