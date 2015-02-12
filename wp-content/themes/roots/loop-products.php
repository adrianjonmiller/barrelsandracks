<?php /* Start loop */
$even_count = 0;
?>
<?php if (function_exists('yoast_breadcrumb')) { if (is_page() && $post->post_parent) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } } ?>

<?php while (have_posts()) : the_post();  ?>

<?php
$custom = get_post_custom($post->ID);
$quantity = $custom['quantity'][0];
$quant_echo = ($quantity != '' && $quantity != "1") ? "(" . $quantity .")" : '';
$even_count++;
$even = (is_even($even_count)) ? ' even' : '';
$thumb_attrs = array();
$thumb_attrs['title'] = $thumb_attrs['alt'] = get_the_title();
?>
<section class="cc-products<?php echo $even . " " . $post->ID ?>">
	<?php
	$large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
	
	if (has_post_thumbnail()): ?>
		<a href="<?php echo $large_image_url[0]; ?>" rel="lightbox"><?php the_post_thumbnail('thumbnail', $thumb_attrs); ?></a>
	<?php endif; ?>

		<h2 class="product-title"><?php echo $quant_echo; ?> <?php the_title(); ?></h2>
		<?php the_content(); ?>
		<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>' )); ?>
</section>
<?php endwhile; // End the loop ?>

