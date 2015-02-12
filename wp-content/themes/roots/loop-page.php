<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post();  ?>

	<?php if (function_exists('yoast_breadcrumb')) { if (is_page() && $post->post_parent) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } } ?>
	<h2 class="page-title title-<?php echo $post->post_name; ?> ir"><?php the_title(); ?></h2>
	<?php if (get_post_meta($post->ID, 'main-image', true) != null): ?>
		<img src="<?php echo bloginfo('wpurl').get_post_meta($post->ID, 'main-image', true); ?>" alt="<?php echo $post->post_name; ?>" class="main-image" />
	<?php endif; ?>
	<?php the_content(); ?>
	<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>' )); ?>

<?php endwhile; // End the loop ?>

