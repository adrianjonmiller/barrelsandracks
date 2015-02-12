<?php get_header(); ?>
		<div class="span-24" id="products-intro">
			<h2>Tanks & Equipment</h2>
			<p>New equipment added daily. If there is something you are specifically looking for that is not listed below, please inquire with us directly as our inventory is constantly changing.</p>
			<p>If you currently have used wine production-related equipment you would like to sell, let us know. We source and market our equipment to thousands of wineries, distilleries and breweries here in North America.</p>
		</div>
		<div id="content" class="span-24">	
			<div id="main" class="<?php echo get_option('roots_main_class'); ?>" role="main">
				<div class="container">
					<?php get_template_part('loop', 'products'); ?>
				</div>
			</div><!-- /#main -->
			<aside id="sidebar" class="<?php echo get_option('roots_sidebar_class'); ?>" role="complementary">
				<div class="container">
					<?php get_sidebar(); ?>
				</div>
			</aside><!-- /#sidebar -->
		</div><!-- /#content -->
<?php get_footer(); ?>
